<?php
/**
 * @author wangxianbin@vanthink.net
 * @date 2012-09-26 16:04
 */


/**
 * @module Fanxiang_Wensli
 * @category Controller
 * 调试用的controller
 */


class Fanxiang_Wensli_DebugController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        print "Hello world";
        $setup = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup();
        $setup->startSetup();
        $setup->removeAttribute('catalog_product', 'enable_googlecheckout');
        $setup->endSetup();
    }

    public function testProductViewedAction() {
        print "11";
        $this->renderLayout();
        print "22";
    }
}