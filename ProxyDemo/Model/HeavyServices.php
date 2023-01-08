<?php


namespace Custom\ProxyDemo\Model;


class HeavyServices
{
    public function __construct()
    {
        echo "Heavy Services has been initiated"."</br>";
    }

    public function printHeavyServiceMessage(){
        echo "print from heavy service class";
    }
}
