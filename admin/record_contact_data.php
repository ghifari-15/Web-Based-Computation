`<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $judul = "Lihat Biodata Mahasiswa";
?>
  <title><?= $judul ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container mt-3">
  <h2 class="text-center" style="margin-bottom: 40px;"><?= $judul ?></h2>
        
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Dikirim pada</th>
        <th class="mx-6">Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php 
include "../connections/connect.php";
$sql = "SELECT * FROM form_data";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) < 0) {
?>
      <tr>
        <td colspan="5">Data Kosong</td>
      </tr>
<?php
}
else {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
      <tr>
        <td>
            <input type=\"checkbox\" class=\"checkbox\" name=\"checked_id[]\" value=\"{$row['id']}\">
        </td>
        <td>
        {$row['id']}
        </td>
        <td>
        {$row['name']}
        </td>
        <td>
        {$row['email']}
        </td>
        <td>
        {$row['message']}
        </td>
        <td>
        {$row['submitted_at']}
        </td>
        <td>
             <a href='actions/editsql.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                <a href='actions/deletesql.php id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm'(\"Apakah anda yakin ingin menghapus data ini?\")'
            >Hapus</a>
        </td>
      </tr>";
}
}
?>
    </tbody>
  </table>
</div>
 
</body>
</html>
 