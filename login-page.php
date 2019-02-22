<?php include_once 'config/init.php'; ?>
<?php 
  if (isset($_SESSION['username'])) {
    redirect('portal-home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>School Mgt Portal | Log in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body class="container-fluid login-body">
    <div class="container form-container">
        <h1 class="form-header">School Mgt Portal</h1>

             <form method="POST" action="login.php" role="form" class="form-signin">
                <p class="login-box-msg">Sign in to access the portal</p>
                   <?php displayMessage(); ?>
                  <div class="form-group wrapper">
                    <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                    <label for="username" class="fa fa-user input-icons"></label>
                  </div>
                  <div class="form-group wrapper">
                    <input type="password" class="form-control" id="pwd" placeholder="Pin" name="password" required>
                    <label for="pwd" class="fa fa-lock input-icons"></label>
                  </div>
                 <div class="checkbox">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                 </div>
                  <input type="submit" name="login"  class="btn btn-primary btn-sm" value="Sign in"  id="submit-btn" data-loading-text="Loading...">
            </form>
        <footer class="footer-class">
            <p> &copy; <span id="copyright-year"></span> I-school. All Rights Reserved.<br>
                <span style="color: blue">Designed and powered by: 525system Limited</span></p>
        </footer>
    </div>
    <script>
        var d = new Date();
        document.getElementById('copyright-year').innerHTML = d.getFullYear();
    </script>
</body>
</html> 