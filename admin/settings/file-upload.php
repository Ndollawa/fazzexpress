<?php
if(isset($_POST['action'])){
session_start();
 ob_start();
include '../../backend/database.php';
include '../../backend/timeAgo.php';
include'../../backend/functions.php';


function sendFile($destination,$columnName){
	global $database;

	$file =	uploadfile($destination,(999327680),'');
			print_r($file);
			$file = json_decode($file);
			$uploadstatus = $file[0];
			 $file_type = $file[3];
		     $count = count($file[2]) ;
for ($i=0; $i <$count; $i++) {
	if($uploadstatus !== "Error"){
		$fileuploaded = $database->escape_value($file[2][$i]);
		$file_type = $database->escape_value($file[3][$i]);
	$sql = "SELECT $columnName FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
	$obj = $row[''.$columnName.''];
	  if(!empty($obj)){
	deleteFile($obj,$destination);}
}

$sql="UPDATE site_settings SET $columnName = '".$fileuploaded."' WHERE id = 1 ";
	$send= $database->query($sql);
	if($send){
		header('Location:../site-settings.php?tab=General');
	}

			}else{
	return $file;
		}
	}

}
	if($_POST['action'] == 'upload_favicon'){

$destination = '../../uploads/site-settings/';	
$columnName = "favicon";			
echo sendFile($destination,$columnName);

}


			if($_POST['action'] == 'upload_brand_name_logo'){
$Fname= array();
$FType = array();
$FTname = array();
  $destination = '../../uploads/site-settings/';
  $columnName = "brand_name_logo";			
	echo (sendFile($destination,$columnName)) ;

}

if($_POST['action'] == 'upload_headerlogo'){
$Fname= array();
$FType = array();
$FTname = array();
  $destination = '../../uploads/site-settings/';
  $columnName = "headerlogo ";			
	echo sendFile($destination,$columnName);
}

if($_POST['action'] == 'upload_footerlogo'){
	$Fname= array();
$FType = array();
$FTname = array();
  $destination = '../../uploads/site-settings/';
  $columnName = "footerlogo";			
	echo sendFile($destination,$columnName);
}

if($_POST['action'] == 'upload_home_slider2'){
	
  $destination = '../../uploads/site-settings/';
  $columnName = "home_slider2";			
	echo sendFile($destination,$columnName); 

}


if($_POST['action'] == 'upload_home_slider1'){
  $destination = '../../uploads/site-settings/';
  $columnName = "home_slider1";			
	echo sendFile($destination,$columnName);  

}



if($_POST['action'] == 'upload_services_video'){
  $destination = '../../uploads/site-settings/';
  $columnName = "services_video";			
	echo sendFile($destination,$columnName);

}


if($_POST['action'] == 'upload_home_video'){
  $destination = '../../uploads/site-settings/';
  $columnName = "home_video ";			
	echo sendFile($destination,$columnName); 

}

if($_POST['action'] == 'upload_home_slider3'){
	

  $destination = '../../uploads/site-settings/';
  $columnName = "home_slider3";			
	echo sendFile($destination,$columnName); 

}


if($_POST['action'] == 'upload_home_sidenav'){
  $destination = '../../uploads/pages/';
  $columnName = "sidenav_image";			
	echo sendFile($destination,$columnName);  

}


if($_POST['action'] == 'upload_location-img'){
  $destination = '../../uploads/pages/';
  $columnName = "location_image";			
	echo sendFile($destination,$columnName);  

}


if($_POST['action'] == 'upload_gallery-img'){
  $destination = '../../uploads/pages/';
  $columnName = "gallery_image";			
	echo sendFile($destination,$columnName);  

}


if($_POST['action'] == 'upload_corevalue-img'){
  $destination = '../../uploads/pages/';
  $columnName = "corevalue_image";			
	echo sendFile($destination,$columnName);  

}

// if($_POST['action'] == 'upload_gallery_img'){
// 		$Fname= array();
// $FType = array();
// $FTname = array();
//   $destination = '../../uploads/pages/';
//   $columnName = "gallery_image";			
// 	echo sendFile($destination,$columnName);  

// }

if($_POST['action'] == 'upload_about-img'){
  $destination = '../../uploads/pages/';
  $columnName = "about_image";			
	echo sendFile($destination,$columnName);

}


if($_POST['action'] == 'upload_company-img'){
  $destination = '../../uploads/pages/';
  $columnName = "company_image ";			
	echo sendFile($destination,$columnName); 

}

if($_POST['action'] == 'upload_quote-img'){
  $destination = '../../uploads/pages/';
  $columnName = "quote_image ";			
	echo sendFile($destination,$columnName); 

}

if($_POST['action'] == 'upload_gallery'){
$Fname= array();
$FType = array();
$FTname = array();
  $destination = '../../uploads/gallery/';
  // $max = 2000*1024;
	// print_r($_FILES);
	 $file =	uploadfile($destination,$_FILES['gallery-file'],(327680),'');
			// print_r($file);
			$file = json_decode($file);
			$uploadstatus = $file[0];
			 $file_type = $file[3];
		     $count = count($file[2]) ;
for ($i=0; $i <$count; $i++) {
	if($uploadstatus !== "Error"){
		echo $file_name = $database->escape_value($file[2][$i]);
		$file_type = $database->escape_value($file[3][$i]);

	$sql="INSERT INTO gallery (caption, file_name,file_type) VALUES ('','$file_name','$file_type')";
	$send= $database->query($sql);
if($send){
		header('Location:../site-settings.php?tab=Gallery');
	}
		}else{
	// echo json_encode($file);
}
	}



}





if($_POST['action'] == 'turnOn_fixedMenu'){
$sql = "UPDATE site_settings SET fixedMenu = 'true' WHERE id =1";
$send = $database->query($sql);
}elseif ($_POST['action'] == 'turnOff_fixedMenu') {
$sql = "UPDATE site_settings SET fixedMenu = 'false' WHERE id =1";
$send = $database->query($sql);

}

if($_POST['action'] == 'turnOn_fixedFooter'){
$sql = "UPDATE site_settings SET fixedFooter = 'true' WHERE id =1";
$send = $database->query($sql);
}elseif ($_POST['action'] == 'turnOff_fixedFooter') {
$sql = "UPDATE site_settings SET fixedFooter = 'false' WHERE id =1";
$send = $database->query($sql);

}
if($_POST['action'] == 'turnOn_slideRTL'){
$sql = "UPDATE site_settings SET slideRTL = 'true' WHERE id =1";
$send = $database->query($sql);
}elseif ($_POST['action'] == 'turnOff_slideRTL') {
$sql = "UPDATE site_settings SET slideRTL = 'false' WHERE id =1";
$send = $database->query($sql);

}

if($_POST['action'] == 'turnOn_show_login_signup'){
$sql = "UPDATE site_settings SET login_signup= 'true' WHERE id =1";
$send = $database->query($sql);
}elseif ($_POST['action'] == 'turnOff_show_login_signup') {
$sql = "UPDATE site_settings SET login_signup = 'false' WHERE id =1";
$send = $database->query($sql);

}


}



?>