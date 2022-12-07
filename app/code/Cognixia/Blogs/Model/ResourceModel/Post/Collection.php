<?php
namespace Cognixia\Blogs\Model\ResourceModel\Post;

use Cognixia\Blogs\Model\Post;
use Cognixia\Blogs\Model\ResourceModel\Post as PostResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
