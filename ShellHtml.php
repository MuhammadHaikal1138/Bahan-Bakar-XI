<?php
require 'Shell.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project BBM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .card {
        background-color: #f1f1f1;
    }
</style>

<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card text-dark">
                    <div class="card-body">
                        <form action="" method="POST" class="align-items-center">
                            <h1 class="text-center">Bahan Bakar</h1>
                            <div class="col">
                                <input placeholder="Masukan Jumlah Liter" type="number" name="liter" id="liter" class="form-control my-3 py-2" required>
                            </div>
                            <div class="col">
                                <select name="jenis" id="bensin" class="form-select mb-3" aria-label="Default select example" required>
                                    <option value="" selected hidden disabled>Pilih Jenis Bahan Bakar</option>
                                    <option value="Super">Shell Super</option>
                                    <option value="V-Power">Shell V-Power</option>
                                    <option value="Diesel">Shell V-Power Diesel</option>
                                    <option value="Nitro">Shell V-Power Nitro</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-info">Jumlah</button>
                            </div>
                        </form>
                        <div>
                            <?php
                            if (isset($_POST['submit'])) {
                                if ($_POST['liter'] != '' && $_POST['jenis'] != '') {
                                    $produk = new beli($_POST['liter'], $_POST['jenis']);
                                    echo $produk->beli();
                                } else {
                                    echo "Masukkan Jumlah Liter";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>