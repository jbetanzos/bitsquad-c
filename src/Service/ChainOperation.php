<?php

namespace App\Service;

use App\Exception\NotMultiple;

class ChainOperation
{
    private $number;

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function validate(\SplQueue $multiples, $toString)
    {
        $result = $this->number;
        $multiples->rewind();
        $isMultiple = true;
        while($multiples->valid()) {
            try {
                $result = $multiples->current()->toString($this->number);
            } catch (NotMultiple $nm) {
                $isMultiple = false;
            } finally {
                $multiples->next();
            }
        }

        if ($isMultiple) {
            return $toString;
        }

        return $result;
    }
}