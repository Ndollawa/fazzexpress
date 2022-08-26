<?php include 'components/header.php'; ?>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<?php include 'queries/dashboard-queries.php';


$sql=" SELECT * FROM branches ";
			 $result= $database->query ($sql);
			 $TbrCount = $database->num_rows($result);

$sql=" SELECT * FROM branches WHERE LOWER(status) = LOWER('Active')  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $active_brCount = $database->num_rows($result);



$sql=" SELECT * FROM users ";
			 $result= $database->query ($sql);
			 $TuserCount = $database->num_rows($result);

$sql=" SELECT * FROM users WHERE  LOWER(account_type) = LOWER('Staff')  ORDER BY id DESC";
			 $result= $database->query ($sql);
			 $staffCount = $database->num_rows($result);

$sql=" SELECT * FROM users WHERE  LOWER(account_type) = LOWER('Admin')  ORDER BY id DESC";
			 $result= $database->query ($sql);
			 $adminCount = $database->num_rows($result);

 $sql=" SELECT * FROM parcels ";
			 $result= $database->query ($sql);
			 $TparcelCount = $database->num_rows($result);


 $sql=" SELECT * FROM parcels WHERE status = 'Shipped'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $sippedParcelCount = $database->num_rows($result);

 $sql=" SELECT * FROM parcels WHERE status = 'Accepted'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $acceptedParcelCount = $database->num_rows($result);


 $sql=" SELECT * FROM parcels WHERE status = 'Refunded'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $refundedParcelCount = $database->num_rows($result);

 $sql=" SELECT * FROM parcels WHERE status = 'Returned'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $returnedParcelCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments ";
			 $result= $database->query ($sql);
			 $TshipmentCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments WHERE status = 'In-Transit'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $intransitCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments WHERE status = 'Received'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $receivedCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments WHERE status = 'Collected'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $collectedCount = $database->num_rows($result);

 $sql=" SELECT * FROM shipments WHERE status = 'Ready'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $readyCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments WHERE status = 'Delivered'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $deliveredCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments WHERE status = 'Out'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $outCount = $database->num_rows($result);

 $sql=" SELECT * FROM shipments WHERE status = 'Unsuccessful'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $unsuccessfulCount = $database->num_rows($result);


 $sql=" SELECT * FROM shipments WHERE status = 'Picked'  ORDER BY id DESC ";
			 $result= $database->query ($sql);
			 $pickedupCount = $database->num_rows($result);


 $sql=" SELECT * FROM quotes ";
			 $result= $database->query ($sql);
			 $TquoteCount = $database->num_rows($result);


 $sql=" SELECT * FROM quotes WHERE LOWER(status) = LOWER('Pending')  ORDER BY id DESC";
			 $result= $database->query ($sql);
			 $pendingQuoteCount = $database->num_rows($result);

 $sql=" SELECT * FROM reports ";
			 $result= $database->query ($sql);
			 $TreportCount = $database->num_rows($result);


?>
<div class="row" style="display: inline-block;">
<div class="tile_count">
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-users"></i> Total Users</span>
<div class="count"><?php echo $TuserCount; ?></div>
<!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-users"></i> Admins</span>
<div class="count"><?php echo $adminCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-users"></i> Staffs</span>
<div class="count green"><?php echo $staffCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-building"></i> Total Branches</span>
<div class="count"><?php echo $TbrCount; ?></div>
<!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-suitcase"></i> Total Parcels Recived</span>
<div class="count"><?php echo $TparcelCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-truck"></i>Total Shipments</span>
<div class="count green"><?php echo $TshipmentCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-truck"></i>Pending Shipments</span>
<div class="count green"><?php echo $acceptedParcelCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>

<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-truck"></i>Returned Shipments</span>
<div class="count green"><?php echo $returnedParcelCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-truck"></i>Refunded Shipments</span>
<div class="count green"><?php echo $refundedParcelCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-edit"></i> Total Quote Requests</span>
<div class="count"><?php echo $TquoteCount; ?></div>
<!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-edit"></i> Pending Quote Requests</span>
<div class="count"><?php echo $pendingQuoteCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4  tile_stats_count">
<span class="count_top"><i class="fa fa-file-o"></i>Total Reports </span>
<div class="count green"><?php echo $TreportCount; ?></div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>



</div>
</div>

<script type="text/javascript">



