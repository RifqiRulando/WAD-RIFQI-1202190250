<?php
    include('Config.php');

    if(isset($_POST['masuk'])){
        // $id = $_POST['id'];
        $nama = $_POST['inputnama'];
        $email = $_POST['inputemail'];
        $nomerhp = $_POST['inputnohp'];
        $sandi = $_POST['inputkatasandi'];
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