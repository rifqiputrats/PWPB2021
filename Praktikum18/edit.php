<?php

include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $gol_darah = $_POST['gol_darah'];
    $nama_ortu = $_POST['nama_ortu'];

    $sql = "UPDATE siswa SET
                nama_lengkap = '$nama_lengkap',
                jenis_kelamin = '$jenis_kelamin',
                kelas = '$kelas',
                jurusan = '$jurusan',
                alamat = '$alamat',
                gol_darah = '$gol_darah',
                nama_ortu = '$nama_ortu'
            WHERE nis = $nis;
            ";

    $mysqli->query($sql) or die($mysqli->error);

    header('location: index.php');
}

$nis = $_GET['nis'];

if (empty($nis)) header('location: index.php');

$sql = "SELECT * FROM siswa WHERE nis = '$nis'";
$query = $mysqli->query($sql);
$siswa = $query->fetch_array();

if (empty($siswa)) header('location: index.php');

include 'views/v_tambah.php';
