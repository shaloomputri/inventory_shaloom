<?php 

  $conn = mysqli_connect('localhost','root','','db_inventory_shaloom');

  if(!$conn){
    die('koneksi gagal' . mysqli_connect_error());
  }