<?php
namespace App\Services;

use Psr\Log\LoggerInterface;

class RandomNumberFetcher
{
    /* @var LoggerInterface   */
    private $numberFetcherLogger;

    public function __construct(LoggerInterface $numberFetcherLogger)
    {
        $this->numberFetcherLogger = $numberFetcherLogger;
    }

    public function getRandomNumber()
    {
        $number = rand(0, 100);
        $this->numberFetcherLogger->info('A random Number: '.$number.' has been generated');
        return $number;
    }
}