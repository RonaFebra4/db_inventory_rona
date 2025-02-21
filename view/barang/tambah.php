<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
<form action="simpan.php" method="post">
  <h1>Tambah Barang</h1>
  
  
    <label for="exampleInputEmail1" class="form-label">ID Barang</label>
    <input type="number" name="id_barang" class="form-control">
  
  <br>
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" >
 
  <br>
    <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    <input type="text" name="id_jenis" class="form-control" >
  
 <br>
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="number" name="harga" class="form-control" >
  <br>
    <label for="exampleInputEmail1" class="form-label">Stok</label>
    <input type="number" name="stok" class="form-control" >
  
 
  <button type="submit" class="btn btn-primary">simpan</button>

</form>
</div>
</body>
</html>