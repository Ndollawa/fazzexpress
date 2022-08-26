<?php
include __DIR__.'/../../backend/database.php';
include __DIR__.'/../../backend/functions.php';
include __DIR__.'/../../backend/timeAgo.php';
session_start();
ob_start();
$count = 0;
// use unicalCSphp\UploadFile;
$output = "";
$shipment_tatus ="";
$parcel_status = "";
if(isset($_POST['action'])) {

		if($_POST['action'] == 'delete-branch'){
		$branch_id = $_POST['id'];
		$sql =" DELETE FROM branches WHERE id = $branch_id ";
 		$send = $database->query($sql);
			}
	if($_POST['action'] == 'delete-parcel'){

		$parcel_id = $_POST['id'];
		$sql =" DELETE FROM parcels WHERE id = $parcel_id";
 		$send = $database->query($sql);


		}
	if($_POST['action'] == 'delete-user'){

		$user_id = $_POST['id'];
		$sql =" DELETE FROM users WHERE id = $user_id ";
 		$send = $database->query($sql);

		}
	if($_POST['action'] == 'delete-quote'){

		 $quote_id = $_POST['id'];
		 $sql =" DELETE FROM quotes WHERE id = $quote_id ";
 		$send = $database->query($sql);

		}
if($_POST['action'] == 'delete-gallerImage'){

		$gallery_id = $_POST['id'];
		$sql =" DELETE FROM gallery WHERE id = $gallery_id ";
 		$send = $database->query($sql);

		}


	if($_POST['action'] == 'get_allBranchList'){

			$sql=" SELECT * FROM branches  WHERE status != 'deleted' ORDER BY id DESC";

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

									   $count++;
		switch ($status) {
		case 'active':
			$status ='<span class="btn btn-sm btn-success">'.$status.'</span>';
			break;

		case 'deactivated':
			$status ='<span class="btn btn-sm btn-warning">'.$status.'</span>';
			break;
		case 'deleted':
			$status ='<span class="btn btn-sm btn-danger">'.$status.'</span>';
			break;
		default:
			# code...
			break;
	}


				echo'
				<tr class="even pointer">
				<td class="a-center"><input type="checkbox" class="check" name="selectid[]" value="'.$branchID.'"></td>

							<td>'.$count.'</td>
							<td>'.$branch.'</td>
							<td class="center">'.$building.'</td>
							<td class="center">'.$city.' / '.$state.' / '.$zip_code.'</td>
							<td class="center">'.$address.'</td>
							<td class="center">'.$status.'</td>
							<td class="center">'.$country.'</td>
							<td>';
							$numbers =preg_split("/,/",  preg_replace("/ /", "", $contact));
							foreach ($numbers as $number) {
								# code...
							echo'<a href="tel:'.$number.' ">
									 '.$number.'
							</a>';}
							echo '</td>

							<td style="display:inline-flex;">
								<a href="edit_branch.php?edit='.$branchID.'"
									class="btn btn-primary btn-sm">
									<i class="fa fa-pencil"></i>
								</a>
								<button type="button" class="btn btn-danger btn-sm action-button delete-branch " title="Delete" data-action="delete-branch" data-branch_id="'.$branchID.'"><i class="fa fa-trash-o "></i>
							</button>
							</td>
						</tr>';
															 }


				}


	if($_POST['action'] == 'get_allUserList'){
			$sql=" SELECT * FROM users  WHERE status != 'deleted' ORDER BY id DESC";

			 $result= $database->query($sql);
			 $row = $database->fetch_array($result);
				foreach ($result as $row) {
					$userID =  $row['id'];
					$firstname = $row['first_name'];
					$middlename = $row['middle_name'];
					$lastname = $row['last_name'];
					$branch = $row['branch'];
					$country= $row['country'];
					$address = $row['address'];
					$role = $row['user_role'];
					$contact = $row['contact_no'];
					$email = $row['email'];
					$account_type = $row['account_type'];
					$status = $row['status'];
									   $count++;
		switch ($status) {
		case 'active':
			$status ='<span class="btn btn-sm btn-success">'.ucfirst($status).'</span>';
			break;

		case 'deactivated':
			$status ='<span class="btn btn-sm btn-warning">'.ucfirst($status).'</span>';
			break;
		case 'banned':
			$status ='<span class="btn btn-sm btn-danger">'.ucfirst($status).'</span>';
			break;
		default:
			# code...
			break;
	}


				echo'
				<tr class="even pointer">
						<td class="a-center"><input type="checkbox" class="checkboxes" name="selectid[]" value="'.$userID.'"></td>

							<td>'.$count.'</td>
							<td>'.$firstname." ".$middlename." ".$lastname.'</td>
							<td>';
							$numbers =preg_split("/,/",  preg_replace("/ /", "", $contact));
							foreach ($numbers as $number) {
								# code...
							echo'<a href="tel:'.$number.' ">
									 '.$number.'
							</a>';}
								echo'</td>
				<td>';
				 $emails =preg_split("/,/",  preg_replace("/ /", "", $email));
				foreach ($emails as $email) {
					# code...
				echo'<a href="mailto:'.$email.'">
						'.$email.'</a>';}
						echo '</td>
							<td class="center">'.$address.'</td>
							<td class="center">'.$status.'</td>
							<td class="center">'.$role.'</td>
							<td class="center">'.get_branchCode($branch).'</td>
							<td class="center">'.$country.'</td>
							<td style="display:inline-flex;">
								<a href="edit_user.php?edit='.$userID.'"
									class="btn btn-primary btn-sm">
									<i class="fa fa-pencil"></i>
								</a>
								<button type="button" class="btn btn-danger btn-sm action-button delete-user " title="Delete" data-action="delete-user" data-user_id="'.$userID.'"><i class="fa fa-trash-o "></i>
							</button>
							</td>
						</tr>';
															 }

				}


				if($_POST['action'] == 'get_allServiceList'){
			$sql=" SELECT * FROM service";

			 $result= $database->query($sql);
			 $row = $database->fetch_array($result);
				foreach ($result as $row) {
		$id = $row['id'];
	  $title = $row['title'];
	  $ser_description = $row['description'];
	  $highlight = $row['highlights'];
	  $date_created = date('l,d-m-Y',strtotime($row['date_created']));
	  $page_content =$row['page_content'];
	  $cimage = $row['cover_image'];
	  $service_video = $row['service_video'];
					$status = $row['status'];
									   $count++;
		switch ($status) {
		case 'active':
			$status ='<span class="btn btn-sm btn-success">'.ucfirst($status).'</span>';
			break;

		case 'deactivated':
			$status ='<span class="btn btn-sm btn-warning">'.ucfirst($status).'</span>';
			break;
		case 'banned':
			$status ='<span class="btn btn-sm btn-danger">'.ucfirst($status).'</span>';
			break;
		default:
			# code...
			break;
	}


				echo'
				<tr class="even pointer">
						<td class="a-center"><input type="checkbox" class="checkboxes" name="selectid[]" value="'.$id.'"></td>

							<td>'.$count.'</td>
							<td>'.$title.'</td>
							<td class="center">'.$ser_description.'</td>
							<td class="center"><img src="../uploads/service/'.$cimage.'" style ="width:100%; height:auto;" /></td>
							
							<td style="display:inline-flex;">
								<a href="edit_service.php?edit='.$id.'"
									class="btn btn-primary btn-sm">
									<i class="fa fa-pencil"></i>
								</a>
								<button type="button" class="btn btn-danger btn-sm action-button delete-service " title="Delete" data-action="delete-service" data-service_id="'.$id.'"><i class="fa fa-trash-o "></i>
							</button>
							</td>
						</tr>';
															 }

				}
// LEFT JOIN shipments on parcels.id = shipments.parcel_id
	if($_POST['action'] == 'get_allParcelList'){

		$sql="SELECT * FROM parcels ";
		if($_SESSION['user_account_type'] != 'Admin'){
			$sql.="WHERE from_branch_id = '".$_SESSION['branchID']."' ";
		}

		$sql .=" ORDER BY id DESC";
				 $result= $database->query ($sql);
				 $row = $database->fetch_array($result);
				 // print_r($row);
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
	  $shipment_type= $row['shipment_type'];
	  $delivery_type =$row['delivery_type'];
	  $from_branch_id = $row['from_branch_id'];
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
 $shipment_status = "";
 if($rowcount > 0){
foreach ($query as $row) {
	$shipment_id = $row['id'];
	$shipment_status = $row['status'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];

	}}
			switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$shipment_status.'</span>';
			break;
		case '':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">Pending</span>';
			break;

		case 'Arrived':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="badge badge-pill btn-warning p-2 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="badge badge-pill btn-info p-2 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="badge badge-pill btn-danger p-2 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
						$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">Pending</span>';

			break;
	}


			switch ($parcel_status) {
		case 'Accepted':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Shipped':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;
		case 'Returned':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Refunded':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;

		default:
			# code...
			break;
	}

		$count++;
			echo '
<tr class="even pointer">
<td class="a-center">
<input type="checkbox" class="checkboxes" name="selectid[]" value="'.$parcel_id.'">
</td>
<td>'.$count.'</td>
						<td class="center">'.$reference_number.'</td>

						<td class="center">'.get_branchCode($from_branch_id).'</td>
						<td>'.$sender_name.'</td>
						<td class="center">';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td class="center">'.$recipient_name.'</td>
						<td>';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td>'.$parcel_status.'</td>
                        <td>'.$shipment_status.'</td>

						<td style="display:inline-flex;">

							<a href="edit_parcel.php?edit='.$parcel_id  .'"
								class="btn btn-primary btn-sm">
								<i class="fa fa-pencil"></i>
							</a>
							<button type="button" class="btn btn-success btn-sm action-button view-parcel" title="View" data-action="view-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-eye "></i>
						</button>
							<button type="button" class="btn btn-danger btn-sm action-button delete-parcel" title="Delete" data-action="delete-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-trash-o "></i>
						</button>
						</td>
</tr>';

			}

	// }

}







if($_POST['action'] == 'get_allShippedParcelList'){
		$sql="SELECT * FROM parcels  WHERE status = 'Shipped'";
		if($_SESSION['user_account_type'] != 'Admin'){
			$sql.="AND from_branch_id  = '".$_SESSION['branchID']."' ";
		}
		$sql .=" ORDER BY id DESC";
				 $result= $database->query($sql);
				 $row = $database->fetch_array($result);
					foreach ($result as $row) {
						$count++;
						// print_r($row);
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
	  $shipment_type= $row['shipment_type'];
	  $delivery_type =$row['delivery_type'];
	  $from_branch_id = $row['from_branch_id'];
	  $weight =$row['weight'];
	  $height = $row['height'];
	  $width = $row['width'];
	  $length = $row['length'];
	  $price = $row['price'];
	  $parcel_worth = $row['parcel_worth'];
	  $parcel_image = $row['parcel_image'];
	  $shipment_status = "";
 $sql="SELECT * FROM shipments  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);

foreach ($query as $row) {
	$shipment_id = $row['id'];
	$shipment_status = $row['status'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];
			switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$shipment_status.'</span>';
			break;
		case '':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">Pending</span>';
			break;
		case 'Arrived':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="badge badge-pill btn-warning p-2 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="badge badge-pill btn-info p-2 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="badge badge-pill btn-danger p-2 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}



			switch ($parcel_status) {
		case 'Accepted':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Shipped':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;
		case 'Returned':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Refunded':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;

		default:
			# code...
			break;
	}


			echo '
<tr class="even pointer">
<td class="a-center">
<input type="checkbox" class="checkboxes" name="selectid[]" value="'.$parcel_id.'">
</td>
<td>'.$count.'</td>
						<td class="center">'.$reference_number.'</td>

						<td class="center">'.get_branchCode($from_branch_id).'</td>
						<td>'.$sender_name.'</td>
						<td class="center">';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td class="center">'.$recipient_name.'</td>
						<td>';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td>'.$parcel_status.'</td>
						<td style="display:inline-flex;">

							<a href="edit_parcel.php?edit='.$parcel_id  .'"
								class="btn btn-primary btn-sm">
								<i class="fa fa-pencil"></i>
							</a>
							<button type="button" class="btn btn-success btn-sm action-button view-parcel" title="View" data-action="view-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-eye "></i>
						</button>
							<button type="button" class="btn btn-danger btn-sm action-button delete-parcel" title="Delete" data-action="delete-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-trash-o "></i>
						</button>
						</td>
</tr>';

			}

				
			}
		}

if($_POST['action'] == 'get_allAcceptedParcelList'){
	$res = "";
		$sql="SELECT * FROM parcels  WHERE status = 'Accepted' ";
		if($_SESSION['user_account_type'] != 'Admin'){
			$sql.="AND from_branch_id  = '".$_SESSION['branchID']."' ";
		}
		$sql .=" ORDER BY id DESC";
				 $result= $database->query ($sql);
				 $row = $database->fetch_array($result);
					foreach ($result as $row) {
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
	  $shipment_type= $row['shipment_type'];
	  $delivery_type =$row['delivery_type'];
	  $from_branch_id = $row['from_branch_id'];
	  $weight =$row['weight'];
	  $height = $row['height'];
	  $width = $row['width'];
	  $length = $row['length'];
	  $price = $row['price'];
	  $parcel_worth = $row['parcel_worth'];
	  $parcel_image = $row['parcel_image'];
	  $shipment_status = "";
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
	}	}	switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$shipment_status.'</span>';
			break;
		case '':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">Pending</span>';
			break;
		case 'Arrived':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="badge badge-pill btn-warning p-2 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="badge badge-pill btn-info p-2 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="badge badge-pill btn-danger p-2 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}

			$res .= '
			<tr class="even pointer">
<td class="a-center">
<input type="checkbox" class="checkboxes" name="selectid[]" value="'.$parcel_id.'">
</td>
<td>'.$count.'</td>
						<td class="center">'.$reference_number.'</td>

						<td class="center">'.get_branchCode($from_branch_id).'</td>
						<td>'.$sender_name.'</td>
						<td class="center">';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						foreach ($numbers as $number) {
							# code...
						$res .='<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						$res .='</td>
						<td class="center">'.$recipient_name.'</td>
						<td>';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						foreach ($numbers as $number) {
							# code...
						$res .='<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						$res .='</td>
						<td>'.$parcel_status.'</td>
						<td style="display:inline-flex;">

							<a href="edit_parcel.php?edit='.$parcel_id  .'"
								class="btn btn-primary btn-sm">
								<i class="fa fa-pencil"></i>
							</a>
							<button type="button" class="btn btn-success btn-sm action-button view-parcel" title="View" data-action="view-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-eye "></i>
						</button>
							<button type="button" class="btn btn-danger btn-sm action-button delete-parcel" title="Delete" data-action="delete-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-trash-o "></i>
						</button>
						</td>
</tr>';
$count++;
			}

		
		echo $res;
	}



