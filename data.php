<?php

	require("functions.php");

	//kui ei ole kasutaja id-d
	if (!isset($_SESSION["userId"])) {
		
		//suunan sisselogimise lehele
		header("Location: login.php");
		
		
		
	}
	
	//kui on ?logout aadressireal ss login välja
	if (isset($_GET["logout"])) {
		
		session_destroy();
		header("Location: login.php");
	}
	



?>

<h1>DATA</h1>

<p>Tere Tulemast <?=$_SESSION["userEmail"];?>!</p>
<a href="?logout=1">Logi välja</a>
