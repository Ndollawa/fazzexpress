<?php
include '../backend/database.php';
include '../backend/functions.php';
include '../backend/timeAgo.php';
session_start();
use unicalCSphp\UploadFile;

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

if(isset($_POST['action'])) {
if($_POST['action']== 'checkUsername'){
    $username = $_POST['username'];
      $sql="SELECT ID FROM users WHERE USERNAME = '{$username}'";
              $result= $db->query ($sql);
              $row= mysqli_fetch_array($result);
            if($row>0){
             $msg='<h4 style="margin:0 10px 0 10px;" class="alert alert-danger"><center>Username already taken!</center></h4>';
           echo $msg; }
            else{
              $msg='<h4 style="margin:0 10px 0 10px;" class="alert alert-info"><center>Username not taken!</center></h4>';
            echo $msg;}

	}

	
				if($_POST['action'] == 'getUser-panelDetails'){
					$user_id = $_SESSION['user_id'];
					$sql="SELECT * FROM users WHERE users.ID = {$user_id}";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
 if($row>0){
	foreach ($query as $row) {
				
	  $user_id = $row['ID'];
	  $firstname = $row['FIRST_NAME'];
	  $middlename = $row['MIDDLE_NAME'];
	  $lastname = $row['LAST_NAME'];
	  $dob = date('d-m-Y',strtotime($row['DOB']));
	  $gender =$row['GENDER'];
	  $address = $row['ADDRESS'];
	  $number = $row['TELEPHONE'];
	  $email = $row['EMAIL'];
	  $username = $row['USERNAME'];
	  $nationality =$row['NATIONALITY'];
	  $soo = $row['STATE_OF_ORIGIN'];
	  $lga = $row['L_G_A'];
	  $disability = $row['DISABILITY'];
	  $marital_status = $row['MARITAL_STATUS'];
	  $religion = $row['RELIGION'];
		$followerCount =$row['NO_OF_FOLLOWERS'];
		$friendsCount =$row['NO_OF_FRIENDS'];
		$quotes = $row['FAVOURITE_QUOTES'];
		$about_me = $row['ABOUT_ME'];
		$profilepic = $row['USER_IMAGE'];
// $level = $row['STUDENT_LEVEL'];
	  $educationalB =$row['EDUCATIONAL_BACKGROUND'];
	  $qualifications = $row['QUALIFICATIONS'];
	$user_account_type = $row['ACCOUNT_TYPE'];
	 $favoriteQ = $row['FAVOURITE_QUOTES'];
	  $fblink = $row['FACEBOOK_LINK'];
	   $twitterH = $row['TWITTER_HANDLE'];
	  $youtube =$row['YOUTUBE'];
	  $acctCreatedOn = $row['CREATED_TIME'];
	  $googleP = $row['GOOGLE+'];
	  $instaPage = $row['INSTAGRAM_PAGE'];
	  $git = $row['GITHUB'];	
	  $linkedin = $row['LINKED_IN'];
	  $profilePic = $row['USER_IMAGE'];}
	
	if($user_account_type == 'LECTURER' || $user_account_type == 'STAFF'){$path = 'lect/'; }else { $path = 'std/';}
			
			if($profilePic == ''){
				if($row['GENDER'] == "Male"){
$pic='<img src="../assets/images/usermale.png" class="img-responsive img-circle ">';}else{
$pic='<img src="../assets/images/userfemale.png" class="img-responsive img-circle ">';
}
			}else{
			$pic='<img src="../assets/images/'.$path.''.$profilePic .'" class="img img-circle img-responsive">';
			}
		$current_timestamp =strtotime(date('Y-m-d H:i:s'));
         $user_last_activity = fetch_user_last_activity($user_id);
	    //And the time the notification was set
	    $fromTime = strtotime($user_last_activity);
	    //Now calc the difference between the two
	    $timeDiff = floor(abs($current_timestamp - $fromTime) / 60);
	    //Now we need find out whether or not the time difference needs to be in
	    //minutes, hours, or days
 	if ($timeDiff < 10) {
 		$dot ='<i class="fa fa-circle user-online"></i>';
        $status =' <span class="txtOnline">Online</span>'; }
    elseif ($timeDiff > 10 && $timeDiff < 20) {
        $dot='<i class="fa fa-circle user-busystatus"></i>';
        $status='<span class="txtOnline">Busy</span>';}
    elseif ($timeDiff > 20 && $timeDiff < 40) {
     $dot =' <i class="fa fa-circle user-awaystatus"></i>'; 
       $status =' <span class="txtOnline">Away</span>'; }                    		        
	else{ $dot ='<i class="fa fa-circle user-offlinestatus"></i>';
	$status ='<span class="txtOnline">Offline</span>';}

					$output = '<div class="user-panel">
									<div class="pull-left image">
										'.$pic.'									</div>
									<div class="pull-left info">
										<p>'.getUsername($user_id).'</p>
										<a href="#">'.$dot.''.$status.'</a>
									</div>
								</div>';
								echo $output;
				
	}
}

if($_POST['action'] == "load-headerImage"){
	echo fetchUserpic($_SESSION['user_id']);
}

	if($_POST['action']== 'getuserpic'){
$user_id = $_SESSION['user_id'];
$sql = "SELECT USER_IMAGE, ACCOUNT_TYPE FROM users WHERE ID = '".$user_id."'";
	$result = $database->query($sql);
	$row = $database->fetch_array($result);
	foreach ($result as $row) {
			$user_account_type = $row['account_type'];
			$user_image = $row['user_image'];
		}
		$output = '<a class="profpic" href="../uploads/profile-pictures/'.fetchUserpic($user_id).'" data-lightbox="profpic" ><img src="../uploads/profile-pictures/'.fetchUserpic($user_id).'"class="img-responsive"  alt="" style="width:130px; height: 125px;"> </a>';
		echo $output;		
		}
	

	if($_POST['action'] == 'fetch_user'){
					$Suser_id = $_SESSION['user_id'];
					$perPage = 20;
					$userpage = 1;
					$sql = "SELECT * FROM users WHERE ID != $Suser_id AND ACCOUNT_STATUS != 'Deleted' ORDER BY ID DESC";
if(!empty($_POST["pagenum"])) {
$userpage = $_POST["pagenum"];
}

$start = ($userpage-1)*$perPage;
if($start < 0) $start = 0;

$query =  $sql." LIMIT ".$start." , ".$perPage; 
$result= $database->query($query);
$row = $database->fetch_array($result);
$rowCount = $database->num_rows($result);
$rows =$database->num_rows($database->query($sql));
$userpages  = ceil($rows/$perPage);
if($rows >0) {				
					foreach ($result as $row) {
					$user_id = $row['user_id'];
					$Username = $row['username'];
					$user_account_type = $row['account_type'];
					 $sql ="SELECT COUNT(ID) as total FROM follow WHERE FOLLOWING ='".$user_id."' AND STATUS = 'true' ";
							 $result =$database->query($sql);
							 $row=$database->fetch_array($result);
							 foreach ($result as $row) {
							$noOfFollowers =  $row['total'];
							 }
					
										echo '<div class="row">
											<div class="patient-img">
										<a href="user_profile.php?uid='.$user_id.'&name='.getName($user_id).'">'.getUserPic($user_id).'</a></div>
										&ensp;<h5><strong> '.getName($user_id).'</strong></h5><div class="col-md-12" style="margin-top:-20px; margin-left:0px;">
										<center><a href="user_profile.php?uid='.$user_id.'"><h5> @'.$Username.'</h5></a></center></div></div>
										<center><div  style="justify-content:center; "><div id="user'.$user_id.'" >
										<div style=" style="margin:0px;" >'.make_follow_button($Suser_id,$user_id).'</div><br/>
										 <span style=" padding: 5px 10px;" class="bg bg-success">'.$noOfFollowers.' Follower(s)</span></div></div></div></div>
										<hr/></center>';
############################################################################################
							 	// echo '<div class="row">
									// 		<div class="patient-img">
									// 	<a href="user_profile.php?uid='.$user_id.'">'.getUserPic($user_id).'</a></div>
									// 	&ensp;<h5><strong> '.getName($user_id).'</strong></h5><div class="col-md-12" style="margin-top:-20px;margin-left:40px;">
									// 	<a href="user_profile.php?uid='.$user_id.'"><h5> @'.$Username.'</h5></a></div></div>
									// 	<div ><div id="user'.$user_id.'" >
									// 	'.make_follow_button($Suser_id,$user_id, 2).'
									// 	 <span style="border-radius:0 15px 15px 0 ; padding: 1px 8px;" class="bg bg-success">'.$noOfFollowers.' Follower(s)</span></div></div></div></div>
									// 	<hr/>';
							}

							if($userpages >1){
				$output = '<center><button type="button" class=" btn-sm btn-success finduser" style margin-right:20px;" data-userpagenum="'.($userpage-1).'" data-total_userpage="'.$userpages.'"><i class="fa fa-backward"></i></button>
				<button type="button" class=" btn-sm btn-success finduser" style margin-right:20px;" data-userpagenum="'.($userpage+1).'" data-total_userpage="'.$userpages.'"><i class="fa fa-forward"></i></button></center>';
				echo $output;}	
						
			}
}

if($_POST['action']=='load-followbtn'){
 				$following = $_POST['following'];
 				$user_id =$_SESSION['user_id'];
 				 $sql ="SELECT COUNT(ID) as total FROM follow WHERE FOLLOWING ='".$following."' AND STATUS = 'true' ";
							 $result =$database->query($sql);
							 $row=$database->fetch_array($result);
							 foreach ($result as $row) {
							$noOfFollowers =  $row['total'];
							 }
					echo '
										<div style=" style="margin:0px;" >'.make_follow_button($user_id,$following ).'</div><br/>
										 <span style=" padding: 5px 10px;" class="bg bg-success">'.$noOfFollowers.' Follower(s)</span></div>';
				}

			

if ($_POST['action'] == 'getUserGallery') {
	$file = array();
	$type = array();
	$sql="SELECT * FROM postfiles WHERE USER_ID = '".$_SESSION['user_id']."' ORDER BY ID DESC LIMIT 12";
                            	$result= $database->query($sql);
                            	$row = $database->num_rows($result);
                            	foreach ($result as $row) {
                            		$file = $row['POST_FILE'];
                            		$type = $row['POSTFILE_TYPE'];
                            		if (in_array($type,$imageTypes) && $file != ""){
                            	
                         $output = '<div class="col-2 col-sm-3 img-gallery">
                                    <div class="gallery-tem">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="../assets/images/timeline/'.$file.'"><img   class="" src="../assets/images/timeline/'.$file.'" alt="" width="" height="90">  </a>
                                        </figure>
                                    </div>
                                </div>';
                               echo $output;
                                }	 
                            		}
                            		

			}


if ($_POST['action'] == 'load-view-galleryModal') {
echo "<div class='card-body'><div class='' id='view-galleryDisplay'></div></div>";
}


if ($_POST['action'] == 'load-view-gallery') {
	$file = array();
	$type = array();
	$gallerytype = $_POST['type'];
	$user_id = $_POST['user_id'];
	$perPage = 30;
$page = 1;
if(!empty($_POST["pagenum"])) {
$page = $_POST["pagenum"];
}

$start = ($page-1)*$perPage;
if($start < 0) $start = 0;


	if($gallerytype === 'user-profile'){
	$sql="SELECT * FROM postfiles WHERE USER_ID = '".$user_id."' ORDER BY ID DESC";
                            		$q = $database->query($sql);
$query =  $sql." LIMIT ".$start." , ".$perPage; 
$result= $database->query($query);
$row = $database->fetch_array($result);
$rowCount = $database->num_rows($result);
 $rows =$database->num_rows($q);
 $pages  = ceil($rows/$perPage);

                            	if($rows > 0){
                            		$output = "<div class='row' >";
                            	foreach ($result as $row) {
                            		$file = $row['POST_FILE'];
                            		$type = $row['POSTFILE_TYPE'];
                            		if (in_array($type,$imageTypes) && $file != ""){
                            	
                         $output .= '<div class="col-lg-2 col-md-3 col-sm-4 img-gallery">
                                    <div class="gallery-tem">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="../assets/images/timeline/'.$file.'"><img   class="" src="../assets/images/timeline/'.$file.'" alt="" style="width:100%; height:100px; vertical-align:middle;">  </a>
                                        </figure>
                                    </div>
                                </div>';
                                }elseif (in_array($type,$videoTypes) && $file != "") {
                                	  $output .= '<div class="col-lg-2 col-md-3 col-sm-4">
                                    <div class="gallery-item">
                                    	<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" preload="metadata" controls="controls" src="../assets/images/timeline/'.$file.'"  ></video></div>
                                        
                                    </div>
                                </div>';
                                }	 
                            		}
                            		$output .="</div>";
                            		if($pages >1){
				$output .='<center><button type="button" class=" btn btn-primary view-gallerypager" data-user_id="'.$user_id.'" data-gallerytype="'.$gallerytype.'" style margin-right:20px;" data-pagenum="'.($page-1).'" data-total_page="'.$pages.'">Prev</button>
				<button type="button" class="btn btn-primary view-gallerypager" data-user_id="'.$user_id.'" data-gallerytype="'.$gallerytype.'" style margin-right:20px;" data-pagenum="'.($page+1).'" data-total_page="'.$pages.'">Next</button></center>';
				}
                            	
                               echo $output;}
                            		}elseif ($gallerytype == 'blogpage') {
        $sql="SELECT * FROM blog_postfiles WHERE USER_ID = '".$user_id."' ORDER BY ID DESC";
                            		$q = $database->query($sql);
$query =  $sql." LIMIT ".$start." , ".$perPage; 
$result= $database->query($query);
$row = $database->fetch_array($result);
$rowCount = $database->num_rows($result);
 $rows =$database->num_rows($q);
 $pages  = ceil($rows/$perPage);

                            	if($rows > 0){
                            		$output = "<div class='row' >";
                            	foreach ($result as $row) {
                            		$file = $row['POST_FILE'];
                            		$type = $row['POSTFILE_TYPE'];
                            		if (in_array($type,$imageTypes) && $file != ""){
                            	
                         $output .= '<div class="col-lg-2 col-md-3 col-sm-4 img-gallery">
                                    <div class="gallery-tem">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="../assets/images/blog/timeline/'.$file.'"><img   class="" src="../assets/images/blog/timeline/'.$file.'" alt="" style="width:100%; height:100px; vertical-align:middle;">  </a>
                                        </figure>
                                    </div>
                                </div>';
                                }elseif (in_array($type,$videoTypes) && $file != "") {
                                	  $output .= '<div class="col-lg-2 col-md-3 col-sm-4">
                                    <div class="gallery-item">
                                    	<div class="embed-responsive embed-responsive-16by9"><video class="embed-responsive-item" preload="metadata" controls="controls" src="../assets/images/blog/timeline/'.$file.'"  ></video></div>
                                        
                                    </div>
                                </div>';
                                }	 
                            		}
                            		$output .="</div>";
                            		if($pages >1){
				$output .='<center><button type="button" class=" btn btn-primary view-gallerypager" data-user_id="'.$user_id.'" data-gallerytype="'.$gallerytype.'" style margin-right:20px;" data-pagenum="'.($page-1).'" data-total_page="'.$pages.'">Prev</button>
				<button type="button" class="btn btn-primary view-gallerypager" data-user_id="'.$user_id.'" data-gallerytype="'.$gallerytype.'" style margin-right:20px;" data-pagenum="'.($page+1).'" data-total_page="'.$pages.'">Next</button></center>';
				}
                            	
                               echo $output;}
                            		}

			}


}


?>