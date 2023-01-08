<?php
namespace Custom\DemoDb\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
                $setup->getTable('demo_database'),
                ['name'=>'Vivek','address'=>'120 faridabad','status'=>true]
            );

        $setup->getConnection()->insert(
                $setup->getTable('demo_database'),
                ['name'=>'Mohit','address'=>'102 Mangal bhawan']
            );
        $setup->endSetup();
    }
}
