<?php
/**
 * Brands block content block
 *
 * @category   Mage
 * @package    Mage_Cms
 * @author     Hao Cai <hao.cai@bozway.com>
 */
class Mage_Cms_Block_Brands extends Mage_Core_Block_Template
{
    public function showAllBrands(){
        $brand_array = array();
        $subCats = Mage::getModel('catalog/category')->loadByAttribute('url_key','brands')->getChildren();
        $subCatIds = explode(',',$subCats);
        if(count($subCatIds) > 1){
            foreach($subCatIds as $subCatId){
                $subCat = Mage::getModel('catalog/category')->load($subCatId);
                if($subCat->getIsActive()){
                    $brand = array(
                        'img_src' => $subCat->getImageUrl(),
                        'url' => $subCat->getUrl(),
                        'name' => $subCat->getName()
                    );
                    $brand_array[] = $brand;
                }
            }
        }
        return $brand_array;
    }
}
?>