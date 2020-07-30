<?php
class Ape {
    public $name;
    public $yell = "Auooo";

    public function yell()
    {
        return $this->yell;
    }
   public function __construct($name)
    {
        return $this->name=$name;
    }
    
}
?>