</script>
<div class="m-20">
<div class="state-overview">
						<div class="row">
							<div class="col-lg-3 col-sm-6"><a href="items_unsuccessful.php">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="fa fa-share"></i>	<i class="fa fa-building"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$assignedCrsCount.'"><?php echo $unsuccessfulCount; ?></p>
										<p>UNSUCCESSFUL DELIVERIES </p>
									</div>
								</div></a>
							</div>
							<div class="col-lg-3 col-sm-6"><a href="items_arrived.php">
								<div class="overview-panel bg-purple">
									<div class="symbol">
									<i class="fa fa-building"></i><i class="fa fa-truck"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$assignedStdCount.'"><?php echo $receivedCount; ?></p>
										<p>ARRIVED AT DESTINATION</p>
									</div>
								</div></a>
							</div>
							<div class="col-lg-3 col-sm-6"><a href="items_out.php">
								<div class="overview-panel orange">
									<div class="symbol"><i class="fa fa-truck">	<i class="fa fa-building"></i></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$pendingTaskCount.'"><?php echo $outCount; ?></p>
										<p>OUT FOR DELIVERY</p>
									</div>
								</div></a>
							</div>
							<div class="col-lg-3 col-sm-6"><a href="items_ready.php">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-building"></i>	<i class="fa fa-suitcase"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$pendingTodosCount.'"><?php echo $readyCount; ?></p>
										<p>READY FOR PICKUP</p>
									</div>
								</div></a>
							</div>
									<div class="col-lg-3 col-sm-6"><a href="items_delivered.php">
								<div class="overview-panel bg-success">
									<div class="symbol">
									<i class="fa fa-home"></i>	<i class="fa fa-truck"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$pendingTodosCount.'"><?php echo $deliveredCount; ?></p>
										<p>DELIVERED SHIPMENTS</p>
									</div>
								</div></a>
							</div>
									<div class="col-lg-3 col-sm-6"><a href="items_pickedup.php">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<!-- <i class="fa fa-building"></i>	 --><i class="fa fa-suitcase"></i><i class="fa fa-check"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$pendingTodosCount.'"><?php echo $pickedupCount; ?></p>
										<p>PICKED UP</p>
									</div>
								</div></a>
							</div>

		<div class="col-lg-3 col-sm-6"><a href="items_in-transit.php">
								<div class="overview-panel bg-yellow">
									<div class="symbol">
									<i class="fa fa-road"></i>	<i class="fa fa-truck"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$pendingTodosCount.'"><?php echo $intransitCount; ?></p>
										<p>IN TRANSIT</p>
									</div>
								</div></a>
							</div>

		<div class="col-lg-3 col-sm-6"><a href="items_collected.php">
								<div class="overview-panel bg-cyan">
									<div class="symbol">
										<i class="fa fa-suitcase"></i>	<i class="fa fa-building"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1 info-box-number" data-counter="counterup" data-value="'.$pendingTodosCount.'"><?php echo $collectedCount; ?></p>
										<p>COLLECTED</p>
									</div>
								</div></a>
							</div>
						</div>
					</div>
				</div>
<br />
<div class="row">
  <div class="col-md-4 col-sm-12 ">
<div class="x_panel tile fixed_height_320">
<div class="x_title">
<h2>Branches Shipment Reports</h2>

<div class="clearfix"></div>
</div>
<div class="x_content" >
 <h4>Branch Shipments</h4>
<div class="small-slimscroll-style slimscroll" style="overflow-y:scroll; overflow-wrap: break-word;overflow-x: hidden; ">
<?php
 	$sql=" SELECT * FROM branches  WHERE LOWER(status) = LOWER('active') ORDER BY id DESC";
 			$count = 0;
 			 $result= $database->query ($sql);
 			 $row = $database->fetch_array($result);
 				foreach ($result as $row) {
 					$branchID =  $row['id'];
 					$branch = $row['branch_code'];
 					$building = $row['building'];
 					$city = $row['city'];
 					$state = $row['state'];
 					$country= $row['country'];
 					$address = $row['address'];
 					$zip_code = $row['zip_code'];
 					$contact = $row['contact'];
 					$status = $row['status'];
 $sql2="SELECT * FROM parcels  WHERE from_branch_id = $branchID ";
 				 $result= $database->query ($sql2);
 				 $rowCount = $database->num_rows($result);
 if($rowCount >999) {

 		$parcelCount = $rowCount."K";
 	}else{
 	$parcelCount = $rowCount;
 	}
 	if($TparcelCount>0){
  $branchReport = ceil(($rowCount/$TparcelCount)*360);
}else{
	$branchReport =0;
}

 
 echo '<div class="widget_summary">
 <div class="w_left w_25">
 <span>'.$branch.'</span>
 </div>
 <div class="w_center w_55">
 <div class="progress">
 <div class="progress-bar bg-green" role="progressbar" aria-valuenow="'.$branchReport.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$branchReport.'%;">
  <span class="sr-only">'.$branchReport.'% Complete</span>
 </div>
 </div>
 </div>
 <div class="w_right w_20">
 <span>'.$parcelCount.'</span>
 </div>
 <div class="clearfix"></div>
 </div>';
 }
?>


</div>
</div>
</div>
</div>
<div class="col-md-8 col-sm-12 ">
<div class="x_panel tile fixed_height_320 overflow_hidden">
<div class="x_title">
<h2>Shipment Reports</h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<table class="" style="width:100%">
<tr>
<th style="width:37%;">
<p>Shipment</p>
</th>
<th>
<div class="col-lg-7 col-md-7 col-sm-7 ">
<p class="">Status</p>
</div>
<div class="col-lg-5 col-md-5 col-sm-5 ">
<p class="">Progress</p>
</div>
</th>
</tr>
<tr>
<td>

