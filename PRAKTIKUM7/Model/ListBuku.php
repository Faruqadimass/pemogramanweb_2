<?php

require_once "Buku.php";
require_once "Database/Database.php";

class ListBuku{

public function getData(){
    $db = new Database();
    $koneksi = $db->getkoneksi();

    $sql = "SELECT * FROM buku";

    $query = $koneksi->query($sql);

    $daftar_buku = [];

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
            $buku->setId($row['id']);
            array_push($daftar_buku, $buku);
        }
    }

    return $daftar_buku;
}

public function getKolomTabel(){
    return array('id', 'Judul', 'Pengarang', 'Penerbit', 'Tahun' );
}

public function simpan($buku){
    $db = new Database();
    $koneksi = $db->getkoneksi();

    $sql = "INSERT INTO buku (Judul, Pengarang, Penerbit, Tahun) VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";

    $query = $koneksi->query($sql);

    return $query;
}

public function hapus($id){
    $db = new Database();
    $koneksi = $db->getKoneksi();
    $sql = "DELETE FROM buku WHERE id = " . $id;

    $query = $koneksi->query($sql);

    return $query;
}

public function update($buku){
    $db = new Database();
    $koneksi = $db->getKoneksi();
    $sql = "UPDATE buku SET Judul='".$buku->getJudul()."', Pengarang='".$buku->getPengarang()."', Penerbit='".$buku->getPenerbit()."', Tahun='".$buku->getTahun()."' WHERE id ='".$buku->getId()."'";
}

public function getBukuById($id){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku WHERE id=" . $id;

    $query = $koneksi->query($sql);

    if($query->num_rows > 0){
        $data = $query->fetch_assoc();

        $buku = new Buku($data['judul'], $data['pengarang'], $data['penerbit'], $data['tahun']);
        $buku->setId($data['id']);

        return $buku;
    }

    return false;
}

}
