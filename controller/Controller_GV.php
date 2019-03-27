<?php
include "model/CBGV.php";

use CBGV\CBGV;

class Controller_GV
{
    protected $repoGV;
    protected $giaoVien;

    public function __construct()
    {
        $this->repoGV = new Repo();
        $this->giaoVien = new CBGV();
        $act = isset($_GET["act"]) ? $_GET["act"] : "";
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        switch ($act) {
            case "edit":
                $form_action = "thuc-hien-sua-thong-tin-can-bo-giao-vien-$id.html";
                $arr = $this->repoGV->getGV($id);
                break;
            case "do_edit":
                $cbgv_luonglinhthuc = $_POST["cbgv_luongcung"] + $_POST["cbgv_luongthuong"] - $_POST["cbgv_luongphat"];
                $this->giaoVien->setId($id);
                $this->giaoVien->setName($_POST["cbgv_name"]);
                $this->giaoVien->setBirthDay($_POST["cbgv_birthday"]);
                $this->giaoVien->setAddress($_POST["cbgv_address"]);
                $this->giaoVien->setLuongCung($_POST["cbgv_luongcung"]);
                $this->giaoVien->setLuongThuong($_POST["cbgv_luongthuong"]);
                $this->giaoVien->setLuongPhat($_POST["cbgv_luongphat"]);
                $this->giaoVien->setLuongLinhThuc($cbgv_luonglinhthuc);
                $this->repoGV->updateGV($this->giaoVien);
                echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
                break;
            case "add":
                $form_action = "thuc-hien-them-can-bo-giao-vien.html";
                break;
            case "do_add":
                $cbgv_luonglinhthuc = $_POST["cbgv_luongcung"] + $_POST["cbgv_luongthuong"] - $_POST["cbgv_luongphat"];
                $this->giaoVien->setName($_POST["cbgv_name"]);
                $this->giaoVien->setBirthDay($_POST["cbgv_birthday"]);
                $this->giaoVien->setAddress($_POST["cbgv_address"]);
                $this->giaoVien->setLuongCung($_POST["cbgv_luongcung"]);
                $this->giaoVien->setLuongThuong($_POST["cbgv_luongthuong"]);
                $this->giaoVien->setLuongPhat($_POST["cbgv_luongphat"]);
                $this->giaoVien->setLuongLinhThuc($cbgv_luonglinhthuc);
                $this->repoGV->addGV($this->giaoVien);
                echo "<script>location.href='danh-sach-can-bo-giao-vien.html';</script>";
                break;
        }
        include "view/View_GV.php";
    }
}

new Controller_GV();
?>