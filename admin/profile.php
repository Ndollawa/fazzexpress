<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Profile</h3>
</div>

</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<!-- <h2>User Report <small>Activity report</small></h2> -->
<div class="clearfix"></div>
</div>
<div class="x_content row">
<div class=" col-md-12 profile_left">	<div style="
  background: rgba(0, 0, 0, 0.92); 
  backdrop-filter: blur(8px); ">	
<div style="background-image:url('../uploads/cover-pictures/<?php echo $cover_image; ?>'); width: 100%; heigth: 100vh ;background-size: cover;
	position:relative;  padding:20px 10px; 
  background-repeat: no-repeat;
  background-size: cover; opacity:1;" >
<center style="color:#ffffff !important;">
<div style=" background: #2a3f54; 
  backdrop-filter: blur(8px); width: 40%; padding: 20px 10px; border-radius:5px;" ><div class="profile_img">
<div id="crop-avatar center">

<img class="img-responsive avatar-view img-circle" width="100" height="100" src="../uploads/profile-pictures/<?php echo fetchUserpic($user_id); ?>" alt="Avatar" title="Change the avatar">
</div>
</div>
<h3><?php echo $_SESSION['fullname']; ?></h3>
<ul class="list-unstyled user_data">
<li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $address." , ".$country; ?>
</li>
<li>
<i class="fa fa-briefcase user-profile-icon"></i><?php echo $user_role; ?>
</li>
</ul>
<a class="btn btn-success" href="profile_settings.php"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
</div>
<br />
</center>
<div class="" style="margin:20px 0; background:#ffffff;">
	<div class='card-head bold'>About Me</div><div class='card-body'>
	<p><?php echo $about_me; ?></p></div>
</div>
</div></div>
</div>
<div class="col-md-12 col-sm-12 ">
<div class="profile_title">
<div class="col-md-6">
<h2>User Activity Report</h2>
</div>


<span class="pull-right"><?php echo "<div class='".getUser_statusDot($_SESSION['user_id'])."'></div>".' '.getUser_status($_SESSION['user_id']).' '.timeAgo(fetch_user_last_activity($_SESSION['user_id'])); ?></span> <b class="caret"></b>
</div>


<div class="" role="tabpanel" data-example-id="togglable-tabs">
<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
</li>
<!-- <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
</li>
<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
</li> -->
</ul>
<div id="myTabContent" class="tab-content">
<div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
<a href="new_parcel.php" class="btn btn-primary">Add New</a>
<div class="table-responsive">
		<form action="" method="post" id="disTableform">
<table class="table  table-striped jambo_table table-hover " id="datatables">

											<div class="text-center" style="margin: 5px 0 5px 70%; display: inline-flex;">
												<select class="form-control text-center" id="bulk-options" name="bulk-options"style="width:200px;margin: 5px 5px;" >
														<option value="">Select Options</option>
														<option value="Accepted">Accepted</option>
														<option value="Shipped">Shipped</option>
														<option value="Delete">Delete</option>
														<option value="Refunded">Refunded</option>
														<option value="Returned">Returned</option>
													<!-- 	<option value="Moderator">Moderator</option>
														<option value="Subscriber">Subscriber</option> -->
													</select>
											<button type="submit" class="btn btn-sm  btn-round btn-success" id="table-apply-btn" data-action="parcelBulkOperations" data-callback="all_parcels" name="checkbox-submit" >Apply</button>
																</div>
<thead>
<tr class="headings">
<th><input type="checkbox" id="selectAll"  name="selectAll"></th>
<th class="column-title">S/N</th>
<th class="column-title">Reference Number</th>
<th class="column-title">Branch Recieved</th>
<th class="column-title">Sender Name</th>
<th class="column-title">Sender Contact</th>
<th class="column-title">Recipient Name </th>
<th class="column-title">Recipient Contact</th>
<th class="column-title">Status </th>
  <th class="column-title">Shpipment Status</th>
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>

</tr>
</thead>
<tbody id="all_parcelDisTable">


</tbody>

</table></form>
</div>
<!-- <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

</div>

 </div> -->
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
</div>
</div>
</div>
</div>
</div>


<?php include 'components/footer.php'; ?>
</div>
</div>
<?php include 'components/javascript.php'; ?>

		<?php
			$user_last_activity;
			$sql = "SELECT last_activity FROM sessions WHERE user_id = '".$_SESSION['user_id']."' ORDER BY ID LIMIT 1 ";
			$qry = $database->query($sql);
			$row = $database->fetch_array($qry);
			foreach ($qry as $key => $row ){
						$user_last_activity = $row['last_activity'];
					}
		?>
		   <script>
				 var script = document.referrer.split('/');
					script= script[script.length-1];
					// alert(script);
					var $last_activity = "<?php echo timeAgo($user_last_activity); ?>";
					var username = "<strong><?php echo getName($_SESSION['user_id']) ;?></strong>";
		  if(script == 'login.php'){
		  	  $.toast({
		                                            heading: 'Welcome back! '+username ,
		                                            text:'Last seen: '+$last_activity,
		                                            position: 'top-right',
		                                            loaderBg:'#ff6849',
		                                            icon: 'success',
		                                            hideAfter: 3500,
		                                            stack: 6
		                                          });
		  }
		    </script>

</body>
</html>