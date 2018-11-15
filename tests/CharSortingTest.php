<?php

namespace pkirillw\charSorting;

class CharSortingTest extends \PHPUnit\Framework\TestCase
{

    public function testOne()
    {
        $instance = new CharSorting();
        $this->assertEquals('elmno aegnor aaabnn aelpp', $instance->sortChar('lemon orange banana apple', ' '));
    }

    public function testTwo()
    {
        $instance = new CharSorting();
        $this->assertEquals('илмно аеилнпсь аабнн бклооя', $instance->sortChar('лимон апельсин банан яблоко', ' '));
    }

    public function testThree()
    {
        $instance = new CharSorting();
        $this->assertEquals('ααββγγ αααβββγγγ', $instance->sortChar('αβγαβγ αβγαβγαβγ', ' '));
    }

    public function testFour()
    {
        $instance = new CharSorting();
        $this->assertEquals('авеееикннрсья аабвввезииклноортуцыыь', $instance->sortChar('сиреневенькая зубовыковыривательница', ' '));
    }

    public function testFive()
    {
        $instance = new CharSorting();
        $this->assertEquals('абвгд', $instance->sortChar('дгвба', ' '));
    }

    public function testSix()
    {
        $instance = new CharSorting();
        $this->assertEquals('абвгд qw', $instance->sortChar('дгвба wq', ' '));
    }

    public function testSeven()
    {
        $instance = new CharSorting();
        $this->assertEquals('', $instance->sortChar('', ' '));
    }
}