<?php 
	//load model
	include "model/method.php";
	
	//lay gia tri cua bien controller truyen tu url
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller != ""){
		$controller = "controller/controller_$controller.php";
	}
	else{
		$controller = "controller/controller_cbgv.php";
	}
	include "view/master.php";
 ?>