<?php


namespace Custom\PluginDemo\Plugin;


class PluginSolution2
{
    public function beforeExecute(\Custom\PluginDemo\Controller\Index\Index $subject){
        echo  "Before execute function short order 30 </br>";
    }

    public function afterExecute(\Custom\PluginDemo\Controller\Index\Index $subject){
        echo  "After execute function short order 30 </br>";
    }

    public function aroundExecute(\Custom\PluginDemo\Controller\Index\Index $subject,callable $proceed){
        echo  "In side Before proceed function short order 30 </br>";
        echo $proceed();
        echo  "In side After proceed function short order 30 </br>";
    }
}
