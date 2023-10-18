<?php

	session_start();
	
	if (!isset($_SESSION['user'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: inde_OD41212.html");
	} else if(isset($_SESSION['user'])!="") {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: inde_OD41212.html");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: inde_OD41212.html");
		exit;
	}