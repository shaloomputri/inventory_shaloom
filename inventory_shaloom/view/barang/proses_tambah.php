<?php 
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$nama_barang','$harga','$id_jenis')");

echo "
  <script>
  alert('input data berhasil');
  </script>
  <script>
  window.location.href = 'index.php';
  </script>
";
