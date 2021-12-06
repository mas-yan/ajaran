<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
$_SESSION['user']=$username;
header('Location: admin.php'); 
}else{
	echo "<script>
    alert('username dan password yang anda masukkan salah');
    document.location.href='home.php';
    </script>";
}
?>