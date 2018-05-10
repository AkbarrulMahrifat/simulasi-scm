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
<div class="dropdown pilihan">
    <button class="btn btn-default active btn-lg dropdown-toggle pilihan" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-navicon icon-pilihan"></i> </button>
    <ul class="dropdown-menu dropdown-menu-left pilihan" role="menu">
        <li role="presentation"><a href="#"><i class="fa fa-home symbol-pilihan"></i>Menu Awal</a></li>
        <li role="presentation"><a href="#"><i class="material-icons symbol-pilihan">videogame_asset</i>Cara Main</a></li>
    </ul>
</div>
<?php foreach ($hasil as $h) { ?>
<button class="btn btn-info button-back" type="button" onclick="window.location.href='<?=site_url('Simulasi/distribusi/'.$h->id_hasil)?>'"><i class="material-icons next">chevron_right</i></button>
<div class="bg-pabrik">
    <form method="post" action="<?php echo base_url().'index.php/Simulasi/prosespabrik/'.$h->id_hasil;?>">
        <input type="hidden" name="id_hasil" value="<?php echo $h->id_hasil ?>">
        <input type="hidden" name="id_sapi" value="<?php echo $h->id_sapi ?>">
        <input type="hidden" name="id_makanan" value="<?php echo $h->id_makanan ?>">
        <input type="hidden" name="bulan_laktasi" value="<?php echo $h->bulan_laktasi ?>">
        <input type="hidden" name="jumlah_makanan" value="<?php echo $h->jumlah_makanan ?>">
    <div class="container">
        <div class="row pabrik">
            <div class="col-lg-4 col-md-4">
                <input class="input-lg input-data" type="text" placeholder="Jumlah Susu" name="hasil" value="<?php echo $h->hasil ?>" readonly>
            </div>
            <div class="col-lg-5 col-md-5">
                <button class="btn btn-danger btn-lg btn-proses2" type="submit">Mulai Proses</button>
            </div>
            <div class="col-lg-3 col-md-3">
                <input class="input-lg output-data" type="text" placeholder="Susu Jadi" name="susu_jadi" value="<?php echo $h->susu_jadi ?>">
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
