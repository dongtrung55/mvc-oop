<?php
include_once "model/CBGV.php";

use CBGV\CBGV;

class Controller_GV
{
    protected $repoGV;
    protected $giaoVien;

    public function __construct()
    {
        $this->repoGV = new Repo();
        $this->giaoVien = new CBGV();
        if (isset($_GET["act"])) {
            $act = $_GET["act"];
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            switch ($act) {
                case "delete":
                    $this->repoGV->deleteGV($id);
                    echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
                    break;
                case "edit":
                    $form_action = "thuc-hien-sua-thong-tin-can-bo-giao-vien-$id.html";
                    $arr = $this->repoGV->getGV($id);echo "<pre>";
                    print_r($arr);
                    echo "</pre>";
                    break;
                case "do_edit":
                    $luongLinhThuc = $_POST["luongCung"] + $_POST["luongThuong"] - $_POST["luongPhat"];
                    $this->giaoVien->setId($id);
                    $this->giaoVien->setName($_POST["name"]);
                    $this->giaoVien->setBirthDay($_POST["birthDay"]);
                    $this->giaoVien->setAddress($_POST["address"]);
                    $this->giaoVien->setLuongCung($_POST["luongCung"]);
                    $this->giaoVien->setLuongThuong($_POST["luongThuong"]);
                    $this->giaoVien->setLuongPhat($_POST["luongPhat"]);
                    $this->giaoVien->setLuongLinhThuc($luongLinhThuc);
                    $this->repoGV->updateGV($this->giaoVien);
                    echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
                    break;
                case "add":
                    $form_action = "thuc-hien-them-can-bo-giao-vien.html";
                    break;
                case "do_add":
                    $luongLinhThuc = $_POST["luongCung"] + $_POST["luongThuong"] - $_POST["luongPhat"];
                    $this->giaoVien->setName($_POST["name"]);
                    $this->giaoVien->setBirthDay($_POST["birthDay"]);
                    $this->giaoVien->setAddress($_POST["address"]);
                    $this->giaoVien->setLuongCung($_POST["luongCung"]);
                    $this->giaoVien->setLuongThuong($_POST["luongThuong"]);
                    $this->giaoVien->setLuongPhat($_POST["luongPhat"]);
                    $this->giaoVien->setLuongLinhThuc($luongLinhThuc);
                    $this->repoGV->addGV($this->giaoVien);
                    echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
                    break;
            }
            include "view/View_GV.php";
        } else {
            //lay tat ca cac ban ghi
            $list = $this->repoGV->getList();
            echo "<pre>";
            print_r($list);
            echo "</pre>";
            //load view
            include "view/View_CBGV.php";
        }
    }
}

new Controller_GV();
?>