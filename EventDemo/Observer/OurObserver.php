<?php


namespace Custom\EventDemo\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class OurObserver implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        $message = $observer->getData('greeting');
        $message->setGreeting('Good eveing from observer');
    }
}
