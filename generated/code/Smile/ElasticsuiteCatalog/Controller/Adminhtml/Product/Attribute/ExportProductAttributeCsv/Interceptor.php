<?php
namespace Smile\ElasticsuiteCatalog\Controller\Adminhtml\Product\Attribute\ExportProductAttributeCsv;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCatalog\Controller\Adminhtml\Product\Attribute\ExportProductAttributeCsv
 */
class Interceptor extends \Smile\ElasticsuiteCatalog\Controller\Adminhtml\Product\Attribute\ExportProductAttributeCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $attributeCollectionFactory, \Smile\ElasticsuiteCatalog\Model\Import\ProductAttribute $productAttributeImport)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $fileFactory, $filesystem, $attributeCollectionFactory, $productAttributeImport);
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
