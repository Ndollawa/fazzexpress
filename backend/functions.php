<?php

$filename = $file_type = array();

use unicalCSphp\UploadFile;
function get_branchCode($branchid){
  global $database;
  $branch_code = '';
$sql = $database->query("SELECT branch_code FROM branches WHERE id = '{$branchid}' LIMIT 1 ");
  $row = $database->fetch_array($sql);
  foreach ($sql as $row) {
    $branch_code = $row['branch_code'];
  }
  return $branch_code;
}

function get_shipmentstatus($parcel_id){
  global $database;
$sql = $database->query("SELECT * FROM shipments WHERE parcel_id = '{$parcel_id}' LIMIT 1 ");
  $row = $database->num_rows($sql);
if($row >0){
 return $response = 'true';
}else{
return  $response = 'false';
}
}

function get_branchAddressCode($branchid){
  global $database;
  $branchaddress = "";
$sql = $database->query("SELECT * FROM branches WHERE id = '{$branchid}' LIMIT 1 ");
  $row = $database->fetch_array($sql);
  foreach ($sql as $row) {
    $branch_code = $row['branch_code'];
      $branchID =  $row['id'];
$branchaddress = $row['branch_code'].' | '.ucfirst($row['building']).', '.ucfirst($row['city']).','.ucfirst($row['state']).', '.ucfirst($row['country']);
  }
  return $branchaddress;
}


function get_ratingValue($columnName, $tableName, $targetColumn,$id)
{
  global $database;
        $Rating =0;
    $sql="SELECT $columnName FROM $tableName WHERE $targetColumn = $id";

$ratingcount = 0;
$query = $database->query($sql);
 $row = $database->fetch_array($query);
  $ratingcount = $database->num_rows($query);
  if($ratingcount>0){
    foreach ($query as $row) {
        $Rating += $row[''.$columnName.''];
       }
            $Rating = round(($Rating/$ratingcount),1);}
         return $Rating;
}
function load_ratingStar($rateValue,$colour){
  $ratingstar ="";
  if ($rateValue >0){
  $whole = floor($rateValue);
                   if(is_float($rateValue)){
                    $dec = fmod($rateValue, 1);}else{
                      $dec = 0;
                    }
                    $unrated = 5-$whole;
                    if($dec >= 0.5){
                      $unrated -=1;
                    }

                    for ($i=0; $i <$whole ; $i++) {
                      $ratingstar .='<span style="color:'.$colour.'"><i class="fa fa-star"></i></span>&nbsp;';
                      // $ratingstar .='<span style="color:'.$colour.'">☆</span>&nbsp;';
                    }if($dec >= 0.5){

                      $ratingstar .='<span style="color:'.$colour.'"><i class="fa fa-star-half-o"></i></span>&nbsp;';
                    }else{
                    // $ratingstar .='<span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;';
                    }
                    for ($i=1; $i <=$unrated ; $i++) {
                      $ratingstar .='<span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;';
                // $ratingstar .='<span>☆</span>&nbsp;';
                      }
                    }else{
                      $ratingstar .='<span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;
                      <span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;
                      <span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;
                      <span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;
                      <span style="color:'.$colour.'"><i class="fa fa-star-o"></i></span>&nbsp;';
                    }

  return $ratingstar;
}


