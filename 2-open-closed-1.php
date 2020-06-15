<?php

# Open-Closed Principle #1: No Good

class Internet
{
    public function connect()
    {
        return 'Internet';
    }
}

class VPS
{
    public function connect()
    {
        return 'VPS';
    }
}

class InternetProvider
{
    public function process($service)
    {
        if ($service instanceof Internet) {
            return $service->connect();
        } elseif ($service instanceof VPS) {
            return $service->connect();
        } else {
            throw new Exception('Services no found');
        }
    }
}

//use
$service = new InternetProvider;
echo $service->process(new Internet);
echo $service->process(new VPS);


# Open-Closed Principle #1: Refactored

interface Service
{
    public function connect();
}

class Internet implements Service
{
    public function connect()
    {
        return 'Internet';
    }
}

class VPS implements Service
{
    public function connect()
    {
        return 'VPS';
    }
}

class InternetProvider
{
    public function process(Service $service)
    {
        return $service->connect();
    }
}

//use
$service = new InternetProvider;
echo $service->process(new Internet);
echo $service->process(new VPS);
