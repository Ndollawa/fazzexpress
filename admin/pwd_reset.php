<?php include 'components/header.php'; ?>
<?php require 'queries/password-reset-queries.php'?>

<body class="login">
<div>
<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>
<div class="login_wrapper">
<div class="animate form login_form">
<section class="login_content">
   <div class="row"> 
            <div class="col-lg-12"> 
              <div class="card"> 
                <div class="card-header"> 
                  <div class="card-title"><h5><strong><?php echo $user_name; ?></strong></h5></div> 
                 <!--  <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a> <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a> 
                  </div>  -->
                </div> 
            <?php
          if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
            echo '<h3 class="alert alert-danger text-danger bold mt-10 mb-10">'.$_SESSION['message'].'</h3>';
          unset($_SESSION['message']);} ?>
              <div class="row">
                <div class="col-sm-12  col-md-12">
                  <div class="card-body">
<form method="post" action="" id="passwd-reset-form" class="form-group"> 
           
                  <div class="row mb-2"> 
                    <div class="col"> 
                      <h3 class="mb-1 "><img class="img-circle img-responsive " width="100" height="100" src="../uploads/profile-pictures/<?php echo fetchUserpic($_SESSION['user_id']); ?>" alt="" /></h3> 
                      <p class="mb-4 "><?php echo $user_role; ?></p>
                    </div> 
                  </div> 
                
                    <div class="form-group"> 
                      <label class="form-label pull-left">New Password</label> <input type="password" id="password" name="password" class="form-control" /> <!-- value="<?php echo $password; ?>" -->
                    </div> 
                    <div class="form-group"> 
                      <label class="form-label pull-left"> Confirm Password</label> <input type="password" id="confirmpassword" name="confirmpassword" class="form-control"> 
                    </div> 
                    <input type="hidden" name="passwd-reset"/>
                    <div class="form-footer"> 
                      <button type="submit" class=" btn btn-primary btn-block passwd-reset" name="passwd-reset">Reset Password</button>
<a class="reset_pass" href="login.php">Login Instead</a>

                    </div> 
                </form> 
            

</div></div></div></div></div>


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

</section>
</div>

</div>
</div>
</body>

</html>
