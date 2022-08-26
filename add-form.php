<?php
// include_once 'backend/timeAgo.php';
//add student form
use unicalCSphp\UploadFile;
$msg ="";
$Fname= array();
$result= array();
$status = array();






if (isset($_POST['addservice-Submit'])){
$destination = '../uploads/service/';
$cover_image = $s_video ="";
  $stitle = $database->escape_value($_POST['stitle']);
  $sdescription= $database->escape_value($_POST['sdescription']);
  $shighlight = $database->escape_value($_POST['shighlight']);
  $scontent = $database->escape_value($_POST['scontent']);
  // $zip_code =$database->escape_value($_POST['zip-code']);
  // $country= $database->escape_value($_POST['country']);
  // $number = $database->escape_value($_POST['number']);
$shighlight = preg_replace("[</p>]","",preg_replace("[<p>]","",$shighlight,1),1);
// print_r($_FILES);
if(!empty($stitle) && !empty($sdescription) ){
        if(!empty($_FILES['cover-image'])){
         $file = uploadfile($destination,(1024*999954),null,$_POST['cover-image']);
                    $file = json_decode($file);
                    // print_r($file);
                    $status = $file[0];
                    for ($i=0; $i < count($file[2]) ; $i++) {
                     if($status[$i] == 'Success'){
                   $cover_image = $database->escape_value($file[2][$i]);
                     }elseif($status[$i] == "Error"){

                    $msg = $file[1][$i];
                    echo '<script> alert('.$msg.');</script>';

                     }
                    }
                    unset($_FILES['cover-image']);
        }



        if(!empty($_FILES['svideo'])){
 $file = uploadfile($destination,(1024*999954),null,$_POST['svideo']);
            $file = json_decode($file);
            $status = $file[0];
            for ($i=0; $i < count($file[2]) ; $i++) {
             if($status[$i] == 'Success'){
           $s_video = $database->escape_value($file[2][$i]);
             }elseif($status[$i] == "Error"){

            $msg = $file[1][$i];
            echo '<script> alert('.$msg.');</script>';

             }
            }
          
}
               $sql= "INSERT INTO service (title ,description,highlights ,page_content ,cover_image,service_video) VALUES('$stitle', '$sdescription', '$shighlight','$scontent','$cover_image','$s_video')";
               $result= $database->query ($sql);

                    $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  New record created successfully <i class=" icon-holder fa fa-check f-left" style="color:green;"></i></center></h5>';

      }else {
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h5>';
   }
 }


if (isset($_POST['editservice-Submit'])){
  $cover_image = $s_video ="";
$destination = '../uploads/service/';
  $stitle = $database->escape_value($_POST['stitle']);
  $sdescription= $database->escape_value($_POST['sdescription']);
  $shighlight = $database->escape_value($_POST['shighlight']);
  $scontent = $database->escape_value($_POST['scontent']);
  $id =$database->escape_value($_GET['edit']);
  // $country= $database->escape_value($_POST['country']);
  // $number = $database->escape_value($_POST['number']);


echo $shighlight = preg_replace("[</p>]","",preg_replace("[<p>]","",$shighlight,1),1);
if(!empty($stitle) && !empty($sdescription)){
        if(isset($_FILES['cover-image']) && !empty($_FILES['cover-image'])){
         $file = uploadfile($destination,(1024*999954),null,$_FILES['cover-image']);
                    $file = json_decode($file);
                    $status = $file[0];
                    for ($i=0; $i < count($file[2]) ; $i++) {
                     if($status[$i] == 'Success'){
                   $cover_image = $database->escape_value($file[2][$i]);
                  $sql = "SELECT cover_image FROM service WHERE id = $id ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
    if(!empty($obj)){
  $obj = $row['cover_image'];
  deleteFile($obj,$destination);}
}

                     }elseif($status[$i] == "Error"){

                    $msg = $file[1][$i];
                    echo '<script> alert('.$msg.');</script>';

                     }
                    }
                    unset($_FILES['cover-image']);
        }



        if(!empty($_FILES['svideo'])){
 $file = uploadfile($destination,(1024*999954),null,$_FILES['svideo']);
            $file = json_decode($file);
            $status = $file[0];
            for ($i=0; $i < count($file[2]) ; $i++) {
             if($status[$i] == 'Success'){
           $s_video = $database->escape_value($file[2][$i]);

            $sql = "SELECT service_video FROM service WHERE id = $id ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
  $obj = $row['service_video'];
  if(!empty($obj)){
  deleteFile($obj,$destination);}
}

             }elseif($status[$i] == "Error"){

            $msg = $file[1][$i];
            echo '<script> alert('.$msg.');</script>';

             }
            }
          
}
               $sql= "UPDATE service SET title = '$stitle',description ='$sdescription',highlights = '$shighlight',page_content = '$scontent'";
               if(!empty($cover_image)){$sql .= ",cover_image ='$cover_image'";}
               if(!empty($s_video)){$sql .= ",service_video ='$s_video'";}
               $sql .=" WHERE id = $id";
               $result= $database->query ($sql);

                    $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  Record updated successfully <i class=" icon-holder fa fa-check f-left" style="color:green;"></i></center></h5>';

      }else {
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h5>';
   }
 }
