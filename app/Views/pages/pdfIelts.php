<html lang="en">
<head>
  <title><?= $first_name?> <?= $last_name?></title>
</head>

<style>

  @page { margin: 0; }

  body {
  }

  .barcode {
    position: absolute;
    bottom: 100px;
    right: 445px;
    text-align: center;
  }

  .no_doc {
    font-family: 'Montserrat-SemiBold';
    position: absolute;
    top: 50px;
    left: 50px;
  }

  .nama {
    font-family: 'lucida-calligraphy-italic';
    font-size: 50px;
    position: absolute;
    top: 250px;
    left: 25px;
    right: 0px;
    /* text-align: center; */
  }

  .nilai_listening {
    font-family: 'Montserrat-SemiBold';
    font-size: 18px;
    position: absolute;
    bottom: 299px;
    left: 139px;
    /* background-color: red; */
    width: 55px;
    text-align: right;
  }

  .nilai_reading {
    font-family: 'Montserrat-SemiBold';
    font-size: 18px;
    bottom: 299px;
    left: 338px;
    /* background-color: red; */
    width: 55px;
    position: absolute;
    text-align: right;
  }

  .nilai_writing {
    font-family: 'Montserrat-SemiBold';
    font-size: 18px;
    position: absolute;
    bottom: 205px;
    left: 139px;
    /* background-color: red; */
    width: 55px;
    text-align: right;
  }

  .nilai_speaking {
    font-family: 'Montserrat-SemiBold';
    font-size: 18px;
    position: absolute;
    bottom: 205px;
    left: 338px;
    /* background-color: red; */
    width: 55px;
    text-align: right;
  }

  .overall {
    font-family: 'Montserrat-SemiBold';
    font-size: 18px;
    position: absolute;
    bottom: 105px;
    left: 312px;
    /* background-color: red; */
    width: 55px;
    text-align: right;
  }

  .tgl_tes {
    font-family: 'Montserrat-SemiBold';
    font-size: 20px;
    position: absolute;
    bottom: 335px;
    left: 840px;
    /* right: 0px; */
    text-align: center;
  }

</style>
<body>

  <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
      <img src="public/assets/sertifikat/sertifikat.png"
          style="width: 210mm; height: 297mm; margin: 0;" />
  </div>

  <div class="barcode">
    <img src="<?= $barcode?>" alt="" width="150px"><br>
    Elevate/IELTS/<?= $no_doc?>
  </div>

  <div class="nama">
    <center><b><?= $first_name?> <?= $last_name?></b></center>
  </div>

  <?php
    $skor_listening = ielts_listening($nilai_listening);
    $skor_reading = ielts_reading($nilai_reading, $tipe_tes);
    $skor_writing = ielts_writing( $nilai_ta_1, $nilai_cc_1, $nilai_gra_1, $nilai_lr_1, $nilai_ta_2, $nilai_cc_2, $nilai_gra_2, $nilai_lr_2);
    $skor_speaking = ielts_speaking( $nilai_topic, $nilai_fluency, $nilai_grammar, $nilai_vocabulary);
    $overall = pembulatan_skor_ielts(skor_ielts( $skor_listening, $skor_reading, $skor_writing, $skor_speaking));
  ?>

  <div class="nilai_listening">
    <center><b><?= $skor_listening?></b></center>
  </div>

  <div class="nilai_reading">
    <center><b><?= $skor_reading?></b></center>
  </div>

  <div class="nilai_writing">
    <center><b><?= $skor_writing?></b></center>
  </div>

  <div class="nilai_speaking">
    <center><b><?= $skor_speaking?></b></center>
  </div>

  <div class="overall">
    <center><b><?= $overall?></b></center>
  </div>

  <div class="tgl_tes">
    <center>Yogyakarta, <?= date('d/m/y', strtotime($tgl_tes))?></center>
  </div>
  
</body>
</html>

