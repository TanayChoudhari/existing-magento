<?php
namespace Cognixia\ChangeBreadcumbs\Plugins\Block\Html;

use Magento\Theme\Block\Html\Breadcrumbs as OriginalCrumbs;

class Breadcrumb
{

    public function aroundAddCrumb( OriginalCrumbs $subject, callable $proceed, $crumbName, $crumbInfo )
    {
        $crumbInfo['label'] .= "(!a)";
        $proceed($crumbName, $crumbInfo);
    }

}