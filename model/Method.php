<?php
include "CBGV.php";
include "config/Config.php";
	/**
	 * 
	 */
use CBGV\CBGV;
class Method extends CBGV
{
	public function get_list(){
		$db = new Config();
		$sql="SELECT * FROM tblcbgv";
		$result = mysqli_query($db->connect(),$sql);
		$arr = array();
		while($rows = mysqli_fetch_object($result))
			$arr[] = $rows;
		return $arr;
	}

	public function get_a_record($_cbgv_id){
		$db = new Config();
		$sql="SELECT * FROM tblcbgv WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db->connect(),$sql);
		$arr = mysqli_fetch_object($result);
		return $arr;
	}

	public function addcbgv($_cbgv_name, $_cbgv_birthday, $_cbgv_address, $_cbgv_luongcung, $_cbgv_luongthuong, $_cbgv_luongphat){
		$db = new Config();
		$_cbgv_luonglinhthuc = $_cbgv_luongcung + $_cbgv_luongthuong - $_cbgv_luongphat;
		$sql= "INSERT INTO tblcbgv(cbgv_name, cbgv_birthday, cbgv_address, cbgv_luongcung, cbgv_luongthuong, cbgv_luongphat, cbgv_luonglinhthuc) VALUES('$_cbgv_name', '$_cbgv_birthday', '$_cbgv_address', $_cbgv_luongcung, $_cbgv_luongthuong, $_cbgv_luongphat, $_cbgv_luonglinhthuc)";
		$result = mysqli_query($db->connect(),$sql);
		echo "<script>alert('Thêm thành công!');</script>";
	}

	public function updatecbgv($_cbgv_id, $_cbgv_name, $_cbgv_birthday, $_cbgv_address, $_cbgv_luongcung, $_cbgv_luongthuong, $_cbgv_luongphat){
		$db = new Config();
		$_cbgv_luonglinhthuc = $_cbgv_luongcung + $_cbgv_luongthuong - $_cbgv_luongphat;
		$sql= "UPDATE tblcbgv SET cbgv_name ='$_cbgv_name', cbgv_birthday='$_cbgv_birthday', cbgv_address='$_cbgv_address', cbgv_luongcung=$_cbgv_luongcung, cbgv_luongthuong='$_cbgv_luongthuong', cbgv_luongphat='$_cbgv_luongphat', cbgv_luonglinhthuc=$_cbgv_luonglinhthuc WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db->connect(),$sql);
		echo "<script>alert('Cập nhật thành công!');</script>";
	}

	public function deletecbgv($_cbgv_id){
		$db = new Config();
		$sql = "DELETE FROM tblcbgv WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db->connect(),$sql);
		echo "<script>alert('Xóa thành công!');</script>";
	}
}
?>