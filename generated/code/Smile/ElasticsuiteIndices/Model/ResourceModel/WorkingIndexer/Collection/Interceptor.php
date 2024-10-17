<?php
namespace Smile\ElasticsuiteIndices\Model\ResourceModel\WorkingIndexer\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteIndices\Model\ResourceModel\WorkingIndexer\Collection
 */
class Interceptor extends \Smile\ElasticsuiteIndices\Model\ResourceModel\WorkingIndexer\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Magento\Indexer\Model\Indexer\CollectionFactory $collectionFactory, \Smile\ElasticsuiteCore\Helper\IndexSettings $indexSettings, \Smile\ElasticsuiteIndices\Helper\Settings $helper)
    {
        $this->___init();
        parent::__construct($entityFactory, $collectionFactory, $indexSettings, $helper);
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
