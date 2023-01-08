<?php


namespace Custom\HelloWorld\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloView implements ArgumentInterface
{
    protected $product;

    public function __construct(
        ProductRepositoryInterface $productRepository
    ) {
        $this->product = $productRepository;
    }

    public function getTitle()
    {
        return "This call from custom view model template";
    }

    public function helloArray()
    {
        $array = ['good','very good','exclant'];
        return $array;
    }

    public function getProductName()
    {
        $product = $this->product->get('24-MB01');
        return $product->getName();
    }
}
