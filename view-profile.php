<?php include_once 'config/init.php'; ?>
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
<?php require 'pages/header.php'; ?>
<!-- side drawer -->
<?php require 'pages/side-drawer.php'; ?>


<div id="page-content">
	<div id="view-profile">
					<!-- View Profile Section -->
					<div class="profile-box">
						<h5>Student Profile</h5>
						<div class="profile-box-main">
							<div class="profile-pics-main">
								<img src="images/profile-default.png" id="" class="img-responsive" width="120" height="120">
								<button type="button" class="btn btn-clear"><span class="fa fa-download"></span> Edit</button>
							</div>
							<h6>
								<?php echo $student_full_name ?>
							</h6>
							<button type="button" class="btn btn-info">Edit Details</button>
						</div>
						<table class="table table-bordered">
						    <tbody>
						      <tr>
						        <th>Username</th>
						        <td><?php echo $studentinfo->user_name; ?></td>
						      </tr>
						      <tr>
						        <th>Name</th>
								<td><?php echo $student_full_name ?></td>
						      </tr>
						      <th>Gender</th>
						        <td><?php echo $studentinfo->gender; ?></td>
						      </tr>
						      <tr>
						        <th>Class</th>
						        <td><?php echo $studentinfo->class; ?></td>
						      </tr>
						      <th>Birthday</th>
						        <td>May 24, 2005</td>
						      </tr>
						      <tr>
						        <th>House</th>
						        <td>Pink</td>
						      </tr>
						      <tr>
						        <th>Address</th>
						        <td><?php echo $studentinfo->home_address ?></td>
						      </tr>
						      <tr>
						        <th>Hobbie</th>
						        <td><?php echo $studentinfo->student_hobbie ?></td>
						      </tr>

						      <tr>
						      	<td >Parent Details</td>						      
						      </tr>
						      <tr>
						        <th>Name</th>
						        <td>Parents Full Name</td>
						      </tr>
						      <tr>
						        <th>Telephone</th>
						        <td>+234 80 0000</td>
						      </tr>
						      <tr>
						        <th>Email</th>
						        <td>parents@school.com</td>
						      </tr>

						    </tbody>
						  </table>
						
					</div>
</div>

<?php require 'pages/footer.php'; ?>