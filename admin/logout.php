<?php

require_once __DIR__.'/../backend/database.php';
require_once __DIR__.'/../backend/session.php';
require_once __DIR__.'/../backend/access_restriction.php';
include_once __DIR__.'/../backend/functions.php';
include_once  __DIR__.'/../backend/timeAgo.php';

// session_start();
$time = date('Y-m-d H:i:s');
$sql="UPDATE sessions SET session_id = '".session_id()."', last_activity = '$time' WHERE sessions.user_id = '".$_SESSION['user_id']."'";
      $statement=$database->query($sql);
$session->logout();
	unset($_SESSION['user_id'] );
 	unset($_SESSION['username'] );
  	unset($_SESSION['user_account_type'] );
  	unset($_SESSION['fullname']);
 	unset($_SESSION['user_image'] );
  	unset($_SESSION['user_role'] );
  	session_destroy();
  	session_write_close();
    header("Location:../index.php");
    exit();
?>