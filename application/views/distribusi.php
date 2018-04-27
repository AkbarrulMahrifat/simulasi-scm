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
    <?php foreach ($hasil as $h) { ?>
    <form method="post" action="<?php echo base_url().'index.php/Simulasi/prosesdistribusi/'.$h->id_hasil;?>">
        <input type="hidden" name="id_hasil" value="<?php echo $h->id_hasil ?>">
        <input type="hidden" name="id_sapi" value="<?php echo $h->id_sapi ?>">
        <input type="hidden" name="id_makanan" value="<?php echo $h->id_makanan ?>">
        <input type="hidden" name="bulan_laktasi" value="<?php echo $h->bulan_laktasi ?>">
        <input type="hidden" name="jumlah_makanan" value="<?php echo $h->jumlah_makanan ?>">
        <input type="hidden" name="hasil" value="<?php echo $h->hasil ?>">
        <input type="hidden" name="pendapatan" value="<?php echo $h->pendapatan ?>">
    <div class="container-fluid">
        <div class="row permintaan">
            <div class="col-lg-6 col-md-6" style="text-align: center; padding-right: 400px">
                <label>Hasil Produksi Susu Jadi</label>
                <br>
                <input class="input-lg" style="text-align:center; width: 100px" name="susu_jadi" value="<?php echo $h->susu_jadi ?>" readonly>
            </div>
            <br>
            <div class="col-lg-2 col-md-2">
                <input type="text" placeholder="test" class="jumlah-permintaan1" name="toko1" value="<?php echo $h->toko1 ?>">
            </div>
            <div class="col-lg-2 col-md-2">
                <input type="text" placeholder="test" class="jumlah-permintaan" name="toko2" value="<?php echo $h->toko2 ?>">
            </div>
            <div class="col-lg-2 col-md-2">
                <input type="text" placeholder="test" class="jumlah-permintaan3" name="toko3" value="<?php echo $h->toko3 ?>">
            </div>
        </div>
        <div class="row permintaan2">
            <div class="col-lg-6 col-md-6">
                <a class="btn btn-danger btn-selanjutnya" type="button" href="<?=site_url('Simulasi/finish/'.$h->id_hasil)?>">Selanjutnya </a>
            </div>
            <div class="col-lg-2 col-md-2">
                <button class="btn btn-warning kirim1" type="submit">Kirim </button>
            </div>

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