if (isset($_POST['addbranch-Submit'])){

  $address = $database->escape_value($_POST['address']);
  $location= $database->escape_value($_POST['branch-location']);
  $city = $database->escape_value($_POST['city']);
  $state = $database->escape_value($_POST['state']);
  $zip_code =$database->escape_value($_POST['zip-code']);
  $country= $database->escape_value($_POST['country']);
  $number = $database->escape_value($_POST['number']);
  $sql = $database->query("SELECT id FROM branches ORDER BY id DESC LIMIT 1 ");
  $row = $database->fetch_array($sql);
  if($row != 0){
  foreach ($sql as $row) {
    $brId = $row['id'];
  }}else{
    $brId = 0;
  }
  $branch_code = 'FE|BR'.$zip_code.'|'.($brId+1);
$country = ucfirst($country);
$state = ucfirst($state);
$city = ucfirst($city);

if(!empty($location) && !empty($city) && !empty($state) && !empty($country)  && !empty($number) && is_numeric($number) ){

               $sql= "INSERT INTO branches (branch_code,building ,address,city,state,zip_code,country,contact,status) VALUES('$branch_code', '$location', '$city','$city','$state','$zip_code','$country','$number', 'active')";
               $result= $database->query ($sql);

                    $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  New record created successfully <i class=" icon-holder fa fa-check f-left" style="color:green;"></i></center></h5>';

      }else {
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h5>';
   }
 }


if (isset($_POST['editbranch-Submit'])){

  $address = $database->escape_value($_POST['address']);
  $location= $database->escape_value($_POST['branch-location']);
  $city = $database->escape_value($_POST['city']);
  $state = $database->escape_value($_POST['state']);
  $zip_code =$database->escape_value($_POST['zip-code']);
  $country= $database->escape_value($_POST['country']);
  $number = $database->escape_value($_POST['number']);

    $brId = $database->escape_value($_GET['edit']);

  // $branch_code = 'FE|BR'.$zip_code.'|'.($brId+1);
$country = ucfirst($country);
$state = ucfirst($state);
$city = ucfirst($city);
if(!empty($location) && !empty($city) && !empty($state) && !empty($country)  && !empty($number) && is_numeric($number) ){

               $sql= "UPDATE branches SET building =  '$location' ,address = '$address',city = '$city',state = '$state',zip_code = '$zip_code',country = '$country',contact = '$number',status = 'active' WHERE id = $brId";
               $result= $database->query ($sql);
               if($result){
                    $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  Record updated successfully <i class=" icon-holder fa fa-check f-left" style="color:green;"></i></center></h5>';
                }
      }else {
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h5>';
   }
 }


