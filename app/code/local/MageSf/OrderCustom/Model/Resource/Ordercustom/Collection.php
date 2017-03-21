<?php

class MageSf_OrderCustom_Model_Resource_Ordercustom_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
 {
     public function _construct()
     {
         parent::_construct();
         $this->_init('magesf_ordercustom/ordercustom');
     }
}


?>