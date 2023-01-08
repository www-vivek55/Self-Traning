<?php

namespace Custom\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends Template
{
    protected $product;
    public function __construct(
        ProductRepositoryInterface $productRepository,
        Template\Context $context,
        array $data = []
    ){
        $this->product = $productRepository;
        parent::__construct($context, $data);
    }

    public function getTitle()
    {
        return "This call from custom block template";
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
