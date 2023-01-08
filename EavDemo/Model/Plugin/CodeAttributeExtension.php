<?php

namespace Custom\EavDemo\Model\Plugin;

use Custom\ApiDemo\Api\Data\DemoMemberExtensionFactory;
use Custom\ApiDemo\Model\DemoMemberRepository;

class CodeAttributeExtension
{
    protected $extensionFactory;

    public function __construct(DemoMemberExtensionFactory $extensionFactory)
    {
        $this->extensionFactory = $extensionFactory;
    }

    public function aroundGetListById(DemoMemberRepository $demoMemberRepository, \Closure $proceed, $id)
    {
        $model = $proceed($id);
        $extensionAttributes = $model->getExtensionAttributes();
        if ($extensionAttributes == null) {
            $extensionAttributes = $this->extensionFactory->create();
        }

        //$extensionAttributes->setCode("Code #", $id);
        //$extensionAttributes->setData(key: "aksdhkaj",value: "okkkkk");
        $extensionAttributes->setData("Code #", $id);
        $model->setExtensionAttributes($extensionAttributes);
        return $model;
    }
}
