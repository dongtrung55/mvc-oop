<?php
class Controller_Add_Edit_CBGV{
	public $model;
	public function __construct(){
		$this->model = new Method();
		$act = isset($_GET["act"]) ? $_GET["act"]:"";
		$id = isset($_GET["id"]) ? $_GET["id"]:0;
		switch($act){
			case "edit":
			$form_action = "thuc-hien-sua-thong-tin-can-bo-giao-vien-$id.html";
			$arr = $this->model->get_a_record($id);
			break;
			case "do_edit":
			$cbgv_name=$_POST["cbgv_name"];
			$cbgv_birthday=$_POST["cbgv_birthday"];
			$cbgv_address=$_POST["cbgv_address"];
			$cbgv_luongcung=$_POST["cbgv_luongcung"];
			$cbgv_luongthuong=$_POST["cbgv_luongthuong"];
			$cbgv_luongphat=$_POST["cbgv_luongphat"];
			$this->model->updatecbgv($id, $cbgv_name, $cbgv_birthday, $cbgv_address, $cbgv_luongcung, $cbgv_luongthuong, $cbgv_luongphat);
			echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
			break;
			case "add":
			$form_action = "thuc-hien-them-can-bo-giao-vien.html";
			break;
			case "do_add":
			$cbgv_name=$_POST["cbgv_name"];
			$cbgv_birthday=$_POST["cbgv_birthday"];
			$cbgv_address=$_POST["cbgv_address"];
			$cbgv_luongcung=$_POST["cbgv_luongcung"];
			$cbgv_luongthuong=$_POST["cbgv_luongthuong"];
			$cbgv_luongphat=$_POST["cbgv_luongphat"];
			$this->model->addcbgv($cbgv_name, $cbgv_birthday, $cbgv_address, $cbgv_luongcung, $cbgv_luongthuong, $cbgv_luongphat);
			echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
			break;
		}
		include "view/view_add_edit_cbgv.php";
	}
}
new Controller_Add_Edit_CBGV();
?>