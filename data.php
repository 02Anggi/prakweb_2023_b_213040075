<?php 
include('koneksi.php');
$buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku");
$row = mysqli_fetch_array($buku);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- content -->

    <div class="container">
    <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
        
    <div id="container">
    <div class="box">
    <table border="1" cellspacing="0" class="table">
      <thead>
        <tr>
          <th scope="col">Gambar</th>
          <th scope="col">id buku</th>
          <th scope="col">judul buku</th>
          <th scope="col">nama penulis</th>
          <th scope="col">penerbit</th>
          <th scope="col">tanggal terbit</th>
          <th scope="col">jumlah halaman</th>
          <th scope="col">sinopsis</th>
        </tr>
      </thead>
    <tbody>
    <?php $i = 1; foreach($buku as $b) : ?>
    <tr>
      <td>
          <img src="../prakweb2023b_213040075/img/cover/<?= $b["gambar"]; ?>" heigth="100" width="100">
      </td>
      <td><?= $b["id_buku"]; ?></td>
      <td><?= $b["judul_buku"]; ?></td>
      <td><?= $b["nama_penulis"]; ?></td>
      <td><?= $b["penerbit"]; ?></td>
      <td><?= $b["tanggal_terbit"]; ?></td>
      <td><?= $b["jumlah_halaman"]; ?></td>
      <td><?= $b["sinopsis"]; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
  </div>

    </div>
  </div>
    <script src="js/data.js"></script>
</html>