<?php
include "Conection.php";

class Repo {
	protected $_cnn;
	const tblcbgv = 'tblcbgv';

	public function __construct() {
		$this->_cnn = new Conection();
	}

	public function getList() {
		return $this->_cnn->getList(self::tblcbgv);
	}

	public function getGV($id) {
		return $this->_cnn->getGV(self::tblcbgv, $id);
	}

	public function addGV($gv) {
		return $this->_cnn->addGV(self::tblcbgv, $gv);
	}

	public function updateGV($gv) {
		return $this->_cnn->updateGV(self::tblcbgv, $gv);
	}

	public function deleteGV($id) {
		return $this->_cnn->deleteGV(self::tblcbgv, $id);
	}
}
?>