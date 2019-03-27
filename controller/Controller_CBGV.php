<?php 
	class Controller_CBGV{
		public $model;
		public function __construct(){
			$this->model= new Repor();
			if(isset($_GET["xoa-id"])){
				$id = $_GET["xoa-id"];
				$this->model->deletecbgv($id);
				echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
			}
			//lay tat ca cac ban ghi
			$list=$this->model->get_list();
			//load view
			include "view/View_CBGV.php";
		}
	}
	new Controller_CBGV();
?>