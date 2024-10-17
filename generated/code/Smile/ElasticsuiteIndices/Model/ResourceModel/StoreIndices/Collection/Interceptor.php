<?php
namespace Smile\ElasticsuiteIndices\Model\ResourceModel\StoreIndices\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteIndices\Model\ResourceModel\StoreIndices\Collection
 */
class Interceptor extends \Smile\ElasticsuiteIndices\Model\ResourceModel\StoreIndices\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Smile\ElasticsuiteCore\Helper\IndexSettings $indexSettingsHelper, \Smile\ElasticsuiteIndices\Model\IndicesList $indicesList)
    {
        $this->___init();
        parent::__construct($entityFactory, $storeManager, $indexSettingsHelper, $indicesList);
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