if($_POST['action'] == 'load-shipment-report'){
		$sql = "";
		$fromDate = $database->escape_value(date('Y-m-d', strtotime($_POST['fromDate'])));
	$toDate = $database->escape_value(date('Y-m-d', strtotime($_POST['toDate'])));
	$status = $database->escape_value($_POST['status']);
	$parcel_status_array = array('all',"Accepted" ,"Shipped" ,"Refunded" ,"Returned");
	$shipment_status_array = array("Collected","In-Transit","Arrived","Out","Ready","Delivered" ,"Picked" ,"Unsuccessful");

	// if($status != "" && in_array($status,$parcel_status_array)){
		$sql="SELECT * FROM parcels WHERE date(date_created) BETWEEN '$fromDate' AND '$toDate'
		 ".($status != 'all' && in_array($status, $parcel_status_array)? " AND status = '$status' " : "")." ORDER BY unix_timestamp(date_created) ASC";

		// }elseif($status != 'all' && in_array($status, $shipment_status_array)){
		// 	$sql = "SELECT * FROM shipments JOIN parcels ON parcels.id = shipments.parcel_id WHERE date(date_created) BETWEEN '$fromDate' AND '$toDate'
		//  ".($status != 'all' && in_array($status, $shipment_status_array)? " AND  parcels.status = '$status' " : "")." ORDER BY unix_timestamp(date_created) ASC";
		// }
				 $result= $database->query ($sql);
				 $row = $database->fetch_array($result);

	foreach ($result as $row){
		$count++;
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
	  $shipment_type= $row['shipment_type'];
	  $delivery_type =$row['delivery_type'];
	  $from_branch_id = $row['from_branch_id'];
	  $weight =$row['weight'];
	  $height = $row['height'];
	  $width = $row['width'];
	  $length = $row['length'];
	  $date_created = date("M d, Y",strtotime($row['date_created']));
	  $price = number_format($row['price'],2);
	  $parcel_worth = $row['parcel_worth'];
	  $parcel_image = $row['parcel_image'];
 $sql="SELECT * FROM shipments  WHERE parcel_id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
 $shipment_status = "";
 if($rowcount > 0){
foreach ($query as $row) {
	$shipment_id = $row['id'];
	$shipment_status = $row['status'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];

	}}
			switch ($shipment_status){
		case 'In-Transit':
			$shipment_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$shipment_status.'</span>';
			break;
		case '':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">Pending</span>';
			break;
		case 'Arrived':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="badge badge-pill btn-warning p-2 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="badge badge-pill btn-info p-2 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'  Up</span>';
			break;


		case 'Delivered':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="badge badge-pill btn-danger p-2 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}

			switch ($parcel_status) {
		case 'Accepted':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Shipped':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;
		case 'Returned':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Refunded':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;

		default:
			# code...
			break;
	}


			echo '
<tr class="even pointer">
<td class="a-center">
<input type="checkbox" class="checkboxes" name="selectid[]" value="'.$parcel_id.'">
</td>
<td>'.$count.'</td>
						<td class="center">'.$reference_number.'</td>

						<td class="center">'.get_branchCode($from_branch_id).'</td>
						<td class="center">'.$recipient_name.'</td>
						<td>';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td>'.$parcel_status.'</td>
						<td class="center">'.$shipment_status.'
						</td>

</tr>';

			}

		

	}



if($_POST['action'] == 'get_allCollectedParcelList'){
	$status = 'Collected';
	shipmentList($status);

}


if($_POST['action'] == 'get_allArrivedParcelList'){

	$status = 'Arrived';
	shipmentList($status);
				}

if($_POST['action'] == 'get_allDeliveredParcelList'){

	$status = 'Delivered';
	shipmentList($status);
				}



if($_POST['action'] == 'get_allInTransitParcelList'){
	$status = 'In-Transit';
	shipmentList($status);
				}

if($_POST['action'] == 'get_allUnsuccessfulParcelList'){
	$status = 'Unsuccessful';
	shipmentList($status);
				}
if($_POST['action'] == 'get_allPickedupParcelList'){
	$status = 'Picked';
	shipmentList($status);
				}
if($_POST['action'] == 'get_allInReadyParcelList'){
	$status = 'Ready';
	shipmentList($status);
				}
if($_POST['action'] == 'get_allInOutParcelList'){
	$status = 'Out';
	shipmentList($status);
				}



if($_POST['action'] == 'branchBulkOperation'){
// $checkboxes =array();
	if(!empty($_POST['selectid'])){
$checkboxes = json_decode(stripcslashes($_POST['selectid']));
	foreach ($checkboxes as $checkboxValue) {
$bulk_options = $_POST['bulk_options'];
$branch_id=$checkboxValue;

 switch ($bulk_options) {
 	case 'Active':
 		$sql =" UPDATE branches SET status = '{$bulk_options}' WHERE id = $branch_id ";
 $send = $database->query($sql);

 	 	break;
 	case 'Delete':
 	$sql =" DELETE FROM branches  WHERE id = $branch_id ";
 		$send = $database->query($sql);

 		break;
 	case 'Suspended':
 		$sql =" UPDATE branches SET status  = '{$bulk_options}' WHERE id = $branch_id ";
 		$send = $database->query($sql);

 		break;
//
 	default:
 		# code...
 		break;
 }

		}
	}
}


if($_POST['action'] == 'usersBulkOperation'){
// $checkboxes =array();
	if(!empty($_POST['selectid'])){
$checkboxes = json_decode(stripcslashes($_POST['selectid']));
	foreach ($checkboxes as $checkboxValue) {
$bulk_options = $_POST['bulk_options'];
$user_id=$checkboxValue;

 switch ($bulk_options) {
 	case 'Active':
 		$sql =" UPDATE users SET status = '{$bulk_options}' WHERE id = $user_id ";
 $send = $database->query($sql);
// if($send){
// 	echo 'work';
// }
 		break;
 	case 'On Leave':
 		$sql =" UPDATE users SET status  = '{$bulk_options}' WHERE id = $user_id ";
 		$send = $database->query($sql);
 	 	break;

 	case 'Banned':
 		$sql =" UPDATE users SET status = '{$bulk_options}' WHERE id = $user_id ";
 		$send = $database->query($sql);


 	 	break;
 	case 'Delete':
 	$sql =" DELETE FROM users  WHERE id = $user_id ";
 		$send = $database->query($sql);


 		break;
 	case 'Suspended':
 		$sql =" UPDATE users SET status  = '{$bulk_options}' WHERE id = $user_id ";
 		$send = $database->query($sql);

 		break;
//
 	default:
 		# code...
 		break;
 }

		}
   }
}


if($_POST['action'] == 'parcelBulkOperation'){
	if(!empty($_POST['selectid'])){
$checkboxes = json_decode(stripcslashes($_POST['selectid']));
	foreach ($checkboxes as $checkboxValue) {
$bulk_options = $_POST['bulk_options'];
$parcel_id=$checkboxValue;

 switch ($bulk_options) {
 	case 'Accepted':
 		$sql =" UPDATE parcels SET status = '{$bulk_options}' WHERE id = $parcel_id ";
 $send = $database->query($sql);
 		break;

 	case 'Shipped':
 		$sql =" UPDATE parcels SET status  = '{$bulk_options}' WHERE id = $parcel_id ";
 		$send = $database->query($sql);
 	 	break;

 	case 'Returned':
 		$sql =" UPDATE parcels SET status  = '{$bulk_options}' WHERE id = $parcel_id ";
 		$send = $database->query($sql);


 	 	break;
 	case 'Refunded':
       		$sql =" UPDATE parcels SET status  = '{$bulk_options}' WHERE id = $parcel_id ";
 		$send = $database->query($sql);
 		break;


 	default:
 		# code...
 		break;
 }

			}
		}
}

if($_POST['action'] == 'shipmentBulkOperation'){
	if(!empty($_POST['selectid'])){
$checkboxes = json_decode(stripcslashes($_POST['selectid']));
	foreach ($checkboxes as $checkboxValue) {
$bulk_options = $_POST['bulk_options'];
$parcel_id=$checkboxValue;

 switch ($bulk_options) {
 	case 'In-Transit':
 		$sql =" UPDATE shipments SET status = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 $send = $database->query($sql);
 		break;

 	case 'Out':
 		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);
 	 	break;

 	case 'Ready':
 		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);


 	 	break;
 	case 'Unsuccessful':
       		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);
 		break;

 	case 'Picked':
 		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);
 	 	break;

 	case 'Collected':
 		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);
 		break;
