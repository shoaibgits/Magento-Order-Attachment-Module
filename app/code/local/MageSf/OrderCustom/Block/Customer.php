<?php


 class MageSf_OrderCustom_Block_Customer extends Mage_Core_Block_Template
 {
 public function view()
 {
    
    $customer = Mage::getSingleton('customer/session')->getCustomer();
    
    //echo"<pre>"; print_r($customer);
    $email = $customer->getId(); 
    //echo "Hello World";
    $data = Mage::getModel('magesf_ordercustom/ordercustom');


    $collection = $data->getCollection()->addFieldToFilter("customer_id",$email);
    return $collection;

   }

}

?>