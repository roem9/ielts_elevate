<html>
<head>
  <title>Feedback <?= $first_name?> <?= $last_name?></title>
</head>

<style>
  .name {
    font-family: 'lucida-calligraphy-italic';
    font-size: 25px;
    position: absolute;
    top: 100px;
    left: 40px;
    width: 500px;
    /* background-color: red; */
  }
  
  .nilai_ta {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 160px;
    left: 235px;
    width: 500px;
    /* background-color: red; */
  }

  .kriteria_ta {
    font-family: 'GothamBook';
    font-size: 30px;
    position: absolute;
    top: 450px;
    left: 85px;
    width: 623px;
    height: 720px;
    /* background-color: red; */
    line-height: 1.5;
  }

  /* GothamBook */
</style>
<body>
    <?php
      $skor_listening = ielts_listening($nilai_listening);
      $skor_reading = ielts_reading($nilai_reading, $tipe_tes);
      $skor_writing = ielts_writing( $nilai_ta_1, $nilai_cc_1, $nilai_gra_1, $nilai_lr_1, $nilai_ta_2, $nilai_cc_2, $nilai_gra_2, $nilai_lr_2);
      $skor_speaking = ielts_speaking( $nilai_topic, $nilai_fluency, $nilai_grammar, $nilai_vocabulary);
      $overall = pembulatan_skor_ielts(skor_ielts( $skor_listening, $skor_reading, $skor_writing, $skor_speaking));
    ?>

  <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
    <img src="public/assets/sertifikat/cover.png" style="width: 210mm; height: 297mm; margin: 0;" />
  </div>
  
  <div class="kriteria_ta" style="text-align: center">
    <p><b><?= $first_name . ' ' . $last_name?></b></p>
    <p><?= $tipe_tes?></p>
    <p><?= $tgl_tes?></p>
  </div>
</body>
</html>