case 'Arrived':
 		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);
 	 	break;

 	case 'Delivered':
       		$sql =" UPDATE shipments SET status  = '{$bulk_options}' WHERE parcel_id = $parcel_id ";
 		$send = $database->query($sql);
 		break;
 	default:
 		# code...
 		break;
 }

			}
		}
}



if($_POST['action'] == "load-faqForm"){
	echo '<form   id="faq-form" method="post" style="margin-top:40px;">
				<div class="form-group inline-flex" style="width:100%;">

													<span class="input-height text-center " style="background:#ccc; width:150px;padding:10px 20px; ">Question: <i class="fa fa-question-circle"></i></span><input type="text" name="faq-question" id="faq-question"
														class="form-control input-height" style="width:100%;"/>
											</div>
											<div class="heading bold">Answer</div>
								<div class="editor" id ="faq-answer">

								</div>

					<div class="form-actions">
							<div class="row">
								<div class="offset-md-3 col-md-9">
									<button type="submit" id="faq-send" name="faq-send"
										class="btn btn-success m-r-20">Add FAQ</button>
									<button type="button" onClick="window.history();" class="btn btn-default cancel">Cancel</button>
								</div>
							</div>
					</div>

			</form>';
}

if($_POST['action'] == "load-faqUpdateForm"){
	$faq_id =$_POST['faq_id'];
	$count = 0;
$sql=" SELECT * FROM faq WHERE status != 'Deleted' AND id = $faq_id ORDER BY id";
												 $result= $db->query ($sql);
												 $row = mysqli_fetch_array($result);
												 $count = 1;
													foreach ($result as $row) {
									  $id = $row['id'];
									  $question = $row['question'];
									  $answer = $row['answer'];
									  // $author = $row['user_id'];
									  $date =$row['date_created'];
									   $status = $row['status'];}
	echo '<form   id="faq-updateform" method="post" style="margin-top:40px;">
				<div class="form-group inline-flex" style="width:100%;">

													<span class="input-height text-center " style="background:#ccc; width:150px;padding:10px 20px; ">Question: <i class="fa fa-question-circle"></i></span><input type="text" name="faq-question" id="faq-question"
														class="form-control input-height" value="'.$question.'" style="width:100%;"/>
											</div>
											<div class="heading bold">Answer</div>
								<div class="editor" id ="faq-answer">
									'.$answer.'
								</div>

					<div class="form-actions">
							<div class="row">
								<div class="offset-md-3 col-md-9">
									<button type="submit" id="faq-update" name="faq-update" data-faq_id="'.$id.'"
										class="btn btn-success m-r-20">Update FAQ</button>
									<button type="button" onClick="window.history();" class="btn btn-default cancel">Cancel</button>
								</div>
							</div>
					</div>

			</form>';
}

