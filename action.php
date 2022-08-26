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
$tracking_number = $database->escape_value($_POST['tracking-number']);
$shipment_type = $database->escape_value($_POST['shipment-type']);
$result = $database->query("SELECT * FROM parcels WHERE reference_number = '$tracking_number'");
	 $row = $database->fetch_array($result);
	  $rowCount = $database->num_rows($result);
	  if($rowCount>0){
	foreach ($result as $row){
	  $parcel_id = $row['id'];
	  $reference_number = $row['reference_number'];
	  // $sender_name = $row['sender_name'];
	  // $sender_address = $row['sender_address'];
	  // $date_created = date('l,d-m-Y',strtotime($row['date_created']));
	  // $sender_contact =$row['sender_contact'];
	  // $recipient_name = $row['recipient_name'];
	  // $sender_email = $row['sender_email'];
	  // $recipient_email = $row['recipient_email'];
	  // $recipient_address = $row['recipient_address'];
	  // $recipient_contact = $row['recipient_contact'];
	  // $parcel_status = $row['status'];
	  // $shipment_type= $row['shipment_type'];
	  // $delivery_type =$row['delivery_type'];
	  // $from_branch_id = $row['from_branch_id'];
	  // $weight =$row['weight'];
	  // $height = $row['height'];
	  // $width = $row['width'];
	  // $length = $row['length'];
	  // $price = $row['price'];
	  // $parcel_worth = $row['parcel_worth'];
	  // $parcel_image = $row['parcel_image'];

	$output = '<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="timeline" id="parcel_history">'; 
 $sql="SELECT * FROM shipment_tracks  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
   if($rowcount>0){
	foreach ($query as $row){
	$id =$row['id'];
	  $height = $row['height'];
	  $status =$row['status'];
	  $date_created = date('M d, Y H:i:A', strtotime($row['date_created'])) ;
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
		case 'Unsuccessful':
			$status_color ='bg-red';
			break;
		default:
			# code...
			break;
	}	

$output .='<div class="iitem">
	    <i class="fas fa-box '.$status_color.'"></i>
	    <div class="timeline-item">
	      <span class="time"><i class="fas fa-clock"></i> <span class="dtime">'.$date_created.'</span></span>
	      <div class="timeline-body">'.$status.'</div>
	    </div>
	  </div>';}
}
	$output.='</div>
		</div>
	</div>';	}
	}else{
			echo '0';
		}
}






	if($_POST['action'] == 'request-submit'){
$name = $database->escape_value(ucfirst($_POST['name']));
$email = $database->escape_value($_POST['email']);
$website = $database->escape_value($_POST['website']);
$heading = $database->escape_value($_POST['heading']);
$message= $database->escape_value($_POST['message']);
// $ your_= $database->escape_value($_POST['your_']);
$sql = "INSERT INTO request (name, email, website,title,content,status) VALUES('$name','$email','$website','$heading','$message','Active')";
$send = $database->query($sql);

if($send){
	echo '1';
	}else{
		echo '0';

	}
}


