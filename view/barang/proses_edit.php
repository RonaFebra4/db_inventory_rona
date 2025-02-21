<?php

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query(mysql: $conn, query: "UPDATE barang SET
id_barang='$id_barang',
id_jenis ='$id_jenis',
nama_barang='$nama_barang',
harga ='$harga',
stok ='$stok'
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Edit Barang Berhasil cuy')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else{
    echo "<script>alert('Edit Gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}