 <?php
//mengaktifkan session
session_start();
if(ISSET($_SESSION['username'])){
//memanggil koneksi
include "koneksi.php";
if (isset($_POST["tambah"]) ) {
    echo "
    <script>
    alert('data berhasil di tambahkan');
    document.location.href='pinjam.php';

    </script>
    ";

    $nama = htmlspecialchars($_POST['nama_barang']);
    $jenis = htmlspecialchars($_POST['jenis_barang']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $kondisi = htmlspecialchars($_POST['kondisi']);
    $tgl = $_POST['tgl'];


    $query = "INSERT INTO pinjam
               VALUES
               ('','$nama','$jenis','$jumlah','$kondisi','$tgl')";
    mysqli_query($conn, $query);
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>profil</title>
 </head>
 <body>
 <form action="" method="POST">
 <header>
 	<h3>profil</h3>
 <nav>
 	<br>
 	<table border="0" cellpadding="5" cellpadding="5" cellspacing="15">
 	<thead>
 		<tr>
 			<th>Nama Barang</th>
 			<th>Jenis Barang</th>
 			<th>Jumlah</th>
 			<th>kondisi barang</th>
 			<th>tanggal pinjam</th>
 		</tr>
 		</thead>
 		<tbody>
 			<td><input type="text" name="nama_barang" id="nama_barang"></input></td>
 			<td><input type="text" name="jenis_barang" id="jenis_barang"></input></td>
 			<td><input type="text" name="jumlah" id="jumlah"></input></td>
 			<td><input type="text" name="kondisi" id="kondisi"></input></td>
 			<td><input type="date" name="tgl" id="tgl"></input></td>
 			<td><input type="submit" name="tambah" value="tambah"></input></td>
 		</tbody>
 	</table>
 	<a href="pinjam.php">batal</a>
 </nav>
 </form>
 </body>
 </html>
 <?php 
}else{ 
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="home.php">Login 
dahulu</a><?php 
} 
?>