if (isset($_POST['add-newUser'])){

  $destination = '../uploads/profile-pictures/';
  $username = $database->escape_value($_POST['username']);
  $password = $database->escape_value($_POST['password']);
  $password2 = $database->escape_value($_POST['confirmpassword']);
  $account_type= $database->escape_value($_POST['account-type']);
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
  $number = implode(",", $_POST['number']);
  $branch = $database->escape_value($_POST['staff-branch']);
  $email = $database->escape_value($_POST['email']);
  $regDate = date('Y-m-d',strtotime($_POST['join-date']));


$firstname = ucfirst($firstname);
$middlename = ucfirst($middlename);
$lastname = ucfirst($lastname);
$regDate = date('Y-m-d');
 // echo $password." ".$password2;
if(!empty($username) && !empty($password) && !empty($firstname)  && !empty($lastname) && !empty($gender)  && !empty($email) && !empty($regDate) && !empty($dob) && !empty($address) && !empty($branch)){


  if($password === $password2){
    // print_r($_FILES);
 $file = uploadfile2($destination);
            $file = json_decode($file);
            // print_r($file);
            $status = $file[0];
            for ($i=0; $i < count($file[2]) ; $i++) {
             if($status[$i] == 'Success'){
            $user_image = $database->escape_value($file[2][$i]);
             }elseif($status[$i] == "Error"){

            $msg = $file[1][$i];
            echo '<script> alert('.$msg.');</script>';

             }
            }
           $password= password_hash($password, PASSWORD_BCRYPT);
              $sql="SELECT id FROM users WHERE username = '{$username}'";
              $result= $database->query ($sql);
              $row= $database->fetch_array($result);
            if($row>0){
               $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>ALERT!! Username already exist.</center></h5>';
               // exit;
            }
            else{


               $sql= "INSERT INTO users (first_name ,middle_name,last_name,gender,dob,branch,username,password ,email,address,contact_no ,account_type,user_role,marital_status,religion,country,state,lga,about_me,user_image ,joined_date ) VALUES('$firstname', '$middlename', '$lastname','$gender',  '$dob','$branch','$username','$password','$email','$address','$number','$account_type','$user_role','$marital_status','$religion','$nationality','$state_of_origin','$lga','','$user_image','$regDate' )";
               $result= $database->query ($sql);

$date  = date('Y-m-d');


                    $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  New record created successfully <i class=" icon-holder fa fa-check f-left" style="color:green;"></i></center></h5>';
                }

      }else {
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>ALERT!! Passpword mismatch.. Retype passwords correctly.</center></h5>';
         }
       }else{
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>ALERT!! Please fill the form correctly.</center></h5>';
         }

 }

if(isset($_POST['edituser'])){
// echo "clicked";
  $destination = '../uploads/profile-pictures/';
  $username = $database->escape_value($_POST['username']);
  $password = $database->escape_value($_POST['password']);
  $password2 = $database->escape_value($_POST['confirmpassword']);
  $account_type= $database->escape_value($_POST['account-type']);
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
  $number = implode(",", $_POST['number']);
  $branch = $database->escape_value($_POST['staff-branch']);
  $email = $database->escape_value($_POST['email']);
  $regDate = date('Y-m-d',strtotime($_POST['join-date']));
 $user_id = $database->escape_value($_GET['edit']);
$username = strtolower($username);
$firstname = ucfirst($firstname);
$middlename = ucfirst($middlename);
$lastname = ucfirst($lastname);

 // echo $password." ".$password2;
if(!empty($username) && !empty($firstname)  && !empty($lastname) && !empty($gender)  && !empty($email) && !empty($dob) && !empty($address) && !empty($branch)){



 $file = uploadfile2($destination);
            $file = json_decode($file);
            $status = $file[0];
            for ($i=0; $i < count($file[2]) ; $i++) {
             if($status[$i] == 'Success'){
           $user_image = $database->escape_value($file[2][$i]);
             }elseif($status[$i] == "Error"){

            $msg = $file[1][$i];
            echo '<script> alert('.$msg.');</script>';

             }
            }
           $password= password_hash($password, PASSWORD_BCRYPT);


               $sql= "UPDATE users SET first_name = '$firstname' ,middle_name = '$middlename',last_name = '$lastname',gender = '$gender',dob = '$dob',branch = '$branch',username = '$username'";
                if(isset($password) && !empty($password) && $password == $password2){
                      $sql .="password = '$password',";}
if(isset($user_image) && $user_image != ""){
                      $sql .=", user_image = '$user_image'";};
                      $sql .=",email = '$email',address = '$address',contact_no = '$number' ,account_type = '$account_type',user_role = '$user_role',marital_status = '$marital_status',religion = '$religion',country = '$nationality',state = '$state_of_origin',lga = '$lga' WHERE id = $user_id";
               $result= $database->query ($sql);

if($result){
                    $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  Record updated successfully <i class=" icon-holder fa fa-check " style="color:green;"></i></center></h5>';
}

       }else{
           $msg ='<h5 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>ALERT!! Please fill the form correctly.</center></h5>';
         }

 }





