<?php 

$conn = mysqli_connect('localhost', 'root', '', 'db_inventory_rona');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}