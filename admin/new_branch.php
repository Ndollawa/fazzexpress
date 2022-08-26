<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>New Branch</h3>
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
<h2> <strong>Branch Information</strong></h2>


<div class="clearfix"></div>
</div>
<div class="x_content">

	<?php include __DIR__.'/../add-form.php'; ?>
	<div><?php echo $msg; ?></div>
<form action="" id="new-branch" class="form-horizontal"  enctype="multipart/form-data" method="post">
									
										<div class="form-body">
											<div class="form-group row">
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Building/Block Number
													<span class="required"> * </span>
												</label>
													<input type="text" required="required" name="branch-location" placeholder="Enter branch address"
														class="form-control input-height" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
						 						<label class="control-label">City
													<span class="required"> * </span>
												</label>
													<input type="text" required="required" name="city" placeholder="Enter City"
														class="form-control input-height" />
											</div>
										
							
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">State / Provinence
													<span class="required"> * </span>
												</label>
													<input type="text" required="required" name="state" placeholder="Enter State / Provinence"
														class="form-control input-height" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Zip-code / Postal code
													<span class="required"> * </span>
												</label>
													<input type="text" required="required" name="zip-code" placeholder="Enter zip-code"
														class="form-control input-height" />
											</div>
									
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Country
													<span class="required"> * </span>
												</label>
													<input type="text" required="required" name="country" placeholder="country"
														class="form-control" />
											</div>
											
										
											<div class="form-group col-md-6 col-sm-12">
												<label for="phone" class="control-label">Contact No.
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone" name="number" required="required" data-validate-length-range="8,20" class="form-control input-height" />
											</div>
										
											<div class="form-group col-md-12 col-sm-12">
												<label class="control-label">Full Address
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="address" placeholder="Enter Address"
														class="form-control input-height" ></textarea>
												</div>
											<input type="hidden" name="addbranch-Submit">
									</div>
										</div>
											<div class="form-actions" >
													<div align="center" class=" text-center">
														<button type="submit"
															class="btn btn-success m-r-20" name="addbranch-Submit" >Submit</button>
														<button type="button" onClick = "history.back();" class="btn btn-default">Cancel</button>
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

</html>
