<?php
namespace Cognixia\Blogs\Model;

use Magento\Framework\Model\AbstractModel;
use Cognixia\Blogs\Model\ResourceModel\Post as PostResouce;

class Post extends AbstractModel
{
    public function _construct()
    {
        $this->_init(PostResouce::class);
    }
}
