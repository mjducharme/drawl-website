<?php
session_start();
require_once "language/".$_SESSION['lang']."/main.php";
?>
<!DOCTYPE html>
<html>
<style>
  form {
    /* Just to center the form on the page */
    margin: 0 auto;
    width: 40%;
    /* To see the outline of the form */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
  }

  form div + div {
    margin-top: 1em;
  }

  label {
    /* To make sure that all labels have the same size and are properly aligned */
    display: inline-block;
    width: 30%;
    text-align: right;
  }

  input, textarea {
    /* To make sure that all text fields have the same font settings
       By default, textareas have a monospace font */
    font: 1em sans-serif;

    /* To give the same size to all text fields */
    width: 65%;
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

  .button {
    /* To position the buttons to the same position of the text fields */
    padding-left: 90px; /* same size as the label elements */
  }

  button {
    /* This extra margin represent roughly the same space as the space
       between the labels and their text fields */
    margin-left: .5em;
  }

</style>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demographic questionnaire</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/bootstrap/js/jquery.min.js"></script>
    </head>
    <body>
      <nav class="navbar navbar-primary bg-primary">
        <span class="navbar-brand mb-0 h1"><?php echo($langar['DemoTitle'])?></span>
      </nav>
    </body>
    <form action="/demographic.php" method="post">
        <div>
            <label for="age"><?php echo($langar['Age'])?></label>
            <input type="number" id="age" name="user_age" min="0" required>
        </div>
        <div>
            <label for="gender"><?php echo($langar['Gender'])?></label>
            <input type="text" id="gender" name="user_gender" required>
        </div>
        <div>
            <label for="pob"><?php echo($langar['PoB'])?></label>
            <input type="text" id="pob" name="user_pob" required>
        </div>
        <div>
            <label for="cpor"><?php echo($langar['Location'])?></label>
            <input type="text" id="cpor" name="user_cpor" required>
        </div>
        <div class=text-center>
            <fieldset>
            <legend><?php echo($langar['SpokenLanguages'])?></legend>
                <input type="text" name="user_l2"><br>
                <input type="text" name="user_l3"><br>
                <input type="text" name="user_l4"><br>
                <input type="text" name="user_l5"><br>
                <input type="text" name="user_l6">
            </fieldset>
        </div>
        <div class="button">
            <button type="submit"><?php echo($langar['Next'])?></button>
        </div>
    </form>
</html>