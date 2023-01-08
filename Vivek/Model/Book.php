<?php


namespace Custom\Vivek\Model;

use Custom\Vivek\Api\Color;
use Custom\Vivek\Api\Size;

class Book
{
    protected $color;
    protected $size;
    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
}
