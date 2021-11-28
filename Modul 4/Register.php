<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: #fffea8">
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#7fcdff">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <h6><b>EAD Travel</b></h6>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
      </ul>
     <div class="navbar-nav">
         <div class="nav-item">
         <a class="nav-link active" aria-current="page" href="Register.php">Register</a>
         </div>
         <div class="nav-item">
         <a class="nav-link" aria-current="page" href="Login.php">Login</a>
         </div>
     </div>
    </div>
  </div>
</nav>
<!-- form -->
<div class="container" style="width:35%; background-color:white; margin-top:20px">
<div class="container" style="text-align:center">
<br>
  <b>Register.com</b> 
  <hr>
</div>
<form action="kirimData.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="Nama" class="form-control" name="inputnama" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="Email" class="form-control" name="inputemail" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3 ">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Nomer Handphone</label>
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomer Handphone</label>
    <input type="Nomer Handphone" class="form-control" name="inputnohp" id="exampleInputPassword1">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kata Sandi</label>
    <input type="password" class="form-control" name="inputkatasandi" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
    <input type="password" class="form-control" name="inputkonkatasandi" id="exampleInputPassword1">
  </div>
  <div class="container" style= "text-align:center;">
  <!-- <a type="submit" class="btn btn-primary" name="masuk">Login</a> -->
  <button name="masuk" class="btn btn-primary" type="submit" style="padding-right: 200px; padding-left: 200px;">Login</button>
</div>
<br>
  <div class="container" style= "text-align:center;">
    <p>Anda sudah punya akun? <a class="" href="Login.php">Login</a></p>

    <br>
  </div>
</form>
</div>
</div>
<footer style="margin-top: 100px">
      <div style="background-color:#8bc9f7; text-align:center; padding:6px; padding-top:16px">
        <p>©️2021 Copyright <a href="" data-bs-toggle="modal" data-bs-target="#modal">RIFQI_1202190250</a></p>
      </div>
  </footer>

  <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Created By</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nama: RIFQI RULANDO</p>
                    <p>NIM :1202190250</p>
                </div>





    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>