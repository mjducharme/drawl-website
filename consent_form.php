<?php
	#include "language.php";
	$allowed = array('eng','fra');
	if (!isset($lang) && !($_GET["lang"]) || !in_array(($_GET["lang"]), $allowed)) {
		$lang = 'eng';
	}
	else {
		$lang = ($_GET["lang"]);
	}
	require_once "language/".$lang."/main.php";
	$worker="consent.php?lang=".$lang;
	$consent_text = file_get_contents('language/'.$lang.'/consent.txt');
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/jquery.min.js"></script>
<style>
h1 {margin: auto;}

.consent_text {
  /* Just to center the text on the page */
  margin: auto;
  width: 80%;
  height: 400px;
  /* To see the outline of the text */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
  overflow:overlay;
}

form {display: flex; margin: auto; width: 80%; height: 100%; flex-direction: row;}

form div + div {
  margin-top: 1em;
}

.participation {flex: 1 1; border: none; margin: 0; padding: 10px; overflow: auto; }

.publication {flex: 1 1; border: none; margin: 0; padding: 10px; overflow: auto;}


label {
  /* To make sure that all labels have the same size and are properly aligned */
  display: inline-block;
  width: 90px;
  text-align: right;
}

.field, textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* To give the same size to all text fields */
  width: 300px;
  box-sizing: border-box;

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highlight on active elements */
  border-color: #000;
}

textarea {
  /* To properly align multiline text fields with their labels */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 5em;
}

.checkbox {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}

.submit{ padding-left:80%; margin: auto; }
</style>    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Consent form</title>
    </head>
    <body>
    	<nav class="navbar navbar-primary bg-primary">
  			<span class="navbar-brand mb-0 h1"><?php echo($langar['ConsentTitle'])?></span>
		</nav>
        <div class="consent_text" data-spy="scroll"><?php echo $consent_text?></div>
    </body>
    <form action=<?php echo($worker); ?> method="post">
        <div class="participation"><h4><?php echo($langar['ConsentParticipation'])?></h4>
<p><?php echo($langar['ConsentParticipationText'])?></p>
        <div>
            <label for="name"><?php echo($langar['ConsentName'])?></label>
            <input type="text" id="name" name="user_name" class="field" required>
        </div>
        <div>
            <label for="email"><?php echo($langar['ConsentEmail'])?></label>
            <input type="email" id="email" name="user_email" class="field" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="consent_box" onchange="document.getElementById('c_button').disabled = !this.checked" required>
            <?php echo($langar['ConsentParticipationConsent'])?>
        </div>
        <div class="submit">
            <button type="submit" id="c_button" disabled="true">Submit</button>
        </div>
        </div>
        <div class="publication">
        <h4><?php echo($langar['ConsentPublication'])?></h4>
<p><?php echo($langar['ConsentPublicationText1'].'['.$lang.'-1], ['.$lang.'-2]'.$langar['ConsentPublicationText2']) ?></p>
        <div class="checkbox">
        <input type="checkbox" name="share_box">
        <?php echo($langar['ConsentPublicationConsent'])?>
        </div>
        </div>
    </form>
</html>
