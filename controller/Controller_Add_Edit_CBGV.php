<?php
include "model/CBGV.php";

use CBGV\CBGV;

class Controller_Add_Edit_CBGV extends CBGV{
	public $model;
	public $data;
	public function __construct(){
		$this->model = new Repor();
		$this->data = new CBGV();
		$act = isset($_GET["act"]) ? $_GET["act"]:"";
		$id = isset($_GET["id"]) ? $_GET["id"]:0;
		switch($act){
			case "edit":
			$form_action = "thuc-hien-sua-thong-tin-can-bo-giao-vien-$id.html";
			$arr = $this->model->get_a_record($id);
			break;
			case "do_edit":
			$cbgv_luonglinhthuc = $_POST["cbgv_luongcung"] + $_POST["cbgv_luongthuong"] - $_POST["cbgv_luongphat"];
			$this->data->setCbgvName($_POST["cbgv_name"]);
			$this->data->setCbgvBirthday($_POST["cbgv_birthday"]);
			$this->data->setCbgvAddress($_POST["cbgv_address"]);
			$this->data->setCbgvLuongcung($_POST["cbgv_luongcung"]);
			$this->data->setCbgvLuongthuong($_POST["cbgv_luongthuong"]);
			$this->data->setCbgvLuongphat($_POST["cbgv_luongphat"]);
			$this->data->setCbgvLuonglinhthuc($cbgv_luonglinhthuc);
			$this->model->updatecbgv($this->data,$id);
			echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
			break;
			case "add":
			$form_action = "thuc-hien-them-can-bo-giao-vien.html";
			break;
			case "do_add":
			$cbgv_luonglinhthuc = $_POST["cbgv_luongcung"] + $_POST["cbgv_luongthuong"] - $_POST["cbgv_luongphat"];
			$this->data->setCbgvName($_POST["cbgv_name"]);
			$this->data->setCbgvBirthday($_POST["cbgv_birthday"]);
			$this->data->setCbgvAddress($_POST["cbgv_address"]);
			$this->data->setCbgvLuongcung($_POST["cbgv_luongcung"]);
			$this->data->setCbgvLuongthuong($_POST["cbgv_luongthuong"]);
			$this->data->setCbgvLuongphat($_POST["cbgv_luongphat"]);
			$this->data->setCbgvLuonglinhthuc($cbgv_luonglinhthuc);
			$this->model->addcbgv($this->data);
			echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
			break;
		}
		include "view/View_Add_Edit_CBGV.php";
	}
}
new Controller_Add_Edit_CBGV();
?>