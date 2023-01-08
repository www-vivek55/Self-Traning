<?php

namespace Custom\Vivek\Controller\Checkdemo;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Custom\Vivek\Api\PencilInterface;
use Custom\Vivek\Model\PencilFactory;

class HelloWorld extends Action
{
    protected $productRepository;
    protected $pencilInterface;
    protected $pencilFactory;
    public function __construct(
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository,
        PencilFactory $pencilFactory,
        Context $context
    ){
        $this->productRepository = $productRepository;
        $this->pencilInterface = $pencilInterface;
        $this->pencilFactory = $pencilFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        //echo "Welcome to my test code";
        //echo get_class($this->productRepository);
            /*echo $this->pencilInterface->getPencilType();
            echo "<br/><br/><pre/>";*/
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            /*$pencil = $objectManager->create('\Custom\Vivek\Model\Pencil');
            var_dump($pencil);*/
        //echo "<br/>------------------------------------------------------------------<br/>";
            /*$book = $objectManager->create('\Custom\Vivek\Model\Book');
            var_dump($book);*/
        //$student = $objectManager->create('\Custom\Vivek\Model\Student');
        //$student = $objectManager->create('\Custom\Vivek\Model\Pencil');
        echo "<pre/>";
        $PencilFactory = $this->pencilFactory->create(array("name"=>"xyz","school"=>"bmv public school"));
        var_dump($PencilFactory);
    }
}

