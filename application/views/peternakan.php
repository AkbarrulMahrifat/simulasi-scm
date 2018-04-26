<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/25/2018
 * Time: 9:02 PM
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
<div class="bg-peternakan">
    <div class="letak-hasil">
        <input class="input-lg hasil" type="text" placeholder="teest">
    </div>
    <div class="letak-kanan">
        <button class="btn btn-danger btn-lg btn-proses" type="button">Mulai Proses </button>
    </div>
    <div class="letak-kanan">
        <a class="btn btn-primary btn-lg btn-back" type="button" href="<?=site_url('Simulasi/index')?>">Menu Awal</a>
    </div>
    <div class="letak-kanan">
        <a class="btn btn-success btn-lg btn-selanjutnya" type="button" href="<?=site_url('Simulasi/pabrik')?>">Selanjutnya </a>
    </div>
    <div class="container-fluid">
        <div class="row pilihan">
            <div class="col-lg-3 col-md-3">
                <select class="input-lg pilihan" name="id_sapi">
                    <optgroup label="Pilih Jenis Sapi">
                        <?php foreach ($sapi as $s) { ?>
                        <option value="<?php echo $s->id_sapi ?>"><?php echo $s->jenis_sapi ?></option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
                <input class="input-lg masukkan" type="text" placeholder="masukkan bulan laktasi" name="bulan_laktasi">
            </div>
            <div class="col-lg-3 col-md-3">
                <select class="input-lg pilihan" name="id_makanan">
                    <optgroup label="Pilih Jenis Makanan Sapi">
                        <?php foreach ($makanan as $m) { ?>
                            <option value="<?php echo $m->id_makanan ?>"><?php echo $m->jenis_makanan ?></option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
                <input class="input-lg masukkan" type="text" placeholder="masukkan jumlah makanan" name="jumlah_makanan">
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
