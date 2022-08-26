<?php

$output = $parcel_status = $shipment_tatus = "";
// use unicalCSphp\UploadFile;
$data = array();
if(isset($_POST['action'])) {
include __DIR__.'/../../backend/database.php';
include __DIR__.'/../../backend/functions.php';
include __DIR__.'/../../backend/timeAgo.php';
session_start();
if($_POST['action'] == 'load-deliveryoptions'){
// $zip_code = $database->escape_value($_POST['zip-code']);
	if($_POST['deliveryoptions'] == 'Pickup'){
					$output .='<label class="control-label"> Closest Branch
													<span class="required"> * </span>
												</label>';
				

	$sql ="SELECT * FROM branches WHERE status != 'Deleted'  GROUP BY id ORDER BY id DESC";
			$qry =$database->query($sql);
	$row=$database->fetch_array($qry);
foreach ($qry as $key => $row) {
	$branchID =  $row['id'];
$branch[] = $row['branch_code'].'|'.ucfirst($row['building']).', '.ucfirst($row['city']).', '.ucfirst($row['country']);}
$output .='<select class="form-control input-height" id="deliveryaddress" name="closestbranch"><option value="">Select Closest Branch ...</option>';
										$c =count($branch);
														 for ($i=0; $i <$c ; $i++) {
														 	// if($branch[$i] != 0){
														 		$output .= '<option value="'.$branchID.'">'.$branch[$i].'</option>';
														 	// }
														 	
														} 
							$output .= '</select>';
							echo $output;
								
											
}elseif ($_POST['deliveryoptions'] == 'Delivery') {
$deliveryAddress = $_POST['deliveryaddress'];
echo '<label class="control-label"> Delivery Address
						<span class="required"> * </span></label>
<input type="text" class="form-control" readonly="readonly" placeholder=""name="deliveryaddress" value="'.$deliveryAddress.'"/>';
}
}
if($_POST['action'] == 'view-parcel'){

$parcel_id = $database->escape_value($_POST['parcel_id']);											
$sql="SELECT * FROM parcels  WHERE id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
  if($row > 0){

	foreach ($query as $row) { 
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
	 $sql="SELECT * FROM shipments  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
 if($rowcount > 0){
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
	}						}
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
									<dd>'; if (isset($parcel_image)){echo '<img src="../../../uploads/parcel-pictures/'.$parcel_image.'" alt="image" style="width:100px; height:100px;" />';}
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
					<dl>
						<dt>Parcel Accepted by Branch :</dt>
						<dd>'.get_branchAddressCode($from_branch_id).'</dd>
													<dt>'.get_branchAddressCode($to_branch_id).'</dd>
												<dt>Parcel Status:</dt>';
												if(isset($parcel_status) && !empty($parcel_status)){
						echo '<dd>
							'.$parcel_status.'<button type="button" class="btn badge badge-primary bg-gradient-primary p-1 m-2 cpstatus" data-parcel_id="'.$parcel_id.'"><i class="fa fa-edit"></i> Update Status</button>
						</dd>';}
											echo '<dt>Shipment Status:</dt>';
											if(isset($shipment_status) && !empty($shipment_status)){
						echo '<dd>'.$shipment_status.'<button type="button" class="btn badge badge-primary bg-gradient-primary p-1 m-2 csstatus" data-parcel_id="'.$parcel_id.'"><i class="fa fa-edit"></i> Update Status</button>
						</dd>';}else{
							echo '<dd>
							<span class="btn btn-circle btn-sm btn-info p-1 m-1">Not shipped Yet!</span><button type="button" class="btn badge badge-primary bg-gradient-primary p-1 m-1 csstatus"';
       $check = get_shipmentstatus($parcel_id);
        if($check != "true"){echo ' disabled ';} 
        echo ' data-parcel_id="'.$parcel_id.'"><i class="fa fa-edit"></i> Update Status</button>
						</dd>';
						}
					echo '</dl>
				</div>
			</div>
		</div>
	</div>
</div>';
	
}
}
}
if($_POST['action'] == 'updateshipmentStatus'){

$parcel_id = $database->escape_value($_POST['parcel_id']);											
$sql="SELECT * FROM parcels  WHERE id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
  if($row > 0){

	foreach ($query as $row) { 
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
	 $sql="SELECT * FROM shipments  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
 if($rowcount > 0){
foreach ($query as $row) { 
	$shipment_id = $row['id'];
	$shipment_status = $row['status'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];
												
				switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-info p-1 m-1">'.$shipment_status.'</span>';
			break;
		
		case 'Arrived':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-primary p-1 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-1 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-warning p-1 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-info p-1 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-1 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-1 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-danger p-1 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}	}
}

	  	  $sender_numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						
							$sender_contact1 = $sender_numbers[0];
							if(count($sender_numbers) > 1){
							$sender_contact2 = $sender_numbers[1];}else{
								$sender_contact2 = "";
							}
	$recipient_numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						
							$recipient_contact1 = $recipient_numbers[0];
							if(count($recipient_numbers) > 1){
							$recipient_contact2 = $recipient_numbers[1];}else{
								$recipient_contact2 = "";
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

$output .='
<div class="container-fluid">
	<form action="" id="ushipmentstatus" method="post">
		<div class="form-group">
			<label for="">Update Status</label>';
			 $status_arr = array("Collected" =>"Collected","In-Transit" =>"In Transit","Arrived" =>"Arrived ","Out" =>"Out for Delivery","Ready" =>"Ready for Pickup","Delivered" =>"Delivered","Picked" =>"Picked Up","Unsuccessful" =>"Unsuccessful Delivery Attempt");
			$output .='<select name="status" class="custom-select" id="s-status">';
				foreach($status_arr as $k => $v): 
									$output .='<option value="'.$k.'" data-parcel_id"'.$parcel_id.'">'.$v.'</option>';
				 endforeach;
			$output .='</select>
		</div>
	

<div class="text-right p-0 m-2">
        <button type="submit" class="btn btn-primary" id="update-s-submit" ' ;
        // $check = get_shipmentstatus($parcel_id);
        // if(!$check){$output .= ' disabled ';} 
        $output .='data-parcel_id="'.$parcel_id.'">Update</button>
    
</div></form>
</div>';

echo json_encode(array($reference_number,$output));
}
}
}

if($_POST['action'] == 'updateparcelStatus'){
$parcel_id = $database->escape_value($_POST['parcel_id']);											
$sql="SELECT * FROM parcels  WHERE id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
  if($row > 0){

	foreach ($query as $row) { 
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
	 $sql="SELECT * FROM shipments  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
 if($rowcount > 0){
foreach ($query as $row) { 
	$shipment_id = $row['id'];
	$shipment_status = $row['status'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];
												
				switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-info p-1 m-1">'.$shipment_status.'</span>';
			break;
		
		case 'Arrived':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-primary p-1 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-1 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-warning p-1 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-info p-1 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-1 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-success p-1 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="btn btn-circle btn-sm btn-danger p-1 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}	}
}
	  $sender_numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						
							$sender_contact1 = $sender_numbers[0];
							if(count($sender_numbers) > 1){
							$sender_contact2 = $sender_numbers[1];}else{
								$sender_contact2 = "";
							}
	$recipient_numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						
							$recipient_contact1 = $recipient_numbers[0];
							if(count($recipient_numbers) > 1){
							$recipient_contact2 = $recipient_numbers[1];}else{
								$recipient_contact2 = "";
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
											
		
$output .='
<div class="container-fluid">
	<form action="" id="uparcelstatus" method="post">
		<div class="form-group">
			<label for="">Update Status</label>';
			 $status_arr = array("Accepted" =>"Item Accepted by Courier","Shipped" =>"Shipped","Refunded" =>"Refunded","Returned" => "Returned");
			$output .='<select name="status"  class="custom-select" id="p-status">';
				foreach($status_arr as $k => $v): 
									$output .='<option value="'.$k.'" data-parcel_id="'.$parcel_id.'">'.$v.'</option>';
				 endforeach;
			$output .='</select>
		</div>
	
<div class="text-right p-0 m-2">
        <button type="submit" class="btn btn-primary" id="update-p-submit" data-parcel_id="'.$parcel_id.'">Update</button>
</div></form>
</div>';

echo json_encode(array($reference_number,$output));}

}
}
if($_POST['action'] == 'change-parcelStatus'){
$parcel_id = $database->escape_value($_POST['parcel_id']);	
$status = $database->escape_value($_POST['status']);
$date = date('Y-m-d H:i:s');	
										
$sql="UPDATE parcels SET status = '$status'  WHERE id = $parcel_id";
$query = $database->query($sql);
if($query){
	// 	$qry = "SELECT * FROM shipment_tracks WHERE status = '$status' AND parcel_id = '$parcel_id'";
	// $sqlq = $database->query($qry);
	// $res = $database->num_rows($sqlq);
	// if($res == 0){
		 $location = $_SESSION['branchID'];
 $sql="INSERT INTO shipment_tracks (parcel_id,current_location,status) VALUES('$parcel_id','$location',Accepted') ";;
$query = $database->query($sql);
	$s = "SELECT * FROM shipments WHERE parcel_id = '".$parcel_id."'";
$query = $database->query($s);
 // $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
 if($rowcount > 0){
 	if($status == 'Shipped'){
$sql="UPDATE shipments SET status = 'In Transit' ,date_sent ='$date' WHERE parcel_id = '".$parcel_id."'";
$query = $database->query($sql);
}else{
$sql="UPDATE shipments SET status = 'Pending' ,date_sent ='$date' WHERE parcel_id = '".$parcel_id."'";
$query = $database->query($sql);
	
}
}else{
	$sql="INSERT INTO shipments (date_sent,status,parcel_id) VALUES ('$date','In Transit','$parcel_id')";
	$query = $database->query($sql);
}
	echo 1;
}

}

if($_POST['action'] == 'change-shipmentStatus'){
$parcel_id = $database->escape_value($_POST['parcel_id']);	
$status = $database->escape_value($_POST['status']);	
$date = date('Y-m-d H:i:s');											
$sql="UPDATE shipments SET status = '$status' , date_arrived = '$date' WHERE parcel_id = '".$parcel_id."'";
$query = $database->query($sql);
if($query){
	// $qry = "SELECT * FROM shipment_tracks WHERE status = '$status' AND parcel_id = '$parcel_id'";
	// $sqlq = $database->query($qry);
	// $res = $database->num_rows($sqlq);
	// if($res == 0){
	$location = $_SESSION['branchID'];
		 $sql="INSERT INTO shipment_tracks (parcel_id,current_location,status) VALUES('$parcel_id','$location',Accepted') ";
$query = $database->query($sql);
	echo 1;
// }
}
}



if(isset($_POST['update-sitepages'])){
  $destination = '../../uploads/site-settings/';
	$website_name=  $database->escape_value($_POST['website_name']);
	$address = $database->escape_value($_POST['address']);
	$active_hours =  $database->escape_value($_POST['active-hours']);
	$city =  $database->escape_value($_POST['city']);
	$zip_code =  $database->escape_value($_POST['zip-code']);
	$email =  $database->escape_value($_POST['email']);
	$contact =  $database->escape_value($_POST['contact']);
	$country = $database->escape_value(ucfirst($_POST['country']));
	$facebooklink = $database->escape_value(lcfirst($_POST['fblink']));
	$twitterhandle = $database->escape_value(lcfirst($_POST['twitterhandle']));
	$website_link =  $database->escape_value(lcfirst($_POST['sitelink']));
	$instagrampage = $database->escape_value(lcfirst($_POST['instagrampage']));
	$youtube = $database->escape_value(lcfirst($_POST['youtube']));
	$whatsapp = $database->escape_value(lcfirst($_POST['whatsapp']));
  $site_description=  $database->escape_value($_POST['site-description']);
    $homepage_Style=  $database->escape_value($_POST['homepage-style']);

$sql = "UPDATE site_settings SET website_name = '$website_name',active_hours ='$active_hours', website_link ='$website_link', site_description = '$site_description',homepage_style = '$homepage_Style',address = '$address',email = '$email', contact ='$contact',city = '$city',zip_code = '$zip_code', country = '$country', facebooklink = '$facebooklink',twitterhandle = '$twitterhandle',  instagrampage = '$instagrampage',youtube = '$youtube' ,whatsapplink = '$whatsapp' WHERE id = 1 ";
$send = $database->query($sql);
if($send){
	
	echo 1;
       
      }else {
          
           	echo 0;
   }
}

if ($_POST['action'] == 'load-view-gallery') {
	$file_name = array();
	$file_type = array();
 $imageTypes =array(
          'image/jpeg',
          'image/pjpeg',
          'image/gif',
          'image/png',
          'image/webp');
$videoTypes =array(
          'video/3gp',
          'video/mp4',
          'video/avi',
          'video/mpg',
          'video/mpeg',
        'video/webm');


	$perPage = 30;
$page = 1;
if(!empty($_POST["pagenum"])) {
$page = $_POST["pagenum"];
}

$start = ($page-1)*$perPage;
if($start < 0) $start = 0;


	
	$sql="SELECT * FROM gallery ";
      $q = $database->query($sql);
$query =  $sql." LIMIT ".$start." , ".$perPage; 
$result= $database->query($query);
$row = $database->fetch_array($result);
$rowCount = $database->num_rows($result);
 $rows =$database->num_rows($q);
 $pages  = ceil($rows/$perPage);

                            	if($rows > 0){
                            		$output = "<div class='row' >";
                            	foreach ($result as $row) {
              $id = $row['id'];
            $caption = $row['caption'];
            $file_name = $row['file_name'];
            $file_type = $row['file_type'];
            $date_created = $row['date_created'];
                            		if (in_array($file_type,$imageTypes) && $file_name != ""){
                            	
                         $output .= '
                         <div class="col-lg-3 col-md-4 col-sm-6 img-gallery">
                                    <div class="gallery-tem">
                                    <button type="button" class="btn btn-sm btn-danger gallery-delete" data_gallery_id="'.$id.'" data-action="delete-galleryImage"><i class="fa fa-trash"></i></button>
                                        <figure class="post-thumb container" style="width:100%;" >
                                            <a class="gallery-selector" href="../uploads/gallery/'.$file_name.'"><img   class="" src="../uploads/gallery/'.$file_name.'" alt="" style="width:100%; height:100px; vertical-align:middle;">  </a>
                                        </figure>
                                    </div>
                                </div>';
                                }elseif (in_array($file_type,$videoTypes) && $file_name != "") {
                                	  $output .= '<div class="col-lg-2 col-md-3 col-sm-4">
                                    <div class="gallery-item">
                                    	<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" preload="metadata" controls="controls" src="../uploads/gallery/'.$file_name.'"  ></video></div>
                                        
                                    </div>
                                </div>';
                                }	 
                            		}
                            		$output .="</div>";
                            		if($pages >1){
				$output .='<center><button type="button" class=" btn btn-primary view-gallerypager"  style margin-right:20px;" data-pagenum="'.($page-1).'" data-total_page="'.$pages.'">Prev</button>
				<button type="button" class="btn btn-primary view-gallerypager"  style margin-right:20px;" data-pagenum="'.($page+1).'" data-total_page="'.$pages.'">Next</button></center>';
				}
                            	
                               echo $output;}
                            		
                            		

			}



}

?>




