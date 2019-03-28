<?php
include "config/Conection.php";

class Repo
{
    protected $_cnn;
    const tblcbgv = 'tblcbgv';

    public function __construct()
    {
        $this->_cnn = new Conection();
    }

    /*
     * Lay ra danh sach giao vien
     * */
    public function getList()
    {
        return $this->_cnn->getList(self::tblcbgv);
    }

    /*
     * Lay ra thong tin cua mot giao vien
     * */
    public function getGV($id)
    {
        return $this->_cnn->getGV(self::tblcbgv, $id);
    }

    /*
     * Them giao vien
     * */
    public function addGV($gv)
    {
        return $this->_cnn->addGV(self::tblcbgv, $gv);
    }

    /*
     * Sua thong tin giao vien
     * */
    public function updateGV($gv)
    {
        return $this->_cnn->updateGV(self::tblcbgv, $gv);
    }

    /*
     * Xoa giao vien
     * */
    public function deleteGV($id)
    {
        return $this->_cnn->deleteGV(self::tblcbgv, $id);
    }
}

?>