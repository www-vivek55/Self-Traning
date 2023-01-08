<?php

namespace Custom\DemoDb\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class DemoMember extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('demo_database','entity_id');
    }
}
