<?php

namespace App\Model;


use App\Exception\NotMultiple;

class Multiple
{
    private $string;
    private $multiple;

    public function __construct($multiple, $toString)
    {
        $this->multiple = $multiple;
        $this->string = array();
        $this->string[] = $toString;
    }

    public function toString($number)
    {
        $index = $number%$this->multiple;

        if (!isset($this->string[$index])) {
            throw new NotMultiple();
        }

        return $this->string[$index];
    }
}