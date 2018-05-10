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
    <title>SIMPS (Simulasi Produksi Susu)</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/material-icons.css">
</head>

<body>
<div class="bg-distribusi">
    <?php foreach ($hasil as $h) { ?>
    <form method="post" action="<?php echo base_url().'index.php/Simulasi/prosesdistribusi/'.$h->id_hasil;?>">
        <input type="hidden" name="id_hasil" value="<?php echo $h->id_hasil ?>">
        <input type="hidden" name="id_sapi" value="<?php echo $h->id_sapi ?>">
        <input type="hidden" name="id_makanan" value="<?php echo $h->id_makanan ?>">
        <input type="hidden" name="bulan_laktasi" value="<?php echo $h->bulan_laktasi ?>">
        <input type="hidden" name="jumlah_makanan" value="<?php echo $h->jumlah_makanan ?>">
        <input type="hidden" name="hasil" value="<?php echo $h->hasil ?>">
        <input type="hidden" name="pendapatan" value="<?php echo $h->pendapatan ?>">
        <input class="input-lg jumlah-susu" style="text-align:center" name="susu_jadi" value="<?php echo $h->susu_jadi ?>" readonly>
    <div class="container-fluid">
        <button class="btn btn-info button-back" type="button" onclick="window.location.href='<?=site_url('Simulasi/finish/'.$h->id_hasil)?>'"><i class="material-icons next">chevron_right</i></button>
        <div class="dropdown pilihan">
            <button class="btn btn-default active btn-lg dropdown-toggle pilihan" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-navicon icon-pilihan"></i> </button>
            <ul class="dropdown-menu dropdown-menu-left pilihan" role="menu">
                <li role="presentation"><a href="#"><i class="fa fa-home symbol-pilihan"></i>Menu Awal</a></li>
                <li role="presentation"><a href="#"><i class="material-icons symbol-pilihan">videogame_asset</i>Cara Main</a></li>
            </ul>
        </div>
    </div>
    <div class="container order">
        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="test" class="input-sm p-1" name="toko1" value="<?php echo $h->toko1 ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-danger btn-kirim" type="submit">Kirim </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="test" class="input-sm p-2" name="toko2" value="<?php echo $h->toko2 ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-danger btn-kirim2" type="submit">Kirim </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="test" class="input-sm p-3" name="toko3" value="<?php echo $h->toko3 ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-danger btn-kirim3" type="submit">Kirim </button>
            </div>
        </div>
    </div>
    </form>
    <?php } ?>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
