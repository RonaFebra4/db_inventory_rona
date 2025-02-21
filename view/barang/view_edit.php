<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Edit</h1>
    <?php
    $id_barang=$_GET['id_barang'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn,"SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
        <label for="exampleInputPassword1">ID Barang</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-text" aname="id_barang">
    <br>
     <label for="exampleInputPassword1">ID Jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-text" name="id_jenis">
    <br>
     <label for="exampleInputPassword1">Nama Barang</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-text" name="nama_barang">
        <br>
     <label for="exampleInputPassword1">Harga</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-number"name="harga">
        <br>
     <label for="exampleInputPassword1">Stok</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-number"name="stok">



<button type="submit" class="btn btn-primary">Submit</button>
</div>
</body>
</html>