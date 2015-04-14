<?php

	require_once('DatabaseConnection.php');
	
	class MyUserClass{
		private $dbconn;
		
		function __construct() {
       		$this->dbconn = new DatabaseConnection();
   		}
		 
		public function getUserList(){
			$results = $this->dbconn->query('select name from user');
			sort($results);
			return $results;
		}
	}
	
	$myUserClass = new MyUserClass();
	$myUserClass->getUserList();
	
	// Continução da lógica com os dados.
?>