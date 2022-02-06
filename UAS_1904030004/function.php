<?php
$conn = mysqli_connect('sql201.epizy.com', 'epiz_30996223', 'SvxvbmceMyE8fx', 'epiz_30996223_uas_1904030004');

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
    $id = htmlspecialchars($data['id']);
    $nidn = htmlspecialchars($data['nidn']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $agama = htmlspecialchars($data['agama']);
    $mata_pelajaran = htmlspecialchars($data['mata_pelajaran']);

    $query = "INSERT INTO tbl_pengajar
  VALUES
  (null,'$id','$nidn','$nama','$alamat','$jenis_kelamin','$agama','$mata_pelajaran');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_pengajar WHERE id =$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = htmlspecialchars($data['id']);
    $nidn = htmlspecialchars($data['nidn']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $agama = htmlspecialchars($data['agama']);
    $mata_pelajaran = htmlspecialchars($data['mata_pelajaran']);


    $query = "UPDATE tbl_pengajar SET
    nidn ='$nidn',
    nama ='$nama',
    alamat ='$alamat',
    jenis_kelamin ='$jenis_kelamin',
    agama ='$agama',
    mata_pelajaran = '$mata_pelajaran',
    
    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);

    global $conn;

    $id = htmlspecialchars($data['id']);
    $kode_pengajar = htmlspecialchars($data['kode_pengajar']);
    $nama_guru = htmlspecialchars($data['nama_guru']);
    $mata_pelajaran = htmlspecialchars($data['mata_pelajaran']);
    $kelas1 = htmlspecialchars($data['kelas1']);
    $kelas2 = htmlspecialchars($data['kelas2']);
    $kelas3 = htmlspecialchars($data['kelas3']);


    $query = "UPDATE tbl_mk SET
    kode_pengajar ='$kode_pengajar',
    nama_guru ='$nama_guru',
    mata_pelajaran ='$mata_pelajaran',
    kelas1 ='$kelas1',
    kelas2 = '$kelas2',
    kelas3 ='$kelas3',
    
    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM tbl_pengajar WHERE nama LIKE'%$keyword%'";
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

    $query = "SELECT * FROM tbl_pengajar WHERE nama LIKE'%$keyword%'";
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
    mysqli_query($conn, "DELETE FROM tbl_mk WHERE id =$iid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
