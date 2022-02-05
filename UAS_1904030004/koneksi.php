 <?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'uas_1904030004';

  $conn = mysqli_connect($host, $user, $pass, $db);

  $result = mysqli_query($conn, 'SELECT * FROM db_tokobuku');

  //	Mengambil data dari tabel calon_mhs
  //mysqli_fetch_row();	mengembalikan data dalam bentuk numerik
  //mysqli_fetch_assoc();	mengembalikan data dalam nama field
  //mysqli_fetch_array();	mengembalikan data dalam bentuk numerik dan nama field

  //  while ($camaba = mysqli_fetch_row($result)){
  // var_dump($camaba);
  // }
  ?>