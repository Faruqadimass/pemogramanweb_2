<?php

require_once "Model/ListBuku.php";

class BukuController{

    public function jalankan(){
        // menggunakan model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model;

        // var_dump($daftar_buku->getData());
        // die();

        //mengirim dan menampilkan data ke View
        include_once "View/BukuView.php";
    }

    public function edit(){
        echo "edit";
    }

    public function update(){
        echo "update";
    }

    public function simpan(){
        // MENGAMBIL NILAI DARI FORM TAMBAH PADA BukuView
        echo "simpan";
    }

    public function hapus(){
        echo "hapus";
    }

}