@extends('layouts.wizard')

@section('title')
@lang('messages.RecorderTitle')
@endsection

@section('extra-headers')
<script src="{{ asset('js/audiodisplay.js') }}"></script>
<script src="{{ asset('js/recorderjs/recorder.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/web-audio-peak-meter.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#activateAudio").modalWizard();
		$('#activateAudio').modal('show');
		$("#loading-div-background").css({ opacity: 1.0 });
	});

	function ShowProgressAnimation(message){
		var progresstext = document.getElementById('progresstext');
		progresstext.innerHTML = message;
		$("#loading-div-background").show();
		$("#my-peak-meter").hide();
	}

	function EndProgressAnimation(){
		$("#loading-div-background").hide();
		$("#my-peak-meter").show();
	}
</script>
<style>
	canvas { 
		display: inline-block; 
		background: #202020; 
		width: 90%;
		height: 45%;
		{{-- box-shadow: 0px 0px 10px blue; --}}
	}

	#record.recording { 
		background: red;
		background: -webkit-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
		background: -moz-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
		background: radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
	}

	#loading-div-background{
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	background: #fff;
	width: 100%;
	height: 100%;
}

#loading-div{
	width: 300px;
	background-color: #fff;
	border: 5px solid #1468b3;
	text-align: center;
	color: #202020;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left: -150px;
	margin-top: -100px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	behavior: url("/css/pie/PIE.htc"); /* HANDLES IE */
}

#progresstext {
		padding: 10px 0px;
		text-align: center;
		margins: auto;
	}

	#progressimg {
		height:32px;
		width:32px;
		margin:30px;
	}



</style>
<meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection


@section('content')
<div id="activateAudio" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		
		<div class="modal-header">
		  <h5 class="modal-title"><div id="wizard-title">Activate Audio</div></h5>
		</div>
		<div class="modal-body">
				<div id="first-step">
					<p>Please click the button below to activate the audio recording functionality in your web browser. If your computer or device has multiple microphone inputs, you may be prompted for which input you wish to activate. If you select the wrong input by mistake, please reload this page and you should be prompted again.</p>
				</div>
		</div>
		<div id="wizard-footer" class="modal-footer">
			<p id="activate-audio" class="text-center"><button type="button" class="btn btn-primary" onclick="initAudio();">Activate Audio</button></p>
		</div>
	  </div>
	</div>
  </div>
  <div id="audioWizard" class="modal" data-current-step="1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		
		<div class="modal-header">
		  <h5 class="modal-title">Recording Setup Wizard</h5>
		</div>
		<div class="modal-body">
			<fieldset data-step="1">
				<div id="first-step">
					<p>Please click the button below to activate the audio recording functionality in your web browser. If your computer or device has multiple microphone inputs, you may be prompted for which input you wish to activate. If you select the wrong input by mistake, please reload this page and you should be prompted again.</p>
					<p id="activate-audio" class="text-center"><button type="button" class="btn btn-primary" onclick="initAudio();">Activate Audio</button></p>
				</div>
			</fieldset>
			<fieldset data-step="2">
				<p>Now, check your microphone input levels.</p>
				<div id="my-peak-preview-meter" style="width: 400px; height: 50px; background: #202020;"></div>
			</fieldset>
		</div>
		<div class="modal-footer">
		  	<button class="btn" data-step-to="prev">
            	Previous
        	</button>
      	  	<button class="btn" data-step-to="next">
        	    Next
        	</button>
		</div>
	  </div>
	</div>
  </div>
		<div id="loading-div-background">
			<div id="loading-div" class="ui-corner-all">
				<div id="progressimage"><img id="progressimg" src="/images/please_wait.gif" alt="Loading.." /><br /></div>
				<div id="progresstext">Encoding Audio. Please wait...</div>
			</div>
		</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#instructions">@lang('messages.RecorderInstructionsTitle')</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#test">@lang('messages.RecorderTestTitle')</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#read">@lang('messages.RecorderReadingTitle')</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#spontaneous">@lang('messages.RecorderSpontaneous')</a>
                            </li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content mt-3">
							<div class="tab-pane active" id="instructions">
								<p class="card-text">
									@include('includes.'.$locale.".recorder_instructions")
								</p>
							</div>
							<div class="tab-pane" id="test">
								<p class="card-text">
									@include('includes.'.$locale.".recorder_test")
								</p>
							</div>
							<div class="tab-pane" id="read">
								<p class="card-text">
									@include('includes.'.$locale.".reading_passage")
								</p>
							</div>
							<div class="tab-pane" id="spontaneous">
								<p class="card-text">
									@include('includes.'.$locale.".spontaneous_prompts")
								</p>
							</div>
						</div>
					</div>
                </div>
            </div>

			<div class="col-3 text-center">
				<div class="card">
				<div class="card-header">
					1. Check Microphone Input
				</div>
				<div class="card-body">
					{{--<div id="my-peak-meter" style="width: 90%; height: 50px; display: inline-block; background: #202020;"></div>--}}
					<canvas id="analyser" width="1000" height="150"></canvas>
				</div>
				<br/>
				<div class="card-header">
					2. Record
				</div>
				<div class="card-body">
				</div>
				<div class="card-header">
					3. Playback
				</div>
				<div class="card-body">
					<canvas id="wavedisplay" width="1000" height="150"></canvas>
					<div id="audioplayer"></div>
				</div>
				<div class="card-header">
					4. Submit (unless test recording)
				</div>
				<div class="card-body">
				</div>
				<div id="controls">
					<button id="recordButton" class="btn bg-transparent p-0 mx-3">
						<img id="record" src="{{ asset('images/mic128.png') }}" width="75" height="75">
						<div id="rectext" style="max-width: 100px; white-space: normal">@lang('messages.RecorderRec')</div>
					</button>
					<button id="save" type="button" class="btn bg-transparent p-0 mx-3" onclick="startSubmit(this);" disabled>
						<img src="{{ asset('images/save.svg') }}" width="75" height="75">
						<div style="max-width: 100px; white-space: normal">@lang('messages.RecorderSave')</div>
					</button>
					<br>
					<br>
					<h4 id="rectime"><time>00:00:00</time></h4>
					<br>
					<div id="recwarning">
						<div style="color: red;">@lang('messages.RecorderNotYet')</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('after-body')
