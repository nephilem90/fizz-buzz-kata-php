<?php


class Children
{
    private $soundNumberList;

    private function __construct($soundNumberList = array())
    {
        $this->soundNumberList = $soundNumberList;
    }

    public static function initializeFromSoundNumberList($soundNumberList = array())
    {
        return new Children($soundNumberList);
    }

    public function saidSoundOrNumber($input)
    {
        $output = '';
        foreach ($this->soundNumberList as $number => $sound) {
            if ($input % $number == 0) {
                $output .= $sound;
            }
        }
        return $output ?: $input;
    }
}