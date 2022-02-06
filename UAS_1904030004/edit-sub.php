<?php
require 'function.php';

$id = $_GET['id'];
$mk = query("SELECT * FROM tbl_mk WHERE id = $id");
if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo "
            <script>
            alert('data berhasil diedit..!');
            document.location.href='subjects.php'
            </script>
            ";
  } else {
    echo "
            <script>
            alert('data gagal diedit..!');
            </script>
            ";
  }
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

  <div class="col-md-10 p-5">
    <!-- konten -->
    <div>
      <div class="mt-3"></div>
      <h3><i class="fas fa-users mt-5"></i>Edit Data Mata Pelajaran</h3>
    </div>
    <hr>
    <form method="POST" action="">
      <input type="hidden" class="form-control" value="<?= $mk['id'] ?>" name="id">

      <div class="form-group">
        <label for="kode_pengajar">Kode Pengajar</label>
        <input type="text" class="form-control" id="kode_pengajar" value="<?= $mk['kode_pengajar'] ?>" placeholder="Kode Pengajar" name="kode_pengajar" autofocus required autocomplete="off">
      </div>

      <div class="form-group">
        <label for="nama_guru">Nama Guru</label>
        <input type="text" class="form-control" id="nama_guru" value="<?= $mk['nama_guru'] ?>" placeholder="Nama Guru " name="Nama Guru" required autocomplete="off">
      </div>

      <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran </label>
        <input type="text" class="form-control" id="mata_pelajaran" value="<?= $mk['mata_pelajaran'] ?>" placeholder="Mata Pelajaran" name="mata_pelajaran" required autocomplete="off">
      </div>

      <div class="form-group">
        <label for="kelas1">Kelas 1 </label>
        <input type="text" class="form-control" id="kelas1" value="<?= $mk['kelas1'] ?>" placeholder="Kelas 1" name="kelas1" required autocomplete="off">
      </div>

      <div class="form-group">
        <label for="kelas2">Kelas 2 </label>
        <input type="text" class="form-control" id="kelas2" value="<?= $mk['kelas2'] ?>" placeholder="Kelas 2" name="kelas2" required autocomplete="off">
      </div>

      <div class="form-group">
        <label for="kelas3">Kelas 3</label>
        <input type="text" class="form-control" id="kelas3" value="<?= $mk['kelas3'] ?>" placeholder="Kelas 3" name="kelas3" required autocomplete="off">
      </div>

      <button type="tambah" class="btn btn-primary mt-3" name="edit">Simpan</button>
    </form>
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