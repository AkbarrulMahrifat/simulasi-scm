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
    <title>SIMPS (Simulasi Produksi Susu)</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/material-icons.css">
</head>

<body>
<div class="bg-halAwal">
    <div class="dropdown pilihan">
        <button class="btn btn-default active btn-lg dropdown-toggle pilihan" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-navicon icon-pilihan"></i> </button>
        <ul class="dropdown-menu dropdown-menu-left pilihan" role="menu">
            <li role="presentation"><a href="<?=site_url('Simulasi/petunjuk1')?>"><i class="fa fa-paw symbol-pilihan"></i>Petunjuk </a></li>
            <li role="presentation"><a href="#"><i class="glyphicon glyphicon-bookmark symbol-pilihan"></i>Skor </a></li>
            <li role="presentation"><a href="#"><i class="fa fa-group symbol-pilihan"></i>Kredit </a></li>
        </ul>
    </div>
    <div>
        <form method="post" action="<?php echo base_url().'index.php/Simulasi/mulai';?>">
            <div class="letak-tengah">
                <button class="btn btn-danger btn-lg btn-mulai" type="submit" >Mulai</button>
            </div>
        </form>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>