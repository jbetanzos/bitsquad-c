<?php

namespace App\Test\Exception;


use App\Exception\NotMultiple;
use PHPUnit\Framework\TestCase;

class NotMultipleTest extends TestCase
{
    public function testThrowNotMultipleException()
    {
        $this->expectException(NotMultiple::class);

        throw new NotMultiple();
    }
}