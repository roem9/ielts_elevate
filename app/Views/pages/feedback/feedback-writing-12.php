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
    top: 320px;
    left: 690px;
    width: 80px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_ta {
    font-family: 'GothamBook';
    font-size: 14px;
    position: absolute;
    /* top: 274px; */
    top: 259px;
    left: 33px;
    width: 620px;
    /* height: 118px; */
    height: 160px;
    /* background-color: red; */
  }

  .nilai_cc {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 538px;
    left: 690px;
    width: 80px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_cc {
    font-family: 'GothamBook';
    font-size: 14px;
    position: absolute;
    /* top: 439px; */
    top: 476px;
    left: 33px;
    width: 620px;
    /* height: 118px; */
    height: 160px;
    /* background-color: red; */
  }

  .nilai_lr {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 707px;
    left: 33px;
    width: 516px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_lr {
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

  .nilai_gra {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 707px;
    left: 579px;
    width: 516px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_gra {
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
    <img src="public/assets/sertifikat/writing-feedback-12.png" style="width: 210mm; height: 297mm; margin: 0;" />
  </div>

  <!-- <div class="nilai_ta">
    <b><?= $nilai_ta_1?></b>
  </div>

  <div class="kriteria_ta">
    <?= $kriteria_ta_1?>
  </div>

  <div class="nilai_cc">
    <b><?= $nilai_cc_1?></b>
  </div>

  <div class="kriteria_cc">
    <?= $kriteria_cc_1?>
  </div> -->

  <div class="nilai_lr">
    <b><?= $nilai_lr_1?></b>
  </div>

  <div class="kriteria_lr">
    <?= $kriteria_lr_1?>
  </div>

  <div class="nilai_gra">
    <b><?= $nilai_gra_1?></b>
  </div>

  <div class="kriteria_gra">
    <?= $kriteria_gra_1?>
  </div>

  <!-- <div class="kriteria_tips">
    <?= 
      // $tips_1
      $writing_1
    ?>
  </div> -->
</body>
</html>

