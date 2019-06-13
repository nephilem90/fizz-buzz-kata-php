<?php


class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    private $soudNumbers;

    public function setUp()
    {
        $this->soudNumbers = array(
            3 => 'fizz',
            5 => 'buzz',
            7 => 'pizz',
        );
    }

    public function testSingleSoundNumber()
    {
        $fizzBuzz = new FizzBuzz();
        foreach ($this->soudNumbers as $number => $sound) {
            $this->assertEquals($sound, $fizzBuzz->getFizzBuzzOrNumber($number));
        }
    }

    public function testMultipleValuesSoundNumber()
    {
        $fizzBuzz = new FizzBuzz();
        foreach ($this->soudNumbers as $number => $sound) {
            do {
                $hasNotOnlyMultiple = false;
                $testNumber = rand(1111, 9999) * $number;
                foreach ($this->soudNumbers as $number2 => $sound2) {
                    if ($number == $number2) {
                        continue;
                    }
                    if ($testNumber % $number2 == 0) {
                        $hasNotOnlyMultiple = true;
                    }
                }
            } while ($hasNotOnlyMultiple);
            $this->assertEquals($sound, $fizzBuzz->getFizzBuzzOrNumber($testNumber));
        }
    }
}
