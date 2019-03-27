<?php
class Conection
{
	public function get_list($table)
	{
		$db = new Config();
		$sql="SELECT * FROM $table";
		$result = mysqli_query($db->connect(),$sql);
		$arr = array();
		while($rows = mysqli_fetch_object($result))
			$arr[] = $rows;
		return $arr;
	}

	public function get_a_record($table, $_cbgv_id)
	{
		$db = new Config();
		$sql="SELECT * FROM $table WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db->connect(),$sql);
		$arr = mysqli_fetch_object($result);
		return $arr;
	}

	public function addcbgv($table, $add_cbgv)
	{
		$db = new Config();
		$name_column = '';
		$value_column = '';
		foreach ($add_cbgv as $key => $value) {
			$name_column .= ",$key";
			$value_column .= ",'" . $value . "'";
		}
		$sql = "INSERT INTO " . $table . "(" . trim($name_column, ",") . ") VALUES (" . trim($value_column, ",") . ")";
		mysqli_query($db->connect(),$sql);
		echo "<script>alert('Thêm thành công!');</script>";
	}

	public function updatecbgv($table,$edit_cbgv,$id)
	{
		$db = new Config();
		$sql='';
		foreach ($edit_cbgv as $key => $value) {
			$sql .= "$key = '" . trim($value) . "',";
		}
		$sql= "UPDATE " . $table . " SET " . trim($sql, ",") . " WHERE cbgv_id = " . $id;
		mysqli_query($db->connect(),$sql);
		echo "<script>alert('Cập nhật thành công!');</script>";
	}

	public function deletecbgv($table, $_cbgv_id)
	{
		$db = new Config();
		$sql = "DELETE FROM $table WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db->connect(),$sql);
		echo "<script>alert('Xóa thành công!');</script>";
	}
}