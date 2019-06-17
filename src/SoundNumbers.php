<?php


class SoundNumbers
{
    private $soundNumberList;

    private function __construct($soundNumberList = array())
    {
        $this->soundNumberList = $soundNumberList;
    }

    public static function inizializeFromArray($soundNumberList = array())
    {
        foreach($soundNumberList as $number => $sound) {
            if (!is_int($number) || !is_string($sound)) {
                throw new Exception('data is not valid!');
            }
        }
        return new self($soundNumberList);
    }

    public function getList()
    {
        return $this->soundNumberList;
    }
}