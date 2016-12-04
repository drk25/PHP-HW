<?php

class Addressbook
{
    private $_phone;
    private $_name;

    public function __construct($phone, $name = null)
    {
        $this->_phone = $phone;
        $this->_name = $name;
    }

    public function getPhone()
    {    
        return $this->_phone;
    }

    public function getName()
    {
        return $this->_name;
    }
}
