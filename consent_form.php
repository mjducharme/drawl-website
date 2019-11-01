<?php
	include "language.php";
	$consent_text = file_get_contents('language/eng/consent.txt');
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

.publication {display:flex; flex-direction: column; width: 50%; padding: 10px; overflow: auto; }


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
    	<!--<?php echo($_SESSION['lang']) ?>-->
    	<nav class="navbar navbar-primary bg-primary">
  			<span class="navbar-brand mb-0 h1">Consent Form: Studying sound change in small cross-linguistic corpora</span>
		</nav>
        <div class="consent_text" data-spy="scroll"><?php echo $consent_text?></div>
    </body>
    <form action="/consent.php" method="post">
        <div class="participation"><h4>1. Consent to participate</h4>
<p>If you agree to participate in the study, type your name and email address in the boxes below and tick the “I consent to participate” box. Participation includes using your anonymized speech recordings in our database, sharing it with other researchers through a closed registration-only website, and publishing your anonymous survey results.</p>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name" class="field" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="user_email" class="field" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="consent_box" onchange="document.getElementById('c_button').disabled = !this.checked" required>
            I consent to participate.
        </div>
        <div class="submit">
            <button type="submit" id="c_button" disabled="true">Submit</button>
        </div>
        </div>
        <div class="publication">
        <h4>2. Consent to publish excerpts from recordings</h4>
<p>If you consent, excerpts from your audio recordings may be shared with the public in the
presentation of results from our database. In all cases, your name will never be associated with
the recordings. You may be referred to as, for example, [language-1], [language-2], etc. If you
consent to these uses of data, please tick the box below. If you do not consent to this use of
your data, please do not tick the box.</p>
        <div class="checkbox">
        <input type="checkbox" name="share_box">
        I consent to excerpts of my recordings being published. (Optional)
        </div>
        </div>
    </form>
</html>
