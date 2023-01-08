<?php


namespace Custom\Vivek\Model;

use Custom\Vivek\Api\Size;

class Small implements Size
{

    public function getSize()
    {
        return "Small";
    }
}
