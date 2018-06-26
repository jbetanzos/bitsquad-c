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
        try {
            return $this->string[$number%$this->multiple];
        } catch (\Exception $exception) {
            throw new NotMultiple();
        }
    }
}