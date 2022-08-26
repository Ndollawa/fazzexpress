
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script src="../vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
	<a href="new_parcel.php" class="btn btn-primary">Add New</a>
<div class="table-responsive">
		<form action="" method="post" id="disTableform">
<table class="table table-striped jambo_table table-hover " id="datatables">
																			 
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
<th class="column-title">Status </th>
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>
<th class="bulk-actions" colspan="7">
<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
</th>
</tr>
</thead>
<tbody id="all_parcelDisTable">


</tbody>

</table></form>

<script> document.getElementById('datatables').DataTables();</script>
</body>
</html>
