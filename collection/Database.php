<?php
	
	class Database
	{
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $dbname = DB_NAME;

		private $conn;
		private $error;
		private $stmt;
		public function __construct()
		{
			//set DSN
			$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
			try {
				$this->conn = new PDO($dsn, $this->user, $this->pass);
				//set error mode to exception
				$this->conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
				
			} catch (PDOException $e) {
				$this->error =$e->getMessage();
			}
			
		}
		public function query($sql){
				$this->stmt = $this->conn->prepare($sql);
		}
		public function bind($param, $value, $type = null)
		{
			if (is_null($type)) {
				switch (true) {
					case is_int($value) :
							$type = PDO::PARAM_INT;
							break;
					case is_bool($value) :
							$type = PDO::PARAM_BOOL;
							break;
					case is_null($value) :
							$type = PDO::PARAM_NULL;
							break;
						
					default:
							$type = PDO::PARAM_STR;
				}
			}
			$this->stmt->bindParam($param, $value, $type);
		}

		public function execute(){
			return $this->stmt->execute();
		}
		public function countRows()
		{ 
			$this->execute();
			return $this->stmt->rowCount();
		}
		public function singleRow(){
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		}
		public function rowSet()
		{
			$this->stmt->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>