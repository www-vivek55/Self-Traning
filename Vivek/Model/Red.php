<?php


namespace Custom\Vivek\Model;

use Custom\Vivek\Api\Color;
use Custom\Vivek\Api\Brightness;
class Red implements Color
{
    protected $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Red";
    }
}
