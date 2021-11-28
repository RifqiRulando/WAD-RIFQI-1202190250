<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h2 style="text-align: center;">Tambah Data Buku</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul Buku :</label>
				<input type="text" class="form-control" placeholder="contoh:Pemrograman Web bersama EAD" name="jdudl" required="required">
			</div>
			<div class="form-group">
				<label>Penulis :</label>
				<input type="text" class="form-control" placeholder="Masukkan Penulis" name="Penulis" required="required">
			</div>
			<div class="form-group">
				<label>Tahun terbit :</label>
				<input type="number" class="form-control" placeholder= "contoh :1990" name="Tahun terbit" required="required"></input>
			</div>
            <div class="form-group">
				<label>Deskripsi :</label>
				<textarea class="form-control" placeholder= "contoh:buku ini menjelaskan tentang...."name="Deskripsi" required="required"></textarea>
			</div>
            <div class="row">
                <div class="form-group col-sm-1">
                    Bahasa
                </div>
                <div class="form-group col-md-auto">
                    <div class="col-md-auto">
                        <input type="radio" value="Indonesia"name="Bahasa" >Indonesia
                        <input type="radio" value="Lainnya"name="Bahasa">Lainnya
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-1">
                    Tag
                </div>
                <div class="form-group col-md-auto">
                    <div class="col-md-auto">
                        <input type="checkbox" value="pemrograman" name="Tag" >pemrograman
                        <input type="checkbox" value="website" name="Tag" >website
                        <input type="checkbox" value="Java" name="Tag" >Java
                        <input type="checkbox" value="OOP" name="Tag" >OOP
                        <input type="checkbox" value="MVC" name="Tag" >MVC
                        <input type="checkbox" value="Kalkulus" name="Tag" >Kalkulus
                        <input type="checkbox" value="Lainnya" name="Tag" >Lainnya
                    </div>
                </div>
            </div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
    </div>
    <footer class="bg-light text-center text-lg-start" >
            <h5>
                <br><br><br><br><br>
                <div class="container text-center" >
                <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" width="250px" alt="logo">
                <br><br>

                <h4><b>Perpustakaan WAD</b></h4>
                <h6>CREATED BY RIFQI_1202190250</h6>

                <br><br><br><br><br>
                </h5> 
</body>
</html>