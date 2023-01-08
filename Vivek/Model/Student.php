<?php


namespace Custom\Vivek\Model;


class Student
{
    private $name;
    private $age;
    private $score;
    public function __construct($name="vivek", $age = 25, array $score = array("math"=>50,"hindi"=>70))
    {
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }
}
