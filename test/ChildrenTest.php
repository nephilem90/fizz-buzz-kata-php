<?php


class ChildrenTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->soundNumbers = $this->getMockBuilder('SoundNumbers')
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testSoundNumberReturnSound()
    {
        $number = rand(111, 999);
        $sound = md5($number);
        $this->soundNumbers->expects($this->once())
            ->method('getList')
            ->will($this->returnValue([$number => $sound]));

        $children = Children::initializeFromSoundNumbers($this->soundNumbers);
        $this->assertRegexp("/$sound/", $children->saidSoundOrNumber($number));
    }

    public function testAllMultipleOfSoundNumberReturnSound()
    {
        $number = rand(111, 999);
        $sound = md5($number);
        $this->soundNumbers->expects($this->once())
            ->method('getList')
            ->will($this->returnValue([$number => $sound]));

        $children = Children::initializeFromSoundNumbers($this->soundNumbers);
        $this->assertRegexp("/$sound/", $children->saidSoundOrNumber($number * rand(111, 999)));
    }

    public function testMultipleOfTwoSoundNumberReturnTheMergeOfSound()
    {
        $number = rand(111, 999);
        $sound = md5($number);
        $number2 = rand(111, 999);
        $sound2 = md5($number2);
        $this->soundNumbers->expects($this->any())
            ->method('getList')
            ->will($this->returnValue([$number => $sound, $number2 => $sound2]));

        $children = Children::initializeFromSoundNumbers($this->soundNumbers);
        $this->assertRegexp("/$sound/", $children->saidSoundOrNumber($number * $number2));
        $this->assertRegexp("/$sound2/", $children->saidSoundOrNumber($number * $number2));
    }
}
