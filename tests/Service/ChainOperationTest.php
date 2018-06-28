<?php

namespace App\Test\Service;

use App\Exception\NotMultiple;
use App\Model\Multiple;
use App\Service\ChainOperation;
use PHPUnit\Framework\TestCase;

class ChainOperationTest extends TestCase
{
    public function testChainOperation()
    {
        $multiples = new \SplQueue();
        $multiples->enqueue(new Multiple(3, "Multi"));
        $multiples->enqueue(new Multiple(5, "ple"));

        $chain = new ChainOperation();

        for ($i = 15; $i < 150; $i += 15) {
            $chain->setNumber($i);
            $this->assertEquals("Success", $chain->validate($multiples, "Success"));
        }
    }

    public function testNoChainOperation()
    {
        $multiples = new \SplQueue();
        $multiples->enqueue(new Multiple(3, "Multi"));
        $multiples->enqueue(new Multiple(5, "ple"));

        $chain = new ChainOperation();

        $values = [1, 4, 11, 13, 17];

        foreach ($values as $v) {
            $chain->setNumber($v);
            $this->assertEquals($v, $chain->validate($multiples, "Success"));
        }

    }

}