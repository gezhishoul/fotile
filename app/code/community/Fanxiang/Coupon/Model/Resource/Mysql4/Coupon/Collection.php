<?php

class Fanxiang_Coupon_Model_Resource_Mysql4_Coupon_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract { 
    protected function _construct() 
    { 
            $this->_init('coupon/coupon'); 
    } 
}