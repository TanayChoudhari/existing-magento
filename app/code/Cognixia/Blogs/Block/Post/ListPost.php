<?php
namespace Cognixia\Blogs\Block\Post;

use Cognixia\Blogs\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;

class ListPost extends \Magento\Framework\View\Element\Template
{
    private $postCollectionFactory;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->blogCollectionFactory = $postCollectionFactory;
    }

    public function getPostList()
    {
        return $this->getPostCollection()->getItems();
    }

    private function getPostCollection()
    {
        return $this->blogCollectionFactory->create()
            ->addFieldToFilter('status', 1);
    }
}
