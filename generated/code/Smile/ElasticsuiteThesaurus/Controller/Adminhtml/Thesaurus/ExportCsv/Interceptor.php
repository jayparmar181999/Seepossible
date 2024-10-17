<?php
namespace Smile\ElasticsuiteThesaurus\Controller\Adminhtml\Thesaurus\ExportCsv;

/**
 * Interceptor class for @see \Smile\ElasticsuiteThesaurus\Controller\Adminhtml\Thesaurus\ExportCsv
 */
class Interceptor extends \Smile\ElasticsuiteThesaurus\Controller\Adminhtml\Thesaurus\ExportCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $coreRegistry, \Smile\ElasticsuiteThesaurus\Api\ThesaurusRepositoryInterface $thesaurusRepository, \Smile\ElasticsuiteThesaurus\Model\ThesaurusFactory $thesaurusFactory, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Filesystem $filesystem, \Smile\ElasticsuiteThesaurus\Model\Import\Thesaurus $thesaurusImport)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $coreRegistry, $thesaurusRepository, $thesaurusFactory, $fileFactory, $filesystem, $thesaurusImport);
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
