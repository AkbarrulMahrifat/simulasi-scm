<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/25/2018
 * Time: 9:02 PM
 */ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulasi scm</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="bg-peternakan">
    <div class="letak-hasil">
        <input class="input-lg hasil" type="text" placeholder="teest">
    </div>
    <div class="letak-kanan">
        <button class="btn btn-danger btn-lg btn-proses" type="button">Mulai Proses </button>
    </div>
    <div class="letak-kanan">
        <button class="btn btn-primary btn-lg btn-back" type="button">Menu Awal</button>
    </div>
    <div class="letak-kanan">
        <button class="btn btn-success btn-lg btn-selanjutnya" type="button">Selanjutnya </button>
    </div>
    <div class="container-fluid">
        <div class="row pilihan">
            <div class="col-lg-3 col-md-3">
                <select class="input-lg pilihan">
                    <optgroup label="Pilih Jenis Sapi">
                        <option value="12" selected="">Friesien Holstein (FH)</option>
                        <option value="13">Jersey</option>
                        <option value="14">Guenersey</option>
                    </optgroup>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
                <input class="input-lg masukkan" type="text" placeholder="masukkan bulan laktasi">
            </div>
            <div class="col-lg-3 col-md-3">
                <select class="input-lg pilihan">
                    <optgroup label="Pilih Jenis Makanan Sapi">
                        <option value="12" selected="">Rumput Hijau</option>
                        <option value="13">Rumput Gajah</option>
                        <option value="14">Gabah Padi</option>
                    </optgroup>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
                <input class="input-lg masukkan" type="text" placeholder="masukkan jumlah makanan">
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
