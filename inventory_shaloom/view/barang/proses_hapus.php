<?php 

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,
"DELETE  FROM barang WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Data Berhasil Dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}