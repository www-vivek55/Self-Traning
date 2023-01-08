<?php

namespace Custom\DemoDb\Model;

use Magento\Framework\Model\AbstractModel;
use Custom\DemoDb\Model\ResourceModel\DemoMember;

class Demo extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(DemoMember::class);
    }
}
