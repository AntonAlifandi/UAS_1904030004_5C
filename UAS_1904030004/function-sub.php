<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030004');

//pemanggilan tabel
function query($query)
{
    global $conn;

    // mengambil seluruh data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // pemanggilan elemen data dengan rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $kode_pengajar = htmlspecialchars($data['kode_pengajar']);
    $mata_pelajaran = htmlspecialchars($data['mata_pelajaran']);
    $kelas1 = htmlspecialchars($data['kelas1']);
    $kelas2 = htmlspecialchars($data['kelas2']);
    $kelas3 = htmlspecialchars($data['kelas3']);

    $query = "INSERT INTO tbl_mk
  VALUES
  (null,'$kode_pengajar','$mata_pelajaran','$kelas1','$kelas2','$kelas3');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_mk WHERE kode_pengajar =$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data['id'];
    $kode_pengajar = htmlspecialchars($data['kode_pengajar']);
    $mata_pelajaran = htmlspecialchars($data['mata_pelajaran']);
    $kelas1 = htmlspecialchars($data['kelas1']);
    $kelas2 = htmlspecialchars($data['kelas2']);
    $kelas3 = htmlspecialchars($data['kelas3']);

    $query = "UPDATE tbl_mk SET
    kode_pengajar = '$kode_pengajar',
    mata_pelajaran = '$mata_pelajaran',
    kelas1 ='$kelas1',
    kelas2 ='$kelas2',
    kelas3 ='$kelas3',
    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM tbl_nk WHERE id LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function search($keyword)
{
    global $conn;

    $query = "SELECT * FROM tbl_mk WHERE id LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function delete($iid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_mk WHERE kode_pengajar =$iid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
