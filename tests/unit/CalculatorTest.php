<?php

namespace App\Tests\unit;

use App\Controller\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd(){
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAddiition($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }
    public function testExpectedOutput()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }
    public function testSomething()
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue(true, 'This should already work.');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }

}