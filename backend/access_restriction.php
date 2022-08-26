
<?php

 	 $pagename = basename($_SERVER['PHP_SELF']);
 	switch ($pagename) {
// 		case 'index.php':
 		case 'pwd_reset.php':
 		case 'password_reset.php':

 		break;
 				case 'password_reset.php':
 if(isset($_SESSION['user_id']) && isset($_SESSION['user_account_type'])) {
 	 $_SESSION['message'] =" Please login...";
   header("Location:logout.php");
   // exit();
 }
 break;
 		case 'login.php':
 if(isset($_SESSION['user_id']) && isset($_SESSION['user_account_type'])) {
 	 $_SESSION['message'] =" Please login...";
   header("Location:profile.php");
  // exit();
 }
 		break;
 	case 'dashboard.php':
 	case 'all_users.php':
 	case 'branch_list.php':
  case 'new_branch.php':
 	case 'edit_branch.php':
 	case 'edit_users.php':
 	case 'faq.php':
	if(isset($_SESSION['user_id']) && isset($_SESSION['user_account_type']) && $_SESSION['user_account_type'] != 'Admin' ) {
 	 $_SESSION['message'] =" Please login...";
       header("Location:page_403.php");
   // exit();
 }
  if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_account_type']) ) {
   $_SESSION['message'] =" Please login...";
       header("Location:login.php");
   // exit();
 }
break;
 		case 'all_users.php':
 if(isset($_SESSION['user_id']) && isset($_SESSION['user_account_type'])) {
 	 $_SESSION['message'] =" Please login...";
   header("Location:logout.php");
   // exit();
 }
 		break;

 		default:
 			if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_account_type'])) {
 	 $_SESSION['message'] =" Please login...";
   header("Location:login.php");
   // exit();
            }
//              if(isset($_SESSION['user_account_type']) && $_SESSION['user_account_type'] !='Admin'){
//   header('Location:profile.php');
//   }
 			break;
 	}


?>