<?php
namespace Sparsh\Banner\Controller\Adminhtml\Banner\Save;

/**
 * Interceptor class for @see \Sparsh\Banner\Controller\Adminhtml\Banner\Save
 */
class Interceptor extends \Sparsh\Banner\Controller\Adminhtml\Banner\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Filesystem $fileSystem, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderfactory, \Sparsh\Banner\Model\BannerFactory $bannerFactory, \Sparsh\Banner\Model\ResourceModel\Banner $bannerResource, \Sparsh\Banner\Model\ResourceModel\Banner\CollectionFactory $bannerCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $fileSystem, $uploaderfactory, $bannerFactory, $bannerResource, $bannerCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
