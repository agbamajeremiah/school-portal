<?php
	include_once 'config/init.php';
	if (isset($_GET['action']) && $_GET['action'] == logout) {
		unset($_SESSION);
		session_destroy();
		redirect('login-page.php');
	}

?>