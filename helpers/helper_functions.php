<?php
	//Redirecting Function
	function redirect($page = FALSE, $message = NULL, $message_type = NULL){
		if (is_string($page)) {
			$location = $page;
		}else{
			$location = $_SERVER['SCRIPT_NAME'];
		}
		//check for message
		if ($message != NULL) {
			$_SESSION['message'] = $message;
		}
		//check for message type
		if ($message_type != NULL) {
			$_SESSION['message_type'] = $message_type;
		}
		//redirect
		header('Location: '.$location);
		exit;
	}
	//Display message
	function displayMessage()
	{	
		if (!empty($_SESSION['message'])) {
			$message = $_SESSION['message'];

			//verify message-type
			if (!empty($_SESSION['message_type'])) {
				$message_type = $_SESSION['message_type'];
				if ($message_type == 'error') {
					echo '<div style="margin-bottom: 7px; color:red; line-height: 1em;">'.
					 $message .'</div>';
				}
				else{
					echo '<p class="alert-success">'. $message .'</p>';
				}
			}
			//unset message
			unset($_SESSION['message']);
			unset($_SESSION['message_type']);
		}else{
			echo '';
		}
		
	}
?>
