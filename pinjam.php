<?php
//mengaktifkan session
session_start();
if(ISSET($_SESSION['username'])){
//memanggil koneksi
include "koneksi.php"; 
 			$sql = mysqli_query($conn, "SELECT * FROM pinjam");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>profil</title>
 </head>
 <body>
 <header>
 	<h3>profil</h3>
 </header>
 <a href="tambah.php">tambah pinjaman</a>
 <nav>
 	<br>

 	<table border="1" cellspacing="0" cellpadding="5">
 	<thead>
 		<tr>
 			<th>kode barang</th>
 			<th>Nama Barang</th>
 			<th>Jenis Barang</th>
 			<th>Jumlah</th>
 			<th>kondisi barang</th>
 			<th>tanggal pinjam</th>
 			<th>Aksi</th>
 		</tr>
 		</thead>
 		<tbody>

 			<?php while ($row = mysqli_fetch_assoc($sql)):?>
 			 	<tr>
 			 	<td><?= $row["id"]; ?></td>
 			 	<td><?= $row["nama"]; ?></td>
 			 	<td><?= $row["jenis"]; ?></td>
 			 	<td><?= $row["jumlah"]; ?></td>
 			 	<td><?= $row["kondisi"]; ?></td>
 			 	<td><?= $row["tgl"]; ?></td><br/>
 			 	<td><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ingin menghapus?');">hapus</a></td>
 			 	</tr>
 			 <?php endwhile; ?>
 		</tbody>
 		<p>Total: <?php echo mysqli_num_rows($sql); ?></p>
 	</table><br/>
 	<a href="admin.php">kembali</a>
 </nav>
 </body>
 </html>
 <?php 
}else{ 
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="home.php">Login 
dahulu</a><?php 
} 
?>