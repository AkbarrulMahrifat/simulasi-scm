<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 5/11/2018
 * Time: 1:53 AM
 */ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPS (Simulasi Produksi Susu)</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/material-icons.css">
</head>

<body>
<div class="bg-petunjuk2">
    <button class="btn btn-info home" type="button" onclick="window.location.href='<?=site_url('Simulasi/index')?>'"><i class="fa fa-home"></i></button>
    <button class="btn btn-info button-back" type="button" onclick="window.location.href='<?=site_url('Simulasi/petunjuk3')?>'"><i class="material-icons next">chevron_right</i></button>
    <button class="btn btn-info button-next" type="button" onclick="window.location.href='<?=site_url('Simulasi/petunjuk1')?>'"><i class="material-icons next">chevron_left</i></button>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
