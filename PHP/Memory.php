<?php

class Memory extends Hardware
{
    private $frequency;
    private $memorySize;
    private $supportsCuda;

    function __construct($frequency = null, $memorySize = null, $supportsCuda = null)
    {
        $this->frequency = $frequency;
        $this->memorySize = $memorySize;
        $this->supportsCuda = $supportsCuda;
    }

    function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    function getFrequency()
    {
        return $this->frequency;
    }

    function setMemorySize($memorySize)
    {
        $this->memorySize = $memorySize;
    }

    function getMemorySize()
    {
        return $this->memorySize;
    }

    function setSupportsCuda($supportsCuda)
    {
        $this->supportsCuda = $supportsCuda;
    }

    function getSupportsCuda()
    {
        return $this->supportsCuda;
    }
}

?>