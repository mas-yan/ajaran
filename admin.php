<?php session_start();
if(ISSET($_SESSION['username'])){
include "koneksi.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<header>
	<h1>Selamat Datang </h1>
</header>
<h4>Menu</h4>
<nav>
<ul>
	<li><a href="pinjam.php">pinjaman</a></li>
</ul>
</nav>
</body>
</html>
<a href="logout.php">Logout</a> 
<?php 
}else{ 
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="home.php">Login 
dahulu</a><?php 
} 
?>