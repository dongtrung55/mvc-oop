<?php
include_once CONFIG_PATH . "Conection.php";
include_once MODEL_PATH . "CBGV.php";

use CBGV\CBGV;

class Repo
{
    protected $conection;
    const tblcbgv = 'tblcbgv';

    public function __construct()
    {
        $this->conection = new Conection();
    }

    /*
     * Lay ra danh sach giao vien
     * */
    public function getList()
    {
        $result = $this->conection->getList(self::tblcbgv);
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
     * Lay ra thong tin cua mot giao vien
     * */
    public function getGV($id)
    {
        $arr = $this->conection->getARecord(self::tblcbgv, $id);
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
     * Them giao vien
     * */
    public function addGV($gv)
    {
        return $this->conection->add(self::tblcbgv, $gv);
    }

    /*
     * Sua thong tin giao vien
     * */
    public function updateGV($gv)
    {
        return $this->conection->update(self::tblcbgv, $gv);
    }

    /*
     * Xoa giao vien
     * */
    public function deleteGV($id)
    {
        return $this->conection->delete(self::tblcbgv, $id);
    }
}

?>