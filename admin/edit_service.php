<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Edit Service</h3>
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
<h2> <strong>Service Information</strong></h2>


<div class="clearfix"></div>
</div>
<div class="x_content">

	<?php include __DIR__.'/../add-form.php'; ?>
	<?php if(!(isset($_GET['edit']))){
header('Location:page_404.php');
}elseif(isset($_GET['edit'])){
$service_id = $database->escape_value($_GET['edit']);											
$sql="SELECT * FROM service  WHERE id = $service_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
  if($row == 0){
header('Location:page_500.php');
 }else{

	foreach ($query as $row) { 
		$id = $row['id'];
	  $title = $row['title'];
	  $ser_description = $row['description'];
	  $highlight = $row['highlights'];
	  $date_created = date('l,d-m-Y',strtotime($row['date_created']));
	  $page_content =$row['page_content'];
	  $cimage = $row['cover_image'];
	  $service_video = $row['service_video'];	
	}}}
	?>
	<div><?php echo $msg; ?></div>
<form action="" id="new-service" class="form-horizontal"  enctype="multipart/form-data" method="post">
									
										<div class="form-body">
											<div class="form-group row">
											<div class="form-group col-md-12 col-sm-12">
												<label class="control-label">Title
													<span class="required"> * </span>
												</label>
													<input type="text" required="required" name="stitle" placeholder="Enter Service title"
													value="<?php echo $title; ?>" 	class="form-control input-height" />
											</div>
											<div class="form-group col-md-6 col-sm-12">
						 						<label class="control-label">Cover Image
													<span class="required"> * </span>
												</label>
													<input type="file" name="cover-image" accept=".jpeg, .jpg, .png, .gif" class="form-control input-height" />
											</div>
										
											<div class="form-group col-md-6 col-sm-12 ">
												<!-- <div  style="width:10px;height:10px;align-content: center;"><img src="../uploads/service/<?php echo $cimage;?>" ></div> -->
												</div>
								
							
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Service Intro Video
													<span class="required"> * <em>(Optional)</em></span>
												</label>
												 <input type="file" accept="Video/*" name="svideo" class="form-control input-height" />
													</div>
												
											<div class="form-group col-md-6 col-sm-12 ">
												<!-- <div  style="width:10px;height:10px;align-content: center;"><video src="../uploads/service/<?php echo $s_video; ?>" controls></video></div> -->
												</div>
								
												
										
											<div class="form-group col-md-12 col-sm-12">
												<label class="control-label">Description
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="sdescription" placeholder="Enter Address"
														class="form-control input-height editor" ><?php echo $ser_description; ?></textarea>
												</div>

												<div class="form-group col-md-12 col-sm-12">
												<label class="control-label">Service Highlights
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="shighlight" placeholder="Enter Highlights in list form"
														class="form-control input-height editor" ><?php echo $highlight; ?></textarea>
												</div>
												<div class="form-group col-md-12 col-sm-12">
												<label class="control-label">Full Page content
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="scontent" placeholder="About the service"
														class="form-control input-height editor" ><?php echo $page_content; ?> </textarea>
												</div>
										
											<input type="hidden" name="editservice-Submit">
									</div>
										</div>
											<div class="form-actions" >
													<div align="center" class=" text-center">
														<button type="submit"
															class="btn btn-success m-r-20" name="editservice-Submit" >Update</button>
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
