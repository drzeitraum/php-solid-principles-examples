<?php

// Single Responsibility Principle #1: No Good
class Internet
{
    public function getBirthday()
    {
        return '1969-10-29';
    }

    public function getProviders()
    {
        return [
            'Provider #1',
            'Provider #2',
            'Provider #3'
        ];
    }

    public function countProviders()
    {
        return count($this->getProviders());
    }
}

// use
$count = new Internet;
echo $count->countProviders();

// Single Responsibility Principle #1: Refactored
class Internet
{
    public function getBirthday()
    {
        return '1969-10-29';
    }

    public function getProviders()
    {
        return [
            'Provider #1',
            'Provider #2',
            'Provider #3'
        ];
    }
}

interface CountInternet
{
    public function countProviders(Internet $internet);
}

class SumProviders implements CountInternet
{
    public function countProviders(Internet $internet)
    {
        return count($internet->getProviders());
    }
}

// use
$internet = new Internet;
$count = new SumProviders;
echo $count->countProviders($internet);