function getUsername($user_id){
  global $database;
  $fullname = '';
  if($_SESSION['user_id'] == $user_id){ return 'You';}else{
  $sql = "SELECT first_name, middle_name, last_name FROM users WHERE id = '".$user_id."'";
  $result = $database->query($sql);
  $row = $database->fetch_array($result);
  foreach ($result as $row) {
 $Fname = $row['first_name'];
      $Mname = $row['first_name'];
      $Lname= $row['last_name'];
  $fullname =$Fname." ".ucfirst(substr($Mname, 0,1)) ." ".$Lname;
    }return $fullname;}
}
function getName($user_id){
  global $database;
  $fullname = '';
  $sql = "SELECT first_name, middle_name, last_name FROM users WHERE id = '".$user_id."'";
  $result = $database->query($sql);
  $row = $database->fetch_array($result);
  foreach ($result as $row) {
 $Fname = $row['first_name'];
      $Mname = $row['middle_name'];
      $Lname= $row['last_name'];
  $fullname = $Fname." ".ucfirst(substr($Mname, 0,1)) ." ".$Lname;
    }return $fullname;
}


 function notificationCount($receiver_id){
  global $database;
 $sql ="SELECT COUNT(id) as total FROM notifications WHERE receiver_id ='".$receiver_id."' AND status = 'unread' ";
 $result =$database->query($sql);
 $row=$database->fetch_array($result);
 foreach ($result as $row) {
  return $row['total'];
    }
}





function fetch_user_last_activity($user_id){
  global $database;
  $last_activity = '';
  $sql = "SELECT * FROM sessions WHERE user_id = '".$user_id."' ORDER BY last_activity DESC LIMIT 1";
  $result = $database->query($sql);
  $row = $database->num_rows($result);
  foreach ($result as $row ) {
    $last_activity = $row['last_activity'];
  } return $last_activity;
}
function getUserPic($user_id){
  global $database;
  $sql = "SELECT account_type, user_image, gender FROM users WHERE id = '".$user_id."'";
  $result = $database->query($sql);
  $row = $database->fetch_array($result);
  foreach ($result as $row) {
    $user_account_type = $row['account_type'];
    $profilePic = $row['user_image'];

      if($profilePic == ''){
        if($row['gender'] == "Male"){
$output='<img width="40" height="40" src="../uploads/profile-picture/usermale.jpg" class="img-responsive img-circle ">';}elseif($row['gender'] == "Female"){
$output='<img width="40" height="40" src="../uploads/profile-picture/userfemale.png" class="img-responsive img-circle ">';}else{
$output='<img width="40" height="40" src="../uploads/profile-picture/unknown.jpg" class="img-responsive img-circle ">';
}
      }else{
      $output='<img src="../uploads/profile-pictures/'.$profilePic .'" class="img img-circle img-responsive" style="width:40px; height: 40px;">';
      }
  return $output;


  }
}

function fetchUserpic($user_id){
  global $database;
  $sql = "SELECT account_type, user_image, gender FROM users WHERE id = '".$user_id."'";
  $result = $database->query($sql);
  $row = $database->fetch_array($result);
  foreach ($result as $row) {
    $user_account_type = $row['account_type'];
    $profilePic = $row['user_image'];

      if($profilePic == ''){
        if($row['gender'] == "Male"){
$output='usermale.jpg';}elseif($row['gender'] == "Female"){
$output='userfemale.png';}else{
$output='unknown.jpg';
}
      }else{
      $output=$profilePic;
      }
  return $output;


  }
}

function getUser_statusDot($user_id){
           $dot ='';
     $current_timestamp =strtotime(date('Y-m-d H:i:s'));
         $user_last_activity = fetch_user_last_activity($user_id);
      //And the time the notification was set
      $fromTime = strtotime($user_last_activity);
      //Now calc the difference between the two
      $timeDiff = floor(abs($current_timestamp - $fromTime) / 60);
      //Now we need find out whether or not the time difference needs to be in
      //minutes, hours, or days
  if ($timeDiff < 10) {
        $dot =' <i class="online dot"></i>'; }
    elseif ($timeDiff > 10 && $timeDiff < 20) {
        $dot='<i class="busy dot"></i>';}
    elseif ($timeDiff > 20 && $timeDiff < 40) {
        $dot =' <i class="away dot"></i>'; }
  else{ $dot =' <i class="offline dot"></i>';}
  return $dot;
}

