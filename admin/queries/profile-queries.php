<?php
use unicalCSphp\UploadFile;
$msg ="";
$Fname= array();
$result= array();
 $message= "";





if(isset($_POST['action'])) {

include __DIR__.'/../../backend/database.php';
include __DIR__.'/../../backend/functions.php';
include __DIR__.'/../../backend/timeAgo.php';
session_start();
ob_start();



			if($_POST['action'] == 'upload_profpic'){
	$user_id =$_SESSION['user_id'];
$Fname= array();
$FType = array();
$FTname = array();
  $destination = '../../uploads/profile-pictures/';
  // $max = 2000*1024;
$file =	uploadfile($destination,(999997680),'');
			print_r($file);
			$file = json_decode($file);
			$uploadstatus = $file[0];
			$filename = $file[2];
			 $file_type = $file[3];
		     $count = count($filename) ;
for ($i=0; $i <$count; $i++) {
	if($uploadstatus !== "Error"){
	 $profpic = $database->escape_value($filename[$i]);
$sql="SELECT user_image FROM users WHERE id = '".$user_id."' ";
	$send= $database->query($sql);
	$row =$database->fetch_array($send);
		if($row >0){
				foreach ($send as $row) {
                            		$files = $row['user_image'];
                            		}
                            	 // $count = count($files) ;

                        // for($x=0;$x<$count;$x++) {
                            		 	if (!empty($files)){
                            		 deleteFile( $files,"../../uploads/profile-pictures/");

                            		}
                            	}
                            // }
if($send){
		
		$_SESSION['user_image'] = $profpic;
	}


$sql="UPDATE users SET user_image = '".$profpic."' WHERE id = '".$user_id."' ";
	$send= $database->query($sql);
if($send){

		$_SESSION['user_image'] = $profpic;
	}
		
	}else{
	echo ($file);
}




			}
        }



if($_POST['action']== 'getuserpic'){
$user_id = $_SESSION['user_id'];
$sql="SELECT * FROM users WHERE id = '".$user_id."' ";
	$result= $database->query($sql);
	$row = $database->fetch_array($result);
	foreach ($result as $row) {

			$user_image = $row['user_image'];
		}
		$output = '<a class="profpic" href="../uploads/profile-pictures/'.fetchUserpic($_SESSION['user_id']).'" data-lightbox="profpic" ><img src="../uploads/profile-pictures/'.fetchUserpic($_SESSION['user_id']).'" alt="user-img" class="avatar avatar-lgavatar  brround" style="width:150px; height:150px; border-radius:50%;" /></a>';
		echo $output;
	}

if($_POST['action']== 'getuserpic2'){
$user_id = $_SESSION['user_id'];
$sql="SELECT * FROM users WHERE id = '".$user_id."' ";
	$result= $database->query($sql);
	$row = $database->fetch_array($result);
	foreach ($result as $row) {

			$user_image = $row['user_image'];
		}
		$output = '<img src="../uploads/profile-pictures/'.getUserpic($_SESSION['user_id']).'" alt="profile-img" class="avatar avatar-md brround">';
		echo $output;
	}
  if($_POST['action']== 'checkUsername'){
    $username = $_POST['username'];
      $sql="SELECT id FROM users WHERE username = '{$username}'";
              $result= $db->query ($sql);
              $row= mysqli_fetch_array($result);
            if($row>0){
             $msg='<h4 style="margin:0 10px 0 10px;" class="alert alert-danger"><center>Username already taken!</center></h4>';
           echo '1'; }
            else{
              $msg='<h4 style="margin:0 10px 0 10px;" class="alert alert-success"><center>Username not taken <i class="fa fa-check"></i></center></h4>';
            echo '0';}

	}



}





