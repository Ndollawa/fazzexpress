<?php 
include __DIR__.'/../../backend/database.php';
include __DIR__.'/../../backend/functions.php';
include __DIR__.'/../../backend/timeAgo.php';
session_start();
ob_start();

if(isset($_POST['action'])) {
	$query = "SELECT THEME_ADMIN FROM website_settings WHERE ID = 1";
	$q = $database->query($query);
	$r = $database->fetch_array($q);{
		foreach ($q as $r) {
			$theme_adimin = $r['THEME_ADMIN'];
		}
	}
if($theme_adimin == "Admin-defined"){	
	if($_POST['action'] == 'change-sidebarTheme'){
				$theme = $_POST['sidebar_color'];
$sql = "UPDATE website_settings SET SIDEBAR_COLOUR ='$theme' WHERE ID = 1 ";
$send = $database->query($sql);

// if($send){
// echo 'done';}

			}

	if($_POST['action'] == 'change-logoTheme'){
				$theme = $_POST['logo_color'];
$sql = "UPDATE website_settings SET HEADER_BRAND_COLOUR ='$theme' WHERE ID = 1 ";
$send = $database->query($sql);


			}

	if($_POST['action'] == 'change-headerTheme'){
				$theme = $_POST['header_color'];
$sql = "UPDATE website_settings SET HEADER_COLOUR ='$theme' WHERE ID = 1 ";
$send = $database->query($sql);

			}
}elseif ($theme_adimin == "User-defined"){
$user_id = $_SESSION['user_id'];
	if($_POST['action'] == 'change-sidebarTheme'){
		$user_id = $_SESSION['user_id'];
				$theme = $_POST['sidebar_color'];
$sql = "UPDATE user_settings SET SIDEBAR_COLOUR ='$theme' WHERE USER_ID = $user_id ";
$send = $database->query($sql);


			}

	if($_POST['action'] == 'change-logoTheme'){
		$user_id = $_SESSION['user_id'];
				$theme = $_POST['sidebar_color'];
$sql = "UPDATE user_settings SET HEADER_BRAND_COLOUR ='$theme' WHERE USER_ID = $user_id ";
$send = $database->query($sql);


			}

	if($_POST['action'] == 'change-headerTheme'){
		$user_id = $_SESSION['user_id'];
				$theme = $_POST['header_color'];
$sql = "UPDATE user_settings SET HEADER_COLOUR ='$theme' WHERE USER_ID = $user_id ";
$send = $database->query($sql);


			}

}
}
?>