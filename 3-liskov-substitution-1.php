<?php

# Liskov Substitution Principle #1: No Good

class Internet
{
    protected $dns;
    protected $ftp;

    public function getDNS()
    {
        return $this->dns;
    }

    public function setDNS($dns)
    {
        $this->dns = $dns;
    }

    public function getFTP()
    {
        return $this->dns;
    }

    public function setFTP($ftp)
    {
        $this->ftp = $ftp;
    }

    public function services()
    {
        return [$this->dns, $this->ftp];
    }
}

class Services extends Internet
{
    public function setDNS($value)
    {
        $this->dns = $value;
        $this->ftp = $value;
    }

    public function setFTP($value)
    {
        $this->dns = $value;
        $this->ftp = $value;
    }
}


# Liskov Substitution Principle #1: Refactored

class Internet
{
    protected $dns;
    protected $ftp;

    public function getDNS()
    {
        return $this->dns;
    }

    public function setDNS($dns)
    {
        $this->dns = $dns;
    }

    public function getFTP()
    {
        return $this->dns;
    }

    public function setFTP($ftp)
    {
        $this->ftp = $ftp;
    }
}

class Services
{
    protected $service;

    public function setService($service)
    {
        $this->service = $service;
    }

    public function getService()
    {
        return $this->service;
    }
}
