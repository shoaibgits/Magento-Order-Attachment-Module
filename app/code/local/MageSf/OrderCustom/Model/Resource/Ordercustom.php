<?php

class MageSf_OrderCustom_Model_Resource_Ordercustom extends Mage_Core_Model_Resource_Db_Abstract
{
     public function _construct()
     {
         $this->_init('magesf_ordercustom/ordercustom', 'id_magesf_ordercustom/ordercustom');
     }
}
?>