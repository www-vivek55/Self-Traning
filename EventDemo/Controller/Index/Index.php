<?php


namespace Custom\EventDemo\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Event\ManagerInterface;

class Index extends Action
{
    protected $_eventManager;
    public function __construct(
        ManagerInterface $_eventManager,
        Context $context
    ){
        $this->_eventManager = $_eventManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $message  = new \Magento\Framework\DataObject(array("greeting"=>"Good Afternoon"));
        $this->_eventManager->dispatch("custom_event",['greeting'=>$message]);
        echo $message->getGreeting();
    }
}
