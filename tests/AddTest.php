<?php

namespace Sujalpatel\Calculator\Tests;

use PHPUnit\Framework\TestCase;
use Sujalpatel\Calculator\Calculator;

class AddTest extends TestCase
{
    /** @test */
    public function addition()
    {
        $a = rand(1,9);
        $b = rand(1,9);
        $this->assertIsNumeric(Calculator::add($a,$b));
    }
}
