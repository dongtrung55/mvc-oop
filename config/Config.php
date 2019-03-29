<?php
include_once "model/CBGV.php";

use CBGV\CBGV;

/**
 *
 */
class Config
{
    /*
    * Ket noi voi csdl
    */
    public static function connect()
    {
        $db = mysqli_connect('localhost', 'root', '', 'db_cbgv') or die("Kết nối thất bại!");
        mysqli_set_charset($db, "UTF8");
        return $db;
    }

    /*
    * Thuc hien cau truy van lay ra danh sach giao vien
    */
    public function getList($sql)
    {
        $result = mysqli_query(self::connect(), $sql);
        $arr = Array();
        foreach ($result as $values) {
            $gv = new CBGV();
            $gv->setID($values['id']);
            $gv->setName($values['name']);
            $gv->setBirthDay($values['birthDay']);
            $gv->setAddress($values['address']);
            $gv->setLuongCung($values['luongCung']);
            $gv->setLuongThuong($values['luongThuong']);
            $gv->setLuongPhat($values['luongPhat']);
            $gv->setLuongLinhThuc($values['luongLinhThuc']);
            $arr[] = $gv;
        }
        return $arr;
    }

    /*
     * Thuc hien cau truy van lay ra thong tin mot giao vien
     */
    public function getARecord($sql)
    {
        $result = mysqli_query(self::connect(), $sql);
        $arr = mysqli_fetch_object($result);
        $gv = new CBGV();
        $gv->setID($arr->id);
        $gv->setName($arr->name);
        $gv->setBirthDay($arr->birthDay);
        $gv->setAddress($arr->address);
        $gv->setLuongCung($arr->luongCung);
        $gv->setLuongThuong($arr->luongThuong);
        $gv->setLuongPhat($arr->luongPhat);
        return $gv;
    }

    /*
     * Thuc hien cau truy van
    */
    public function Execute($sql)
    {
        mysqli_query(self::connect(), $sql);
    }

    public function __destruct()
    {
        mysqli_close(self::connect());
    }
}

?>