if(isset($_POST['addparcel'])){
// print_r($_POST);
  $destination = '../uploads/parcel-pictures/';
 $s_name = ucfirst($database->escape_value($_POST['s-name']));
  $s_contact= $database->escape_value($_POST['s-contact']);
  if(!empty($_POST['s-contact2'])){
    $s_contact = $database->escape_value($s_contact.','.$_POST['s-contact2']);
  }
  $s_email= $database->escape_value($_POST['s-email']);
  $s_address = $database->escape_value($_POST['s-address']);

 $r_name = ucfirst($database->escape_value($_POST['r-name']));
  $r_contact= $database->escape_value($_POST['r-contact']);
  if(!empty($_POST['r-contact2'])){
    $r_contact = $database->escape_value($r_contact.','.$_POST['r-contact2']);
  }
  $r_email= $database->escape_value($_POST['r-email']);
  $r_address = $database->escape_value($_POST['r-address']);

  $deliveryoptions = $database->escape_value($_POST['deliveryoptions']);
  $b_processed = $database->escape_value($_POST['b-processed']);
  if(isset($_POST['closestbranch'])){
  $closestbranch = $database->escape_value($_POST['closestbranch']);}else{
    $closestbranch = "";
  }
  $weight = $_POST['weight'];
  $height = $_POST['height'];

  $length = $_POST['length'];
  $width = $_POST['width'];
  $pworth = $_POST['pworth'];
  $delivery_class = $database->escape_value($_POST['delivery-class']);
  $shipment_type = $database->escape_value($_POST['shipment-type']);
  if(isset($_POST['deliveryaddress'])){
  $deliveryaddress = $database->escape_value($_POST['deliveryaddress']);}else{
    $deliveryaddress = "";
  }
  $shipmentfee = $_POST['price'];
  $branchID= $database->escape_value($_POST['branchID']);
  $sql = $database->query("SELECT branch_code FROM branches WHERE id = $branchID ORDER BY id  LIMIT 1 ");
  $row = $database->fetch_array($sql);
  foreach ($sql as $row) {
  $branch_code = $row['branch_code'];
  }

  if( !empty($r_name) && !empty($r_address) && !empty($r_contact) && !empty($s_name)  &&!empty($s_contact) && !empty($s_address) && !empty($deliveryoptions) && !empty($shipmentfee) && !empty($weight) && !empty($height) && !empty($length)  &&!empty($width) && !empty($shipment_type)){
    // exit;
$parcel_image = "";
 $file = uploadfile2($destination);
            $file = json_decode($file);
            $status = $file[0];
            for ($i=0; $i < count($file[2]) ; $i++) {
             if($status[$i] == 'Success'){
             $parcel_image = $file[2][$i];
             }elseif($status[$i] == "Error"){

            $msg = $file[1][$i];
            echo '<script> alert('.$msg.');</script>';

             }
            }
            $count = 0;
          $p = count($weight);
for ($i=0; $i <$p ; $i++) {
while($count == 0){
  // 999999999)
  $refNo =sprintf("%'012d",mt_rand(0,999999999999999));
  $refId = $refNo;
  $check = "SELECT * FROM parcels WHERE reference_number = '".$refId."'";
  $query = $database->query($check);
  $r = $database->num_rows($query);
  if($r == 0){
    $count++;
  }
}
$shipmentfee[$i];
  $sql = "INSERT INTO parcels (reference_number, sender_name,sender_address,sender_contact ,sender_email,recipient_name ,recipient_address,recipient_contact,recipient_email ,shipment_type,delivery_class,delivery_type,from_branch_id ,to_branch_id ,weight ,height ,width,length ,price,parcel_worth,parcel_image)
 VALUES('$refId','$s_name','$s_address','$s_contact','$s_email','$r_name','$r_address','$r_contact','$r_email','$shipment_type','$delivery_class','$deliveryoptions','$b_processed','$closestbranch','".$weight[$i]."','".$height[$i]."','".$width[$i]."','".$length[$i]."','".$shipmentfee[$i]."','".$pworth[$i]."','$parcel_image')";
  $send = $database->query ($sql);
  $parcel_id = $database->insert_id();

if($send){
    $qry = "SELECT * FROM shipment_tracks WHERE status = 'Accepted' AND parcel_id = '$parcel_id'";
  $sqlq = $database->query($qry);
  $res = $database->num_rows($sqlq);
  $location = $_SESSION['branchID'];
  if($res == 0){
  $sql="INSERT INTO shipment_tracks (parcel_id,current_location,status) VALUES('$parcel_id','$location','Accepted') ";
$query = $database->query($sql);}}}
       $msg ='<h4 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  New record created successfully <i class=" icon-holder fa fa-check f-left" style="color:green;"></i></center></h4>';

 }else {
           $msg ='<h4 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h4>';
   }
 }


