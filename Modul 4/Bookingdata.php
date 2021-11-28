<?php
    include('Config.php');

    if(isset($_POST['masuk'])){
        // $id = $_POST['id'];
        $nama_tempat = $_POST['inputnama'];
        $lokasi = $_POST['inputemail'];
        $harga = $_POST['inputnohp'];
        $tanggal = $_POST['inputkatasandi'];
        // $konsandi = $_POST['inputkonkatasandi'];
        // $tag =  implode(', ', $_POST['tag']);
        // $gambar = $_POST['gambar'];

        // $query = "UPDATE user SET nama='$inputnama', email='$inputemail','nomer hp'=$inputnohp, 'password='$inputkatasandi' ";
        // $update = mysqli_query($conn, $query);
        $query = "INSERT INTO user (nama, email, no_hp, password) VALUES ('$nama', '$email', '$nomerhp', '$sandi')";
        $insert = mysqli_query($conn, $query);
        header('Location: Login.php');
    }
?>