if($_POST['action'] == 'requestQuote-submit'){
		parse_str($_POST['formData'],$_POST);
	if(isset($_POST['form-type']) && $_POST['form-type'] == 'company'){
			$company = $database->escape_value(ucfirst($_POST['ct_company']));
			$name = $database->escape_value($_POST['ct_name']);
			$address = $database->escape_value($_POST['ct_address']);
			$contact= $database->escape_value($_POST['ct_phone']);
			$email = $database->escape_value(ucfirst($_POST['ct_email']));
			$pickup_street = $database->escape_value($_POST['ct_street']);
			$pickup_city = $database->escape_value(ucfirst($_POST['ct_city']));

			$form_type = $database->escape_value($_POST['form-type']);
			$pickup_country= $database->escape_value(ucfirst($_POST['ct_country']));
			$pickup_zipcode = $database->escape_value($_POST['ct_zip']);
			$pickup_point_access = $database->escape_value($_POST['pick_up_type']);
			$dropoff_street = $database->escape_value($_POST['ct_street2']);
			$dropoff_city= $database->escape_value($_POST['ct_city2']);
			$dropoff_country = $database->escape_value(ucfirst($_POST['ct_country2']));
			$dropoff_zipcode = $database->escape_value($_POST['ct_zip2']);
			$dropoff_point_access = $database->escape_value($_POST['pick_up_type2']);
			$height= $database->escape_value($_POST['ct_height']);
			$width = $database->escape_value($_POST['ct_width']);
			$weight = $database->escape_value($_POST['ct_weight']);
			$length = $database->escape_value($_POST['ct_length']);
			$quantity = $database->escape_value($_POST['ct_qty']);
			$stackable_status= $database->escape_value($_POST['stackable']);

			// $ your_= $database->escape_value($_POST['your_']);
			if(!empty($name) && !empty($address) && !empty($contact) && !empty($email)  && !empty($pickup_city) && !empty($pickup_country) && !empty($pickup_zipcode)&& !empty($pickup_point_access) && !empty($dropoff_street) && !empty($dropoff_city) && !empty($dropoff_country)  &&!empty($dropoff_zipcode) && !empty($dropoff_point_access) && !empty($weight) && !empty($height) && !empty($length)  &&!empty($width) ){
			$sql = "INSERT INTO quotes (company,name,address,contact,email,pickup_street,pickup_city,pickup_country,pickup_zipcode,pickup_point_access,dropoff_street,dropoff_city,dropoff_country,dropoff_zipcode,dropoff_point_access,weight,height,width,length,quantity,stackable_status,form_type) VALUES('$company','$name','$address','$contact','$email','$pickup_street','$pickup_city','$pickup_country','$pickup_zipcode','$pickup_point_access','$dropoff_street','$dropoff_city','$dropoff_country','$dropoff_zipcode','$dropoff_point_access','$weight','$height','$width','$length','$quantity','$stackable_status','$form_type')";
			$send = $database->query($sql);

			if($send){
				echo '1';
				}
			}else{
				echo '0';
			}
}elseif(isset($_POST['form-type']) && $_POST['form-type'] == 'personal'){

			$delivery_type = $database->escape_value(ucfirst($_POST['delivery-type']));
			$name = $database->escape_value($_POST['ct_name']);
			$shipment_type = $database->escape_value($_POST['freight-type']);
			$contact= $database->escape_value($_POST['ct_phone']);
			$email = $database->escape_value(ucfirst($_POST['ct_email']));
			$pickup_street = $database->escape_value($_POST['ct_street']);
			$pickup_city = $database->escape_value(ucfirst($_POST['ct_city']));
			$pickup_country= $database->escape_value(ucfirst($_POST['ct_country']));
			$form_type = $database->escape_value($_POST['form-type']);
			$pickup_zipcode = $database->escape_value($_POST['ct_zip']);
			// $pickup_point_access = $database->escape_value($_POST['pick_up_type']);
			$dropoff_street = $database->escape_value($_POST['ct_street2']);
			$dropoff_city= $database->escape_value($_POST['ct_city2']);
			$dropoff_country = $database->escape_value(ucfirst($_POST['ct_country2']));
			$dropoff_zipcode = $database->escape_value($_POST['ct_zip2']);
			// $dropoff_point_access = $database->escape_value($_POST['pick_up_type2']);
			$height= $database->escape_value($_POST['ct_height']);
			$width = $database->escape_value($_POST['ct_width']);
			$weight = $database->escape_value($_POST['ct_weight']);
			$length = $database->escape_value($_POST['ct_length']);
			$delivery_class = $database->escape_value($_POST['delivery-class']);
			if(!empty($name)  && !empty($contact) &&!empty($pickup_city)  && !empty($pickup_country) && !empty($pickup_zipcode) && !empty($dropoff_street) && !empty($dropoff_city) && !empty($dropoff_country)  &&!empty($dropoff_zipcode) && !empty($delivery_type)  &&!empty($shipment_type) && !empty($delivery_class) && !empty($weight) && !empty($height) && !empty($length)  &&!empty($width) ){
		$sql = "INSERT INTO quotes (name,contact,email,pickup_street,pickup_city,pickup_country,pickup_zipcode,dropoff_street,dropoff_city,dropoff_country,dropoff_zipcode,shipment_type,delivery_class,delivery_type,weight,height,width,length,form_type) VALUES('$name','$contact','$email','$pickup_street','$pickup_city','$pickup_country','$pickup_zipcode','$dropoff_street','$dropoff_city','$dropoff_country','$dropoff_zipcode','$shipment_type','$delivery_class','$delivery_type','$weight','$height','$width','$length','$form_type')";
		$send = $database->query($sql);

			if($send){
				echo '1';
				}
			}else{
				echo '0';
			}

			}
		}

}



?>