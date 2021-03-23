<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Game</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info shadow-sm">
      <a class="navbar-brand" href="home.php">Gameee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-item nav-link" href="tampil.php">Home</a>
          <a class="nav-item nav-link active" href="input.php">Add</a>
          </div>
      </div>
      </nav>

      <div class="container">
      <form action="input.php" method="post" name="form1">

      <div class="form-group">
          <label>Id Game</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="id" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
          <label>Nama Game</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_game" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
          <label>Harga</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="harga">
        </div>

        <div class="form-group">
          <label>Link Gambar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="gambar">
        </div>

        <input class="btn btn-primary ml-auto" type="submit" name="simpan" value="Simpan">
      </form>
      </div>

      <?php
        if(isset($_POST['simpan'])) {
          $id = $_POST['id'];
          $nama = $_POST['nama_game'];
          $harga = $_POST['harga'];
          $gambar = $_POST['gambar'];

          include ("koneksi.php");

          $sql = "INSERT INTO game (id, nama_game, harga, gambar)
          VALUES ('$id', '$nama', '$harga', '$gambar')";

          $query = mysqli_query($connect, $sql);

          if ($query) {
            header('Location: tampil.php');
          } else {
            header('Location: input.php?status=gagal');
        }
        }
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>