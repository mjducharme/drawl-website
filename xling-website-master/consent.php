<?php
// define functions

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$name = $email = $code = "";
$language = "eng";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["user_name"]);
  $email = test_input($_POST["user_email"]);
}

$consent_full = array_map('str_getcsv', file("data/consent.csv"));
array_walk($consent_full, function(&$a) use ($consent_full) {
      $a = array_combine($consent_full[0], $a);
    });
array_shift($consent_full); # remove column header

$myfile = fopen("data/consent.csv", "a") or die("Unable to open file!");
if (sizeof($consent_full) == 0) {
    $curr_code = 1;
} else {
    $last_code = (int) filter_var($consent_full[sizeof($consent_full)-1]["code"], FILTER_SANITIZE_NUMBER_INT);
    $curr_code = $last_code + 1;    
}
fwrite($myfile, '"'.$name.'","'.$email.'","'.$language.$curr_code.'"'."\n");
fclose($myfile);

session_start();
$_SESSION["user_id"] = $language.$curr_code;
header('Location: /demographic_questionnaire.html');
?>