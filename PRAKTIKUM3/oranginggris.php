<?php
require_once "Orang.php";

class OrangInggris extends Orang{

    public function ucapSalam(){
        echo "hello my name is" . $this->nama . "<br>";
    }



}