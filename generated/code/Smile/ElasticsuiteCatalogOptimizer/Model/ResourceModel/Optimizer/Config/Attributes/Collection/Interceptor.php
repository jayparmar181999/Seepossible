<?php
namespace Smile\ElasticsuiteCatalogOptimizer\Model\ResourceModel\Optimizer\Config\Attributes\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalogOptimizer\Model\ResourceModel\Optimizer\Config\Attributes\Collection
 */
class Interceptor extends \Smile\ElasticsuiteCatalogOptimizer\Model\ResourceModel\Optimizer\Config\Attributes\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Model\EntityFactory $eavEntityFactory, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, $availableBackendTypes = [], $nestedFieldAttributes = [])
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $eavEntityFactory, $connection, $resource, $availableBackendTypes, $nestedFieldAttributes);
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
