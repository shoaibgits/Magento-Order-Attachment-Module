<?php


 class MageSf_OrderCustom_Block_Customer extends Mage_Core_Block_Template
 {
 public function view()
 {
    //echo "Hello World";
    $data = Mage::getModel('magesf_ordercustom/ordercustom');

    $collection = $data->getCollection();
    return $collection;

   }

}

?>