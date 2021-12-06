<?php 
echo date("l m d y");
 ?>
 <?php 
include"koneksi.php";
if (isset($_POST["submit"]) ) {
    header("location:tampil.php");
    
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $absen = $_POST['absen'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tanggal_lahir'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "INSERT INTO user
               VALUES
               ('$nis','$nama','$kelas','$absen','$jenis_kelamin','$jurusan','$agama','$alamat','$tgl','$username','$password')";
    mysqli_query($conn, $query);
}
 ?>
 <link rel="stylesheet" type="text/css" href="style.css">
 <!DOCTYPE html>
 <html>
 <head>
 	<title>index</title>
 </head>
 <body>
 <div class="login">
 	<br/>
 		<div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <div class="bp"></div>
            <h2 class="judul">Registrasi</h2>
        </div>
        <div class="artikel">
            <form action="" method="POST" onsubmit="return validasi()">
                <div class="grup">
                    <label for="nis">NIS</label>
                    <input type="number" min="0" placeholder="masukkan nis" name="nis" id="nis" >
                </div>
                <div class="grup">
                    <label for="nama">NAMA</label>
                    <input type="text" placeholder="masukkan nama" name="nama" id="nama" >
                </div>
                <div class="grup">
                    <label for="kelas">KELAS</label>
                    <input type="text" name="kelas" placeholder="Masukkan kelas" id="kelas" >
                </div>
                <div class="grup">
                    <label for="absen">NO ABSEN</label>
                    <input type="text" placeholder="Masukkan no absen Anda" name="absen" id="absen">
                </div>
                 <div class="grup">
                    <label for="jenis">JENIS KELAMIN</label>
                    <label>Laki-Laki<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki"></label>
                    <label>Perempuan<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"></label>
                </div>
                <div class="grup">
                    <label for="jurusan">JURUSAN</label>
                    <input type="text" placeholder="masukkan jurusan" name="jurusan" id="jurusan" >
                </div>
                <div class="grup">
                    <label for="agama">agama</label>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="kristen">kristen</option>
                        <option value="hindu">hindu</option>
                        <option value="budha">budha</option>
                        </select>
                        </div>
                <div class="grup">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" placeholder="masukkan alamat" name="alamat" id="alamat" >
                </div>
                <div class="grup">
                    <label for="tgl">TANGGAL LAHIR</label>
                    <input type="date" placeholder="masukkan tanggal lahir" name="tanggal_lahir" id="tgl" >
                </div>
                <div class="grup">
                    <label for="Username">Username</label>
                    <input type="email" name="username" placeholder="Masukkan Username Anda" id="username" >
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password Anda" name="password" id="password">
                </div>
                <div class="grup">
                    <input type="submit" value="Register" name="submit">
                </div>
                <a href="home.php">saya sudah punya akun !</a>
            </form><br/>
            <div class="mr">
    <p class="ar">Copyright 2019. By Riyan Alfian</p>
</div>
        </div>
 </body>
 <style type="text/css">
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
 
body{
    background: #c0c0c0;
}
 
div.konten{
    background: #ffffff;
    width: 550px;
    margin: 10px auto 0;
    border-radius: 16px;
    height: 1100px;
    overflow: hidden;
}
 
div.kepala{
    background: #f85252;
    padding: 10px 22px;
    height: 50px;
}
 
div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}
 
div.lock{
    background-image: url("lock.png");
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 8px;
    float: left;
    margin-right: 10px;
}
div.bp{
    background-image: url("photo.jpg");
    background-size: 110px;
    width: 110px;
    height: 110px;
    margin-top: 50px;
    margin-left: 180px;
    border-radius: 25%;
    position: absolute;
    border-radius: 25%;
}

div.artikel{
    padding:100px 22px 0;
    color: #808080;
}
 
div.artikel div.grup{
    margin: 16px 0;
}
 
div.artikel div.grup label,
div.artikel div.grup input{
    display: block;
}
 
div.artikel div.grup label{
    font-size: 13px;
    margin-bottom: 10px;
}
 
div.artikel div.grup input[type="text"],
div.artikel div.grup select,
div.artikel div.grup input[type="email"],
div.artikel div.grup input[type="number"],
div.artikel div.grup input[type="date"],
div.artikel div.grup input[type="password"]{
    width: 100%;
    height: 30px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}
 
div.artikel div.grup input[type="submit"]{
    background: #33cd77;
    padding: 4px 16px;
    margin: 0 auto;
    margin-top: 25px;
    border: 1px solid #33cd77;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
}
 
div.artikel div.grup input[type="submit"]:hover{
    background: #28a45e;
}
.mr{
    background-color: blue;
}
.mr .ar{
    color: white;
    text-align: center;
    font-size: 15px;
}
</style>
 <script type="text/javascript">
 	function validasi() {
 		var nis = document.getElementById("nis").value;
 		var nama = document.getElementById("nama").value;
        var kelas = document.getElementById("kelas").value;
        var absen = document.getElementById("absen").value;
        var jurusan = document.getElementById("jurusan").value;
        var alamat = document.getElementById("alamat").value;
        var tgl = document.getElementById("tgl").value;
        var Username = document.getElementById("username").value;
        var Password = document.getElementById("password").value;
 		if (nis!="" && nama!="" && kelas!="" && absen!="" && jurusan!="" && tgl!="" && username!="" && Password!="") {
 			return true;
 		}else{
 			alert('semua bidang harus di isi !');
 			return false;
 		}
 	}
 </script>
 </html>