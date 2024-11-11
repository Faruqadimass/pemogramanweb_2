<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "perpustakaan";
    private $koneksi = null;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    }

    public function __destruct(){
        $this->koneksi->close();
    }

    public function getkoneksi(){
        return $this->koneksi;
    }

}