<script>
    const user_id = "{{ Session::get('user_id') }}";
    let array = "@lang('messages.RecorderUploadStarted'),@lang('messages.RecorderUploadProgressPrefix'),progress-about-to-end,@lang('messages.RecorderUploadGettingFileURL'),@lang('messages.RecorderUploadFailed'),@lang('messages.RecorderUploadAborted'),@lang('messages.RecorderUploadSuccessful'),@lang('messages.RecorderUploadErrorPrefix'),@lang('messages.RecorderUploadThankYou')";
    array = array.split(',');
    const browserError = "@lang('messages.RecorderBrowserError')";
    const h1 = document.getElementById('rectime');
    const start = document.getElementById('recordButton');
    var recording_in_progress;
    var seconds = 0;
    var minutes = 0;
    var hours = 0;
    var t;

  function add() {
    seconds++;
    if (seconds >= 60) {
      seconds = 0;
      minutes++;
      if (minutes >= 60) {
        minutes = 0;
        hours++;
      }
    }

    h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
    timer();
  }

  function timer() {
    t = setTimeout(add, 1000);
  }

  timer();

  window.onload=function() {
      clearTimeout(t);
        h1.textContent = "00:00:00";
        seconds = 0;
        minutes = 0;
        hours = 0;
        recording_in_progress = false;
  }
  
  start.onclick = function() {
      toggleRecording(document.getElementById('record'));

      if (recording_in_progress) {
          clearTimeout(t);
          h1.textContent = '00:00:00';
          seconds = 0;
          minutes = 0;
          hours = 0;
          recording_in_progress = false;
      } else {
          timer();
          recording_in_progress = true;
      }
  }
</script>
@endsection
