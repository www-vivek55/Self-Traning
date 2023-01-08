<?php
namespace Custom\RequestFlow\Controller\Page;

class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return bool
     */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName('noroutefound')->setControllerName('Page')->setActionName('CustomNoRoute');
        return true;
    }
}
