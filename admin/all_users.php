<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3> Staff List</h3>
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
<h2><strong>Staffs</strong></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
	<a href="new_user.php" class="btn btn-primary text-left">Add New</a>
<div class="table-responsive">
		<form action="" method="post" id="disTableform">
<table class="table  table-striped jambo_table bulk_action" id="datatables" >											 
											<div class="text-center" style="margin: 5px 0 5px 70%; display: inline-flex;">
												<select class="form-control text-center" id="bulk-options" name="bulk-options"style="width:200px;margin: 5px 5px;" >
														<option value="">Select Options</option>
														<option value="Active">Active</option>
														<option value="On Leave">	On Leave</option>
														<option value="Delete">Delete</option>
														<option value="Suspended">Suspend</option>
														<option value="Banned">	Ban</option>
													</select>	
											<button type="submit" class="btn btn-sm  btn-round btn-success" id="table-apply-btn" data-action="usersBulkOperations" data-callback="all_users" name="checkbox-submit" >Apply</button>
																</div>
													
												

<thead>
<tr class="headings">
<th><input type="checkbox" id="selectAll"  name="selectAll"></th>
<th class="column-title">S/N</th>
<th class="column-title">Name</th>
<th class="column-title">Contact</th>
<th class="column-title">Email</th>
<th class="column-title">Address </th>
<th class="column-title">Status</th>
<th class="column-title">Role</th>
<th class="column-title">Branch </th>
<th class="column-title">Country </th>


<th class="column-title no-link last"><span class="nobr">Action</span>
</th>
</tr>
</thead>
<tbody id="all_userDisTable">


</tbody>

</table></form></div>
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
