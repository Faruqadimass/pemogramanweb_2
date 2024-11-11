<?php

class visibility{
    public $public;
    private $private;
    protected $protected;

    function tampilkanproperty(){
        echo "Ini diakses di dalam kelas <br>";
        echo "public : " + $this->public . "<br>";
        echo "private :" + $this->private . "<br>";
        echo "protected :" + $this->protected . "<br>";

    }

}
?>