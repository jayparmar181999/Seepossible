<?php
namespace Sparsh\Banner\Block\Adminhtml\Banner\Edit\Tab\Main;

/**
 * Interceptor class for @see \Sparsh\Banner\Block\Adminhtml\Banner\Edit\Tab\Main
 */
class Interceptor extends \Sparsh\Banner\Block\Adminhtml\Banner\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Store\Model\System\Store $systemStore, \Magento\Customer\Model\ResourceModel\Group\Collection $customerGroup, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $storeManager, $systemStore, $customerGroup, $data);
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
