<?php

/**
 * @author gencyolcu
 * @copyright 2017
 */


class MageSf_OrderCustom_CustomerController extends Mage_Core_Controller_Front_Action
{    
    /**
     * Checking if user is logged in or not
     * If not logged in then redirect to customer login
     */
    public function preDispatch()
    {
           parent::preDispatch();
 
           if (!Mage::getSingleton('customer/session')->authenticate($this)) {
            $this->setFlag('', 'no-dispatch', true);
            
        // adding message in customer login page
        Mage::getSingleton('core/session')
                ->addSuccess(Mage::helper('ordercustom')->__('Please sign in or create a new account'));
        }
    }            
    /**
     * View Your Module
     */
     
    public function viewAction() {

      $this->loadLayout();   
      $this->getLayout()->getBlock("head")->setTitle($this->__("Order Attachments"));
            $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
           ));

      $breadcrumbs->addCrumb("titlename", array(
                "label" => $this->__("Attachments"),
                "title" => $this->__("Attachments")
           ));

      $this->renderLayout(); 
        

    }
} 
?>