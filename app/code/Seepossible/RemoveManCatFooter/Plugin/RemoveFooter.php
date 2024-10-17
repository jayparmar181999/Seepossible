<?php
namespace Seepossible\RemoveManCatFooter\Plugin;

use Magento\Catalog\Model\CategoryRepository;
use Magento\Framework\View\LayoutInterface;
use Magento\Catalog\Model\Layer\Resolver;

class RemoveFooter
{
    protected $categoryRepository;
    protected $layerResolver;

    public function __construct(
        CategoryRepository $categoryRepository,
        Resolver $layerResolver
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->layerResolver = $layerResolver;
    }

    public function beforeGetOutput(LayoutInterface $subject)
    {
        $category = $this->layerResolver->get()->getCurrentCategory();

        if ($category && $category->getLevel() == 2) {
            $subject->unsetElement('footer');
        }
    }
}
