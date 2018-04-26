<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/25/2018
 * Time: 9:10 PM
 */ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulasi scm</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
</head>

<body class="bg-halAkhir">
<div class="container bd-rincian">
    <h1 class="text-center text-info hasil-akhir">Hasil Akhir</h1>
    <div class="row jarak-kategori">
        <div class="col-lg-6 col-md-6 kategori"><span>Jumlah Produksi Susu Peternakan :</span></div>
        <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="123" class="kolom-hasil">
        </div>
    </div>
    <div class="row jarak-kategori">
        <div class="col-lg-6 col-md-6 kategori"><span>Jumlah Pendapatan :</span></div>
        <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="123" class="kolom-hasil">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 kategori"><span>Jumlah Produksi Susu Pabrik :</span></div>
        <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="123" class="kolom-hasil">
        </div>
    </div>
    <div class="mainlagi">
        <a class="btn btn-warning btn-mainlagi" type="button" href="<?=site_url('Simulasi/index')?>">Menu Awal</a>
        <a class="btn btn-danger btn-mainlagi" type="button" href="<?=site_url('Simulasi/peternakan')?>">Mulai Simulasi Lagi</a>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
