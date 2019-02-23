<?php 
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $student = new Student;
	$studentinfo = $student->getStudent($username);
	$student_full_name = $studentinfo->surn_name.' '.
						$studentinfo->first_name. ' '.
						$studentinfo->last_name;
  }else{
  	redirect('login-page.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> School Mgt Portal | Home </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style-portal.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="pos-f-t">
			<nav class="navbar navbar-dark fixed-top">
			    <button class="navbar-toggler" type="button" id="sideber-toggle" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="fa fa-bars"></span>
			    </button>
			    <h2 class="portal-header">School Mgt Portal</h2>
			    <span class="profile-pics"><a href="#"><img src="images/profile-default.png" class="img-responsive" width="35" height="35"></a></span>
			 </nav>
		</div>
		  <div id="wrapper">
		  		