<?php
namespace Smile\ElasticsuiteIndices\Controller\Adminhtml\Analysis\Request;

/**
 * Interceptor class for @see \Smile\ElasticsuiteIndices\Controller\Adminhtml\Analysis\Request
 */
class Interceptor extends \Smile\ElasticsuiteIndices\Controller\Adminhtml\Analysis\Request implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Smile\ElasticsuiteCore\Api\Client\ClientInterface $client, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($client, $resultJsonFactory, $context);
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
