<?php
namespace Cognixia\ChangeBreadcumbs\Plugins\Block\Html;

use Magento\Catalog\Model\Product as ProductModel;

class Product 
{
    public function afterGetPrice( ProductModel $subject, $result )
    {
        return $result + 15;
    }
}
