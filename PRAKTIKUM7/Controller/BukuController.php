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

    public function edit(){
        $id_buku = $_GET['id_buku'];

        $daftar_buku = new ListBuku();
        $buku = $daftar_buku->getBukuById($id_buku);

        if($buku){
            include_once "View/EditBukuView.php";
        }
        else{
            header("Location: http//localhost/index.php");
        }
    }

    public function update(){
        echo "update";
    }

    public function simpan(){

        //mengambil nilai dari form tambah pada BukuView
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        //buat objek buku dari class buku
        $buku = new Buku($judul, $pengarang, $penerbit, $tahun);

        //menyimpan buku dengan method simpan di class ListBuku
        $daftar_buku = new ListBuku();
        $status = $daftar_buku->simpan($buku);

        //membuat session untuk 
        session_start();
        if($status){
            $_SESSION['message'] = "Data buku dengan judul " . $buku->getJudul() . " Berhasil disimpan"; 
        }
        else{
            $_SESSION['error'] = "Data gagal disimpan!";
        }

        //redirect ke index
        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id_buku = $_POST['id_buku'];

        $daftar_buku = new ListBuku();
        $status = $daftar_buku->hapus($id_buku);

        //membuat session untuk 
        session_start();
        if($status){
            $_SESSION['message'] = "Data buku dengan id " . $id_buku . " Berhasil dihapus"; 
        }
        else{
            $_SESSION['error'] = "Data gagal dihapus!";
        }

        //redirect ke index
        header('Location: http://localhost/index.php');
        exit;
    }

    
}