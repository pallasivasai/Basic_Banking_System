<?php
	//Connection
	$servername = "localhost";
	$username = "id17878574_psivasai143";
	$password = "n}2ecI-*[&w5)&x!";
	$dbname = "id17878574_psivasai";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>