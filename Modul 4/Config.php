<?php
// if(!isset($_SESSION)){
//     session_start();
// }
$conn=mysqli_connect("localhost:3307", "root", "", "modul4");


if(!$conn){
    echo "<script>
            alert ('dissconect');
            </script>";
    die("conection failed." . mysqli_connect_error());
}
?>