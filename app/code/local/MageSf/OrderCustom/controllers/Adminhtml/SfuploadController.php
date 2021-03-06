<?php

/**
 * @author Shoaib
 * @copyright 2017
 */
class MageSf_OrderCustom_Adminhtml_SfuploadController extends Mage_Adminhtml_Controller_Action {  
    public function uploadAction() {
        if (isset($_FILES['docname']['name']) && $_FILES['docname']['name'] != '') {
            
            try {
                 
                $uploader = new Varien_File_Uploader('docname');
                $uploader->setAllowedExtensions(array('doc','pdf','txt','docx','png','jpg'));
                $uploader->setAllowCreateFolders(true);
                $uploader->setAllowRenameFiles(false);
                $uploader->setFilesDispersion(false);
                $newDir = "customer_documents";

                $newdirPath = Mage::getBaseDir('media') . DS . "customer_documents";

                if (!file_exists($newdirPath)) {
                    mkdir($newdirPath, 0777);
                }

                $path = Mage::getBaseDir('media') . DS . $newDir . DS;
                $resizedPath = Mage::getBaseDir('media') . DS . $newDir;
                
                 $upl = $uploader->save($path, $_FILES['docname']['name']);
                  
                   $data = $this->getRequest()->getPost();
                   $orderid= $this->getRequest()->getParam('order_id');
                   $order_cus_id = $this->getRequest()->getParam('customer_id');
                   $attach_comments = $data['image_comments'];
                   $paths = $resizedPath.'"\"'.$upl['file'];
                        
                $filename = $uploader->getUploadedFileName(); // Uploaded File name
                
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('core')->__('File uploaded successfully.'));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError(Mage::helper('core')->__('Unable to find item to save'));
            }
            $connectionresource = Mage::getSingleton('core/resource');
            $connectionWrite = $connectionresource->getConnection('core_write');
            $prefix = Mage::getConfig()->getTablePrefix();
            $table = 'magesf_ordercustom';
            $query = "insert into ".$prefix.$table." "
                 . "(order_id,image_url,image_comments,customer_id) values "
                 . "('$orderid', $paths, '$attach_comments','$order_cus_id')";
            
            $binds = array(
              'order_id'    => $orderid,
              'image_url'   => $paths,
              'image_comments' => $attach_comments,
              'customer_id' => $order_cus_id,
            
            );
            
            $connectionWrite->query($query, $binds);
            
        }

        $this->_redirectReferer();
    }
}