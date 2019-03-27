<?php

namespace Nguoi;

class Nguoi
{
    protected $_id;
    protected $_name;
    protected $_birthDay;
    protected $_address;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($_id)
    {
        $this->id = $_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($_name)
    {
        $this->name = $_name;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $birthDay
     *
     * @return self
     */
    public function setBirthDay($_birthDay)
    {
        $this->birthDay = $_birthDay;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($_address)
    {
        $this->address = $_address;
    }
}

?>