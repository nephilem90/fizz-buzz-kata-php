<?php


class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    public function testElevenIsEleven()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(11, $fizzBuzz->getFizzBuzzOrNumber(11));
    }

    public function testTwelveIsFizz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('fizz', $fizzBuzz->getFizzBuzzOrNumber(12));
    }

    public function testThirteenIsThirteen()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(13, $fizzBuzz->getFizzBuzzOrNumber(13));
    }

    public function testFiveIsBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('buzz', $fizzBuzz->getFizzBuzzOrNumber(5));
    }

    public function testFifteenIsFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('fizzbuzz', $fizzBuzz->getFizzBuzzOrNumber(15));
    }

    public function testMultipleThreeNumberAndNotFiveAreFizz()
    {
        $fizzBuzz = new FizzBuzz();
        do {
            $number = rand(1111, 99999) * 3;
        } while ($number % 5 == 0);
        $this->assertEquals('fizz', $fizzBuzz->getFizzBuzzOrNumber($number));
    }

    public function testMultipleFiveNumberAndNotThreeAreBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        do {
            $number = rand(1111, 99999) * 5;
        } while ($number % 3 == 0);
        $this->assertEquals('buzz', $fizzBuzz->getFizzBuzzOrNumber($number));
    }

    public function testMultipleFifteenNumberAreFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $number = rand(1111, 99999) * 15;
        $this->assertEquals('fizzbuzz', $fizzBuzz->getFizzBuzzOrNumber($number));
    }

    public function testMultipleSevenNumberArePizz()
    {
        $fizzBuzz = new FizzBuzz();

        $number = rand(1111, 99999) * 7;
        $this->assertEquals('pizz', $fizzBuzz->getFizzBuzzOrNumber($number));
    }
}
