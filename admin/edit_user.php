<?php include 'components/header.php'; ?>
<?php  ?>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Edit User</h3>
</div>
<!-- <div class="title_right">
<div class="col-md-5 col-sm-5   form-group pull-right top_search">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for...">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Go!</button>
</span>
</div>
</div>
</div> -->
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2><strong> User</strong></h2>

<div class="clearfix"></div>
</div>

<?php
if(isset($_GET['edit'])){
	$user_id = $_GET['edit'];
	$sql = "SELECT * FROM users WHERE id = '".$user_id."' ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
// $count = 1;
$rowcount = $database->num_rows($send);
if($rowcount >0){
foreach ($send as $row) {
	$user_id = $row['id'];
	$user_username = $row['username'];
	$fname=  $row['first_name'];
	$mname =  $row['middle_name'];
	$lname =  $row['last_name'];
	$about_me =  $row['about_me'];
	$gender =  $row['gender'];
	$user_email =  $row['email'];
	$user_role =  $row['user_role'];
	$account_type =  $row['account_type'];
	$contact =  $row['contact_no'];
	$address = $row['address'];
	$state =  $row['state'];
	// $zip_code =  $row['zip_code'];
	$branchid = $row['branch'];
	$country = $row['country'];
	$lga = $row['lga'];
	$dob = $row['dob'];
	$marital_status =  $row['marital_status'];
	$religion = $row['religion'];
	$regDate =$row['joined_date'];
	$user_acctStatus =  $row['status'];
	$user_image = $row['user_image'];
	$user_name = $fname." ".$lname;
	$numbers =preg_split("/,/",  preg_replace("/ /", "", $contact));
						
							$contact1 = $numbers[0];
							if(count($numbers) >1){
							$contact2 = $numbers[1];
									}else{
										$contact2 = "";
									}

			}
}else{
header('location:404/index.php');
}
}


		?>	





<div class="x_content">
<?php include '../add-form.php';?>
<form action="" method="POST" id="editnew-user" enctype="multipart/form-data">
				

<!-- <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p> -->
<div id="wizard" class="form_wizard wizard_horizontal">
<ul class="wizard_steps">
<li>
<a href="#step-1">
<span class="step_no">1</span>
<span class="step_descr">
Step 1<br />
<small>Bio Information</small>
</span>
</a>
</li>
<li>
<a href="#step-2">
<span class="step_no">2</span>
<span class="step_descr">
Step 2<br />
<small>Contact Information</small>
 </span>
</a>
</li>
<li>
<a href="#step-3">
<span class="step_no">3</span>
<span class="step_descr">
Step 3<br />
<small>Account Information</small>
</span>
</a>
</li>

</ul>
<?php echo $msg; ?> 
<div id="step-1">
		<div class="" style="margin:20px 0 20px 0; padding: 5px 10px; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Bio Information</strong> </h4></div>
<div class="row">
						<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">First Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="firstname" placeholder="Enter first name" value="<?php echo $fname; ?>" 
														class="form-control input-height" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
						 						<label class="control-label">Middle Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="middlename" placeholder="Enter middle name"
														class="form-control input-height" value="<?php echo $mname; ?>" />
											</div>
										
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Last Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="lastname" placeholder="Enter last name" value="<?php echo $lname; ?>"
														class="form-control input-height" />
											</div>
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Gender
													<span class="required"> * </span>
												</label>
													<select class="form-control input-height" name="gender">
															<option value="<?php echo $gender;?>"><?php if (!empty($gender)){ echo $gender;}else{
																echo "Select..."; } ?></option>
														<?php 	if( $gender == ''){
													echo '<option value="Male">Male</option>
													<option value="Female">Female</option>';}elseif( $gender != 'Male'){
													echo '<option value="Male">Male</option>';}else{
													echo	'<option value="Female">Female</option>';
													} ?>
													</select>	
											</div>
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label ">Date of Birth
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
															<input class="formDatePicker form-control" type="text" name="dob"  value="<?php echo $dob; ?>" placeholder="" data-input>
															<span class="dateBtn">
																<a class="input-button" title="toggle" data-toggle>
																	<i class="icon-calendar"></i>
																</a>
																<a class="input-button" title="clear" data-clear>
																	<i class="icon-close"></i>
																</a>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Nationality
													<span class="required"> * </span>
												</label>
													<input type="text" name="nationality" placeholder="Enter Nationality"
														class="form-control input-height" value="<?php echo $country; ?>"/>
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">State of Origin
													<span class="required"> * </span>
												</label>
													<input type="text" name="soo" placeholder="Enter Origin/State" value="<?php echo $state; ?>"
														class="form-control input-height" />
											</div>
										
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Local Government Area
													<span class="required"> * </span>
												</label>
													<input type="text" name="lga" placeholder="Enter L.G.A"
														class="form-control" value="<?php echo $lga; ?>"/>
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Marital Status
													<span class="required"> * </span>
												</label><select class="form-control input-height" name="marital-status">
														<option value="<?php echo $marital_status; ?>"><?php if (!empty($marital_status)){ echo $marital_status;}else{
																echo "Select..."; } ?></option>
														<?php 
														$maritalstatus =array("Single","Married","Divorced","Widowed");
														for ($i=0; $i <count($maritalstatus) ; $i++) { 
															if($maritalstatus[$i] != $marital_status){
														echo '<option value="'.$maritalstatus[$i].'">'.$maritalstatus[$i].'</option>';		
															}
														}?>												
													</select>
												</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Religion
													<span class="required"> * </span>
												</label>
													<input type="text" name="religion" placeholder="Enter Religion" value="<?php echo $religion; ?>" 
														class="form-control input-height" />
											</div>
										</div>
