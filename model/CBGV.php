<?php

namespace CBGV;

include_once MODEL_PATH . "Nguoi.php";

use Nguoi\Nguoi;

class CBGV extends Nguoi
{
    protected $_luongCung;
    protected $_luongThuong;
    protected $_luongPhat;
    protected $_luongLinhThuc;

    /**
     * @return mixed
     */
    public function getLuongCung()
    {
        return $this->luongCung;
    }

    /**
     * @param mixed $luongCung
     *
     * @return self
     */
    public function setLuongCung($_luongCung)
    {
        $this->luongCung = $_luongCung;
    }

    /**
     * @return mixed
     */
    public function getLuongThuong()
    {
        return $this->luongThuong;
    }

    /**
     * @param mixed $luongThuong
     *
     * @return self
     */
    public function setLuongThuong($_luongThuong)
    {
        $this->luongThuong = $_luongThuong;
    }

    /**
     * @return mixed
     */
    public function getLuongPhat()
    {
        return $this->luongPhat;
    }

    /**
     * @param mixed $luongPhat
     *
     * @return self
     */
    public function setLuongPhat($_luongPhat)
    {
        $this->luongPhat = $_luongPhat;
    }

    /**
     * @return mixed
     */
    public function getLuongLinhThuc()
    {
        return $this->luongLinhThuc;
    }

    /**
     * @param mixed $luongLinhThuc
     *
     * @return self
     */
    public function setLuongLinhThuc($_luongLinhThuc)
    {
        $this->luongLinhThuc = $_luongLinhThuc;
    }
}

?>