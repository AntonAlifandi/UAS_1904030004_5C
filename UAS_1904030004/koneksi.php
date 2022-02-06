 <?php

  $host = 'sql201.epizy.com';
  $user = 'epiz_30996223';
  $pass = 'SvxvbmceMyE8fx';
  $db   = 'epiz_30996223_uas_1904030004';

  $conn = mysqli_connect($host, $user, $pass, $db);

  $result = mysqli_query($conn, 'SELECT * FROM uas_1904030004');

  //	Mengambil data dari tabel calon_mhs
  //mysqli_fetch_row();	mengembalikan data dalam bentuk numerik
  //mysqli_fetch_assoc();	mengembalikan data dalam nama field
  //mysqli_fetch_array();	mengembalikan data dalam bentuk numerik dan nama field

  //  while ($camaba = mysqli_fetch_row($result)){
  // var_dump($camaba);
  // }
  ?>