function getUser_status($user_id){
           $status ='';
     $current_timestamp =strtotime(date('Y-m-d H:i:s'));
         $user_last_activity = fetch_user_last_activity($user_id);
      //And the time the notification was set
      $fromTime = strtotime($user_last_activity);
      //Now calc the difference between the two
      $timeDiff = floor(abs($current_timestamp - $fromTime) / 60);
      //Now we need find out whether or not the time difference needs to be in
      //minutes, hours, or days
if ($timeDiff < 10) {
       $status = "online"; }
    elseif ($timeDiff > 10 && $timeDiff < 20) {
        $status='busy';}
    elseif ($timeDiff > 20 && $timeDiff < 40) {
        $status ='away'; }
  else{ $status ='offline';}
  return $status;
}
function user_msgCount($user_id){
global $database;
 $sql ="SELECT COUNT(MSG_ID) as total FROM messages WHERE TO_USER_ID ='".$_SESSION['user_id']."' AND FROM_USER_ID = '".$user_id."' AND STATUS = 'unread' ";
 $result =$database->query($sql);
 $row=$database->fetch_array($result);
 foreach ($result as $row) {
  return $row['total'];
 }
}
function getTyping_status ($from_user_id, $to_user_id){
global $database;
$sql = "SELECT TYPING_STATUS FROM messages  WHERE USER_ID =$to_user_id AND TO_USER_ID = $from_user_id ORDER BY MSG_ID DESC";
$result =$database->query($sql);
$row=$database->fetch_array($result);
 foreach ($result as $row) {
  if($row['TYPING_STATUS'] == 'typing'){
    $status= '<small>'.getName($to_user_id).'<em><span class="text-muted"> is Typing...</span></em></small>';
  }elseif ($row['TYPING_STATUS'] == 'not_typing') {
  $status= '';
  }
return $status;
}
}
function deleteFile($file,$destination){
  if(!empty($file)){
  $filename = $destination.$file;
  unlink($filename);}
}
function uploadfile($destination,$max_size=null,$allowedTypes=null,$uploaditem=null){
 $output ="";
  $Fname= array();
      $FType = array();
      $FTname = array();
      $status = array();
       $uploadDetails= array();
      require_once __DIR__.'/../src/unicalCSphp/UploadFile.php';
      // require_once '../src/unicalCSphp/UploadFile.php';
        // $destination = '../assets/images/blog/';
        // $max = 2000*1024;
      try{
            $upload = new UploadFile($destination,$uploaditem);
            $upload->setMaxSize($max_size);
            $upload->allowAllTypes($allowedTypes);
            $upload->upload();
            $result=$upload->getMessages();
            $Fname=$upload->getName();
            $FTname=$upload->getFTname();
            $FType=$upload->getFType();
            $status = $upload->getStatus();
            $uploadDetails = $upload->getuploadDetails();
          }catch(Exception $e){
          $result[]=$e->getMessage();
          // $Fname[]= $e->getMessage();
          }
        $response = array($status,$result,$Fname,$FType);
          // $response = $uploadDetails;
            return json_encode($response);
                              }

function uploadfile2($destination,$max_size=null,$allowedTypes=null,$uploaditem=null){
 $output ="";
  $Fname= array();
      $FType = array();
      $FTname = array();
      $status = array();
       $uploadDetails= array();
      // require_once '../../src/unicalCSphp/UploadFile.php';
      require_once __DIR__.'/../src/unicalCSphp/UploadFile.php';
        // $destination = '../assets/images/blog/';
        // $max = 2000*1024;
      try{
            $upload = new UploadFile($destination,$uploaditem);
            $upload->setMaxSize($max_size);
            $upload->allowAllTypes($allowedTypes);
            $upload->upload();
            $result=$upload->getMessages();
            $Fname=$upload->getName();
            $FTname=$upload->getFTname();
            $FType=$upload->getFType();
            $status = $upload->getStatus();
            $uploadDetails = $upload->getuploadDetails();
          }catch(Exception $e){
          $result[]=$e->getMessage();
          // $Fname[]= $e->getMessage();
          }
        $response = array($status,$result,$Fname,$FType);
          // $response = $uploadDetails;
            return json_encode($response);
                              }
