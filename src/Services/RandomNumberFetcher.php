<?php
namespace App\Services;

class RandomNumberFetcher
{
    public static function getRandomNumber()
    {
        return rand(0, 100);
    }
}