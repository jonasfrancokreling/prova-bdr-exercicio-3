<?php 

class DatabaseConnection{

	//Colocar as informações padrão para acessar a base de dados.
	protected $link;
	private $db = 'base de dados';
	private $server = 'servidor';
	private $user = 'usuario';
	private $password = 'senha';
	
	function __construct() {
		//Usar definiçoes padrão.
	}
	
	function __destruct(){
		$this->closeConnection();
	}
	
	private function closeConnection(){
		if(mysql_close($this->link)){
			$this->link = null; 
		}
	}
	
	private function connect(){
		try{
			$this->link = mysql_connect($this->server, $this->username, $this->password);
        	mysql_select_db($this->db, $this->link);
		}catch(Exception $e){
			echo $e->getMessage();
		}
	}
	
	public function query($query){
		try{
			$this->connect();
			$result = mysql_query($query);
		}catch(Exception $e){
			echo $e->getMessage();
		} 
		$this->closeConnection();
		return $result;
	}
}
?>