<?php 
 $output ="";
// include __DIR__.'/../../backend/database.php';
// include __DIR__.'/../../backend/functions.php';
// include __DIR__.'/../../backend/timeAgo.php';
// include 'post-queries.php';
// session_start();
// ob_start();
	if(isset($_GET['label'])){
	$label = $database->escape_value($_GET['label']);
	// $_SESSION['post_id'] = $Dpost_id; 


 if (isset($_SESSION['user_id'])) {
 $user_id = $_SESSION['user_id'];
 }else{
 $user_id = "";	
 }


	// $key = $database->escape_value($_GET['search']);
	// $_SESSION['post_id'] = $Dpost_id;
	$filter = array("is","this","that","how","where","when","what","a","to","then","them","who","let","have","should","would","those","does","do","done","did","can","we","you","him","she","her","help","if","all","was","could","in","on","under","over","but");
	$key = explode(' ', $label);
	$x=0;
	$people_keyword = $post_keyword = $libMat_keyword = $Tvideos_keyword = $announcement_keyword ="";
	foreach ($key as $word) {
	if(!in_array($word, $filter)){
		$keywords[] = $word;
	foreach ($keywords as  $value) {
	
	if($x == 0){
$people_keyword .= " ACCOUNT_STATUS != 'Deleted' AND LOWER(FIRST_NAME) LIKE LOWER('%".$value."%') OR ACCOUNT_STATUS != 'Deleted'AND LOWER(MIDDLE_NAME) LIKE LOWER('%".$value."%') OR ACCOUNT_STATUS != 'Deleted' AND LOWER(LAST_NAME) LIKE LOWER('%".$value."%') "; 

$post_keyword .= " POST_STATUS = 'Published' AND LOWER(CONTENT) LIKE LOWER('%".$value."%') "; 

$Tvideos_keyword .= " CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(TITLE) LIKE LOWER('%".$value."%') OR CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(CATEGORY) LIKE LOWER('%".$value."%') OR CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(COURSE) LIKE LOWER('%".$value."%') OR CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(AUTHOR) LIKE LOWER('%".$value."%') OR CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(DESCRIPTION) LIKE LOWER('%".$value."%') ";

$libMat_keyword .= "  STATUS != 'Deleted' AND LOWER(TITLE) LIKE LOWER('%".$value."%') OR  STATUS != 'Deleted' AND LOWER(CATEGORY) LIKE LOWER('%".$value."%') OR  STATUS != 'Deleted' AND LOWER(COURSE) LIKE LOWER('%".$value."%') OR  STATUS != 'Deleted' AND LOWER(AUTHOR) LIKE LOWER('%".$value."%') OR  STATUS != 'Deleted' AND LOWER(DESCRIPTION) LIKE LOWER('%".$value."%') ";
$announcement_keyword .= " LOWER(NOTICE_TITLE) LIKE  LOWER('%".$value."%') AND STATUS != 'Deleted'  AND STATUS != 'In-active' OR LOWER(NOTICE) LIKE LOWER('%".$value."%') AND STATUS != 'Deleted' AND STATUS != 'In-active' ";
	}else{
		
$people_keyword .= " OR ACCOUNT_STATUS != 'Deleted' AND LOWER(FIRST_NAME) LIKE LOWER('%".$value."%') OR ACCOUNT_STATUS != 'Deleted'AND LOWER(MIDDLE_NAME) LIKE LOWER('%".$value."%') OR ACCOUNT_STATUS != 'Deleted' AND LOWER(LAST_NAME) LIKE LOWER('%".$value."%')"; 

$post_keyword .= " OR POST_STATUS = 'Published' AND LOWER(CONTENT) LIKE LOWER('%".$value."%')"; 

$Tvideos_keyword .= " OR CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(TITLE) LIKE LOWER('%".$value."%') OR CATEGORY = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(TYPE) LIKE LOWER('%".$value."%') OR TYPE = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(COURSE) LIKE LOWER('%".$value."%') OR TYPE = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(AUTHOR) LIKE LOWER('%".$value."%') OR TYPE = 'TUTORIAL VIDEOS' AND status != 'Deleted' AND LOWER(DESCRIPTION) LIKE LOWER('%".$value."%')";

$libMat_keyword .= " OR  STATUS != 'Deleted' LOWER(TITLE) LIKE LOWER('%".$value."%') OR  STATUS != 'Deleted' AND LOWER(CATEGORY) LIKE LOWER('%".$value."%') OR   STATUS != 'Deleted' LOWER(COURSE) LIKE LOWER('%".$value."%') OR  STATUS != 'Deleted' AND LOWER(AUTHOR) LIKE LOWER('%".$value."%') ";
$announcement_keyword .= " OR LOWER(NOTICE_TITLE) LIKE  LOWER('%".$value."%') AND STATUS = 'Active' AND STATUS != 'In-active' OR LOWER(NOTICE) LIKE LOWER('%".$value."%') AND STATUS != 'Deleted' AND STATUS != 'In-active'";
	}
$x++;
	}
	}
	}
$peoplesql= "SELECT * FROM users WHERE $people_keyword  ORDER BY id DESC"; 

$postsql= "SELECT * FROM posts WHERE $post_keyword ORDER BY post_id DESC"; 

$Tvideossql = "SELECT * FROM library WHERE $Tvideos_keyword ORDER BY id DESC ";

$libMatsql= "SELECT * FROM library WHERE $libMat_keyword ORDER BY id DESC ";
 $announcementSql ="SELECT * FROM notice_announcement WHERE ".$announcement_keyword."  ORDER BY ID DESC ";

}


