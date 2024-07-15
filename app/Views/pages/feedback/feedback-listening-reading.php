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
  
  .kriteria_ta {
    font-family: 'GothamBook';
    font-size: 12px;
    position: absolute;
    top: 223px;
    left: 33px;
    width: 496px;
    height: 456px;
    /* background-color: red; */
    line-height: 1.5;
    padding: 10px;
  }

  .kriteria_cc {
    font-family: 'GothamBook';
    font-size: 12px;
    position: absolute;
    top: 223px;
    left: 579px;
    width: 496px;
    height: 456px;
    /* background-color: red; */
    line-height: 1.5;
    padding: 10px;
  }

  .tgl_tes {
      font-family: 'Montserrat-SemiBold';
      font-size: 20px;
      position: absolute;
      bottom: 165px;
      left: 0px;
      right: 0px;
      text-align: center;
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
    <img src="public/assets/sertifikat/writing-essay.png" style="width: 210mm; height: 297mm; margin: 0;" />
  </div>
  
  <div class="kriteria_ta">
    <?= $writing_1?>
  </div>

  <div class="kriteria_cc">
    <?= $writing_2?>
  </div>
</body>
</html>

