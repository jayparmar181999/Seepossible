<?php
namespace Smile\ElasticsuiteVirtualCategory\Model\ResourceModel\VirtualCategory\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteVirtualCategory\Model\ResourceModel\VirtualCategory\Collection
 */
class Interceptor extends \Smile\ElasticsuiteVirtualCategory\Model\ResourceModel\VirtualCategory\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig = null, ?\Magento\Catalog\Model\Product\Visibility $catalogProductVisibility = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $storeManager, $connection, $scopeConfig, $catalogProductVisibility);
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
