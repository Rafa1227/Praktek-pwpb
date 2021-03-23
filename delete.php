<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tampil.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM game WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampil.php');
} else {
    header('Location: delete.php?status=gagal');
}
?>
