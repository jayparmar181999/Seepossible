<?php
namespace Smile\ElasticsuiteAnalytics\Controller\Adminhtml\Search\Usage;

/**
 * Interceptor class for @see \Smile\ElasticsuiteAnalytics\Controller\Adminhtml\Search\Usage
 */
class Interceptor extends \Smile\ElasticsuiteAnalytics\Controller\Adminhtml\Search\Usage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Smile\ElasticsuiteCore\Api\Index\IndexOperationInterface $indexOperation, \Smile\ElasticsuiteAnalytics\Model\Report\Context $reportContext, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $indexOperation, $reportContext, $resultPageFactory);
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
