<?php
ini_set('display_errors', True);
ini_set('display_startup_errors', True);
error_reporting(E_ALL);
class MySQLDatabase {

	private $connection;
	public $last_query;
	private $magic_quotes_active;
	private $real_escape_string_exists;

 	public function __construct()
 	 {
    	$this->open_connection();
		$this->real_escape_string_exists = function_exists( "mysqli_real_escape_string" );
 	 }

		public function open_connection() {
		defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
		defined('DB_USER')   ? null : define("DB_USER", "root");
		defined('DB_PASS')   ? null : define("DB_PASS", "");
		defined('DB_NAME')   ? null : define("DB_NAME", "fazzexpress");
		defined('CHARSET')   ? null : define("CHARSET", "utf8mb4");
		$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
		if (!$this->connection) {
			die("Database connection failed: " . mysqli_error($this->connection));
		} else {
			#$this->connection->set_charset("CHARSET");
			$db_select = mysqli_select_db( $this->connection,DB_NAME);
			if (!$db_select) {
				die("Database selection failed: " . mysqli_error($this->connection));
			}
		}
	}

	public function close_connection()
	 {
		if(isset($this->connection)) {
			mysqli_close($this->connection);
			unset($this->connection);
		}
	}

	public function query($sql) 
	{
		$this->last_query = $sql;
		$result = mysqli_query($this->connection,$sql );
		$this->confirm_query($result);
		return $result;
	}

	public function escape_value( $value ) {
		if( $this->real_escape_string_exists ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $this->magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysqli_real_escape_string($this->connection, $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			$value = htmlspecialchars( $value );
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}

	// "database-neutral" methods
  public function fetch_array($result_set)
   {
    return mysqli_fetch_array($result_set);
 	 }

  public function num_rows($result_set) {
   return mysqli_num_rows($result_set);
  }

  public function insert_id() {
    // get the last id inserted over the current db connection
    return mysqli_insert_id($this->connection);
  }

  public function affected_rows() {
    return mysqli_affected_rows($this->connection);
  }

	private function confirm_query($result) {
		if (!$result) {
	    $output = "Database query failed: " . mysqli_error($this->connection) . "<br /><br />";
	    // $output .= "Last SQL query: " . $this->last_query;
	    die( $output );
		}
	}
public function fetch_user_last_activity($user_id){
		$ql="
			SELECT * FROM session
			WHERE user_id = '$user_id'
			ORDER BY last_activity DESC 
			LIMIT 1";
			query($sql);
		$result=query(fetchAll());
		foreach($result as $row){
			return $row['last_activity'];
		}
  }



}
$database = new MySQLDatabase();
$db =& $database;

?>
