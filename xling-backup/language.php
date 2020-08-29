<<?php 
	session_start();

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "eng";
	else if (isset($GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($GET['lang'])){
		if ($_GET['lang'] == "eng")
			$_SESSION['lang'] = "en";
		else
			$_SESSION['lang'] = "fr";

	}

	echo $_SESSION['lang'];

 ?>