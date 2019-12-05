<?php
	session_start();
	$sessaoLogin = $_SESSION['login'];
	if ($sessaoLogin == null) {
		header('location:../login.php');
	}
	else if ($_SESSION['tipo'] != 1911) {
		header('location:../login.php');
	}
?>