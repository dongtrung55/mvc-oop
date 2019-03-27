<?php
class Controller_CBGV {
	protected $model;
	public function __construct() {
		$this->model = new Repo();
		if (isset($_GET["xoa-id"])) {
			$id = $_GET["xoa-id"];
			$this->model->deleteGV($id);
			echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
		}
		//lay tat ca cac ban ghi
		$list = $this->model->getList();
		//load view
		include "view/View_CBGV.php";
	}
}
new Controller_CBGV();
?>