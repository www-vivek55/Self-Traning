<?php
namespace Custom\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class CustomNoRoute extends Action
{

    public function execute()
    {
        echo "Custom no route 404";
    }
}
