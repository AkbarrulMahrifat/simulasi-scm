<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/25/2018
 * Time: 9:09 PM
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

<body>
<div class="bg-distribusi">
    <div class="container-fluid">
        <div class="row permintaan">
            <div class="col-lg-6 col-md-6"></div>
            <div class="col-lg-2 col-md-2">
                <input type="text" placeholder="test" class="jumlah-permintaan1">
            </div>
            <div class="col-lg-2 col-md-2">
                <input type="text" placeholder="test" class="jumlah-permintaan">
            </div>
            <div class="col-lg-2 col-md-2">
                <input type="text" placeholder="test" class="jumlah-permintaan3">
            </div>
        </div>
        <div class="row permintaan2">
            <div class="col-lg-6 col-md-6">
                <a class="btn btn-danger btn-selanjutnya" type="button" href="<?=site_url('Simulasi/finish')?>">Selanjutnya </a>
            </div>
            <div class="col-lg-2 col-md-2">
                <button class="btn btn-warning kirim1" type="button">Kirim </button>
            </div>
            <div class="col-lg-2 col-md-2">
                <button class="btn btn-warning kirim2" type="button">Kirim </button>
            </div>
            <div class="col-lg-2 col-md-2">
                <button class="btn btn-warning kirim" type="button">Kirim </button>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