if($_POST['action'] === 'add-Faq' ){

$question= $database->escape_value($_POST['question']);
if(isset($_POST['answer'])){
$answer = $database->escape_value($_POST['answer']);}else{
	$answer = "";
}

$query = "INSERT INTO faq (question,answer,date_created) VALUES ('$question','$answer','".date('Y-m-d H:i:s')."')	";
	$send =$database->query($query);

}

if($_POST['action'] == "update-Faq"){
$question = $database->escape_value($_POST['question']);
$answer = $database->escape_value($_POST['answer']);
$user_id = $_SESSION['user_id'];
	$faq_id =$_POST['faq_id'];
	$date = date('Y-m-d H:i:s');
	$q = "UPDATE faq SET question ='$question',answer ='$answer' WHERE id = '{$faq_id}' ";
	$send =$database->query($q);
}

if($_POST['action'] === 'load-faqTableData' ){


$sql=" SELECT * FROM faq WHERE status != 'Deleted' ORDER BY id";
												 $result= $db->query ($sql);
												 $row = mysqli_fetch_array($result);
												 $count = 1;
													foreach ($result as $row) {
									  $id = $row['id'];
									  $question = $row['question'];
									  $answer = $row['answer'];
									  // $author = $row['user_id'];
									  $date =date('d-m-Y', strtotime($row['date_created']));
									   $status = $row['status'];
		switch ($status) {
		case 'Active':
			$status ='<span class="btn btn-xs btn-success">'.$status.'</span>';
			break;

		case 'In-active':
			$status ='<span class="btn btn-xs btn-warning">'.$status.'</span>';
			break;
		case 'Deleted':
			$status ='<span class="btn btn-xs btn-danger">'.$status.'</span>';
			break;

		default:
			# code...
			break;
	}




		echo	'<tr class="even">
				<td><input type="checkbox" class="checkboxes" name="selectid[]" value="'.$id.'"></td>
				<td>'.$count.'</td>
				<td>'.$question.'</td>
				<td><div style="width:450px; word-wrap:word-break;">'.substr($answer, 0,150) .'...</div></td>
				<td>'.$date.'</td>
				<td>'.$status.'</td>

				<td>
				<a href="javascript:;"
					data-faq_id="'.$id.'" data-action="load-faqUpdateForm" class="btn edit-faq btn-primary btn-xs">
					<i class="fa fa-pencil"></i>
				</a>
				<button  class="btn btn-danger btn-xs action-button delete-faq " title="Delete" data-action="delete-faq" data-id="'.$id.'"><i class="fa fa-trash-o "></i>
				</button>
				</td>
			</tr>';
									$count++;
												}
}

    if($_POST['action']=== 'delete-faq'){
    $id= $_POST['id'];
      $sql=$sql =" DELETE FROM faq  WHERE id = $id ";
    $send = $database->query($sql);
}




