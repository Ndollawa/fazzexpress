<?php
function timeAgo($time_ago){
$cur_time 	= time();
$time_elapsed 	= $cur_time - strtotime($time_ago);
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
// $weeks 		= round($time_elapsed / 604800);
// $months 	= round($time_elapsed / 2600640 );
// $years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
	$time_ago = "Just now";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		$time_ago =  "1 minute ago";
	}
	else{
		$time_ago = $minutes." minutes ago";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		$time_ago =  "1 hour ago";
	}else{
		$time_ago = $hours." hours ago";
	}
}
//Days
else if($days <= 7 && $days==1){
		$time_ago = "yesterday";
	}else{
    $time_ago = date("jS, M y, h:ia", strtotime($time_ago));
		// $timeAgo = $days." days ago";
	}
return $time_ago;
}

// //Weeks
// else if($weeks <= 4.3){
// 	if($weeks==1){
// 		$timeAgo = "1 week ago";
// 	}else{
// 		$timeAgo = $weeks." weeks ago";
// 	}
// }
// //Months
// else if($months <=12){
// 	if($months==1){
// 		$timeAgo = "1 month ago";
// 	}else{
// 		$timeAgo = $months." months ago";
// 	}
// }
// //Years
// else
// 	if($years==1){
// 		$timeAgo = "1 year ago";
// 	}else{
// 		$timeAgo = $years." years ago";
	
// } return $timeAgo;


// }

 function getTimeDifference($time) {
    $seconds = time() - strtotime($time);
  $year = floor($seconds /31556926);
  $months = floor($seconds /2629743);
  $week=floor($seconds /604800);
  $day = floor($seconds /86400); 
  $hours = floor($seconds / 3600);
  $mins = floor(($seconds - ($hours*3600)) / 60); 
  $secs = floor($seconds % 60);
 
 if($seconds < 3600 ) $time =($mins==1)?"Just now":$mins."m ago";
  else if($seconds < 86400) $time = ($hours==1)?$hours."hr ago":$hours."hrs ago";
  else if($seconds < 604800) $time = ($day==1)?$day."d ago":$day."d ago";
  else if($seconds < 2629743) $time = ($week==1)?$week." wk ago":$week." wks ago";
  else $time = date('M d, Y h:ia',strtotime($time));
  return $time; 
}




  function calculate_time_span($post_time)
  {  
  $seconds = time() - strtotime($post_time);
  $year = floor($seconds /31556926);
  $months = floor($seconds /2629743);
  $week=floor($seconds /604800);
  $day = floor($seconds /86400); 
  $hours = floor($seconds / 3600);
  $mins = floor(($seconds - ($hours*3600)) / 60); 
  $secs = floor($seconds % 60);
  if($seconds < 60) $time = "Just now";
  else if($seconds < 3600 ) $time =($mins==1)?$mins."m":$mins."m ago";
  else if($seconds < 86400) $time = ($hours==1)?$hours."hr ago":$hours."hrs ago";
  else if($seconds < 604800) $time = ($day==1)?$day." day ago":$day." days ago";
  else if($seconds < 2629743) $time = ($week==1)?$week."wk ago":$week."wks ago";
  else if($seconds < 31556926) $time =($months==1)? $months."mth ago":$months."mths ago";
  else $time = ($year==1)? $year."yr ago":$year."yrs ago";
  return $time; 
  }  
 function msg_time_span($sent_time)
  {  
  $seconds = time() - strtotime($sent_time);

  $day = floor($seconds /86400); 
  $hours = floor($seconds / 3600);
  $mins = floor(($seconds - ($hours*3600)) / 60); 
  $secs = floor($seconds % 60);
  if($seconds < 60) $time = "Just now";
  else if($seconds < 3600 ) $time =($mins==1)?$mins."min":$mins." mins ago";
  else if($seconds < 86400) $time = ($hours==1)?$hours." hour ago":$hours." hours ago";
  else if($seconds < 604800) $time = ($day==1)?" yesterday ".date('h:ia',strtotime($sent_time)):date('D j ,H:ia',strtotime($sent_time));
  else {$time = date('d-m-Y, h:ia',strtotime($sent_time));
  }
  return $time; 
  }  


?>
