<?php include 'components/header.php'; ?>
<?php
ob_start();
// if(isset($_SESSION['account_type'])) {
//   header("Location:../index.php");
//     exit();
// }


$message = "";
// $_SESSION['message'] = "";
if(isset($_POST['login-request'])){
	$username = $database->escape_value($_POST['username']);
  $password = $database->escape_value($_POST['password']);
  $username = strtolower($username);
  $username = $database->escape_value($username);
    $password = $database->escape_value($password);
    $session->login($username,$password);
   
   } 

?>
<body class="login">
<div>
<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>
<div class="login_wrapper">
<div class="animate form login_form">
<section class="login_content">
<form method="POST" action="">
<h1>Login</h1>
<div>
	  <?php
          if(isset($_SESSION['message'])){
            echo '<h3 class="alert alert-danger text-danger bold mt-10 mb-10">'.$_SESSION['message'].'</h3>';
          unset($_SESSION['message']);} ?>
<input type="text" class="form-control" name="username" placeholder="Username" required="" />
</div>
<div>
<input type="password" class="form-control" name="password" placeholder="Password" required="" />
</div>
<div>
<button type="submit" class="btn btn-default submit" name="login-request">Log in</button>
<a class="reset_passlink" href="password_reset.php">Lost your password?</a>
</div>
<div class="clearfix"></div>
<div class="separator">
<!-- <p class="change_link">New to site?
<a href="#signup" class="to_register"> Create Account </a> -->
</p>
<div class="clearfix"></div>
<br />
<div>
<h1><img src="../uploads/site-settings/<?php echo $hlogo; ?>" style="width:50%;"></h1>
<p>©2021 All Rights Reserved. <?php echo $website_name; ?></p>
</div>
</div>
</form>
</section>
</div>
<div id="register" class="animate form registration_form">
<section class="login_content">
<form>
<h1>Create Account</h1>
<div>
<input type="text" class="form-control" placeholder="Username" required="" />
</div>
<div>
<input type="email" class="form-control" placeholder="Email" required="" />
</div>
<div>
<input type="password" class="form-control" placeholder="Password" required="" />
</div>
<div>
<button class="btn btn-default submit" name="signup-request">Submit</button>
</div>
<div class="clearfix"></div>
<div class="separator">
<p class="change_link">Already a member ?
<a href="#signin" class="to_register"> Log in </a>
</p>
<div class="clearfix"></div>
<br />
<div>
<h1><<img src="../uploads/site-settings/<?php // echo $logo; ?>" style="width:50%;"></h1>
<p>©2021 All Rights Reserved. <?php  //echo $website_name; ?></p>
</div>
</div>
</form>
</section>
</div>
</div>
</div>
</body>

</html>
