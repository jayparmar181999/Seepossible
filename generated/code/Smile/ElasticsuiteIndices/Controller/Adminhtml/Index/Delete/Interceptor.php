<?php
namespace Smile\ElasticsuiteIndices\Controller\Adminhtml\Index\Delete;

/**
 * Interceptor class for @see \Smile\ElasticsuiteIndices\Controller\Adminhtml\Index\Delete
 */
class Interceptor extends \Smile\ElasticsuiteIndices\Controller\Adminhtml\Index\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Smile\ElasticsuiteIndices\Model\IndexStatsProvider $indexStatsProvider, \Smile\ElasticsuiteIndices\Model\IndexStatusProvider $indexStatusProvider)
    {
        $this->___init();
        parent::__construct($context, $indexStatsProvider, $indexStatusProvider);
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
