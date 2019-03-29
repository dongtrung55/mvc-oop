<?php
$rootPath = dirname(__FILE__);
define('ROOT_PATH', $rootPath);
define('CONFIG_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR);
define('CORE_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('MODEL_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);

//lay gia tri cua bien controller truyen tu url
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
if ($controller != "") {
    $controller = CONTROLLER_PATH . "Controller_$controller.php";
} else {
    $controller = CONTROLLER_PATH . "Controller_GV.php";
}
include_once VIEW_PATH . "master.php";