<canvas class="canvasDoughnut1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
<?php
 $dataset = array();
   $sql=" SELECT * FROM parcels ";
			 $result= $database->query ($sql);
			 $TparcelCount = $database->num_rows($result);


   $status_arr = array("Collected" =>"Collected","In-Transit" =>"In Transit","Arrived" =>"Arrived at Destination","Out" =>"Out for Delivery","Ready" =>"Ready for Pickup","Delivered" =>"Delivered to Destination","Picked" =>"Picked Up","Unsuccessful" =>"Unsuccessful Delivery Attempt");
 foreach ($status_arr as $key => $value) {
 	 $sql=" SELECT * FROM shipments WHERE status ='$key' ";
 			 $result= $database->query ($sql);
 			$Count = $database->num_rows($result);
 				if($TparcelCount>0){
  $dataset[] = ceil($Count/$TparcelCount)*360;
}else{
	$dataset[] =0;
}
	if($TparcelCount>0){
  $prog[] = (ceil($Count/$TparcelCount)*100);
}else{
	$prog[] =0;
}

 			
 			 

 }

 $color= array("#ffd400","#0008ff","#ffb100","#BDC3C7","#9B59B6","#E74C3C","#26B99A","#3498DB");



?>
<script type="text/javascript">

 function init_chart_dash(){if("undefined"!=typeof Chart&&(console.log("init_chart_doughnut"),$(".canvasDoughnut1").length)){var a={type:"doughnut",tooltipFillColor:"rgba(51, 51, 51, 0.55)",data:{labels:["<?php echo "".implode('","',$status_arr)."";?>"],datasets:[{data:[<?php echo implode(',',$dataset);?>],backgroundColor:["#ffd400","#0008ff","#ffb100","#BDC3C7","#9B59B6","#E74C3C","#26B99A","#3498DB"],hoverBackgroundColor:["#ffd400","#0008ff","#ffb100","#BDC3C7","#9B59B6","#E74C3C","#26B99A","#3498DB"]}]},options:{legend:!1,responsive:!1}};$(".canvasDoughnut1").each(function(){var b=$(this);new Chart(b,a)})}}
 $(document).ready(function(){
 init_chart_dash();});
</script>
</td>
<td>
<table class="tile_info" id="datatables">
	<?php
 	foreach ($status_arr as $key => $value) {
 		$ct =0;
 	echo '<tr>
 <td>
 <p><i class="fa fa-square " style="background-color:'.$color[$ct].'"></i>'.$value.' </p>
 </td>
 <td>'.$prog[$ct].'%</td>
 </tr> ';
 $ct++;
 	}
?>


</table>
</td>
</tr>
</table>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-md-4 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<h2>Recent Complaints/Request</h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="dashboard-widget-content">
<ul class="list-unstyled timeline widget small-slimscroll-style slimscroll" style="overflow-y:scroll; overflow-wrap: break-word;overflow-x: hidden; ">
<?php
$qry =  $database->query("SELECT * FROM request WHERE status = 'Active' ORDER BY id DESC LIMIT 10");
$row = $database->fetch_array($qry);
foreach ($qry as $row) {
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$website = $row['website'];
$content = $row['content'];
$date_created = $row['date_created'];
$status = $row['status'];
$title = $row['title'];

echo '<li>
<div class="block">
<div class="block_content">
<h2 class="title">
<a>'.$title.'</a>
</h2>
<div class="byline">
<span>'.timeAgo($date_created).'</span> by <a>'.$name.'</a>
</div>
<p class="excerpt">'.$content.'</a>
</p>
</div>
</div>
</li>';
}
?>

</ul>
</div>
</div>
</div>
</div>
<div class="col-md-8 col-sm-12 ">
<div class="row">
<div class="col-md-12 col-sm-12 ">
<div class="x_panel">
<div class="x_title">
<h2>Requested Quotations <small>Personal / Company </small></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="table-responsive">
<table class="table table-striped table-bordered bulk_action" id="datatables">
<thead>
<tr class="headings">

<th class="column-title">S/N</th>
<!-- <th class="column-title">Company</th> -->
<th class="column-title"> Name </th>
<th class="column-title">Email</th>
<th class="column-title">Weight</th>
<th class="column-title">Height </th>
<th class="column-title">Width</th>
<th class="column-title">Length </th>
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>
</tr>
</thead>
<tbody id="quoteRequestDisTable">


</tbody>

</table>
</div>
</div>
</div>
</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
							<header>Todo List</header>
								</div>

								<div class="card-body ">
									<div class="container jumbotron"><div class="card-body"> <span>Create Todo</span><div class="btn btn-sm btn-primary offset-10" id="create-todos"><i class="fa fa-plus"></i></div></div></div>
									<ul class="to-do-list ui-sortable" id="sortable-todo">


									</ul>
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