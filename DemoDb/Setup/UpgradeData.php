<?php
namespace Custom\DemoDb\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(),'0.1.2','<')){
            $setup->getConnection()->insert(
                $setup->getTable('demo_database'),
                ['name'=>'Amit','address'=>'Ahmadababd','status'=>true,'phone_number'=>'8287515689']
            );
        }
        $setup->endSetup();
    }
}
