<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Data Barang</title>
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/db_invertory_rona/view/barang/">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/db_invertory_rona/view/jenis/">Jenis</a>
        </li>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
      </ul>
      </form>
    </div>
  </div>
</nav>
<div class="container">

<a href="tambah.php" class="btn btn-primary">Tambah Jenis Baru</a>
<table class="table table-striped">
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
    <a href="view_edit.php?id_jenis=<?php echo $result['id_jenis']?>"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
  
  </td>
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
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><script>   
</body>
</html>