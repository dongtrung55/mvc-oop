<?php

namespace Nguoi;

class Nguoi{
	protected $_cbgv_id;
	protected $_cbgv_name;
	protected $_cbgv_birthday;
	protected $_cbgv_address;

    /**
     * @return mixed
     */
    public function getCbgvId()
    {
        return $this->_cbgv_id;
    }

    /**
     * @param mixed $_cbgv_id
     *
     * @return self
     */
    public function setCbgvId($_cbgv_id)
    {
        $this->_cbgv_id = $_cbgv_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCbgvName()
    {
        return $this->_cbgv_name;
    }

    /**
     * @param mixed $_cbgv_name
     *
     * @return self
     */
    public function setCbgvName($_cbgv_name)
    {
        $this->_cbgv_name = $_cbgv_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCbgvBirthday()
    {
        return $this->_cbgv_birthday;
    }

    /**
     * @param mixed $_cbgv_birthday
     *
     * @return self
     */
    public function setCbgvBirthday($_cbgv_birthday)
    {
        $this->_cbgv_birthday = $_cbgv_birthday;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCbgvAddress()
    {
        return $this->_cbgv_address;
    }

    /**
     * @param mixed $_cbgv_address
     *
     * @return self
     */
    public function setCbgvAddress($_cbgv_address)
    {
        $this->_cbgv_address = $_cbgv_address;

        return $this;
    }
}
?>