<?php

namespace Custom\DemoDb\Model\ResourceModel\DemoMember;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Custom\DemoDb\Model\ResourceModel\DemoMember;
use Custom\DemoDb\Model\Demo;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct(); // TODO: Change the autogenerated stub
        $this->_init(Demo::class,DemoMember::class);
    }
}