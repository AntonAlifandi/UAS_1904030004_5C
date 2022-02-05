<?php
require 'function.php';
//agar tidak bisa masuk ke pengetikan manual pada url
if (!isset($_GET['id'])) {
  header('location: index.php');
  exit;
}
$id = $_GET['id'];
$guru = query("SELECT * FROM tbl_pengajar WHERE id = $id");
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
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
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

  <div class="col-md-10 p-5 pt-5 mt-5 pb-5">
    <!-- konten -->

    <h3><i class="fas fa-users mt-5"></i>Daftar Pengajar</h3>

    <hr class="mb-5">

    <ul class="list-group">
      <li class="list-group-item active"><?= $guru['nama']; ?></li>
      <li class="list-group-item"><?= $guru['alamat']; ?></li>
      <li class="list-group-item"><?= $guru['jenis_kelamin']; ?></li>
      <li class="list-group-item"><?= $guru['agama']; ?></li>
      <li class="list-group-item"><?= $guru['mata_pelajaran']; ?></li>
      <li class="list-group-item">
        <a href="edit.php?id=<?= $guru['id']; ?>" class="btn btn-warning" role="button">Edit</a>
        <a href="hapus.php?id=<?= $guru['id']; ?>" onclick="return confirm('apakah anda akan menghapus data ini');" class="btn btn-danger" role="button">Hapus</a>
        <a href="teachers.php" class="btn btn-primary" role="button">Kembali</a>
      </li>
    </ul>

  </div>
  <div class="mt-5"></div>
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