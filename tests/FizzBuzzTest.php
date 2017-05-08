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

    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzz($input, $output)
    {
        $this->assertEquals($output, $this->fizzBuzz->speak($input));
    }
    public function fizzBuzzProvider()
    {
        $fizzBuzzString = FizzBuzz::FIZZ.FizzBuzz::BUZZ;
        $fizzString = FizzBuzz::FIZZ;
        $buzzString = FizzBuzz::BUZZ;
        return [
            [1, 1],
            [2, 2],
            [3, $fizzString],
            [4, 4],
            [5, $buzzString],
            [6, $fizzString],
            [7, 7],
            [15, $fizzBuzzString],
            [20, $buzzString],
            [30, $fizzBuzzString],
            [39, $fizzString],
            [100, $buzzString],
        ];
    }
}
