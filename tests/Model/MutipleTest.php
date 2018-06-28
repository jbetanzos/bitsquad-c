<?php

namespace App\Test\Model;


use App\Exception\NotMultiple;
use App\Model\Multiple;
use PHPUnit\Framework\TestCase;

class MutipleTest extends TestCase
{
    public function testIsMultiple()
    {
        $m = new Multiple(2, "DOS");
        for ($i = 2; $i < 20; $i += 2) {
            $this->assertEquals("DOS", $m->toString($i));
        }
    }

    public function testNotMultiple()
    {
        $this->expectException(NotMultiple::class);

        $m = new Multiple(3, "TRES");
        for ($i = 2; $i < 20; $i += 2) {
            $m->toString($i);
        }
    }
}