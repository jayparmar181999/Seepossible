<?php
namespace Smile\ElasticsuiteCatalogRule\Controller\Adminhtml\Product\Rule\Conditions;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalogRule\Controller\Adminhtml\Product\Rule\Conditions
 */
class Interceptor extends \Smile\ElasticsuiteCatalogRule\Controller\Adminhtml\Product\Rule\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Smile\ElasticsuiteCatalogRule\Model\RuleFactory $ruleFactory, $acls = [])
    {
        $this->___init();
        parent::__construct($context, $ruleFactory, $acls);
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
