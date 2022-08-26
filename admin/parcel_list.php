<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Parcel List</h3>
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
<h2><strong>Parcel List</strong></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
	<a href="new_parcel.php" class="btn btn-primary">Add New</a>
<div class="">
		<form action="" method="post" id="disTableform">
<table class="table table-responsive table-striped jambo_table table-hover ">

											<div class="text-center" style="margin: 5px 0 5px 70%; display: inline-flex;">
												<select class="form-control text-center" id="bulk-options" name="bulk-options"style="width:200px;margin: 5px 5px;" >
														<option value="">Select Options</option>
														<option value="Accepted">Accepted by Courier</option>
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
<th class="column-title">Parcel Status </th>
  <th class="column-title">Shipment Status</th>
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>
</tr>
</thead>
<tbody id="all_parcelDisTable">


</tbody>

</table></form>
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