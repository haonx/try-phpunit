<?php
require_once 'helpers.php';

/**
 * Created by PhpStorm.
 * User: qtvha
 * Date: 5/6/2017
 * Time: 7:58 AM
 */
class FizzBuzz
{
    const FIZZ = 'FIZZ';
    const BUZZ = 'BUZZ';
    private $studentsNumbers = [];

    public function __construct()
    {
        // [3,6,9,12, so on]
        $divisible_by_three = range(0, 100, 3);
        $divisible_by_five = range(0, 100, 5);
        $divisible_by_fifteen =range(0, 100, 15);

        # [3=>1, 6=>2, 9=>3, so on]
        $fizzesPlaceholder = array_flip($divisible_by_three);
        $buzzesPlaceholder = array_flip($divisible_by_five);
        $fizzesBuzzesPlaceholder = array_flip($divisible_by_fifteen);

        # [3=>fizz,6=>fizz,9=>fizz,  so on]
        $fizzes = data_set($fizzesPlaceholder, '*', self::FIZZ);
        $buzzes = data_set($buzzesPlaceholder, '*', self::BUZZ);
        $fizzesBuzzes = data_set($fizzesBuzzesPlaceholder, '*', (self::FIZZ . self::BUZZ));

        $allNumbers = array_flip(range(0, 100)); # [1=>1,2=>2,3=>3, so on]
        $this->studentsNumbers = $fizzesBuzzes + $fizzes + $buzzes + $allNumbers;
    }

    /**
     * @param $number
     * @return int
     */
    public function speak($number)
    {
        return $this->studentsNumbers[$number];
    }
}
