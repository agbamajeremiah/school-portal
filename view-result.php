<?php include_once 'config/init.php'; ?>
<?php require 'pages/header.php'; ?>
<!-- side drawer -->
<?php require 'pages/side-drawer.php'; ?>
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

<div id="page-content">
	<!-- View Result -->
				<div class="container text-center" id="view-result">
					<div>
						<h4 id="student-name" class="text-center"><?php echo $student_full_name; ?></h4>
						<h4 id="student-class"><span>Grade </span><span><?php echo $studentinfo->class; ?> </span> result:</h4>
					</div>
					<div class="result-container">
						<button type="button" class="btn-info download-btn">DOWNLOAD</button>
					</div>
					<div class="previous-result">
						<ul class="list-unstyled">
							<p><span class="fa fa-arrow-circle-o-left"></span> View previous result</p>
							<?php
								$GradeNum = 1 ;
								 while ($GradeNum != $studentinfo->class ): ?>
									<li><a href="#">Grade <?php echo $GradeNum;  $GradeNum++; ?></a></li>	
							<?php endwhile; ?>
						</ul>
						
					</div>
				</div>

<?php require 'pages/footer.php'; ?>