if($_POST['action'] == 'faqBulkOperation'){
// $checkboxes =array();
	if(!empty($_POST['selectid'])){
$checkboxes = json_decode(stripcslashes($_POST['selectid']));
	foreach ($checkboxes as $checkboxValue) {
$bulk_options = $_POST['bulk_options'];
$id=$checkboxValue;

switch ($bulk_options) {
 	case 'Active':
 		$sql =" UPDATE faq SET status = '{$bulk_options}' WHERE id = $id ";
 $send = $database->query($sql);
 		break;
 	case 'In-active':
 		$sql =" UPDATE faq SET status  = '{$bulk_options}' WHERE id = $id ";
 		$send = $database->query($sql);
 	 	break;
 	// case 'Transfer':
 	// 	$sql =" UPDATE faq SET STATUS  = '{$bulk_options}' WHERE ID = $id ";
 	// 	$send = $database->query($sql);
 	//

 	//  	break;
 	case 'Deleted':
 		$sql =" DELETE FROM faq  WHERE id = $id ";
 		$send = $database->query($sql);


 		break;

//  		case 'Subscriber':


//  		break;

 	default:
 		# code...
 		break;
 }
		}

		}
	}

}

function shipmentList($status)
{
	  global $database;
	  $count = 0;

	  if(!empty($status)){
		$sql="SELECT * FROM shipments WHERE status = '$status'";
		// if($_SESSION['user_account_type'] != 'Admin'){
		// 	$sql.="AND branch_id = '".$_SESSION['branchID']."' ";
		// }
		$sql .=" ORDER BY id DESC";
				 $result= $database->query ($sql);
				 $row = $database->fetch_array($result);
					foreach ($result as $row) {
						$count++;
	 $shipment_id = $row['id'];
	  $parcel_id = $row['parcel_id'];
	$shipment_status = $row['status'];
	$date_sent = $row['date_sent'];
	$date_arrived = $row['date_arrived'];
	$shipment_report = $row['shipment_report'];
 $sql="SELECT * FROM parcels  WHERE id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 $rowcount = $database->num_rows($query);
 if($rowcount > 0){
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
	  $shipment_type= $row['shipment_type'];
	  $delivery_type =$row['delivery_type'];
	  $from_branch_id = $row['from_branch_id'];
	  $weight =$row['weight'];
	  $height = $row['height'];
	  $width = $row['width'];
	  $length = $row['length'];
	  $price = $row['price'];
	  $parcel_worth = $row['parcel_worth'];
	  $parcel_image = $row['parcel_image'];

	}
}

			switch ($parcel_status) {
		case 'Accepted':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Shipped':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;
		case 'Returned':
			$parcel_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$parcel_status.' By Courier</span>';
			break;

		case 'Refunded':
			$parcel_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$parcel_status.'</span>';
			break;

		default:
			# code...
			break;
	}

				switch ($shipment_status) {
		case 'In-Transit':
			$shipment_status ='<span class="badge badge-pill badge-info p-2 m-1">'.$shipment_status.'</span>';
			break;

		case 'Arrived':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">'.$shipment_status.' at Destination</span>';
			break;
		case 'Collected':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;


		case 'Out':
			$shipment_status ='<span class="badge badge-pill btn-warning p-2 m-1">'.$shipment_status.'  for Delivery</span>';
			break;
		case 'Ready':
			$shipment_status ='<span class="badge badge-pill btn-info p-2 m-1">'.$shipment_status.'  for Pickup</span>';
			break;
		case 'Picked':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'  Up</span>';
			break;
			
		case '':
			$shipment_status ='<span class="badge badge-pill btn-primary p-2 m-1">Pending</span>';
			break;

		case 'Delivered':
			$shipment_status ='<span class="badge badge-pill btn-success p-2 m-1">'.$shipment_status.'</span>';
			break;
		case 'Unsuccessful':
			$shipment_status ='<span class="badge badge-pill btn-danger p-2 m-1">'.$shipment_status.' Delivery Attempt</span>';
			break;
		default:
			# code...
			break;
	}
			echo '
<tr class="even pointer">
<td class="a-center">
<input type="checkbox" class="checkboxes" name="selectid[]" value="'.$parcel_id.'">
</td>
<td>'.$count.'</td>
						<td class="center">'.$reference_number.'</td>

						<td class="center">'.get_branchCode($from_branch_id).'</td>
						<td>'.$sender_name.'</td>
						<td class="center">';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td class="center">'.$recipient_name.'</td>
						<td>';
						$numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						foreach ($numbers as $number) {
							# code...
						echo'<a href="tel:'.  $number.' ">
								 '.$number.'
						</a>';}
						echo'</td>
						<td>'.$shipment_status.'</td>
						<td style="display:inline-flex;">

							<a href="edit_parcel.php?edit='.$parcel_id  .'"
								class="btn btn-primary btn-sm">
								<i class="fa fa-pencil"></i>
							</a>
							<button type="button" class="btn btn-success btn-sm action-button view-parcel" title="View" data-action="view-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-eye "></i>
						</button>
							<button type="button" class="btn btn-danger btn-sm action-button delete-parcel" title="Delete" data-action="delete-parcel" data-parcel_id="'.$parcel_id.'"><i class="fa fa-trash-o "></i>
						</button>
						</td>
</tr>';

			}		}

		
}
?>