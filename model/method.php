<?php
include "cbgv.php";
	/**
	 * 
	 */
use CBGV\CBGV;
class Method extends CBGV
{
	public function get_list(){
		global $db;
		$sql="SELECT * FROM tblcbgv";
		$result = mysqli_query($db,$sql);
		$arr = array();
		while($rows = mysqli_fetch_object($result))
			$arr[] = $rows;
		return $arr;
	}

	public function get_a_record($_cbgv_id){
		global $db;
		$sql="SELECT * FROM tblcbgv WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db,$sql);
		$arr = mysqli_fetch_object($result);
		return $arr;
	}

	public function addcbgv($_cbgv_name, $_cbgv_birthday, $_cbgv_address, $_cbgv_luongcung, $_cbgv_luongthuong, $_cbgv_luongphat){
		global $db;
		$_cbgv_luonglinhthuc = $_cbgv_luongcung + $_cbgv_luongthuong - $_cbgv_luongphat;
		$sql="INSERT INTO tblcbgv(cbgv_name, cbgv_birthday, cbgv_address, cbgv_luongcung, cbgv_luongthuong, cbgv_luongpha, cbgv_luonglinhthuc) VALUES('$_cbgv_name', '$_cbgv_birthday', '$_cbgv_address', $_cbgv_luongcung, $_cbgv_luongthuong, $_cbgv_luongphat, $_cbgv_luonglinhthuc)";
		$result = mysqli_query($db,$sql);
	}

	public function updatecbgv($_cbgv_id, $_cbgv_name, $_cbgv_birthday, $_cbgv_address, $_cbgv_luongcung, $_cbgv_luongthuong, $_cbgv_luongphat){
		global $db;
		$_cbgv_luonglinhthuc = $_cbgv_luongcung + $_cbgv_luongthuong - $_cbgv_luongphat;
		$sql="UPDATE tblcbgv SET cbgv_name ='$_cbgv_name', cbgv_birthday='$_cbgv_birthday', cbgv_address='$_cbgv_address', cbgv_luongcung=$_cbgv_luongcung, cbgv_luongthuong='$_cbgv_luongthuong', cbgv_luongpha='$_cbgv_luongphat', cbgv_luonglinhthuc=$_cbgv_luonglinhthuc WHERE cbgv_id = $_cbgv_id)";
		$result = mysqli_query($db,$sql);
	}

	public function deletecbgv($_cbgv_id){
		global $db;
		$sql = "DELETE FROM tblcbgv WHERE cbgv_id = $_cbgv_id";
		$result = mysqli_query($db,$sql);
		echo "<script>alert('Xóa thành công!');</script>";
	}
}
?>