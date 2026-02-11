<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bookmedik";$this->pass="bookmedik";$this->host="db";$this->ddbb="bookmedik";
	}

	function connect(){
		$con = new mysqli("db","bookmedik","bookmedik","bookmedik");
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
