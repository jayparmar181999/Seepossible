<?php
namespace Seepossible\ProductPrefix\Plugin;

class ProductPlugin
{
    /**
     * Add prefix to product name on the frontend
     *
     * @param \Magento\Catalog\Model\Product $subject
     * @param string $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return 'Seepossible ' . $result;
    }
}
