<?php

/**
 * @author gencyolcu
 * @copyright 2017
 */

    if(isset($_FILES['fileinputname']['name'])) {

      try {

    $uploader = new Varien_File_Uploader('fileinputname');

        $uploader->setAllowedExtensions(array('jpg','jpeg','gif','png')); // or pdf or anything

     $uploader->setAllowRenameFiles(false);

     $uploader->setFilesDispersion(false);

      $path = Mage::getBaseDir('media') ;

     $uploader->save($path, $_FILES['fileinputname']['name']);

     $data['fileinputname'] =$path. $_FILES['fileinputname']['name'];

      }catch(Exception $e) {

     

      }

    }

?>