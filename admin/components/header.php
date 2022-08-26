<!DOCTYPE html>
<?php
require_once __DIR__.'/../../backend/database.php';
require_once __DIR__.'/../../backend/session.php';
require_once __DIR__.'/../../backend/access_restriction.php';
include_once __DIR__.'/../../backend/functions.php';
include_once  __DIR__.'/../../backend/timeAgo.php';

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

?>
<?php include_once __DIR__.'/../../vendors/swiftmailer-master/lib/swift_required.php'; ?>
<?php
$sql = "SELECT * FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
// $count = 1;
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
$id = $row['id'];
	$website_name = $row['website_name'];
	$active_hours = $row['active_hours'];
    $website_link = $row['website_link'];
    $site_description = $row['site_description'];
    $fixedMenu=  $row['fixedMenu'];
    $fixedFooter =  $row['fixedFooter'];
    $slideRTL=  $row['slideRTL'];
	$favicon=  $row['favicon'];
	$brand_name_logo =  $row['brand_name_logo'];
	$hlogo =  $row['headerlogo'];
	$flogo =  $row['footerlogo'];
	$theme_colour = $row["theme_colour"];
	$theme_footer_colour = $row["theme_footer_colour"];
	$theme_links_colour = $row["theme_link_colour"];
	$theme_buttons_colour = $row["theme_colour"];  
	$L_S_visibility =  $row['login_signup'];
	$saddress = $row['address'];
	$region = $city =  $row['city'];
	$zip_code =  $row['zip_code'];
	$country = $row['country'];
	$facebooklink = $row['facebooklink'];
	$twitterhandle = $row['twitterhandle'];
	$instagrampage = $row['instagrampage'];
	$youtube = $row['youtube'];
	$whatsapp = $row['whatsapplink'];
	$about = $row['about_us'];
	$core_values=  $row['core_values'];
	$policy =  $row['policy'];
	$email =  $row['email'];
	$scontact =  $row['contact'];
	$homepageStyle =  $row['homepage_style'];



}

if(isset($_SESSION['user_id'])){

$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."' ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
// $count = 1;
$rowcount = $database->num_rows($send);
foreach ($send as $row) {


$user_id = $row['id'];
	$username = $row['username'];
	$firstname=  $row['first_name'];
	$middlename =  $row['middle_name'];
	$lastname =  $row['last_name'];
	$about_me =  $row['about_me'];
	$gender =  $row['gender'];
	$user_email =  $row['email'];
	$user_role =  $row['user_role'];
	$account_type =  $row['account_type'];
	$contact =  $row['contact_no'];
	$address = $row['address'];
	$soo =  $row['state'];
	// $zip_code =  $row['zip_code'];
	$branchid = $row['branch'];
	$nationality = $row['country'];
	$lga = $row['lga'];
	$dob = date('d-m-Y',strtotime($row['dob']));
	$marital_status =  $row['marital_status'];
	$religion = $row['religion'];
	$regDate = date('d-m-Y',strtotime($row['joined_date']));
	$user_acctStatus =  $row['status'];
	$user_image = $row['user_image'];
	$cover_image = $row['cover_pic'];
	$number = $contact;

							// $contact1 = $numbers[0];
							// if(count($numbers) >1){
							// $contact2 = $numbers[1];
							// 		}else{
							// 			$contact2 = "";
							// 		}


	$user_name = $firstname." ".$lastname;
}
}
?>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../uploads/site-settings/<?php echo $favicon; ?>" type="image/ico" />
<title><?php echo $website_name; ?> | </title>

<link href="../fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href="../vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<!-- Data Tables -->
<link href="../vendors/bootstrap-table-master/dist/bootstrap-table.min.css" rel="stylesheet"
type="text/css" />
<!-- <link href="../vendors/pagination/simplePagination.css" rel="stylesheet"> -->
<!-- <link href="../vendors/datatables/export/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->

<link rel="stylesheet" href="../vendors/jBox-1.2.0/dist/jBox.all.min.css"/>
<link rel="stylesheet" href="../vendors/lightGallery/dist/css/lightgallery.css"/>
<link rel="stylesheet" href="../vendors/lightbox/dist/css/lightbox.css"/>
<!-- <link rel="stylesheet" type="text/css" href="../vendors/splide-2.4.12/dist/css/splide.min.css">
<link rel="stylesheet" type="text/css" href="../vendors/splide-2.4.12/dist/css/themes/splide-skyblue.min.css"> -->
<link rel="stylesheet" href="../vendors/jquery-ui1/jquery-ui.min.css"/>


<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

<link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">

<link href="../build/css/custom.min.css" rel="stylesheet">
<!-- steps -->
<link rel="stylesheet" href="../vendors/steps/steps.css">
<link href="../vendors/sweet-alert/sweetalert2.min.css" rel="stylesheet">
<!-- Jquery Toast css -->
<link rel="stylesheet" href="../vendors/jquery-toast/dist/jquery.toast.min.css">

<link rel="stylesheet" href="../vendors/flatpicker/css/flatpickr.min.css" />
<script src="../vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>


<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" type="text/css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.fa.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.fa.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js" type="text/javascript"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css" type="text/css"></script> -->
<!-- <link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/extensions/export/bootstrap-table-export.min.js"></script> -->

</head>
