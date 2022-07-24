<!DOCTYPE html>
<?php require_once("config_page.php"); ?>
<html>
<head><br>
<title> login form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style6.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="login_process_page.php" method="POST">
  <div class="form-group">
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt">Username </label>
    <input type="username" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password"  class="form-control" required="">
  </div>
   <div class="form-check">  
                <label class="form-check-label">  
                  <input type="checkbox" class="form-check-input">  
                  Remember me  
                </label>  
              </div>  
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
   <br> 
    <p>Don't have an account? <a href="signup_page.php">Sign up</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 
</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>