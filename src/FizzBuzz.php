<?php


class FizzBuzz
{

    private $soundNumbers;
    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {
        $this->soundNumbers = array(
            3 => 'fizz',
            5 => 'buzz',
            7 => 'pizz',
        );
    }

    public function getFizzBuzzOrNumber($number)
    {
        $output = '';
        foreach ($this->soundNumbers as $sound => $number) {
            if ($number % 3 == 0) {
                $output .= 'fizz';
            }
        }
        return $output ?: $number;
    }
}