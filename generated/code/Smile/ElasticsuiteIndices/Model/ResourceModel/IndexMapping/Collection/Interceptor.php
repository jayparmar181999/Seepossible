<?php
namespace Smile\ElasticsuiteIndices\Model\ResourceModel\IndexMapping\Collection;

/**
 * Interceptor class for @see \Smile\ElasticsuiteIndices\Model\ResourceModel\IndexMapping\Collection
 */
class Interceptor extends \Smile\ElasticsuiteIndices\Model\ResourceModel\IndexMapping\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Smile\ElasticsuiteIndices\Model\IndexMappingProvider $indexMappingProvider, string $name)
    {
        $this->___init();
        parent::__construct($entityFactory, $indexMappingProvider, $name);
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
