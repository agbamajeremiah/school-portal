<?php
	
	class Card
	{
		private $db;
		
		function __construct()
		{
			$this->db = new Database;
			
		}
		public function checkPin($pin){
			$this->db->query("SELECT * FROM scratch_card WHERE  card_pin =:card_pin");
			$this->db->bind(':card_pin', $pin);
			$rows= $this->db->countRows();
			return $rows;
		}
	}