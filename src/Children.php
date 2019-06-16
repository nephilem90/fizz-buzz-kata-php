<?php


class Children
{
    private $soundNumbers;

    private function __construct(SoundNumbers $soundNumbers)
    {
        $this->soundNumbers = $soundNumbers;
    }

    public static function initializeFromSoundNumbers(SoundNumbers $soundNumbers)
    {
        return new Children($soundNumbers);
    }

    public function saidSoundOrNumber($input)
    {
        $output = '';
        foreach ($this->soundNumbers->getList() as $number => $sound) {
            if ($input % $number == 0) {
                $output .= $sound;
            }
        }
        return $output ?: $input;
    }
}