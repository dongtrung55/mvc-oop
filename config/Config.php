<?php
/**
 * 
 */
class Config
{
	
	function connect()
	{
		$hostname = "localhost";
		$user = "root";
		$password = "";
		$database = "db_cbgv";
		$db = mysqli_connect($hostname,$user,$password,$database) or die("Kết nối thất bại!");
		mysqli_set_charset($db,"UTF8");
		return $db;
	}

}
?>