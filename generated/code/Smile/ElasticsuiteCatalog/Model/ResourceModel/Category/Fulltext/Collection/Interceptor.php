<?php
namespace Smile\ElasticsuiteCatalog\Model\ResourceModel\Category\Fulltext\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalog\Model\ResourceModel\Category\Fulltext\Collection
 */
class Interceptor extends \Smile\ElasticsuiteCatalog\Model\ResourceModel\Category\Fulltext\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Smile\ElasticsuiteCore\Search\Request\Builder $requestBuilder, \Magento\Search\Model\SearchEngine $searchEngine, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, $searchRequestName = 'category_search_container')
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $storeManager, $requestBuilder, $searchEngine, $connection, $searchRequestName);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
