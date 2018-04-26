<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/25/2018
 * Time: 8:54 PM
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
<div class="bg-halAwal">
    <div class="letak-tengah"><img src="<?=base_url()?>assets/img/logo.png" class="logo-hal-awal"></div>
    <form method="post" action="<?php echo base_url().'index.php/Simulasi/mulai';?>">
    <div class="letak-tengah">
        <button class="btn btn-danger btn-lg btn-mulai" type="submit" >Mulai</button>
    </div>
    </form>
    <div class="letak-tengah">
        <button class="btn btn-warning btn-lg btn-petunjuk" type="button">Petunjuk</button>
    </div>
    <div class="letak-tengah">
        <button class="btn btn-info btn-lg btn-petunjuk" type="button">Kredit</button>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>