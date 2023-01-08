<?php
namespace Custom\Vivek\Model;

use Custom\Vivek\Api\Brightness;
use Custom\Vivek\Api\Color;

class Yellow implements Color
{
    protected $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Yellow";
    }
}
