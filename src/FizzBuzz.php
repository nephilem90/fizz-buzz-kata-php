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

    public function getFizzBuzzOrNumber($input)
    {
        $output = '';
        foreach ($this->soundNumbers as $soundNumber => $sound) {
            if ($input % $soundNumber == 0) {
                $output .= $sound;
            }
        }
        return $output ?: $input;
    }
}