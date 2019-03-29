<?php
include "config/Conection.php";

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
        return $this->conection->getList(self::tblcbgv);
    }

    /*
     * Lay ra thong tin cua mot giao vien
     * */
    public function getGV($id)
    {
        return $this->conection->getARecord(self::tblcbgv, $id);
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