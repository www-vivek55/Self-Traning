<?php


namespace Custom\PluginDemo\Plugin;


class PluginSolution
{
    /*public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name){
        return "Before Plugin ".$name;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
        return $result." After Plugin";
    }

    public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, $sku){
        echo "Before proceed </br>";
        $id = $proceed($sku);
        echo $id."</br>";
        echo "After proceed";
    }

    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed){
        echo "Before proceed </br>";
        $name = $proceed();
        echo $name."</br>";
        echo "After proceed";
    }*/

    public function beforeExecute(\Custom\PluginDemo\Controller\Index\Index $subject){
        echo  "Before execute function short order 10 </br>";
    }

    public function afterExecute(\Custom\PluginDemo\Controller\Index\Index $subject){
        echo  "After execute function short order 10 </br>";
    }

    public function aroundExecute(\Custom\PluginDemo\Controller\Index\Index $subject,callable $proceed){
        echo  "In side Before proceed function short order 10 </br>";
        echo $proceed();
        echo  "In side After proceed function short order 10 </br>";
    }
}
