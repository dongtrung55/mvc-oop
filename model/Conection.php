<?php
include_once "config/Config.php";

class Conection extends Config {

	public static function getList($table) {
		$sql = "SELECT * FROM $table";
		return parent::getList($sql);
	}

	public function getGV($table, $id) {
		$db = new Config();
		$sql = "SELECT * FROM $table WHERE id = $id";
		$result = mysqli_query($db->connect(), $sql);
		$arr = mysqli_fetch_object($result);
		return $arr;
	}

	public function addGV($table, $gv) {
		$db = new Config();
		$name_column = '';
		$value_column = '';
		foreach ($gv as $key => $value) {
			$name_column .= ",$key";
			$value_column .= ",'" . $value . "'";
		}
		$sql = "INSERT INTO " . $table . "(" . trim($name_column, ",") . ") VALUES (" . trim($value_column, ",") . ")";
		mysqli_query($db->connect(), $sql);
		echo "<script>alert('Thêm thành công!');</script>";
	}

	public function updateGV($table, $gv) {
		$db = new Config();
		$sql = '';
		$id = $gv->getId('id');
		foreach ($gv as $key => $value) {
			$sql .= "$key = '" . trim($value) . "',";
		}
		$sql = "UPDATE " . $table . " SET " . trim($sql, ",") . " WHERE id = " . $id;
		mysqli_query($db->connect(), $sql);
		echo "<script>alert('Cập nhật thành công!');</script>";
	}

	public function deleteGV($table, $id) {
		$db = new Config();
		$sql = "DELETE FROM $table WHERE id = $id";
		$result = mysqli_query($db->connect(), $sql);
		echo "<script>alert('Xóa thành công!');</script>";
	}
}
?>