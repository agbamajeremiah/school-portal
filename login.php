<?php include_once 'config/init.php'; ?>

<?php
	$student = new Student;
	$card = new Card;
	if (isset($_POST['login'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if ($student->getRowCount($username) == 1) {
				echo "<br>"."User exist";

				//check card pin
				if ($card->checkPin($password) > 0) {
					//echo "<br>"."card working";
					$_SESSION['username'] = $username;
					echo '<br> username: '.$_SESSION['username']. ' set';
					redirect('portal-home.php');
				}
				//invalid Pin
				else{
					redirect('login-page.php', 'Invalid Card pin!', 'error');

				}
			}
			else{
				//user dosent exist
				redirect('login-page.php', "User dosn't exist" , 'error');

			}
		}
	}

 ?>