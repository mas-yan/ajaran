<?php
//mengaktifkan session
session_start();
if(ISSET($_SESSION['username'])){

//memanggil koneksi

include "koneksi.php";

//membuat function 
function hapus($id) {
	global $conn;
	mysqli_query($conn,"DELETE FROM pinjam WHERE id = $id");

	return mysqli_affected_rows($conn);
}

$id = $_GET["id"];



if (hapus($id)>0) {
	echo " <script>
    alert('data berhasil di hapus');
    document.location.href='pinjam.php';

    </script>";
}else{
	echo " <script>
    alert('data gagal di hapus');
    document.location.href='pinjam.php';

    </script>";
}

 ?>
 <?php 
}else{ 
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="home.php">Login 
dahulu</a><?php 
} 
?>