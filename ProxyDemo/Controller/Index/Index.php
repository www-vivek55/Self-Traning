<?php
namespace Custom\ProxyDemo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Custom\ProxyDemo\Model\HeavyServices;
use Magento\Framework\App\Request\Http;

class Index extends Action
{
    protected $heavyServices;
    protected $http;
    public function __construct(
        HeavyServices $heavyServices,
        Http $http,
        Context $context
    ){
        $this->heavyServices = $heavyServices;
        $this->http = $http;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->http->getParam('id',0);
        if($id == 1){
            $this->heavyServices->printHeavyServiceMessage();
        }else{
            echo "Heavy services not used";
        }
    }
}
