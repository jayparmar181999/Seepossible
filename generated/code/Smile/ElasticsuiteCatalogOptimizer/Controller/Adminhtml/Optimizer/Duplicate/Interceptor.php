<?php
namespace Smile\ElasticsuiteCatalogOptimizer\Controller\Adminhtml\Optimizer\Duplicate;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalogOptimizer\Controller\Adminhtml\Optimizer\Duplicate
 */
class Interceptor extends \Smile\ElasticsuiteCatalogOptimizer\Controller\Adminhtml\Optimizer\Duplicate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $coreRegistry, \Smile\ElasticsuiteCatalogOptimizer\Api\OptimizerRepositoryInterface $optimizerRepository, \Smile\ElasticsuiteCatalogOptimizer\Api\Data\OptimizerInterfaceFactory $optimizerFactory, \Smile\ElasticsuiteCatalogOptimizer\Model\Optimizer\Copier $optimizerCopier)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $coreRegistry, $optimizerRepository, $optimizerFactory, $optimizerCopier);
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
