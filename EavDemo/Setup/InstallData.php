<?php
namespace Custom\EavDemo\Setup;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Custom\EavDemo\Model\Config\Options;

class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * @throws \Zend_Validate_Exception
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $eavSetup = $this->eavSetupFactory->create(['setup'=>$setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'custom_eav',
            [
                'group'=>'Content',
                'type'=>'text',
                'backend'=>\Custom\EavDemo\Model\Config\Validation::class,
                'global'=>ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible'=>true,
                'required'=>true,
                'searchable'=>false,
                'used_in_product_listing'=>true,
                'label'=>'Custom Eav',
                'input'=>'text'
            ]
        );

        $eavSetup = $this->eavSetupFactory->create(['setup'=>$setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'material_type',
            [
                'group'=>'Content',
                'type'=>'text',
                'global'=>ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible'=>true,
                'required'=>false,
                'searchable'=>false,
                'used_in_product_listing'=>true,
                'label'=>'Material Type',
                'input'=>'select',
                'source'=>Options::class
            ]
        );

        $setup->endSetup();
    }
}
