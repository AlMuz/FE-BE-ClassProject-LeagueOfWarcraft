<?php	  
class DB_class{                                     			
protected $server = "localhost";
protected $dbuser = "root";
protected $dbpw = "";
protected $db = "j4f";
protected $con;



	function construct() {
		ini_set('display_errors','Off');
    	$this->con = new mysqli($this->server,$this->dbuser,$this->dbpw, $this->db);
    	$this->con->set_charset("utf8");
		return $this->con;
   }
	function check(){
		if(!$this->con){
		die('Im sorry, but our DB dont work');
	}
}
}
?>