<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql ="SELECT * FROM game WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$kod = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1 ){
    die("data tidak ditentukan...");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Edit Produk</title>
</head>

<body>
    


    <div class="container data">
        <div class="card shadow border-0">
            <form action="edit.php" method="POST">

            <h4 class="text-center card-header bg-primary text-light text-center py-4">Edit Data Produk</h4>

            
            <input type="hidden" name="id" value="<?php echo $kod['id']?>"/>

            <div class="form-group p-4">
               
                <label for="nama" class="mt-3">Nama Game :</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $kod['nama_game']?>">

                <div class="form-row">
                    <div class="col">
                        <label for="harga" class="mt-3">Harga :</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="text" class="form-control" name="harga" value="<?php echo $kod['harga']?>">
                            </div>
                        </div>
                </div>
            
                <div class="form-row">

                    <div class="col-8">
                        <label for="gambar" class="mt-3">Gambar :</label>
                        <input type="text" name="gambar" class="form-control" value="<?php echo $kod['gambar']?>">
                    </div>
                </div>
        

                <br>
                <input class="btn btn-primary ml-auto" type="submit" name="simpan" value="Simpan" onclick="show_edit();">

        </form>
        </div>
        <!-- Default form contact -->
    </div>
    <br>

    <script>
        function show_edit() {
            alert("Data Anda berhasil diperbarui");
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>