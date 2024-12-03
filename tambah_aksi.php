<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    // menginput data ke database
    mysqli_query($conn, "INSERT INTO `akademik`.`mahasiswa` (`nama`, `nim`, `alamat`) VALUES ('$nama', '$nim', '$alamat');");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>