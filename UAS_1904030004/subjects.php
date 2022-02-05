<?php
require 'function-sub.php';
$mk = query("SELECT * FROM tbl_mk");
if (isset($_POST['cari'])) {
  $mk = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>WEBSITE ACADEMIC YAPPIKA</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />

  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-academic.png" alt="..." /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li>
          <li class="nav-item"><a class="nav-link" href="subjects.php">Subjects</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-md-10 p-5 pt-5">
    <!-- konten -->
    <div>
      <div class="mt-5">
        <h3><i class="fas fa-users"></i>Daftar Mata Pelajaran</h3>
      </div>
    </div>
    <hr>
    <!-- pencarian data -->
    <form action="" method="POST">
      <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
      <button type="submit" class="btn btn-primary" name="cari">CARI</button>
    </form>
    <br>
    <hr>


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pelajaran</th>
          <th scope="col">Kelas 1</th>
          <th scope="col">Kelas 2</th>
          <th scope="col">kelas 3</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>

      <?php if (empty($mk)) : ?>
        <tr>
          <td colspan="4" class="alert alert-danger text-center" role="alert">
            <p>
              Data Pengajar tidak ditemukan
            </p>
          </td>
        </tr>
      <?php endif; ?>

      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($mk as $cmb) : ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $cmb['nama_pelajaran']; ?></td>
            <td><?php echo $cmb['kelas1']; ?></td>
            <td><?php echo $cmb['kelas2']; ?></td>
            <td><?php echo $cmb['kelas3']; ?></td>
            <td><a href="detail-sub.php?id=<?= $cmb['kode_pengajar']; ?>" class="btn btn-warning" role="button">Detail</a></td>
          </tr>
          <?php $no++ ?>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <!-- Footer-->
  <footer class="footer bg-dark py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="text-white text-center">Copyright &copy; Your Website 2022</div>
      </div>
    </div>

  </footer>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>