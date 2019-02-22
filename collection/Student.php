<?php

	
	class Student
	{
		
		private $db;
		public function __construct()
		{
			$this->db = new Database;

		}
		public function getRowCount($username){
			$this->db->query("SELECT * FROM student WHERE user_name =:username");
			$this->db->bind(':username', $username);
			$rows= $this->db->countRows();
			return $rows;
		}
		public function getStudent($username){
			$this->db->query("SELECT * FROM student WHERE user_name =:username");
			$this->db->bind(':username', $username);
			$student_row = $this->db->singleRow();
			return $student_row;
		}
		
		
	}



?>