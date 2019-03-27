<?php 
	//load model
	include "model/Repor.php";
	
	//lay gia tri cua bien controller truyen tu url
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller != ""){
		$controller = "controller/Controller_$controller.php";
	}
	else{
		$controller = "controller/Controller_CBGV.php";
	}
	include "view/Master.php";
 ?>