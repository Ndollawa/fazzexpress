<?php
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out

// Keep in mind when working with sessions that it is generally
// inadvisable to store DB-related objects in sessions
require_once('database.php');
class Session {

	private $logged_in=false;
	public $user_id;
	public $message;
	protected $password;
  protected $username;
  protected $user=false;
	function __construct() {
		session_start();
    ob_start();
		$this->check_message();
		$this->check_login();
    if($this->logged_in) {
      // actions to take right away if user is logged in
       // actions to take right away if user is not logged in
   //    if($_SERVER['SCRIPT_NAME'] === 'login.php');{
   // header ("location:profile.php");
   //    exit();}
    } else {
      // actions to take right away if user is not logged in
//       if($_SERVER['SCRIPT_NAME'] == 'index.php' || $_SERVER['SCRIPT_NAME'] == 'login.php' );{
// header("Location:../index.php");
//     exit();}
    }
	}

  public function is_logged_in() {
    return $this->logged_in;
  }

	public function login($username,$password) {
    // database should find user based on username/password
    global $database;
    $username= strtolower($username);
     $sql  = "SELECT * FROM users ";
    $sql .= " WHERE LOWER(username) ='{$username}' ";
    // $sql .= "AND PASSWORD = '{$pssword}' ";
    $sql .= "LIMIT 1";
      $result= $database->query ($sql);
      $row = $database->fetch_array($result);
      if($row>0){
      foreach ($result as $row) {
      $user_id = $row['id'];
      $username = $row['username'];
      $user_password = $row['password'];
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $user_email = $row['email'];
      $user_acctStatus = $row['status'];
      $user_phone_no = $row['contact_no'];
      $user_account_type = $row['account_type'];
      $user_role = $row['user_role'];
      $branchId = $row['branch'];
    }

      $password = password_verify($password, $user_password);
       if($password==$user_password){
        $this->user = true;
              $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                $_SESSION['user_account_type'] = $user_account_type;
                $_SESSION['user_role'] = $user_role;
                $_SESSION['branchID'] = $branchId;
                $_SESSION['fullname'] = $first_name." ".$last_name;


            $date =date('Y-m-d H:i:s');
                $session = session_id();
              $sql = "SELECT * FROM sessions WHERE user_id = '".$_SESSION['user_id']."' LIMIT 1";
  $result = $database->query($sql);
  $sesrow = $database->num_rows($result);
  if($sesrow == 0){
    $uip = $_SERVER['REMOTE_ADDR'];
      $uos = $_SERVER['HTTP_USER_AGENT'];
      $sql="INSERT INTO sessions (user_id,user,session_id,user_ip,user_os,last_activity) VALUES('$user_id','$username','$session','$uip','$uos','$date')";
      $insert= $database->query($sql);
      if(!$insert){
    die("QUERY FAILED".mysqli_error());
  }
     }else{
      $time = date('Y-m-d H:i:s');
      $sql="UPDATE sessions SET session_id = '".session_id()."', last_activity = '$time' WHERE sessions.user_id = '".$_SESSION['user_id']."'";
      $statement=$database->query($sql);
     }
           header ("location:profile.php");
           }else {  $this->message("<strong>Password incorrect!</strong>");}


           }else{ $this->message("<strong>Username incorrect!</strong>"); }

    if($this->user){
      $this->user_id = $_SESSION['user_id'] = $user_id;
      $this->logged_in = true;
    }
  }

  public function logout() {
    global $database;
    $time = date('Y-m-d H:i:s');
    $sql="UPDATE sessions SET last_activity = '$time' WHERE sessions.user_id = '".$_SESSION['user_id']."'";
      $statement=$database->query($sql);
  unset($_SESSION['user_id'] );
  unset($_SESSION['username'] );
    unset($_SESSION['user_account_type'] );
    unset($_SESSION['fullname']);
  unset($_SESSION['user_image'] );
    unset($_SESSION['user_account_type'] );
    unset($_SESSION['branchID']);
    session_destroy();
    session_write_close();
    unset($this->user_id);
    $this->logged_in = false;
  }

	public function message($msg="") {
	  if(!empty($msg)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['message'] = $msg;
	  } else {
	    // then this is "get message"
			return $this->message;
	  }
	}

	private function check_login() {
    if(isset($_SESSION['user_id'])) {
      $this->user_id = $_SESSION['user_id'];
      $this->logged_in = true;
    } else {
      unset($this->user_id);
      $this->logged_in = false;
    }
  }

	private function check_message() {
		// Is there a message stored in the session?
		if(isset($_SESSION['message'])) {
			// Add it as an attribute and erase the stored version
      $this->message = $_SESSION['message'];
      unset($_SESSION['message']);
    } else {
      $this->message = "";
    }
	}

}

$session = new Session();
$message = $session->message();

?>
