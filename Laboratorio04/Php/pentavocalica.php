<?php

class PentavocalicDetector
{
    private $vowels;

    public function __construct()
    {
        $this->vowels = ['a', 'e', 'i', 'o', 'u'];
    }

    public function isPentavocalic($word)
    {
        $word = strtolower($word);
        foreach ($this->vowels as $vowel) {
            if (strpos($word, $vowel) === false) {
                return false;
            }
        }
        return true;
    }
}


