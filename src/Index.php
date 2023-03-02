<?php

namespace nrauf90\Greeting;

class Index
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getMessage(){
        return "Welcome ".$this->name;
    }
}
