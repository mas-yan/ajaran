<?php
//mengaktifkan session
session_start();
if(ISSET($_SESSION['username'])){
//memanggil koneksi
include "koneksi.php"; 

//ambil data di url

$id = $_GET["id"];

//function query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
$rows = []; 
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
    return $rows;
}

//function ubah
function ubah($data){
    global $conn;
    
    $id = $data["id"];
    $nama = htmlspecialchars($data['nama_barang']);
    $jenis = htmlspecialchars($data['jenis_barang']);
    $jumlah = htmlspecialchars($data['jumlah']);
    $kondisi = htmlspecialchars($data['kondisi']);
    $tgl = $data['tgl'];

    $query = "UPDATE pinjam SET
                nama = '$nama',
                jenis = '$jenis',
                jumlah = '$jumlah',
                kondisi = '$kondisi',
                tgl = '$tgl'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//query data berdasarkan id

$ubah = query("SELECT * FROM pinjam WHERE id = $id")[0];

if (isset($_POST["tambah"]) ) {
    
    if (ubah($_POST) > 0 ) {
        echo "<script>
    alert('data berhasil di ubah!');
    document.location.href='pinjam.php';

    </script>";
    }else{
        echo "<script>
    alert('data gagal di ubah!');
    document.location.href='pinjam.php';

    </script>";
    }

    $nama = htmlspecialchars($_POST['nama_barang']);
    $jenis = htmlspecialchars($_POST['jenis_barang']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $kondisi = htmlspecialchars($_POST['kondisi']);
    $tgl = $_POST['tgl'];
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>edit</title>
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
        <input type="hidden" name="id" value="<?= $ubah["id"] ?>"></input>
 			<td><input type="text" name="nama_barang" id="nama_barang" value="<?= $ubah["nama"] ?>"></input></td>
 			<td><input type="text" name="jenis_barang" id="jenis_barang "value="<?= $ubah["jenis"] ?>"></input></td>
 			<td><input type="text" name="jumlah" id="jumlah" value="<?= $ubah["jumlah"] ?>" value="<?= $ubah["jumlah"] ?>"></input></td>
 			<td><input type="text" name="kondisi" id="kondisi" value="<?= $ubah["kondisi"] ?>"></input></td>
 			<td><input type="date" name="tgl" id="tgl" value="<?= $ubah["tgl"] ?>"></input></td>
 			<td><input type="submit" name="tambah" value="edit"></input></td>
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