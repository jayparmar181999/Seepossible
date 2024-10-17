<?php
namespace Smile\ElasticsuiteCatalog\Controller\Navigation\Filter\Ajax;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalog\Controller\Navigation\Filter\Ajax
 */
class Interceptor extends \Smile\ElasticsuiteCatalog\Controller\Navigation\Filter\Ajax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, $filterListPool = [])
    {
        $this->___init();
        parent::__construct($context, $jsonResultFactory, $layerResolver, $categoryRepository, $filterListPool);
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
