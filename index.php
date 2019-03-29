<?php
//load model
include "model/Repo.php";

//lay gia tri cua bien controller truyen tu url
$controller = isset($_GET["controller"])?$_GET["controller"]:"";
if($controller != ""){
    $controller = "controller/Controller_$controller.php";
}
else{
    $controller = "controller/Controller_GV.php";
}
include "view/master.php";

