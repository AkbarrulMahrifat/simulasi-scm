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
<?php foreach ($hasil as $h) { ?>
<div class="container bd-rincian">
    <h1 class="text-center text-info hasil-akhir">Hasil Akhir</h1>
    <div class="row jarak-kategori">
        <div class="col-lg-6 col-md-6 kategori"><span>Jumlah Produksi Susu Peternakan :</span></div>
        <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Jumlah Produksi Susu Peternakan" class="kolom-hasil" value="<?php echo $h->hasil ?> liter" readonly>
        </div>
    </div>
    <div class="row jarak-kategori">
        <div class="col-lg-6 col-md-6 kategori"><span>Jumlah Produksi Susu Pabrik :</span></div>
        <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Jumlah Produksi Susu Pabrik" class="kolom-hasil" value="<?php echo $h->susu_jadi ?> kotak" readonly>
        </div>
    </div>
    <div class="row jarak-kategori">
        <div class="col-lg-6 col-md-6 kategori"><span>Jumlah Pendapatan :</span></div>
        <div class="col-lg-6 col-md-6">
            <input type="text" placeholder="Jumlah Pendapatan" class="kolom-hasil" value="<?php echo "Rp. ".number_format($h->pendapatan,2,',','.'); ?>" readonly>
        </div>
    </div>
    <form method="post" action="<?php echo base_url().'index.php/Simulasi/mulai';?>">
    <div class="mainlagi">
        <a class="btn btn-warning btn-mainlagi" type="button" href="<?=site_url('Simulasi/index')?>">Menu Awal</a>
        <button class="btn btn-danger btn-mainlagi" type="submit">Mulai Simulasi Lagi</button>
    </div>
    </form>
</div>
<?php } ?>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
