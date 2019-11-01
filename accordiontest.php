<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <script src="/bootstrap/js/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Instructions</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">You can see the recording pane on the right-hand side. The top Recording window shows the level of the incoming sound. The bottom Recording window will show the recorded waveform when it is complete. Underneath the two windows are a Playback Control, a Microphone icon, and a Submit icon. To record the story, click on the Microphone icon (which will glow red), read the passage aloud, and then click on the Microphone icon again to stop recording. The lower window will then show your recording as a waveform. Clicking on the Play button in the Playback Control will allow you to hear your recording. If you are satisfied with it, you can click on the Submit button and your recording will be sent to the University of British Columbia. Once you have submitted your recording, you canclick on Close Recording Pane to make the Recording Pane go away.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Reading Sample: The Benefits of Hiking</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><?php echo $reading_passage ?></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Spontaneous Speech Prompts</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><p>You can use the following prompt if you wish, or talk about something else if you’d like. You are free to decide what you discuss, but we would like to ask you to avoid topics that may be sensitive or controversial from a religious / political / racial / sexual point of view. We would also like you to avoid disclosing personally identifying information such as your name, address, workplace, etc.
    </p>
        <ul>
        <li>Tell us about your hobbies</li>
        <li>What was your childhood dream?</li>
        <li>What is your morning/daily routine?</li>
        <li>Tell us about a happy event of your life.</li>
        <li>What do you think is important for achieving happiness?</li>
        <li>Describe your typical weekend.</li>
        <li>What’s your job? How does it work?</li>
        <li>What’s your life’s greatest achievement? How has this affected your life?</li>
        <li>What is the most useful piece of advice you have been given?</li>
        <li>Tell us about your favourite book or movie.</li>
        <li>Did you like school? What were your best/worst subjects?</li>
    </ul></div>
      </div>
    </div>
  </div> 
</div>
    
</body>
</html>
