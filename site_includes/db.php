<?php
	require_once ('db_config.php');
	class db_connect
	{
		private $server;
		private $user;
		private $pass;
		private $database;
		private $connect;
		//set variables necessary for connection.
		function set_var ($server, $user, $pass, $database) {
			$this->server = $server;
			$this->user = $user;
			$this->pass = $pass;
			$this->database = $database;
		}
		//connect to database
		function connect() {
			$this->connect = mysql_connect ($this->server, $this->user, $this->pass);
			if (!$this->connect) {
				die("connection can not be established");
			}
			$db_select = mysql_select_db ($this->database, $this->connect);
			if(!$db_select) {
				die("Database selection failed : " .mysql_error());
			}
		}
		//ping to see whether the database has gone offline or not
		private function ping_db() {
			
		}
		//sanitize query to prevent sql-injection
		function sanitize_query($query) {
			
		}
		function close() {
			if(isset($this->connection)) {
				mysql_close($this->connection);
			}
		}
		
	}
?>
<?php
	$val = new db_connect();
	$val->set_var ($server, $user, $pass, $database);
	$val->connect();
?>
