<?php

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
        $fizzes = $this->flipAndFill(range(0, 100, 3), self::FIZZ);
        $buzzes = $this->flipAndFill(range(0, 100, 5), self::BUZZ);
        $fizzesBuzzes = $this->flipAndFill(range(0, 100, 15), (self::FIZZ.self::BUZZ));
        $others = array_flip(range(0, 100));
        $this->studentsNumbers = $fizzesBuzzes + $fizzes + $buzzes + $others;
    }

    /**
     * @param $number
     * @return int
     */
    public function speak($number)
    {
        return $this->studentsNumbers[$number];
    }

    private function flipAndFill($numbers, $value)
    {
        $fizzes = [];
        foreach ($numbers as $number){
            $fizzes[$number] = $value;
        }

        return $fizzes;
    }
}
