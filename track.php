<?php

require_once __DIR__.'/backend/database.php';
require_once __DIR__.'/backend/session.php';
// require_once __DIR__.'/backend/access_restriction.php';
include_once __DIR__.'/backend/functions.php';
include_once  __DIR__.'/backend/timeAgo.php';
if(isset($_POST['action'])){

if($_POST['action'] == 'trackparcel' ){
	// print_r($_POST);
parse_str($_POST['formData'],$_POST);
$tracking_number = preg_replace('/\s\s+/','', $database->escape_value($_POST['tracking-number']));
// $shipment_type = $database->escape_value($_POST['shipment-type']);
$result = $database->query("SELECT * FROM parcels WHERE reference_number = '$tracking_number'");
// print_r($result);
	 $row = $database->fetch_array($result);
	 $rowCount = $database->num_rows($result);
	  if($rowCount > 0){
	foreach ($result as $row){
	$parcel_id = $row['id'];
	$reference_number = $row['reference_number'];
	$sender_name = $row['sender_name'];
	$sender_address = $row['sender_address'];
	$date_created = date('l,d-m-Y',strtotime($row['date_created']));
	$sender_contact =$row['sender_contact'];
	$recipient_name = $row['recipient_name'];
	$sender_email = $row['sender_email'];
	$recipient_email = $row['recipient_email'];
	$recipient_address = $row['recipient_address'];
	$recipient_contact = $row['recipient_contact'];
	$parcel_status = $row['status'];
	$delivery_class = $row['delivery_class'];
	$delivery_type =$row['delivery_type'];
	$shipment_type= $row['shipment_type'];
	$from_branch_id = $row['from_branch_id'];
	$to_branch_id = $row['to_branch_id'];
	$weight =$row['weight'];
	$height = $row['height'];
	$width = $row['width'];
	$length = $row['length'];
	$price = $row['price'];
	$parcel_worth = $row['parcel_worth'];
	$parcel_image = $row['parcel_image'];
$status_color ="";

	 $sql="SELECT * FROM shipments  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
foreach ($query as $row) { 
	$shipment_id = $row['id'];
	$shipment_status = $row['status'];
	// $shipment_type= $row['delivery_type'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];
			switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-info p-2 m-1">'.$shipment_status.'</span>';
			break;
		
		case 'Arrived':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-primary p-2 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-warning p-2 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-info p-2 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-2 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-danger p-2 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}					

	  $sender_numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						
							$sender_contact1 = $sender_numbers[0];
						if(count($sender_numbers)>1){
							$sender_contact2 = $sender_numbers[1];
						}
	$recipient_numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						
							$recipient_contact1 = $recipient_numbers[0];
							if(count($recipient_numbers)>1){
							$recipient_contact2 = $recipient_numbers[1];
						}


			switch ($parcel_status) {
		case 'Accepted':
			$parcel_status ='<span class="btn btn-circle btn-sm btn-info p-1 m-1">'.$parcel_status.' By Courier</span>';
			break;
		
		case 'Shipped':
			$parcel_status ='<span class="btn btn-circle btn-sm btn-primary p-1 m-1">'.$parcel_status.'</span>';
			break;
		case 'Returned':
			$parcel_status ='<span class="btn btn-circle btn-sm btn-info p-1 m-1">'.$parcel_status.' By Courier</span>';
			break;
		
		case 'Refunded':
			$parcel_status ='<span class="btn btn-circle btn-sm btn-primary p-1 m-1">'.$parcel_status.'</span>';
			break;
		
		default:
			# code...
			break;
	}
	}	


	
 	echo '
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-12">
				<div class="callout callout-info">
					<dl>
						<dt>Tracking Number:</dt>
						<dd> <h4><b>'.$reference_number.'</b></h4></dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="callout callout-info">
					<b class="border-bottom border-primary">Sender Information</b>
					<dl>
						<dt>Name:</dt>
						<dd>'.$sender_name.'</dd>
						<dt>Address:</dt>
						<dd>'.$sender_address.'</dd>
						<dt>Contact:</dt>
						<dd>';

							$numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<div><a class="alert-link" href="tel:'.  $number.' ">
								 '.$number.'
						</a></div>';}
						echo'
						</dd>';if(isset($sender_email) && !empty($sender_email)){
							echo '<dt>Email:</dt>
						<dd>';

							$emails =preg_split("/,/",  preg_replace("/ /", "", $sender_email));
						foreach ($emails as $email) {
							# code...
						echo'<div><a  href="mailto:'.$email.' ">
								 '.$email.'
						</a></div>';}
						echo'
						</dd>';
						}

					echo'</dl>
				</div>
				<div class="callout callout-info">
					<b class="border-bottom border-primary">Recipient Information</b>
					<dl>
						<dt>Name:</dt>
						<dd>'.$recipient_name.'</dd>
						<dt>Address:</dt>
						<dd>'.$recipient_address.'</dd>
						<dt>Contact:</dt>
						<dd>';
							$numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<div ><a class="alert-link" href="tel:'.  $number.' ">
								 '.$number.'
						</a></div>';}
						echo'</dd>';if(isset($recipient_email) && !empty($recipient_email)){
							echo '<dt>Email:</dt>
						<dd>';

							$emails =preg_split("/,/",  preg_replace("/ /", "", $recipient_email));
						foreach ($emails as $email) {
							# code...
						echo'<div><a  href="mailto:'.$email.' ">
								 '.$email.'
						</a></div>';}
						echo'
						</dd>';
						}

					echo'
					</dl>
				</div>
			</div>
			<div class="col-md-6">
				<div class="callout callout-info">
					<b class="border-bottom border-primary">Parcel Details</b>
						<div class="row">
							<div class="col-sm-6">
								<dl>
									<dt>Wight:</dt>
									<dd>'.$weight.'</dd>
									<dt>Height:</dt>
									<dd>'.$height.'</dd>
									<dt>Price:</dt>
									<dd>'.$price.'</dd>
									<dt>Parcel Worth:</dt>
									<dd>'.$parcel_worth.'</dd>
								</dl>	
							</div>
							<div class="col-sm-6">
								<dl>
									<dt>Width:</dt>
									<dd>'.$width.'</dd>
									<dt>length:</dt>
									<dd>'.$length.'</dd>
									<dt>Image:</dt>
									<dd style="width:auto;">'; if (isset($parcel_image)){echo '<img src="../uploads/parcel-pictures/'.$parcel_image.'" alt="image" style="width:100% height:auto;" />';}
									echo'</dd>
									<dt>Type:</dt>
									<dd><span class="badge btn-info p-1 m-1">'.$delivery_type.'</span></dd>
								</dl>	
							</div>
						</div>
						<b class="border-bottom border-primary">Shipment Details</b>
						<div class="row">
							<div class="col-sm-6">
								<dl>
									<dt>Shipment Type:</dt>
									<dd>'.$shipment_type.'</dd>
									
								</dl>	
							</div>
							<div class="col-sm-6">
								<dl>
									<dt>Delivery Class:</dt>
									<dd>'.$delivery_class.'</dd>
									
								</dl>	
							</div>
						</div>
					<dl><div class="row">
		<div class="col-md-12 ">
			<div class="timeline" id="parcel_history" style="overflow:scrollbar">';


 $sql="SELECT * FROM shipment_tracks  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
   if($rowcount>0){
	foreach ($query as $row){
	$id =$row['id'];
	$location = get_branchAddressCode($row['current_location']);
	  $status =$row['status'];
	  $date_created = date('M d, Y H:i A', strtotime($row['date_created'])) ;
	  				switch ($status) {
		case 'In-Transit':
			$status_color ='bg-blue';
			break;

		case 'Arrived':
			$status_color ='bg-cyan';
			break;
		case 'Collected':
			$status_color ='bg-success';
			break;


		case 'Out':
			$status_color ='bg-orange';
			break;
		case 'Ready':
			$status_color ='bg-yellow';
			break;
		case 'Picked':
			$status_color ='bg-success';
			break;


		case 'Delivered':
			$status_color ='bg-blue';

			break;
				case 'Shipped':
			$status_color ='bg-info';
			break;
				case 'Returned':
			$status_color ='bg-orange';
			break;
				case 'Refunded':
			$status_color ='bg-red';
			break;
		case 'Unsuccessful':
			$status_color ='bg-red';
			break;
		default:
			# code...
			break;
	}

				echo	'<div class="iitem">
	    <i class="fas fa-box '.$status_color.'"></i><div>
	    <div style="margin-left:60px;">
	    <div class="timeline-item">
	      <span class="time"><i class="fas fa-truck"></i> <span class="dtime">'.$date_created.'</span></span>
	      </div><div class="timeline-body">'.$status.'</div>
	    </br><span class=""><i class="fa fa-map-marker-alt"></i>'.$location.'</span></div></div>
	  </div>';
		
}
}else{
echo '<center><div class="text-center"> Sorry no Result Found!!!. for the TRACK ID = '.$tracking_number.'</div></center>';
}
	echo '</div>
		</div>
	</div>			</dl>
				</div>
			</div>
		</div>
	</div>
</div>';

}
	}

}else{
			echo '0';
		}

}