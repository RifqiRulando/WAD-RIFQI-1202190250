<?php
    include('config.php');

    if(isset($_POST['simpan'])){
        $judul_buku = $_POST['judul buku'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun terbit'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = $_POST['tag'];

        $query = "INSERT INTO rifqi (judul buku, penulis, tahun terbit, deskripsi, bahasa, tag) VALUES ('$judul_buku', '$penulis', '$tahun_terbit', '$deskripsi', '$bahasa', '$bahasa, '$tag' ";
        $insert = mysqli_query($coon, $query);

        header('Location : Rifqi_Home.php' );
        
    }
