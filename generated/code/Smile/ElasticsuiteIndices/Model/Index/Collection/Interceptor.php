<?php
namespace Smile\ElasticsuiteIndices\Model\Index\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteIndices\Model\Index\Collection
 */
class Interceptor extends \Smile\ElasticsuiteIndices\Model\Index\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Smile\ElasticsuiteIndices\Model\ResourceModel\Index\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($entityFactory, $collectionFactory);
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
