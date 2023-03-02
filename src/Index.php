<?php

namespace nrauf90\Greeting;

class Index
{
    protected $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMessage(){
        return "Welcome ".$this->name;
    }
}
