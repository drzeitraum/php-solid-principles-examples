<?php

# Single Responsibility Principle #2: No Good
class Protocol
{

    public function get()
    {
        return ['DNS', 'FTP', 'HTTP'];
    }

    function update($protocol)
    {
        $arr = $this->get();
        array_push($arr, $protocol);
        return $arr;
    }

    function printer()
    {
        print_r($this->get());
    }

}

// use
$protocol = new Protocol;
print_r($protocol->update('HTTPS'));
$protocol->printer();

# Single Responsibility Principle #2: Refactored
class Protocol
{
    public function get()
    {
        return ['DNS', 'FTP', 'HTTP'];
    }
}

class UpdateProtocol
{
    function update($protocols, $protocol)
    {
        array_push($protocols, $protocol);
        return $protocols;
    }
}

class PrinterProtocol
{
    function printer($protocols)
    {
        print_r($protocols);
    }
}

// use
$protocols = new Protocol;

$update = new UpdateProtocol;
print_r($update->update($protocols->get(), 'HTTPS'));

$printer = new PrinterProtocol;
$printer->printer($protocols->get());
