<?php

# Dependency Invertion Principle #1: No Good

Class Internet
{
    public function connect()
    {
    }
}

class InternetServices
{
    private $client_id;

    public function __construct(Internet $client_id)
    {
        $this->client_id = $client_id;
    }
}

//use
$service = new InternetServices(new Internet);
print_r($service);


# Dependency Invertion Principle #1: Refactored

interface Internet
{
    public function connect();
}

class Client implements Internet
{
    public function connect()
    {
    }
}

class InternetServices
{
    private $client_id;

    public function __construct(Internet $client_id)
    {
        $this->client_id = $client_id;
    }
}

//use
$service = new InternetServices(new Client);
print_r($service);
