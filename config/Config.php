<?php
/**
 *
 */
class Config
{

	protected $db = null;
	function connect() {
		$hostname = "localhost";
		$user = "root";
		$password = "";
		$database = "db_cbgv";
		$db = mysqli_connect($hostname, $user, $password, $database) or die("Kết nối thất bại!");
		mysqli_set_charset($db, "UTF8");
		return $db;
	}

	function getList($sql) {
		$result = mysqli_query($db->connect(), $sql);
		$arr = array();
		while ($rows = mysqli_fetch_object($result)) {
			$arr[] = $rows;
		}
		return $arr;
	}

}
?>