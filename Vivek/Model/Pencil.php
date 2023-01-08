<?php


namespace Custom\Vivek\Model;

use Custom\Vivek\Api\PencilInterface;
use Custom\Vivek\Api\Color;
use Custom\Vivek\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
    protected $name;
    protected $school;
    public function __construct(Color $color, Size $size, $name = null, $school = null)
    {
        $this->color = $color;
        $this->size = $size;
        $this->name = $name;
        $this->school = $school;
    }

    public function getPencilType()
    {
        return "This pencil have <strong>".__($this->color->getColor())."</strong> Color And <strong>".__($this->size->getSize())."</strong> Size is Available";
    }
}
