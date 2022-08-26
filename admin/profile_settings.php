<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>My Account</h3>
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
<h2>Profile</h2>

<div class="clearfix"></div>
</div>
<?php require 'queries/profile-queries.php'; ?>
<div id="response"></div>
			<?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} ?>
<div class="x_content"><div class="row ">

				<div class="col-lg-3">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">My Profile</h3>
							<!-- <div class="card-options">
								<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
								 <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
								</div>  -->
							</div>
<div class="card-body">
	<div class="row">
<div class="col-sm-12 col-md-6">
		<div class="row" style="width:150px; height: 150px; border-radius: 50%;border: 3px solid #ccc; padding: 10px; margin: 10px; align-content: center; justify-content: center;" >
				<div class="profile-userpic" id="user-profpic"></div><label for="profpic" class="upload-profpic" id="upload-profpic" style="z-index: 1; margin:90px 0 1px 100px; position: absolute;overflow-x: 80%; border:2px solid white; border-radius: 100%; background:#ccc; padding: 10px; width: 40px; height: 40px; align-content: center;justify-content: center; vertical-align: center; cursor:pointer;"><i style="align-content: center;justify-content: center; position: relative; display: flex;"  class="fa fa-camera"></i><input type="file" id="profpic" name="profpic" style="display: none; " accept=".jpeg, .jpg, .png, .gif,"/></label></div></div></div>
								<form method="post" action="" id="pfsetting1-form">
									<div class="row mb-2">
										<div class="col">
											<h3 class="mb-1 "><?php echo getName($_SESSION['user_id']); ?></h3>
											<p class="mb-4 "><?php echo $user_role; ?></p>
										</div>
									</div>

										<div class="form-group">
											<label class="form-label">New Password</label> <input type="password" id="password" name="password" class="form-control" /> <!-- value="<?php echo $password; ?>" -->
										</div>
										<div class="form-group">
											<label class="form-label"> Confirm Password</label> <input type="password" id="confirmpassword" name="confirmpassword" class="form-control">
										</div>
										<input type="hidden" name="pfsetting1"/>
										<div class="form-footer">
											<button type="submit" class=" btn btn-primary btn-block pfsetting1" name="pfsetting1">Change</button>
										</div>
								</form>
							</div>
									</div>
								</div>
								<div class="col-lg-9">

									<form class="card" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="pfsetting2-form" enctype="multipart/form-data">
										<div class="card-header">
											<h3 class="card-title">Edit Profile</h3>

											</div>
											<div class="card-body">
												<div class="row">
										<div class="form-body">
											<div class="form-group row">

												<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">First Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="firstname" placeholder="Enter first name"
														class="form-control input-height" value="<?php echo $firstname; ?>" />
											</div>
											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Middle Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="middlename" placeholder="Enter middle name"
														class="form-control input-height" value="<?php echo $middlename; ?>" />
											</div>

											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Last Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="lastname" placeholder="Enter last name"
														class="form-control input-height" value="<?php echo $lastname; ?>" />
											</div>
										<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Gender
													<span class="required"> * </span>
												</label>
													<select class="form-control input-height" name="gender">
														<option value="<?php echo $gender;?>"><?php echo $gender;?></option>
														<?php 	if( $gender == ''){
													echo '<option value="Male">Male</option>
													<option value="Female">Female</option>';}elseif( $gender != 'Male'){
													echo '<option value="Male">Male</option>';}else{
													echo	'<option value="Female">Female</option>';
													} ?>
													</select>
											</div>
										<div class="form-group container col-md-4 col-sm-12">
												<label class="control-label ">Date Of Birth
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
															<input class="formDatePicker form-control" type="text"name="dob" value="<?php echo $dob; ?>"  placeholder="Birth Date"
														size="56" type="text" data-input>
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
											<div class="form-group col-md-3 col-sm-12">
												<label class="control-label">Username
													<span class="required"> * </span>
												</label>
													<input id="username" type="text" name="username" placeholder="Enter username"
														class="form-control input-height" value="<?php echo $username; ?>" />
												</div>
										<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Email
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-height"
															name="email" value="<?php echo $email; ?>" placeholder="Email Address">
												</div>
											</div>

											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Nationality
													<span class="required"> * </span>
												</label>
													<input type="text" name="nationality" placeholder="Enter Nationality"
														class="form-control input-height" value="<?php echo $nationality; ?>" />
											</div>
											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">State of Origin
													<span class="required"> * </span>
												</label>
													<input type="text" name="soo" placeholder="Enter Origin/State"
														class="form-control input-height" value="<?php echo $soo; ?>" />
											</div>

											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Local Government Area
													<span class="required"> * </span>
												</label>
													<input type="text" name="lga" placeholder="Enter last name"
														class="form-control L.G.A" value="<?php echo $lga; ?>" />
											</div>
												<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Marital Status
													<span class="required"> * </span>
												</label><select class="form-control input-height" name="marital-status">
														<option value="<?php echo $marital_status; ?>"><?php 	if( $marital_status == ''){
													echo 'Select...';}else{echo $marital_status; }?></option>
														<?php
														$maritalstatus =array("Single","Married","Divorced","Widowed");
														for ($i=0; $i <count($maritalstatus) ; $i++) {
															if($maritalstatus[$i] != $marital_status){
														echo '<option value="'.$maritalstatus[$i].'">'.$maritalstatus[$i].'</option>';
															}
														}?>
													</select>
												</div>
											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Religion
													<span class="required"> * </span>
												</label>
													<input type="text" name="religion" placeholder="Enter Religion"
														class="form-control input-height" value="<?php echo $religion; ?>" />
											</div>

											<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Mobile No.
													<span class="required"> * </span>
												</label>
													<input name="number" type="text" placeholder="mobile number"
														class="form-control input-height" value="<?php echo $number; ?>" />
											</div>


												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Address</label> <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" placeholder="Home Address"/>
													</div>
												</div>
													<div class="col-sm-12 col-md-6">
													<div class="form-group">
														<label class="form-label">Cover Picture</label>
														<input type="file" class="form-control" name="coverpic"></input>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group mb-0">
														<label class="form-label">About Me</label> <textarea rows="5" class="form-control" name="about-me" placeholder="Enter About your description"><?php echo $about_me; ?></textarea>
														 </div>
														</div>
														<input type="hidden" name="update-profile">
													</div>
												</div>
												<div class="card-footer text-right">
													<button type="submit"  name="update-profile" class="btn btn-primary">Update Profile</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
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

</html>