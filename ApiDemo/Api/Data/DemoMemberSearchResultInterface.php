<?php
namespace Custom\ApiDemo\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface DemoMemberSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface[]
     */
    public function getItems();

    /**
     * @param array $items
     * @return SearchResultsInterface
     */
    public function setItems(array $items);
}
