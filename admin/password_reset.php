<?php include 'components/header.php'; ?>
<?php
ob_start();
$message = "";
$_SESSION['message'] = "";
if(isset($_POST['password-reset-request'])){
	$email = $database->escape_value($_POST['email']);
        $sql  = "SELECT * FROM users ";
    $sql .= "WHERE email ='{$email}' ";
    // $sql .= "AND PASSWORD = '{$pssword}' ";
    $sql .= "LIMIT 1";
      $result= $database->query ($sql);
      $row = $database->fetch_array($result);
      if($row>0){
      foreach ($result as $row) {
      $user_id = $row['id'];
      $username = $row['username'];
      $user_password = $row['password'];
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $user_email = $row['email'];
      $user_acctStatus = $row['status'];
      $user_phone_no = $row['contact_no'];
      $user_account_type = $row['account_type'];
      $user_role = $row['user_role'];
      $branchId = $row['branch'];
    }

     // $token = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$date_requested = date('Y-m-d H:i:s');
$sql = "INSERT INTO password_reset
              (user_id, token, date_requested)
              VALUES
              ('$user_id', '$token', '$date_requested')";
$send = $database->query($sql);

echo $passwordRequestId = $database->insert_id();
//Create a link to the URL that will verify the
//forgot password request and allow the user to change their
//password.
$verifyScript = $website_link.'/admin/pwd_reset.php';
$from_mail = "";
$to_mail = $email;
//The link that we will send the user via email.
echo $linkToSend = $verifyScript . '?pwdrst&uid=' . $user_id . '&id=' . $passwordRequestId . '&t=' . $token;
$mail ='<strong><h4>Hi "'.$first_name.' '.$last_name.'",</h4></strong></br> <p>Your request to reset your password  has been  received, kindly ignore this mail if you did not make this request. </br>Click the button below to Change Password.</p>
        <a href="'.$linkToSend.'"><button class="btn btn-success">Reset Password</button></a> </br>
        </br>
        <p>Thanks,</br>
        
        Admin @ '.$website_link.'</br> Please do not reply to this mail address.</p>';
if(!empty($from_mail) && !empty($to_mail) && !empty($mail)){
          include 'email-queries.php';}
      }else{ $_SESSION['message'] = "<strong>Sorry this email address doesn't exist!!!</strong>"; }
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
<h1>Password  Reset </h1>
<div>
	  <?php
          if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
            echo '<h3 class="alert alert-danger text-danger bold mt-10 mb-10">'.$_SESSION['message'].'</h3>';
          unset($_SESSION['message']);} ?>
          <p class="text-info">Please enter your registered email address</p>
<input type="text" class="form-control" name="email" placeholder="email" required="" />
</div>
<!-- <div>
<input type="password" class="form-control" name="password" placeholder="Password" required="" />
</div> -->
<div>
<button type="submit" class="btn btn-default submit" name="password-reset-request">Submit Request</button>
<a class="reset_pass" href="login.php">Login</a>
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

</div>
</div>
</body>

</html>
