<DOCTYPE html>
<html><head>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <script src="/bootstrap/js/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Audio Recorder</title>

    <div id="dom-target" style="display: none;">
    <?php
        session_start();
        $user_id = $_SESSION["user_id"];
        echo htmlspecialchars($user_id);
        $reading_passage = file_get_contents('language/'.$_SESSION["lang"].'/reading_passage.txt');
        require_once "language/".$_SESSION['lang']."/main.php";
    ?>
    </div>
    <script>
        var div = document.getElementById("dom-target");
        var user_id = div.innerText.trim();
    </script>
    
	<script src="js/audiodisplay.js"></script>
	<script src="js/recorderjs/recorder.js"></script>
	<script src="js/main.js"></script>

<style>
	html { overflow: hidden; }
	body { 
		font: 12pt Arial, sans-serif; 
		background: lightgrey;
		// display: flex;
		// flex-direction: column;
		height: 100vh;
		width: 100%;
		margin: 0 0;
	}
	canvas { 
		display: inline-block; 
		background: #202020; 
		width: 90%;
		height: 45%;
		box-shadow: 0px 0px 10px blue;
	}
	#controls {
		display: flex;
		flex-direction: column;
		height: 15%;
		width: 100%;
		min-height: 160px;
	}
	#buttons {
		display: flex;
		flex-direction: row;
                text-align: center;
		align-items: center;
		padding: 10px 0px;
		width: 100%;
		justify-content: space-around;
	}
	#progresstext {
		padding: 10px 0px;
		text-align: center;
		margins: auto;
	}
	#record, #exit, #save img { max-height: 70px; height: 10vh; width: auto;}
	// #exit { height: 70px; }
	// #save, #save img { height: 70px; }
	#record.recording { 
		background: red;
		background: -webkit-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
		background: -moz-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
		background: radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
	}



.column-container {display: flex; width: 100%; height: 100%; flex-direction: row;}
.second-column { display:flex; flex-direction: column; width: 30%; min-width: 300px; overflow: auto; }
.first-column { flex: 1 1; border: none; margin: 0; padding: 0; overflow: auto; -webkit-overflow-scrolling:touch; }
.container { overflow:overlay; max-height: 85%; width:100%;}

	// #save, #save img { height: 10vh; }

	#save { opacity: 0.25;}
	#save[download] { opacity: 1;}
	#viz {
		height: 55%;
		width: 100%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-items: center;
	}
	@media (orientation: portrait) {
		.column-container { flex-direction: column;}
		.second-column { width: 100%; height: 40%; }
		#viz { height: 150px; }
		#record, #exit, #save img { height: 10vw;}
		#controls { font-size: 3vw; } 
		// #controls { flex-direction: column; height: 100%; width: 100%;}
		// #viz { height: 100%; width: 100%;}
	}
object{  width: 100%;  height: 60%; font-family: arial, sans-serif;}
table {  font-family: arial, sans-serif;  border-collapse: collapse;  width: 100%;}


@supports (-webkit-overflow-scrolling: touch) {
  .first-column { width: 50%; }
  .second-column { width: 50%; }
}


</style>
</head>
<body>
	<nav class="navbar navbar-primary bg-primary">
        <span class="navbar-brand mb-0 h1">Recorder Tool</span>
    </nav>
	<div class="column-container">
	<div class="first-column">
		<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo($langar['RecorderInstructionsTitle'])?></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"> <?php echo($langar['RecorderInstructions'])?></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><?php echo($langar['RecorderReadingTitle'])?></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><?php echo $reading_passage ?></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><?php echo($langar['RecorderSpontaneous'])?></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><?php echo($langar['RecorderList'])?></div>
      </div>
    </div>
  </div> 
</div>
	</div>

	<div class="second-column">
	<div id="viz">
		<canvas id="analyser" width="1000" height="150"></canvas>
		<canvas id="wavedisplay" width="1000" height="150"></canvas>
                <audio id="recorded-audio" controls="controls"></audio>
	</div>
	<div id="controls">
		<div id="buttons">
		<div id="record-div"><a href="#" title="Click to start or stop recording" onclick="toggleRecording(document.getElementById('record'));"><img id="record" src="images/mic128.png" width="70" height="70"><br/><div id="rectext"><?php echo($langar['RecorderRec'])?></div></a></div>
		<div id="save-div"><a id="save" href="#" onclick="startSubmit(this);"><img src="images/save.svg" width="70" height="70"><br/><?php echo($langar['RecorderSave'])?></a></div>
		<div id="exit-div"><a href="#" onclick="window.location = document.getElementById('iframe').src;"><img id="exit" width="70" height="70" src="images/exit.png"><br/><?php echo($langar['RecorderClose'])?></a></div>
		</div>
		<div id="progresstext"><div style="color: red;"><?php echo($langar['RecorderNotYet'])?></div></div>
	</div>
	</div>
	</div>
</body></html>
