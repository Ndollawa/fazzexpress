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
<h3>New User</h3>
</div><!-- 
<div class="title_right">
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
<h2><strong>Add User</strong></h2>

<div class="clearfix"></div>
</div>

	
<div class="x_content">
<?php include '../add-form.php';?>


<form action="" method="POST" id="addnew-user" enctype="multipart/form-data">


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
													<input type="text" name="firstname" placeholder="Enter first name"
														class="form-control input-height" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
						 						<label class="control-label">Middle Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="middlename" placeholder="Enter middle name"
														class="form-control input-height" />
											</div>
										
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Last Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="lastname" placeholder="Enter last name"
														class="form-control input-height" />
											</div>
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Gender
													<span class="required"> * </span>
												</label>
													<select class="form-control input-height" name="gender">
														<option value="">Select...</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
											</div>
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label ">Date of Birth
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
															<input class="formDatePicker form-control" type="text" name="dob" placeholder="" data-input>
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
														class="form-control input-height" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">State of Origin
													<span class="required"> * </span>
												</label>
													<input type="text" name="soo" placeholder="Enter Origin/State"
														class="form-control input-height" />
											</div>
										
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Local Government Area
													<span class="required"> * </span>
												</label>
													<input type="text" name="lga" placeholder="Enter L.G.A"
														class="form-control" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Marital Status
													<span class="required"> * </span>
												</label><select class="form-control input-height" name="marital-status">
														<option value="">Select...</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Divorced">Divorced</option>
														<option value="Widowed">Widowed</option>													
													</select>
												</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Religion
													<span class="required"> * </span>
												</label>
													<input type="text" name="religion" placeholder="Enter Religion"
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
															name="email" placeholder="Email Address"> 
												</div>
											</div>
						<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Mobile No.
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone" name="number[]" required="required" data-validate-length-range="8,20" class="form-control input-height" />
											</div>
						<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Phone No.
													<span class="required"> * </span>
												</label>
												<input type="tel"  name="number[]" required="required" data-validate-length-range="8,20" class="form-control input-height" />
												</div>
							<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Address
													<span class="required"> * </span>
												</label>
													<input type="text" name="address" placeholder="Enter Address"
														class="form-control input-height" />
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
														class="form-control input-height" />
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
																				</label>
							<?php
$qry =$database->query("SELECT * FROM branches WHERE status != 'deleted' ORDER BY id");
 $row =$database->fetch_array($qry);
  $sbranch = array();
foreach ($qry as $row) {
  $branchID =  $row['id'];
$sbranch[] = $row['branch_code'].' | '.ucfirst($row['building']).', '.ucfirst($row['city']).','.ucfirst($row['state']).', '.ucfirst($row['country']);}

echo '<select class="form-control input-height" name="staff-branch"><option value="">Select Branch ...</option>';
										$c =count($sbranch);
														 for ($i=0; $i <$c ; $i++) {
														 	// if($branch[$i] != 0){
														 		echo '<option value="'.$branchID.'">'.$sbranch[$i].'</option>';
														 	// }
														 	
														} 
							echo '</select>';?> 		
						</div>
											<div class="form-group col-sm-12 col-md-6">
												<label class="control-label ">Joining Date
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon2" class="input-group datePicker">
															<input class="formDatePicker form-control" type="text" name="join-date" placeholder="Joining Date" data-input>
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
															<option class="" value="Staff">Staff</option>
															<option class="" value="Admin">Admin</option>
														</select>
												</div>
											<!-- <div class="form-group col-sm-12 col-md-6">
												<label class="control-label">Position
													<span class="required"> * </span>
												</label>
													<input type="text" name="position" data-required="1"
														placeholder=""
														class="form-control input-height" />
											</div>
											<div class="form-group col-sm-12 col-md-6">
												<label class="control-label">Staff Level
													<span class="required"> * </span>
												</label>
													<input type="text" name="lectlevel" data-required="1"
														placeholder="Enter your Level"
														class="form-control input-height" />
											</div> -->
				
											<input type="hidden" name="add-newUser"/>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Passport
													<span class="required"> * </span>
												</label>
												<!-- <div class="compose-editor"> -->
													<input type="file" class="default form-control" name="passport" accept="image/*">
												<!-- </div> -->
									</div></div>
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
