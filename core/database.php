<?php 
	/**
	 * 
	 */
	class Database {
		private $host = '';
		private $user = '';
		private $pass = '';
		private $database = '';
		private $conn = null;

		public function __construct(argument) {
			global $config;
			$this->host = $config['database']['host'];
			$this->user = $config['database']['user'];
			$this->pass = $config['database']['pass'];
			$this->database = $config['database']['database'];
		}

		public function connection() {
			if($this->conn == null) {
				$this->conn = new mysqli_connect($this->host, $this->user, $this->pass, $this->database);
			}

		}

		public function exit() {
			mysqli_close($this->conn);
		}

		//select se chay 1 ham
		//insert, remove, update 1 ham
		public function doQuery() {

		}
	}
 ?>