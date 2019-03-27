<?php
include "Conection.php";

class Repor
{
	protected $_cnn;
	const tblcbgv = 'tblcbgv';

	public function __construct()
	{
		$this->_cnn = new Conection();
	}

	public function get_list(){
		return $this->_cnn->get_list(self::tblcbgv);
	}

	public function get_a_record($_cbgv_id){
		return $this->_cnn->get_a_record(self::tblcbgv,$_cbgv_id);
	}

	public function addcbgv($add_cbgv){
		return $this->_cnn->addcbgv(self::tblcbgv,$add_cbgv);
	}

	public function updatecbgv($edit_cbgv,$_cbgv_id){
		return $this->_cnn->updatecbgv(self::tblcbgv,$edit_cbgv,$_cbgv_id);
	}

	public function deletecbgv($_cbgv_id){
		return $this->_cnn->deletecbgv(self::tblcbgv,$_cbgv_id);
	}
}
?>