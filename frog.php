<?php

class Frog{
    public $name;
    public $loncat="hop hop";

    public function jump()
    {
        echo $this->loncat;
    }
    public function __construct($name)
    {
        return $this->name=$name;
    }
}

?>