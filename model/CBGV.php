<?php
namespace CBGV;

include "Nguoi.php";

use Nguoi\Nguoi;

class CBGV extends Nguoi
{
	protected $_cbgv_luongcung;
	protected $_cbgv_luongthuong;
	protected $_cbgv_luongphat;
    protected $_cbgv_luonglinhthuc;
	
    /**
     * @return mixed
     */
    public function getCbgvLuongcung()
    {
    	return $this->_cbgv_luongcung;
    }

    /**
     * @param mixed $_cbgv_luongcung
     *
     * @return self
     */
    public function setCbgvLuongcung($_cbgv_luongcung)
    {
    	$this->cbgv_luongcung = $_cbgv_luongcung;
    }

    /**
     * @return mixed
     */
    public function getCbgvLuongthuong()
    {
    	return $this->_cbgv_luongthuong;
    }

    /**
     * @param mixed $_cbgv_luongthuong
     *
     * @return self
     */
    public function setCbgvLuongthuong($_cbgv_luongthuong)
    {
    	$this->cbgv_luongthuong = $_cbgv_luongthuong;
    }

    /**
     * @return mixed
     */
    public function getCbgvLuongphat()
    {
    	return $this->_cbgv_luongphat;
    }

    /**
     * @param mixed $_cbgv_luongphat
     *
     * @return self
     */
    public function setCbgvLuongphat($_cbgv_luongphat)
    {
    	$this->cbgv_luongphat = $_cbgv_luongphat;
    }

    /**
     * @return mixed
     */
    public function getCbgvLuonglinhthuc()
    {
        return $this->_cbgv_luonglinhthuc;
    }

    /**
     * @param mixed $_cbgv_luonglinhthuc
     *
     * @return self
     */
    public function setCbgvLuonglinhthuc($_cbgv_luonglinhthuc)
    {
        $this->cbgv_luonglinhthuc = $_cbgv_luonglinhthuc;
    }
}
?>