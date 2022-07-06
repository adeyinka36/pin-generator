<?php

namespace PinGenerator;

class PinGneratorHandler
{
    public function increameant  (int $num): int
    {

    }
    public function checkPalindrome(int $num): bool
    {
        return strrev($num) == $num;
    }

    public function checkSequential(int $num): bool
    {
        $numArray = str_split((strval($num)));
        return ((int)max($numArray)-(int)min($numArray) == (count($numArray)-1));
    }

    public function checkRepeating(int $num): bool
    {

    }
}
