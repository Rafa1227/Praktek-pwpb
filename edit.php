<?php
include 'koneksi.php';
if  (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_game'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE game SET nama_game='$nama', harga='$harga', gambar='$gambar'
        WHERE id='$id'";
    $query = mysqli_query($connect, $sql);
    
    if ($query) {
        header('Location: tampil.php');
    } else {
        header('Location: edit.php?status=gagal');
    }
}
?>