<?php
namespace CBGV;

include "Nguoi.php";

use Nguoi\Nguoi;

class CBGV extends Nguoi
{
	protected $_cbgv_luongcung;
	protected $_cbgv_luongthuong;
	protected $_cbgv_luongphat;
	
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
    	$this->_cbgv_luongcung = $_cbgv_luongcung;

    	return $this;
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
    	$this->_cbgv_luongthuong = $_cbgv_luongthuong;

    	return $this;
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
    	$this->_cbgv_luongphat = $_cbgv_luongphat;

    	return $this;
    }
}
?>