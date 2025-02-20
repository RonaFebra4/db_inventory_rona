<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Data Barang</title>
</head>
<body>
<div class="container">

<hi>Data Jenis Baru</h1>
<a href="tambah.php" class="btn btn-primary">Tambah Jenis Baru</a>
<table border="1" class="table table-dark table-striped">
<tr>
  <th scope="col">NO</th>
  <th scope="col">ID_JENIS</th>
  <th scope="col">NAMA_JENIS</th>
  <th scope="col">AKSI</th>
</tr>
<?php
  include '../../config/koneksi.php';
  $query = mysqli_query(mysql: $conn, query: "SELECT * FROM jenis");
  $no=1;
  if(mysqli_num_rows(result: $query)){

    while($result=mysqli_fetch_assoc(result: $query)){
    ?> 

<tr>
  <td><?php echo $no ?></td>
  <td><?php echo $result['id_jenis'] ?></td>
  <td><?php echo $result['nama_jenis'] ?></td>
  <td>
    <a href=""class="btn btn-warning">Edit </a>
    <a href=""class="btn btn-danger">Hapus </a>
</tr>
<?php
$no++;
 }
} else {
    echo "Data kosong";
}
?>
</table>
</div>    
</body>
</html>