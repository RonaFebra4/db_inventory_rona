<?php

$id_barang=$_GET['id_barang'];


include '../../config/koneksi.php';

$query=mysqli_query($conn, "DELETE FROM barang WHERE id_barang='$id_barang'");


if($query){
    echo"<script>alert('Hapus Barang Berhasi Cuy')</script>";
    echo "<script>window.localtion.href='index.php'</script>";
}else{ 
    echo"<script>alert('Hapus Barang Gagal Cuy')</script>";
    echo "<script>window.localtion.href='view_tambah'</script>";
}
