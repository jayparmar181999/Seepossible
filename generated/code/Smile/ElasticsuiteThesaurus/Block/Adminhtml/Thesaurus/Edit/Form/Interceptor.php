<?php
namespace Smile\ElasticsuiteThesaurus\Block\Adminhtml\Thesaurus\Edit\Form;

/**
 * Interceptor class for @see \Smile\ElasticsuiteThesaurus\Block\Adminhtml\Thesaurus\Edit\Form
 */
class Interceptor extends \Smile\ElasticsuiteThesaurus\Block\Adminhtml\Thesaurus\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Config\Model\Config\Source\Yesno $booleanSource, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $booleanSource, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
