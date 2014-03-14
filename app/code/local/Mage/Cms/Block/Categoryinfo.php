<?php
/**
 * Brands block content block
 *
 * @category   Mage
 * @package    Mage_Cms
 * @author     Hao Cai <hao.cai@bozway.com>
 */
class Mage_Cms_Block_Categoryinfo extends Mage_Core_Block_Template
{
    public function getCategoryEngity(){
        $categoryId = $this->getCategoryId();
        $category = Mage::getModel('catalog/category')->load($categoryId);
        return $category;
    }
}
?>