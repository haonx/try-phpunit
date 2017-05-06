<?php
require_once '../FizzBuzz.php';

/**
 * @property FizzBuzz fizzBuzz
 */
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_1_1()
    {
        $this->assertEquals(1, $this->fizzBuzz->speak(1));
    }
    public function test_2_2()
    {
        $this->assertEquals(2, $this->fizzBuzz->speak(2));
    }
    public function test_3_FIZZ()
    {
        $this->assertEquals(FizzBuzz::FIZZ, $this->fizzBuzz->speak(3));
    }
    public function test_4_BUZZ()
    {
        $this->assertEquals(4, $this->fizzBuzz->speak(4));
    }
    public function test_5_BUZZ()
    {
        $this->assertEquals(FizzBuzz::BUZZ, $this->fizzBuzz->speak(5));
    }
    public function test_15_FIZZBUZZ()
    {
        $this->assertEquals(FizzBuzz::FIZZ.FizzBuzz::BUZZ, $this->fizzBuzz->speak(15));
    }
    public function test_30_FIZZBUZZ()
    {
        $this->assertEquals(FizzBuzz::FIZZ.FizzBuzz::BUZZ, $this->fizzBuzz->speak(30));
    }
    public function test_100_BUZZ()
    {
        $this->assertEquals(FizzBuzz::BUZZ, $this->fizzBuzz->speak(100));
    }
}
