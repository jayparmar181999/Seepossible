<?php
namespace Smile\ElasticsuiteCatalog\Controller\Adminhtml\Term\Merchandiser\Save;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalog\Controller\Adminhtml\Term\Merchandiser\Save
 */
class Interceptor extends \Smile\ElasticsuiteCatalog\Controller\Adminhtml\Term\Merchandiser\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Json\Helper\Data $jsonHelper, \Smile\ElasticsuiteCatalog\Model\Product\Search\Position $positionModel)
    {
        $this->___init();
        parent::__construct($context, $jsonHelper, $positionModel);
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
