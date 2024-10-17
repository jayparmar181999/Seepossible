<?php
namespace Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Aggregations;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Aggregations
 */
class Interceptor extends \Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Aggregations implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Smile\ElasticsuiteCatalogGraphQl\Model\Resolver\Layer\FiltersProvider $filtersProvider, \Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\LayerBuilder $layerBuilder, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Smile\ElasticsuiteCore\Api\Search\ContextInterface $searchContext)
    {
        $this->___init();
        parent::__construct($filtersProvider, $layerBuilder, $layerResolver, $searchContext);
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
