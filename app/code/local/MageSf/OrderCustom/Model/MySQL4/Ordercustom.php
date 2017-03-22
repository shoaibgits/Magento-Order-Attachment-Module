<?php
class MageSf_OrderCustom_Model_Mysql4_Ordercustom extends
    Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('magesf_ordercustom/ordercustom', 'id_magesf_ordercustom'); //the second parameter must be the primary key in your warrantydata table. If it's not `entity_id` then change it
    }
}
?>