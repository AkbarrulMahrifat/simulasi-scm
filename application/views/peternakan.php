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
    <title>SIMPS (Simulasi Produksi Susu)</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/material-icons.css">
</head>

<body>
<div class="bg-peternakan">
    <form method="post" action="<?php echo base_url().'index.php/Simulasi/proseshitung/'.$idhasil;?>">
    <div class="dropdown pilihan">
        <button class="btn btn-default active btn-lg dropdown-toggle pilihan" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-navicon icon-pilihan"></i> </button>
        <ul class="dropdown-menu dropdown-menu-left pilihan" role="menu">
            <li role="presentation"><a href="<?=site_url('Simulasi/index')?>"><i class="fa fa-home symbol-pilihan"></i>Menu Awal</a></li>
            <li role="presentation"><a href="#"><i class="material-icons symbol-pilihan">videogame_asset</i>Cara Main</a></li>
        </ul>
    </div>
    <div class="letak-hasil">
        <input class="input-lg hasil" type="text" value="Hasil : <?php echo $hasil['hasil'] ?> liter" placeholder="Hasil" readonly>
    </div>
    <div class="container-fluid letak-pilihan">
        <button class="btn btn-info button-back" type="button" onclick="window.location.href='<?=site_url('Simulasi/pabrik/'.$idhasil)?>'"><i class="material-icons next">chevron_right</i></button>
        <div class="row pilihan">
            <div class="col-lg-2 col-md-2">
                <input type="hidden" name="id_hasil" value="<?php echo $idhasil ?>">
                <input type="hidden" id="sapi" value="<?php echo $hasil['id_sapi'] ?>">
                <select class="input-lg pilihan1" name="id_sapi" id="id_sapi" >
                <optgroup label="Pilih Jenis Sapi">
                        <?php foreach ($sapi as $s) { ?>
                            <option value="<?php echo $s->id_sapi ?>"><?php echo $s->jenis_sapi ?></option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
            <div class="col-lg-2 col-md-2">
                <input class="input-lg masukkan" type="text" placeholder="bulan laktasi" name="bulan_laktasi" value="<?php echo $hasil['bulan_laktasi'] ?>">
            </div>
            <div class="col-lg-2 col-md-2">
                <input type="hidden" id="makanan" value="<?php echo $hasil['id_makanan'] ?>">
                <select class="input-lg pilihan" name="id_makanan" id="id_makanan">
                    <optgroup label="Pilih Jenis Makanan">
                    <?php foreach ($makanan as $m) { ?>
                            <option value="<?php echo $m->id_makanan ?>"><?php echo $m->jenis_makanan ?></option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
                <input class="input-lg masukkan1" type="text" placeholder="masukkan jumlah makanan" name="jumlah_makanan" value="<?php echo $hasil['jumlah_makanan'] ?>">
            </div>
            <div class="col-lg-3 col-md-3">
                <button class="btn btn-danger btn-lg btn-proses" type="submit">Mulai Proses</button>
            </div>
        </div>
    </div>
    </form>
</div>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script>
    var sapi = $('#sapi').val();
    $('#id_sapi').val(sapi);

    var makanan = $('#makanan').val();
    $('#id_makanan').val(makanan);
</script>
</body>

</html>
