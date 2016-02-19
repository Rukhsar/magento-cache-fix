<?php
class Rukhsar_CacheFix_Model_Observer
{
   public function BlockCacheFix($observer) {
       Mage::app()->getCacheInstance()->cleanType('block_html');
       return $this;
   }
}