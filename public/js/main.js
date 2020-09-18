/* Copyright 2013 Chris Wilson

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

window.AudioContext = window.AudioContext || window.webkitAudioContext;

var gumStream;
var audioContext;
var audioInput;
var realAudioInput;
var inputPoint;
var audioRecorder;
var rafID;
var analyserContext = null;
var zeroGain;
var canvasWidth, canvasHeight;
var recIndex = 0;
var encoding = 'wav';
//var encoding = 'mp3';
var tempblob;
var blocksubmit = 1;
var recording = false;

/* TODO:

- offer mono option
- "Monitor input" switch
*/

/*
function saveAudio() {
    audioRecorder.exportWAV( doneEncoding );
    // could get mono instead by saying
    // audioRecorder.exportMonoWAV( doneEncoding );
} */

function gotBuffers(buffers) {
    var canvas = document.getElementById( "wavedisplay" );

    drawBuffer( canvas.width, canvas.height, canvas.getContext('2d'), buffers[0] );

    // the ONLY time gotBuffers is called is right after a new recording is completed - 
    // so here's where we should set up the download.
    if(encoding === 'mp3') {
        console.log('Encoding as MP3');
        audioRecorder.exportMP3( doneEncoding );
      } else {
        console.log('Encoding as WAV');
        audioRecorder.exportWAV( doneEncoding );
      }
}

function doneEncoding(blob) {
    // Recorder.setupDownload( blob, "myRecording" + ((recIndex<10)?"0":"") + recIndex + ".wav" );
    tempblob = blob;
    var url = (window.URL || window.webkitURL).createObjectURL(blob);
    
    var currentAudio = document.createElement('audio');
    currentAudio.id = 'recorded-audio';
    currentAudio.controls = true;
    currentAudio.src = url;

    var audioPlayer = document.getElementById('audioplayer')
    audioPlayer.appendChild(currentAudio);

    var submitbutton = document.getElementById('save');
    submitbutton.style.opacity = "1";
    submitbutton.disabled = false;

    blocksubmit = 0;
    // $("audio#recorded-audio").attr("src", url);
    // $("audio#recorded-audio").get()[0].load();
    // Recorder.setupPhpPost( blob, "myRecording" + ((recIndex<10)?"0":"") + recIndex + ".wav" );
    recIndex++;
    EndProgressAnimation();
    console.log('doneEncoding finished');
}

function startSubmit() {
    if (blocksubmit == 0) {
        if (confirm('Are you sure you wish to submit this recording?') == false) {
            return false;
        }
        ShowProgressAnimation("Beginning recording submission process...");
        Recorder.setupPhpPost(tempblob, function(progress) {
            var progresstext = document.getElementById('progresstext');
            if (progress.startsWith(array[7])) {
                var progressimage = document.getElementById('progressimage');
                progresstext.innerHTML = progress;
                progressimage.innerHTML = '<img id="progressimg" src="/images/error.png" alt="Error!"/>'
                return;
            } else if (progress === 'ended') {
                recordButton.style.opacity = '1';
                recordButton.disabled = false;
                var progressimage = document.getElementById('progressimage');
                progresstext.innerHTML = array[6] + "<br/><br/>" + array[8];
                var progresstext = document.getElementById('recwarning');
                recwarning.innerHTML = '';
                progressimage.innerHTML = '<img id="progressimg" src="/images/success.gif" alt="Success!"/>'
                /* var savebutton = document.getElementById("save");
                savebutton.style.opacity="0"; */
                return;
            }
            recordButton.style.opacity = '0.25';
            recordButton.disabled = true;
            progresstext.innerHTML = progress;
        });
     
        blocksubmit = 1;
    }
}

function toggleRecording(e) {
    if (e.classList.contains("recording")) {
        // stop recording
        audioRecorder.stop();
        audioContext.close();
        gumStream.getAudioTracks()[0].stop();
        recording = false;
        e.classList.remove("recording");
        audioRecorder.getBuffers(gotBuffers);
        ShowProgressAnimation("Please wait while encoding audio. This may take a minute...");
    } else {
        var audioPlayer = document.getElementById('audioplayer');
        var currentAudio = document.getElementById('recorded-audio');

        // if there is an audio, force stop
        if (!currentAudio == null) {currentAudio.pause();}

        // remove the audio
        audioPlayer.innerHTML = '';

        // clear wave display
        var canvas = document.getElementById('wavedisplay');
        var context = canvas.getContext('2d');
        context.clearRect(0, 0, canvas.width, canvas.height);

        var savebutton = document.getElementById('save');
        savebutton.style.opacity = '0.25';
        savebutton.disabled = true;

        var progresstext = document.getElementById('progresstext');
        progresstext.innerHTML = '';

        e.classList.add("recording");

        startRecording();
        recording = true;
    }
}

function convertToMono( input ) {
    var splitter = audioContext.createChannelSplitter(2);
    var merger = audioContext.createChannelMerger(2);

    input.connect( splitter );
    splitter.connect( merger, 0, 0 );
    splitter.connect( merger, 0, 1 );
    return merger;
}

function cancelAnalyserUpdates() {
    window.cancelAnimationFrame( rafID );
    rafID = null;
}

