<?php
namespace Smile\ElasticsuiteCore\Block\Adminhtml\Search\Request\RelevanceConfig\Form;

/**
 * Interceptor class for @see \Smile\ElasticsuiteCore\Block\Adminhtml\Search\Request\RelevanceConfig\Form
 */
class Interceptor extends \Smile\ElasticsuiteCore\Block\Adminhtml\Search\Request\RelevanceConfig\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Factory $configFactory, \Magento\Config\Model\Config\Structure $configStructure, \Magento\Config\Block\System\Config\Form\Fieldset\Factory $fieldsetFactory, \Magento\Config\Block\System\Config\Form\Field\Factory $fieldFactory, \Smile\ElasticsuiteCore\Search\Request\RelevanceConfig\App\Config $relevanceConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $configFactory, $configStructure, $fieldsetFactory, $fieldFactory, $relevanceConfig, $data);
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
