<?php
namespace Magento\Customer\Model\Session;

/**
 * Interceptor class for @see \Magento\Customer\Model\Session
 */
class Interceptor extends \Magento\Customer\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Url\Helper\Data $coreUrl, \Magento\Customer\Model\Url $customerUrl, \Magento\Customer\Model\ResourceModel\Customer $customerResource, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\UrlFactory $urlFactory, \Magento\Framework\Session\Generic $session, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\App\Response\Http $response, ?\Magento\Customer\Model\AccountConfirmation $accountConfirmation = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $configShare, $coreUrl, $customerUrl, $customerResource, $customerFactory, $urlFactory, $session, $eventManager, $httpContext, $customerRepository, $groupManagement, $response, $accountConfirmation);
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'logout');
        return $pluginInfo ? $this->___callPlugins('logout', func_get_args(), $pluginInfo) : parent::logout();
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        return $pluginInfo ? $this->___callPlugins('start', func_get_args(), $pluginInfo) : parent::start();
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        return $pluginInfo ? $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo) : parent::clearStorage();
    }
}
