<?php
include ("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body{
            background-color: whitesmoke;
        }
        #listproduk{
            margin-top: 20px;
        }
    </style>

    <title>Gameeeeeee</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info shadow-sm">
        <a class="navbar-brand" href="home.php">Gameee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="tampil.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="input.php">Add</a>
            </div>
        </div>
        </nav>

        <div class="col-8" id="listproduk">
            <?php
                $sql = "SELECT * FROM game";
                $query = mysqli_query($connect,$sql);

                while($produk = mysqli_fetch_array($query)){
                    echo '<div class="card float-left mr-3 mb-3 shadow-sm border-0" style="width: 12rem;">';
                    echo '<img src="'. $produk['gambar'] .'" class="card-img-top" alt="..." style="height: 225px;">';
                    echo '<div class="card-body kartu">';
                    echo '<h6 class="card-title kartu menu">' . $produk['nama_game'] . '</h6>';
                    echo '<p class="card-text kartu">Rp ' .$produk['harga'] . '</p>';
                    echo "<a href='keranjang.php?id=$produk[id]' class='btn btn-primary btn-block '>Add To Cart</a>";
                    echo '</div>';
                    echo '</div>';
                }
            ?>
            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>