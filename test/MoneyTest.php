<?php
namespace test;

use PHPUnit\Framework\TestCase;

include_once('../src/Money.php');

class MoneyTest extends TestCase
{
    public function testCanBeNegated()
    {
        $a = new \general\Money(1);

        $b = $a->negate();

        $this->assertEquals(-1, $b->getAmount());
    }
}