if(isset($_POST['editparcel'])){
// print_r($_POST);
  $destination = '../uploads/parcel-pictures/';
  // $parcel_id = $database->escape_value($_GET['edit']);
 $s_name = ucfirst($database->escape_value($_POST['s-name']));
  $s_contact= $database->escape_value($_POST['s-contact']);
  if(!empty($_POST['s-contact2'])){
    $s_contact = $database->escape_value($s_contact.','.$_POST['s-contact2']);
  }
  $s_email= $database->escape_value($_POST['s-email']);
  $s_address = $database->escape_value($_POST['s-address']);

 $r_name = ucfirst($database->escape_value($_POST['r-name']));
  $r_contact= $database->escape_value($_POST['r-contact']);
  if(!empty($_POST['r-contact2'])){
    $r_contact = $database->escape_value($r_contact.','.$_POST['r-contact2']);
  }
  $r_email= $database->escape_value($_POST['r-email']);
  $r_address = $database->escape_value($_POST['r-address']);
  $parcel_id = $database->escape_value($_GET['edit']);
  $deliveryoptions = $database->escape_value($_POST['deliveryoptions']);
  $b_processed = $database->escape_value($_POST['b-processed']);
    if(isset($_POST['closestbranch'])){
  $closestbranch = $database->escape_value($_POST['closestbranch']);}else{
    $closestbranch = "";
  }
  if(isset($_POST['deliveryaddress'])){
  $deliveryaddress = $database->escape_value($_POST['deliveryaddress']);}else{
    $deliveryaddress = "";
  }
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $length = $_POST['length'];
  $width = $_POST['width'];
  $pworth = $_POST['pworth'];
  // $deliveryaddress = $database->escape_value($_POST['deliveryaddress']);
  $shipmentfee = $_POST['price'];
  $delivery_class = $database->escape_value($_POST['delivery-class']);
  $shipment_type = $database->escape_value($_POST['shipment-type']);
  $branchID= $database->escape_value($_POST['branchID']);
  $sql = $database->query("SELECT branch_code FROM branches WHERE id = $branchID ORDER BY id  LIMIT 1 ");
  $row = $database->fetch_array($sql);
  foreach ($sql as $row) {
  $branch_code = $row['branch_code'];
  }

  if( !empty($r_name) && !empty($r_address) && !empty($r_contact) && !empty($s_name)  &&!empty($s_contact) && !empty($s_address) && !empty($deliveryoptions) && !empty($shipmentfee) && !empty($weight) && !empty($height) && !empty($length)  &&!empty($width) && !empty($shipment_type)){

    // exit;
 $file = uploadfile2($destination);
            $file = json_decode($file);
            $status = $file[0];
            for ($i=0; $i < count($file[2]) ; $i++) {
             if($status[$i] === 'Success'){
             $parcel_image = $file[2][$i];
             }elseif($status[$i] === "Error"){

            $msg = $file[1][$i];
            echo '<script> alert('.$msg.');</script>';

             }
            }
            $count = 0;
         $p = count($weight);
for ($i=0; $i <$p ; $i++) {
// while($count == 0){
//    // 999999999)
//   $refNo =sprintf("%'012d",mt_rand(0,999999999999999));
//   $refId = $refNo;
//   $check = "SELECT * FROM parcels WHERE reference_number = '".$refId."'";
//   $query = $database->query($check);
//   $r = $database->num_rows($query);
//   if($r == 0){
//     $count++;
//   }
// }

  $sql = "UPDATE parcels SET  sender_name = '$s_name',sender_address = '$s_address',sender_contact = '$s_contact' ,sender_email = '$s_email',recipient_name  = '$r_name',recipient_address = '$r_address',recipient_contact = '$r_contact',recipient_email  = '$r_email',shipment_type = '$shipment_type',delivery_class = '$delivery_class',delivery_type = '$deliveryoptions',from_branch_id  = '$b_processed',to_branch_id = '$closestbranch' ,weight  = '".$weight[$i]."',height  = '".$height[$i]."',width = '".$width[$i]."',length  = '".$length[$i]."',price = '".$shipmentfee[$i]."',parcel_worth = '".$pworth[$i]."'";
  if(isset($parcel_image) && $parcel_image != ""){
                      $sql .=", parcel_image = '$parcel_image'";}
                      $sql .= " WHERE id = '".$parcel_id."'" ;
  $send = $database->query ($sql);
}
// echo  $sql;
if($send){

       $msg ='<h4 style="margin:0 5px 0 5px;" class="alert alert-success"><center>  Record updated successfully <i class=" icon-holder fa fa-check" style="color:green;"></i></center></h4>';
}
 }else {
           $msg ='<h4 style="margin:0 5px 0 5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h4>';
   }
 }

?>