function set_media_grid($totalfiles,$file,$fileType,$destination) {
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


 $output = "<div style=''>";

          if($totalfiles == 1){
 $output .= ' <div class="post-thumb-gallery container">';
         if (in_array($fileType[0],$imageTypes)){
$output .= '<figure class="post-thumb img-popup"><a href="'.$destination.$file[0].'"  ><img   class="img-responsive" src="'.$destination.$file[0].'" alt=""></a></figure>';

 }elseif (in_array($fileType[0],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[0].'" ></video></div>';   }
      $output .='</div>';
}
else if($totalfiles == 2){

$output .= '<div class="post-thumb-gallery img-gallery">
                                                <div class="row no-gutters"><div class="col-6">';
         if (in_array($fileType[0],$imageTypes)){
                                                  $output .= '<figure class="post-thumb">
                                                           <a class="gallery-selector" href="'.$destination.$file[0].'" " ><img   class="img-responsive" src="'.$destination.$file[0].'" alt="">  </a>
                                                        </figure>';}elseif (in_array($fileType[0],$videoTypes)) {
    $output .=' <div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[0].'" ></video></div>';   }
            $output .= '   </div><div class="col-6">';
                        if (in_array($fileType[1],$imageTypes)){
            $output .= '<figure class="post-thumb">
                     <a class="gallery-selector" href="'.$destination.$file[1].'" " ><img   class="img-responsive" src="'.$destination.$file[1].'" alt="">  </a>
                  </figure>';}elseif (in_array($fileType[1],$videoTypes)) {
    $output .=' <div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[1].'" ></video></div>';   }
                                                $output .= '    </div></div>
                                            </div>';


}else if($totalfiles == 3){

$output .= '<div class="post-thumb-gallery img-gallery"><div class="row no-gutters"><div class="col-8" style="width:100%; height:100%; ">';
         if (in_array($fileType[0],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[0].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[0].'" alt=""></a></figure>';

 }elseif (in_array($fileType[0],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[0].'" ></video></div>';   }
      $output .='</div><div class="col-4"><div class="row">';

         for($i =1; $i < $totalfiles ;$i++){
          $output .= '<div class="col-12 " style="width:100%; height:100%; ">';
         if (in_array($fileType[$i],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[$i].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[$i].'" alt=""></a></figure>';

 }elseif (in_array($fileType[$i],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[$i].'" ></video></div>';   }
      $output .='</div>';

                   }
                       $output .= '</div> </div></div></div>';
          }else if($totalfiles == 4){

// $output .= '<div class="post-thumb-gallery img-gallery"><div class="row no-gutters">';
//          if (in_array($fileType[0],$imageTypes)){
// $output .= '<figure class="post-thumb"><a href="'.$destination.$file[0].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[0].'" alt=""></a></figure>';

//  }elseif (in_array($fileType[0],$videoTypes)) {
//       $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" src="'.$destination.$file[0].'" ></video></div>';   }
//       $output .='</div></div></div><div class="post-thumb-gallery img-gallery"><div class="row no-gutters"><div class="col-8" >';
//          if (in_array($fileType[1],$imageTypes)){
// $output .= '<figure class="post-thumb"><a href="'.$destination.$file[1].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[1].'" alt=""></a></figure>';

//  }elseif (in_array($fileType[1],$videoTypes)) {
//       $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" src="'.$destination.$file[1].'" ></video></div>';   }
//       $output .='</div><div class="col-4"><div class="row">';
          $output .='<div class="post-thumb-gallery img-gallery"><div class="row no-gutters">';
         for($i =0; $i < $totalfiles ;$i++){
           $output .= '<div class="col-6" style="width:100%; height:100%; ">';
         if (in_array($fileType[$i],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[$i].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[$i].'" alt="" style="width:100%; height:100%; "></a></figure>';

 }elseif (in_array($fileType[$i],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png" style="width:100%; height:100%; " src="'.$destination.$file[$i].'" ></video></div>';   }
      $output .='</div>';

                   }
                       $output .= '</div> </div>';
          }else if($totalfiles == 5){

$output .=  '<div class="post-thumb-gallery img-gallery"><div class="row no-gutters"><div class="col-8" style="width:100%; height:100%; ">';
         if (in_array($fileType[0],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[0].'" class=" gallery-selector" ><img   class="img-responsive" src="'.$destination.$file[0].'" alt=""></a></figure>';

 }elseif (in_array($fileType[0],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[0].'" ></video></div>';   }
      $output .='</div><div class="col-4"><div class="row">';

         for($i =1; $i < 3 ;$i++){
           $output .= '<div class="col-12" style="width:100%; height:100%; ">';
         if (in_array($fileType[$i],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[$i].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[$i].'" alt=""></a></figure>';

 }elseif (in_array($fileType[$i],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[$i].'" ></video></div>';   }
      $output .='</div>';

                   }
                       $output .= '</div> </div></div></div><div class="post-thumb-gallery img-gallery"><div class="row no-gutters"><div class="col-6" style="width:100%; height:100%; ">';
         if (in_array($fileType[3],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[3].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[3].'" alt=""></a></figure>';

 }elseif (in_array($fileType[3],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[3].'" ></video></div>';   }
      $output .='</div><div class="col-6" >';
         if (in_array($fileType[4],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[4].'" class=" gallery-selector" ><img   class="img-responsive" src="'.$destination.$file[4].'" alt=""></a></figure>';

 }elseif (in_array($fileType[4],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[4].'" ></video></div>';   }
      $output .='</div></div></div>';
          }else if($totalfiles == 6){

$output .= '<div class="post-thumb-gallery img-gallery"><div class="row no-gutters"><div class="col-8" style="width:100%; height:100%; "><div class="row"><div class="col-12" style="width:100%; height:100%; ">';
         if (in_array($fileType[0],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[0].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[0].'" alt=""></a></figure>';

 }elseif (in_array($fileType[0],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[0].'" ></video></div>';   }
      $output .='</div><div class="col-12" style="width:100%; height:100%; ">';
         if (in_array($fileType[1],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[1].'" class="gallery-selector" ><img   class="img-responsive " src="'.$destination.$file[1].'" alt=""></a></figure>';

 }elseif (in_array($fileType[1],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[1].'" ></video></div>';   }
      $output .='</div></div></div><div class="col-4" style="width:100%; height:100%; "><div class="row">';

         for($i =2; $i < $totalfiles ;$i++){
           $output .= '<div class="col-12" style="width:100%; height:100%; ">';
         if (in_array($fileType[$i],$imageTypes)){
$output .= '<figure class="post-thumb"><a href="'.$destination.$file[$i].'" class=" gallery-selector" ><img   class="img-responsive" src="'.$destination.$file[$i].'" alt=""></a></figure>';

 }elseif (in_array($fileType[$i],$videoTypes)) {
      $output .= '<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" controls="controls" preload="none" poster="../assets/images/video.png"  src="'.$destination.$file[$i].'" ></video></div>';   }
      $output .='</div>';

                   }
                       $output .= '</div> </div></div></div>';
       }
       $output .="</div>";

       return $output;
  }


function get_array_unique($array, $keep_key_assoc = false){
$duplicate_keys = array();
$temp = array();
  foreach ($array as $key => $val) {
    if(is_object($val))
      $val = (array)$val;
    if(!in_array($val, $temp))
      $temp[] = $val;
    else
      $duplicate_keys[] = $key;
  }
  foreach ($duplicate_keys as $key)
    unset($array[$key]);

  return $keep_key_assoc ? $array:array_values($array);

}



function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) {
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function autoload($class_name) {
	$class_name = strtolower($class_name);
  $path = "../backend/{$class_name}.php";
  if(file_exists($path)) {
    require_once($path);
  } else {
		die("The file {$class_name}.php could not be found.");
	}
}

?>