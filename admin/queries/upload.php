<?php 
use unicalCSphp\UploadFile;
$msg ="";
$Fname= array();
$result= array();
 $message= "";
include'../../base_dir.php';
include  $BASE.'backend/database.php';
include  $BASE.'backend/timeAgo.php';
include $BASE.'backend/functions.php';

session_start();
ob_start();
// if(isset($_POST['action'])){
//   if($_POST['action'] == 'upload-file'){
require_once $BASE.'src/unicalCSphp/UploadFile.php';
  $destination = $BASE.'uploads/service/';
  // $max = 2000*1024;
try{
      $upload = new UploadFile($destination);
      $upload->setMaxSize((1024*100000));
      $upload->allowAllTypes('');
      $upload->upload();
      $result=$upload->getMessages();
      $Fname=$upload->getName();
      $FTname=$upload->getFTname();
      $FType=$upload->getFType();
    }catch(Exception $e){
    $result[]=$e->getMessage();
    // $Fname[]= $e->getMessage();
    }
foreach ($result as $key){
           $msg = $key;   
            } 
foreach ($Fname as $key){
        echo  json_encode(array('location' => "../uploads/service/".$key));
            } 
// }
// }
?>
