<?php

namespace nrauf90\Greeting;

class Index
{
    protected $name;

    /**
     * @return string
     */
    public function getMessage(){
        return "Welcome ".$this->name;
    }

    /**
     * @param $name
     * @return void
     */
    public function setName($name){
        $this->name = $name;
    }
}
