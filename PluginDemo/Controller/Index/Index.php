<?php
namespace Custom\PluginDemo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Catalog\Model\ProductFactory;

class Index extends Action
{
    protected $productFactory;
    public function __construct(
        ProductFactory $productFactory,
        Context $context
    ){
        $this->productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        //echo "welcome to Plugin demo module";
            /*$product = $this->productFactory->create()->load(1);
            $product->setName("Iphone 6");*/
        //$productName = $product->getName();
            //$productName = $product->getIdBySku('24-MB01');
        //echo $productName;
        echo "Main function"."</br>";
        /*$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('This Is Simple Text Log');*/
    }
}
