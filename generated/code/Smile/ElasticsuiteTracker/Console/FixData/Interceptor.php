<?php
namespace Smile\ElasticsuiteTracker\Console\FixData;

/**
 * Interceptor class for @see \Smile\ElasticsuiteTracker\Console\FixData
 */
class Interceptor extends \Smile\ElasticsuiteTracker\Console\FixData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Smile\ElasticsuiteTracker\Model\Data\Checker $checker, \Magento\Store\Model\StoreManagerInterface $storeManager, ?string $name = null)
    {
        $this->___init();
        parent::__construct($checker, $storeManager, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
