<?php 
// use unicalCSphp\UploadFile;
// $msg ="";
// $Fname= array();
// $result= array();
//  $message= "";
include  __DIR__.'/../../backend/database.php';
include  __DIR__.'/../../backend/timeAgo.php';
include __DIR__.'/../../backend/functions.php';

if(isset($_POST['action'])){

if($_POST['action']== 'getsiteheaderlogo'){

			$sql = "SELECT headerlogo FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['headerlogo'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
	}

	if($_POST['action']== 'getsitefooterlogo'){

	$sql = "SELECT footerlogo FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['footerlogo'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
		
	}



	if($_POST['action']== 'get_home_sidenav'){

	$sql = "SELECT sidenav_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['sidenav_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}

	if($_POST['action']== 'get_quote-img'){

			$sql = "SELECT quote_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['quote_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}


	if($_POST['action']== 'get_location-img'){

			$sql = "SELECT location_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['location_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}


	if($_POST['action']== 'get_gallery-img'){

			$sql = "SELECT gallery_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['gallery_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}

	if($_POST['action']== 'get_corevalue-img'){

			$sql = "SELECT corevalue_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['corevalue_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}


if($_POST['action']== 'get_company-img'){

			$sql = "SELECT company_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['company_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}

	if($_POST['action']== 'get_about-img'){
			$sql = "SELECT about_image FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['about_image'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/pages/'.$obj.'" alt="logo"/></div>';		
		
		}
	}


	if($_POST['action']== 'get_home_slider1'){

	$sql = "SELECT home_slider1 FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['home_slider1'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
		
	}


if($_POST['action']== 'get_home_slider2'){

	$sql = "SELECT home_slider2 FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['home_slider2'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
		
	}

	if($_POST['action']== 'get_home_slider3'){

	$sql = "SELECT home_slider3 FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['home_slider3'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
	}

	

	if($_POST['action']== 'get_home_video'){
$sql = "SELECT home_video FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
// $count = 1;
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
// $user_id = $row['id'];
// 	$favicon=  $row['favicon'];
	// $brand_name_logo =  $row['brand_name_logo'];
	$hv =  $row['home_video'];
$output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container">
												<video  class="embed-responsive" style="width:240px;" src="../uploads/site-settings/'.$hv.'" alt="home-video"></video></div>';		
		echo $output;
		}
		
	}

	if($_POST['action']== 'get_services_video'){
$sql = "SELECT services_video FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
// $count = 1;
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
// $user_id = $row['id'];
// 	$favicon=  $row['favicon'];
	// $brand_name_logo =  $row['brand_name_logo'];
	$sv =  $row['services_video'];
$output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container">
												<video  class="embed-responsive" style="width:240px;" src="../uploads/site-settings/'.$sv.'"  metadata="" alt="svideo"></video></div>';		
		echo $output;
		}
		
	}

	if($_POST['action']== 'getsitebrandname_logo'){

	$sql = "SELECT brand_name_logo FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['brand_name_logo'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
	}

if($_POST['action']== 'getsitefavicon'){
	$sql = "SELECT favicon FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$obj = $row['favicon'];
echo $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
		}
		}
}
// function sendQuery($columnName){
// 	global $database;
// 	$sql = "SELECT $columnName FROM site_settings WHERE id = 1 ";

// $send = $database->query($sql);
// $row = $database->fetch_array($send);
// foreach ($send as $row) {
// 	$obj = $row[''.$columnName.''];
// $output = '<div style="background-color: #ccc; padding: 10px; border: 2px solid #f68600; border-radius: 2%;" class="container"><img  class="img-responsive" style="width:90px;" src="../uploads/site-settings/'.$obj.'" alt="logo"/></div>';		
		
// 		}
// }
?>