</div>
<div id="step-2">
	<div class="" style="margin:20px 0 20px 0; padding: 5px 10px; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Contact Information</strong> </h4></div>
<div class="row">

						<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Email
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-height"
															name="email" placeholder="Email Address" value="<?php echo $user_email; ?>"
															 /> 
												</div>
											</div>
						<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Mobile No.
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone" name="number[]" required="required" data-validate-length-range="8,20" class="form-control input-height" value="<?php echo $contact1; ?>" />
											</div>
						<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Phone No.
													<span class="required"> * </span>
												</label>
												<input type="tel"  name="number[]" required="required" data-validate-length-range="8,20" class="form-control input-height"  value="<?php echo $contact2; ?>"/>
												</div>
							<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Address
													<span class="required"> * </span>
												</label>
													<input type="text" name="address" placeholder="Enter Address"
														class="form-control input-height" value="<?php echo $address; ?>"/>
												</div>
								</div>
</div>

<div id="step-3">
	<div class="" style="margin:20px 0 20px 0; padding: 5px 10px; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Account Information</strong> </h4></div>
<div class="row">

<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Username
													<span class="required"> * </span>
												</label>
													<input id="username" type="text" name="username" placeholder="Enter username"
														class="form-control input-height" value="<?php echo $user_username; ?>"/>
												</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Password
													<span class="required"> * </span>
												</label>
													<input type="password" id="password" name="password" placeholder="Enter Password"
														class="form-control input-height" />
												</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Confirm Password
													<span class="required"> * </span>
												</label>
													<input type="text" id="confirmpassword" name="confirmpassword" placeholder="Enter Password"
														class="form-control input-height" />
												</div>
																			<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Branch / Region
													<span class="required"> * </span>
												</label>
							<?php
$qry =$database->query("SELECT * FROM branches WHERE status != 'deleted' ORDER BY id");
 $row =$database->fetch_array($qry);
  $sbranch = array();
foreach ($qry as $row) {
  $branchID =  $row['id'];
$sbranch[] = $row['branch_code'].' | '.ucfirst($row['building']).', '.ucfirst($row['city']).','.ucfirst($row['state']).', '.ucfirst($row['country']);}

echo '<select class="form-control input-height" name="staff-branch"><option value="'.$branchid.'">';
if (!empty($branchid)){echo get_branchCode($branchid);}else{echo "Select Branch "; }
echo '</option>';
										$c =count($sbranch);
														 for ($i=0; $i <$c ; $i++) {
														 	if($branch[$i] != $branchid){
														 		echo '<option value="'.$branchID.'">'.$sbranch[$i].'</option>';
														 	}
														 	
														} 
							echo '</select>';?> 		
						</div>
											<div class="form-group col-sm-12 col-md-6">
												<label class="control-label ">Joining Date
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon2" class="input-group datePicker">
															<input class="formDatePicker form-control" type="text" name="join-date" value="<?php echo $regDate; ?>"placeholder="Joining Date" data-input>
															<span class="dateBtn">
																<a class="input-button" title="toggle" data-toggle>
																	<i class="icon-calendar"></i>
																</a>
																<a class="input-button" title="clear" data-clear>
																	<i class="icon-close"></i>
																</a>
															</span>
														</div>
													</div>
											</div>
											<div class="form-group col-sm-12 col-md-6">
													<label class="control-label">Account Type
														<span class="required"> * </span>
													</label>
														<select name="account-type" class="form-control input-height">
															<option value="<?php echo $account_type; ?>"><?php if(!empty($account_type)){ echo $account_type; }else{echo  "Select .."; }?></option>
															<?php if($account_type == "Staff"){
													echo '<option value="Admin">	Admin</option>';}else{
														echo	'<option value="Staff">Staff</option>';}?>
														<!-- <option value="other">other</option> -->
													</select> 
													
												</div>
									
											<input type="hidden" name="edituser"/>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Passport
													<span class="required"> * </span>
												</label>
												<!-- <div class="compose-editor"> -->
													<input type="file" class="default form-control" name="passport" accept="image/*" />
												<!-- </div> -->
									</div>
</div>
</div>

</div>
</form>


</div>
</div>
</div>
</div>
</div>
</div>


<?php include 'components/footer.php'; ?>
</div>
</div>
<?php include 'components/javascript.php'; ?>

</body>
</html>
