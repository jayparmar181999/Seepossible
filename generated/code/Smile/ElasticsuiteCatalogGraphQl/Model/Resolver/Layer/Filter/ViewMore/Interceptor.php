<?php
namespace Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Layer\Filter\ViewMore;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Layer\Filter\ViewMore
 */
class Interceptor extends \Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Layer\Filter\ViewMore implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Products\Query\ProductQueryInterface $searchQuery, \Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Products\ContextUpdater $contextUpdater, \Smile\ElasticsuiteCatalogGraphQl\Model\Layer\Filter\ViewMore\Context $viewMoreContext)
    {
        $this->___init();
        parent::__construct($searchQuery, $contextUpdater, $viewMoreContext);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
