<?php
class MageSf_OrderCustom_Block_Adminhtml_Order_View_Tab_OrderCustom
    extends Mage_Adminhtml_Block_Template
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{    
    //change _constuct to _construct()
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('magsf/ordercustom/order/view/tab/ordercustom.phtml');
    }

    public function getTabLabel() {
        return $this->__('Order Attachment');
    }

    public function getTabTitle() {
        return $this->__('Order Attachment');
    }

    public function canShowTab() {
        return true;
    }

    public function isHidden() {
        return false;
    }

    public function getOrder(){
        return Mage::registry('current_order');
    }
} 
?>