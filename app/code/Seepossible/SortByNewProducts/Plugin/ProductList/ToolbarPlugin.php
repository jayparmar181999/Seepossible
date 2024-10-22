<?php

namespace Seepossible\SortByNewProducts\Plugin\ProductList;

class ToolbarPlugin
{
    public function afterGetAvailableOrders($subject, $result)
    {
        // Add 'created_at' for sorting by new products
        $result['created_at'] = __('New Products');
        return $result;
    }
}
