<?php
include __DIR__.'/../../backend/database.php';
include __DIR__.'/../../backend/functions.php';
include __DIR__.'/../../backend/timeAgo.php';
session_start();
use unicalCSphp\UploadFile;
if(isset($_POST['action'])) {

if ($_POST['action'] == 'getNotificationsCount') {
			$notificationCount = notificationCount($_SESSION['user_id']);
			echo $notificationCount;

			}
	if ($_POST['action'] == 'friendRequestCount') {
			$notificationCount = friendRequestCount($_SESSION['user_id']);
			echo $notificationCount;

			}
			if ($_POST['action'] == 'messagesCount') {
			$notificationCount = msgCount($_SESSION['user_id']);
			echo $notificationCount;

			}
if($_POST['action'] == 'Notifications'){
				$receiver_id = $_SESSION['user_id'];
				$sql = " SELECT * FROM notifications WHERE RECEIVER_ID ='".$receiver_id."' OR RECEIVER_ID = 0 ORDER BY NOTIME DESC ";
				$send = $database->query($sql);
				$result = $database->fetch_array($send);
				$rowCount = $database->num_rows($send);
				if($rowCount > 0){

					foreach ($send as $result) {
						$time = $result["NOTIME"];
						$field_id = $result['FIELD_ID'];
						$not_type = $result['NOT_TYPE'];
						$url = $result['NOT_URL'];
					if(!isset($url) && empty($url)){
						$url = 'javascript:;';
					}
							$output ='<li>
						<a href="'.$url.'"> <span class="time">'.getTimeDifference($time).'</span>'.$result["NOTIFICATION"].' ' ;
						echo $output;
					}
				}
			}
if($_POST['action'] == 'clear_not'){
				$receiver_id = $_POST['user_id'];
				$sql = " UPDATE notifications SET STATUS = 'read' WHERE RECEIVER_ID ='".$receiver_id."'";
				$send = $database->query($sql);

			}
			if($_POST['action'] == 'clear_msgCount'){
				$to_user_id = $_POST['to_user_id'];
				$sql = " UPDATE messages SET STATUS = 'read' WHERE TO_USER_ID ='".$_SESSION['user_id']."' AND USER_ID = $to_user_id";
				$send = $database->query($sql);
					$sql2 = " UPDATE msgnotifications SET STATUS = 'read' WHERE TO_USER_ID ='".$_SESSION['user_id']."' AND USER_ID = $to_user_id ";
				$send2 = $database->query($sql2);
			}

			if($_POST['action'] == 'msgNotifications'){
				$to_user_id = $_SESSION['user_id'];

				$sql = " SELECT * FROM msgnotifications WHERE TO_USER_ID ='".$to_user_id."' AND STATUS = 'unread' ORDER BY ID DESC  LIMIT 1";
				$send = $database->query($sql);
				$result = $database->fetch_array($send);
				$rowCount = $database->num_rows($send);
				$query = " SELECT * FROM msgnotifications WHERE TO_USER_ID ='".$to_user_id."' AND STATUS = 'unread' ORDER BY ID DESC ";
				$response = $database->query($query);
				$msgCount = $database->num_rows($response);
				if($rowCount > 0){

					foreach ($send as $result) {
						$sender = $result['USER_ID'];
						$time = $result["MSGTIME"];
$output =''.$result["NOTIFICATION"].'<span class="time">'.$date = getTimeDifference($time).'</span>
					</span>
					<span class="message"> '.strip_tags(substr($result['MSG_CONTENT'], 0, 50 )).'...</span>&ensp;&nbsp;<span class="badge badge-success" pull-right">'.$msgCount.'</span>
				</a>
			</li>' ;
						echo $output;
					}
				}
			}

if($_POST['action'] == 'getfriendrequest'){
				$receiver_id = $_SESSION['user_id'];
				$sql = " SELECT * FROM  friendrequest WHERE RECEIVER_ID ='".$receiver_id."' AND STATUS ='Active' ORDER BY ID DESC ";
				$send = $database->query($sql);
				$result = $database->fetch_array($send);
				$rowCount = $database->num_rows($send);
				if($rowCount > 0){

					foreach ($send as $result) {
						$time = $result["SENTIME"];
						$date = getTimeDifference($time);
						$output = ''.$result["NOTIFICATION"].'
							<span class="time">'.$date.' </span>
												</span>

											</a>
										</li>';
						echo $output;
					}
				}
			}








}

?>
