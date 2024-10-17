<?php
namespace Smile\ElasticsuiteTracker\Controller\Adminhtml\Config\ValidateNotification;

/**
 * Interceptor class for @see \Smile\ElasticsuiteTracker\Controller\Adminhtml\Config\ValidateNotification
 */
class Interceptor extends \Smile\ElasticsuiteTracker\Controller\Adminhtml\Config\ValidateNotification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Smile\ElasticsuiteTracker\Model\ResourceModel\Viewer\Logger $notificationLogger)
    {
        $this->___init();
        parent::__construct($context, $notificationLogger);
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
