<?php

require_once "Model/ListBuku.php";

class BukuController{

    public function jalankan(){

        // menggunakan model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model->getData();

        //mengirim dan menampilkan data ke View
        include_once "View/BukuView.php";

    }

}