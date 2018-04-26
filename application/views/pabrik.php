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
<div class="bg-pabrik">
    <div class="container">
        <div class="row peternakan">
            <div class="col-lg-4 col-md-4">
                <input class="input-lg input-data" type="text" placeholder="test">
            </div>
            <div class="col-lg-4 col-md-4">
                <button class="btn btn-danger btn-lg btn-proses2" type="button">Mulai Proses</button>
                <a class="btn btn-success btn-lg btn-selanjutnya" type="button" href="<?=site_url('Simulasi/distribusi')?>">Selanjutnya</a>
            </div>
            <div class="col-lg-4 col-md-4">
                <input class="input-lg output-data" type="text" placeholder="test">
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
