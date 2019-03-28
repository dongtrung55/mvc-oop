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
        return $this->conection->getGV(self::tblcbgv, $id);
    }

    /*
     * Them giao vien
     * */
    public function addGV($gv)
    {
        return $this->conection->addGV(self::tblcbgv, $gv);
    }

    /*
     * Sua thong tin giao vien
     * */
    public function updateGV($gv)
    {
        return $this->conection->updateGV(self::tblcbgv, $gv);
    }

    /*
     * Xoa giao vien
     * */
    public function deleteGV($id)
    {
        return $this->conection->deleteGV(self::tblcbgv, $id);
    }
}

?>