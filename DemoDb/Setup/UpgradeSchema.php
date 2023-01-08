<?php
namespace Custom\DemoDb\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Db\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(),'0.1.1','<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('demo_database'),
                'phone_number',
                ['nullable'=>false, 'type'=>Table::TYPE_TEXT,'comment'=>'PHONE NUMBER OF DEMO']
            );
        }
        $setup->endSetup();
    }
}
