<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Parcel Reports</h3>
</div>

</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2><strong>Shipment Reports</strong></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
	<div class="container">
		<div class="row">
				<div class="form-group col-md-4 col-sm-12">
												<label class="control-label">Parcel Status
													<span class="required"> * </span>
												</label>
												<?php
												$output ="";
 // $status_arr = array("all" => "All","Collected" =>"Collected","In-Transit" =>"In Transit","Arrived" =>"Arrived ","Out" =>"Out for Delivery","Ready" =>"Ready for Pickup","Delivered" =>"Delivered","Picked" =>"Picked Up","Unsuccessful" =>"Unsuccessful Delivery Attempt");
			$status_arr = array('all' => 'All',"Accepted" =>"Item Accepted by Courier","Shipped" =>"Shipped","Refunded" =>"Refunded","Returned" => "Returned");
			$output .='<select name="status" class="custom-select report-date-selector" id="shipment-status">';
				foreach($status_arr as $k => $v): 
									$output .='<option value="'.$k.'" >'.$v.'</option>';
				 endforeach;
			$output .='</select>';
			echo $output;
												?>
												</div>
			<div class="form-group col-md-4 col-sm-4">
												<label class="control-label ">From:
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon" class="input-group datePicker">
															<input class="formDatePicker form-control report-date-selector" id="fromDate" type="text" name="from-date"  value="<?php echo date('d-m-Y'); ?>" placeholder="" data-input>
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
		<div class="form-group col-sm-6 col-md-4">
												<label class="control-label ">To:
													<span class="required"> * </span>
												</label><div class="input-append date">
														<div id="dateIcon2" class="input-group datePicker">
															<input class="formDatePicker form-control report-date-selector" type="text" id="toDate" name="to-date" value="<?php echo date('d-m-Y'); ?>"placeholder="Joining Date" data-input>
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
		</div>
	</div>
<div class="">
<table class="table table-responsive table-striped jambo_table table-bordered table-hover"  id="datatables">
<thead>
<tr class="headings">
<th><input type="checkbox" id="selectAll"  name="selectAll"></th>
<th class="column-title">S/N</th>
<th class="column-title">Reference Number</th>
<th class="column-title">Branch Recieved</th>
<th class="column-title">Recipient Name </th>
<th class="column-title">Recipient Contact</th>
<th class="column-title">Parcel Status </th>
<th class="column-title">Shipment Status</th>
</tr>
</thead>
<tbody id="shipment_reportDisTable">


</tbody>

</table>
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