// echo $user_name = getUsername($_SESSION['user_id']);
// echo $user_image = getUserpic($_SESSION['user_id']);
if(isset($_POST['update-profile'])){

require_once '../src/unicalCSphp/UploadFile.php';
	$username = $database->escape_value(lcfirst($_POST['username']));
	$destination = '../uploads/profile-pictures/';
  $about_me = $database->escape_value($_POST['about-me']);
  // $password = $database->escape_value($_POST['password']);
  // $password2 = $database->escape_value($_POST['confirmpassword']);
  // $account_type= $database->escape_value($_POST['account-type']);
  $firstname = $database->escape_value($_POST['firstname']);
  $middlename = $database->escape_value($_POST['middlename']);
  $lastname = $database->escape_value($_POST['lastname']);
  $gender =$database->escape_value($_POST['gender']);
  $dob = date('Y-m-d',strtotime($_POST['dob']));
  $address = $database->escape_value($_POST['address']);

  $nationality = $database->escape_value($_POST['nationality']);
  $state_of_origin = $database->escape_value($_POST['soo']);
  $lga = $database->escape_value($_POST['lga']);
  $marital_status =$database->escape_value($_POST['marital-status']);
  $religion = $database->escape_value($_POST['religion']);
  $number =  $_POST['number'];
  // $branch = $database->escape_value($_POST['staff-branch']);
  $email = $database->escape_value($_POST['email']);

$username = strtolower($username);
$firstname = ucfirst($firstname);
$middlename = ucfirst($middlename);
$lastname = ucfirst($lastname);
$regDate = date('Y-m-d');
 // echo $password." ".$password2;
if(!empty($username) && !empty($firstname)  && !empty($lastname) && !empty($gender)  && !empty($email) && !empty($country) && !empty($dob) && !empty($address)){

// $Fname= array();
// $FType = array();
// $FTname = array();
$destination = '../uploads/cover-pictures/';
  // $max = 2000*1024;
	$coverpic="";
	$file =	uploadfile($destination,(999999680),'');
			// print_r($file);
			$file = json_decode($file);
			$uploadstatus = $file[0];
			 $file_type = $file[3];
		     $count = count($file[2]) ;

for ($i=0; $i <$count; $i++) {
	if($uploadstatus !== "Error"){
		$coverpic = $database->escape_value($file[2][$i]);
		$file_type = $database->escape_value($file[3][$i]);
		     	$sql = "SELECT cover_pic FROM users WHERE id = '".$_SESSION['user_id']."' ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
	$obj = $row['cover_pic'];
	deleteFile($obj,$destination);
}
			}else{
foreach ($uploadstatus as $key){
           $msg = $key;
     echo '<script type="text/javascript"> alert ('.$msg.')</script>';
            }
		}
	}

$sql = "UPDATE users SET username = '$username', first_name = '$firstname',middle_name = '$middlename', last_name = '$lastname', gender = '$gender',email = '$email',address = '$address',contact_no = '$number' ,marital_status = '$marital_status',religion = '$religion',country = '$nationality',state = '$state_of_origin',lga = '$lga', about_me = '$about_me',";
if(isset($coverpic)){
$sql .=	"cover_pic ='$coverpic'";
}
$sql .="  WHERE id = '".$_SESSION['user_id']."' ";
$send = $database->query($sql);
if($send){
	$_SESSION['message'] = '<h4 style="margin:10px  10px; padding:5px;" class="alert alert-success"><center>  Profile record updated successfully <i class=" icon-holder fa fa-check f-left" style="color:white;"></i></center></h4>';

      }else {
          $_SESSION['message']  ='<h4 style="margin:10px  10px; padding:5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h4>';
   }
}
}
if(isset($_POST['pfsetting1'])){
	$passw =  $database->escape_value($_POST['password']);
	$passw2 =  $database->escape_value(lcfirst($_POST['confirmpassword']));
	if(isset($passw) && isset($passw2)){
		if($passw == $passw2){
			if(!empty($passw) || $passw != ""){
			 $password= password_hash($passw, PASSWORD_BCRYPT);

			$sql ="UPDATE users SET  password = '".$password."' WHERE id = '".$_SESSION['user_id']."'";
			$send = $database->query($sql);
if($send){
	$_SESSION['message']  = '<h4 style="margin:10px  10px; padding:5px;" class="alert alert-success"><center> Password changed successfully <i class=" icon-holder fa fa-check f-left" style="color:white;"></i></center></h4>';

      }
}
		}else {
           $_SESSION['message']  ='<h4 style="margin:10px  10px; padding:5px;" class="alert alert-danger"><center>Passwords do not match..</center></h4>';
   }
	}

}


?>
