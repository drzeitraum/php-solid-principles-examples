<?php

# Interface Segregation Principle #1: No Good

interface Provider
{
    public function internet();

    public function tv();

    public function balance();
}

class Client implements Provider
{
    public function internet()
    {
        return 'Internet for client';
    }

    public function tv()
    {
        return 'TV for client';
    }

    public function balance()
    {
        return 'check client balance';
    }
}

class Staff implements Provider
{
    public function internet()
    {
        return 'Internet for employee';
    }

    public function tv()
    {
        return 'TV for employee';
    }

    public function balance()
    {
        throw new Exception('Services free for employee!');
    }
}

class InternetServices
{
    public function connect(Provider $service)
    {
        if ($service->internet()) {
            return $service->internet();
        } else {
            return false;
        }
    }
}

//use
$services = new InternetServices;
echo $services->connect(new Client);
echo $services->connect(new Staff);


# Interface Segregation Principle #1: Refactored

interface Services
{
    public function internet();

    public function tv();

}

interface Cost
{
    public function balance();

}

class Client implements Services, Cost
{
    public function internet()
    {
        return 'Internet for client';
    }

    public function tv()
    {
        return 'TV for client';
    }

    public function balance()
    {
        return 'Check client balance';
    }
}

class Staff implements Services
{
    public function internet()
    {
        return 'Internet for employee';
    }

    public function tv()
    {
        return 'TV for employee';
    }

}

class InternetServices
{
    public function connect(Services $service)
    {
        if ($service->internet()) {
            return $service->internet();
        } else {
            return false;
        }
    }
}

// use
$employee = new InternetServices;
echo $employee->connect(new Client);
echo $employee->connect(new Staff);
