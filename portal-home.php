<?php include_once 'config/init.php'; ?>
<?php require 'pages/header.php'; ?>

<!-- side drawer -->
<?php  require 'pages/side-drawer.php'; ?>
<?php
	$student = new Student;
	$studentinfo = $student->getStudent($_SESSION['username']);
?>
<!-- Main body -->
	<div id="page-content">

		<div id="home-dashboard">
			<p id="login-message" class="text-center">You are Logged in <span id="student-name">
				<?php echo $studentinfo->surn_name.' '.
				$studentinfo->first_name; ?>
				</span></p>
			<p class="text-center">View current semester result <a href="view-result.php" class="result-home">here</a></p>
			<!-- Footer -->
		</div>
	
	
<?php require 'pages/footer.php'; ?>				