// 	$columnset = array('id' =>'<input type="checkbox" id="selectAll"  name="selectAll">'
//  ,'count' => 'S/N'
//  ,'branch' => 'Branch Code '
//  ,'building' => 'Building/Block '
//  ,'region' => 'City/State/Zip'
//  ,'address' => 'Address '
//  ,'status' => 'Status'
//  ,'country' => 'Country '
//  ,'contact' => 'Contact '
//  ,'action' => '<span class="nobr">Action</span>');
// 								   $count++;
// 		switch ($status) {
// 		case 'active':
// 			$status ='<span class="btn btn-sm btn-success">'.$status.'</span>';
// 			break;
		
// 		case 'deactivated':
// 			$status ='<span class="btn btn-sm btn-warning">'.$status.'</span>';
// 			break;
// 		case 'deleted':
// 			$status ='<span class="btn btn-sm btn-danger">'.$status.'</span>';
// 			break;
// 		default:
// 			# code...
// 			break;
// 	}
// 							$numbers =preg_split("/,/",  preg_replace("/ /", "", $contact));
// 	foreach ($numbers as $number) {
// 								# code...
// 							$con .='<a href="tel:'.$number.' ">
// 									 '.$number.'
// 							</a>';}
// $data = array('id' => '<input type="checkbox" class="check" name="selectid[]" value="'.$branchID.'">','count' => $count
//  ,'branch' => $branch
//  ,'building' => $building
//  ,'region' =>$city.' / '.$state.' / '.$zip_code 
//  ,'address' => $address
//  ,'status' => $status
//  ,'country' => $country
//  ,'contact' => $con	
//  ,'action' => '<a href="edit_branch.php?edit='.$branchID.'"
// 									class="btn btn-primary btn-sm">
// 									<i class="fa fa-pencil"></i>
// 								</a>
// 								<button type="button" class="btn btn-danger btn-sm action-button delete-branch " title="Delete" data-action="delete-branch" data-branch_id="'.$branchID.'"><i class="fa fa-trash-o "></i>
// 							</button>');

			
// 							$response[] = $data;
// 															 }
// 															 foreach ($columnset as $key => $value) {
// 															 	$columns[] = array('field' => $key,'title' => $value);
// 															 }
// 							$output = array('columns' => $columns,'data'=>$response); 
// 									echo json_encode($output);

// 				}

?>