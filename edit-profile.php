<?php include_once 'config/init.php'; ?>
<?php 
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
  }else{
  	redirect('login-page.php');
  }
?>
<?php require 'pages/header.php'; ?>
<!-- side drawer -->
<?php require 'pages/side-drawer.php'; ?>

	<!-- Edit profile -->
	<div id="page-content">
		<div id="edit-profile" class="container">
			<div>
				<h3>Edit Profile</h3>
			</div>
		</div>
	

<?php require 'pages/footer.php'; ?>