function updateAnalysers(time) {
    if (!analyserContext) {
        var canvas = document.getElementById("analyser");
        canvasWidth = canvas.width;
        canvasHeight = canvas.height;
        analyserContext = canvas.getContext('2d');
    }

    // analyzer draw code here
    {
        var SPACING = 2;
        var BAR_WIDTH = 1;
        var numBars = Math.round(canvasWidth / SPACING);
        var freqByteData = new Uint8Array(analyserNode.frequencyBinCount);

        analyserNode.getByteFrequencyData(freqByteData); 

        analyserContext.clearRect(0, 0, canvasWidth, canvasHeight);
        analyserContext.fillStyle = '#F6D565';
        analyserContext.lineCap = 'round';
        if (recording==false) {
            analyserContext.globalAlpha = 0;
        }
        else {
            analyserContext.globalAlpha = 1;
        }
        var multiplier = analyserNode.frequencyBinCount / numBars;

        // Draw rectangle for each frequency bin.
        for (var i = 0; i < numBars; ++i) {
            var magnitude = 0;
            var offset = Math.floor( i * multiplier );
            // gotta sum/average the block, or we miss narrow-bandwidth spikes
            for (var j = 0; j< multiplier; j++)
                magnitude += freqByteData[offset + j];
            magnitude = magnitude / multiplier;
            var magnitude2 = freqByteData[i * multiplier];
            analyserContext.fillStyle = "hsl( " + Math.round((i*360)/numBars) + ", 100%, 50%)";
            analyserContext.fillRect(i * SPACING, canvasHeight, BAR_WIDTH, -magnitude);
        }
    }
    
    rafID = window.requestAnimationFrame( updateAnalysers );
}

function toggleMono() {
    if (audioInput != realAudioInput) {
        audioInput.disconnect();
        realAudioInput.disconnect();
        audioInput = realAudioInput;
    } else {
        realAudioInput.disconnect();
        audioInput = convertToMono( realAudioInput );
    }

    audioInput.connect(inputPoint);
}

function gotStream(stream) {
    audioContext = new AudioContext();
    inputPoint = audioContext.createGain();
    realAudioInput = audioContext.createMediaStreamSource(stream);
    audioInput = realAudioInput;
    audioInput.connect(inputPoint);
    gumStream = stream;
    analyserNode = audioContext.createAnalyser();
    analyserNode.fftSize = 2048;
    inputPoint.connect(analyserNode);

    audioRecorder = new Recorder(inputPoint, {numChannels: 1});

    zeroGain = audioContext.createGain();
    zeroGain.gain.value = 0.0;
    inputPoint.connect(zeroGain);
    zeroGain.connect(audioContext.destination);
    /* updateAnalysers(); */
    // var myMeterElement = document.getElementById('my-peak-meter');
    var firstStep = document.getElementById('first-step');
    var wizardTitle = document.getElementById('wizard-title');
    firstStep.innerHTML = '<p>Now, check your microphone input levels. Your microphone is activated, but you are not currently being recorded. Try speaking random sentences into the microphone and see how the volume meter reacts. The numbers on the top represent the decibel level, with the quietest sound at -42 dB, and the loudest at 0 dB. As you speak, a green bar should appear below indicating what your current recording level is.</p><p><div id="my-peak-preview-meter" style="width: 400px; height: 50px; background: #202020;"></div></p><p>As long as your normal speaking volume is between -24 and -12 (decibels), your current volume is excellent. If your normal speaking is below -36 decibels, you should move closer to the microphone and/or adjust your settings.<p>If you are not seeing any reaction on the level meter, try refreshing this webpage and selecting a different audio input source when activating audio.';
    wizardTitle.innerHTML = "Input Level Check";
    var myMeterPreviewElement = document.getElementById('my-peak-preview-meter');
    var meterNode = webAudioPeakMeter.createMeterNode(realAudioInput, audioContext);
    // webAudioPeakMeter.createMeter(myMeterElement, meterNode, {});
    webAudioPeakMeter.createMeter(myMeterPreviewElement, meterNode, {});
    audioRecorder.clear();
    audioRecorder.record();

    inputPoint = audioContext.createGain();

    // Create an AudioNode from the stream.
    realAudioInput = audioContext.createMediaStreamSource(stream);
    audioInput = realAudioInput;
    audioInput.connect(inputPoint);
}

function initAudio() {
    // Older browsers might not implement mediaDevices at all, so we set an empty object first
    if (navigator.mediaDevices === undefined) {
        navigator.mediaDevices = {};
    }

    // Some browsers partially implement mediaDevices. We can't just assign an object
    // with getUserMedia as it would overwrite existing properties.
    // Here, we will just add the getUserMedia property if it's missing.

    if (navigator.mediaDevices.getUserMedia === undefined) {
        navigator.mediaDevices.getUserMedia = function(constraints) {

        // First get ahold of the legacy getUserMedia, if present
        var getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

        // Some browsers just don't implement it - return a rejected promise with an error
        // to keep a consistent interface
        if (!getUserMedia) {
            window.alert("Sorry, your web browser does not seem to support Web Audio API. The online recorder will not function. Please try upgrading your browser, or try a different browser.");
            return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
        }

        // Otherwise, wrap the call to the old navigator.getUserMedia with a Promise
        return new Promise(function(resolve, reject) {
            getUserMedia.call(navigator, constraints, resolve, reject);
        });
        }
    }

    navigator.mediaDevices.getUserMedia({'audio': true, 'video': false})
    .then(function(stream) {
            return gotStream(stream);
    })
    .catch(function(e) {
            alert('Error getting audio');
            console.log(e);
    });
}

// window.addEventListener('load', initAudio );
