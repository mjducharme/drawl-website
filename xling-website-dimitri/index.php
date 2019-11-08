<?php
	$allowed = array('eng','fra');
	if (!isset($lang) && !($_GET["lang"]) && !in_array(($_GET["lang"]), $allowed)) {
		$lang = 'eng';
	}
	else {
		$lang = ($_GET["lang"]);
	}
	require_once "language/".$lang."/main.php";
?>

<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/bootstrap/js/jquery.min.js"></script>
	<style>
		h4{
			margin: 0 auto; 
			margin-top: 3%;
			padding: 10px;
			width: 40%;
			border: 1px solid #CCC;
  			border-radius: 1em ;
  			text-align: center;
  		}
  	</style>
<meta charset="UTF-8">
<title>Xling</title>
</head>
<body>
	<nav class="navbar navbar-primary bg-primary">
        <span class="navbar-brand mb-0 h1"><?php echo($langar['IndexTitle'])?></span>
    </nav>
	<h4><?php echo($langar['IndexText'])?></h4><h4>
	<a class=button href= <?php echo("consent_form.php?lang=".$lang) ;?> ><?php echo($langar['IndexLink'])?></a></h4>
    
</body>
</html>
