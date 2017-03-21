<?php

/**
 * @author gencyolcu
 * @copyright 2017
 */


class MageSf_OrderCustom_Model_Ordercustom extends Mage_Core_Model_Abstract
{
     public function _construct()
     {
         parent::_construct();
         $this->_init('magesf_ordercustom/ordercustom');
     }
}
?>

