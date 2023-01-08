<?php
namespace Custom\CliDemo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{

    public function execute()
    {
        echo "Welcome cli";
    }
}
