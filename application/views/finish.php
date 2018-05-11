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
    <title>SIMPS (Simulasi Produksi Susu)</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/material-icons.css">
</head>

<body>
<div class="bg-skor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input class="input-sm skor-P" type="text" placeholder="test" value="<?php echo $hasil['hasil'] ?> liter" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="input-sm skor-P2" type="text" placeholder="test" value="<?php echo $hasil['susu_jadi'] ?> kotak" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="input-sm skor-P2" type="text" placeholder="test" value="<?php echo "Rp. ".number_format($hasil['pendapatan'],2,',','.'); ?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-danger skor-btn" type="button" onclick="window.location.href='<?=site_url('Simulasi/index')?>'">Menu Awal</button>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
