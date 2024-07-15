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
    top: 707px;
    left: 33px;
    width: 516px;
    /* background-color: red; */
    text-align: center;
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

  .nilai_cc {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 707px;
    left: 579px;
    width: 516px;
    /* background-color: red; */
    text-align: center;
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
    <img src="public/assets/sertifikat/speaking-feedback-2.png" style="width: 210mm; height: 297mm; margin: 0;" />
  </div>

  <!-- 'kriteria_topic' => $kriteria_topic,
  'nilai_topic' => $nilai_topic,
  'kriteria_fluency' => $kriteria_fluency,
  'nilai_fluency' => $nilai_fluency,
  'kriteria_grammar' => $kriteria_grammar,
  'nilai_grammar' => $nilai_grammar,
  'kriteria_vocabulary' => $kriteria_vocabulary,
  'nilai_vocabulary' => $nilai_vocabulary, -->

  <!-- <div class="nilai_ta">
    <b><?= $nilai_topic?></b>
  </div>

  <div class="kriteria_ta">
    <?= $kriteria_topic?>
  </div>

  <div class="nilai_cc">
    <b><?= $nilai_fluency?></b>
  </div>

  <div class="kriteria_cc">
    <?= $kriteria_fluency?>
  </div> -->

  <div class="nilai_lr">
    <b><?= $nilai_grammar?></b>
  </div>

  <div class="kriteria_lr">
    <?= $kriteria_grammar?>
  </div>

  <div class="nilai_gra">
    <b><?= $nilai_vocabulary?></b>
  </div>

  <div class="kriteria_gra">
    <?= $kriteria_vocabulary?>
  </div>
</body>
</html>

