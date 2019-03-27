<?php 
	//load model
	include "model/Repor.php";
	//load kết nối
	include "config/Config.php";
	
	//lấy giá trị controller truyền từ url
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller != ""){
		$controller = "controller/Controller_$controller.php";
	}
	else{
		$controller = "controller/Controller_CBGV.php";
	}
	include "view/Master.php";
 ?>