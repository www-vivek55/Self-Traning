<?php


namespace Custom\Vivek\Model;

use Custom\Vivek\Api\Size;

class Big implements Size
{

    public function getSize()
    {
        return "Big";
    }
}
