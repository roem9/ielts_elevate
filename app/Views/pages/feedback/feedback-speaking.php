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
    top: 274px;
    left: 33px;
    width: 620px;
    height: 118px;
    /* background-color: red; */
  }

  .nilai_cc {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 485px;
    left: 690px;
    width: 80px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_cc {
    font-family: 'GothamBook';
    font-size: 14px;
    position: absolute;
    top: 439px;
    left: 33px;
    width: 620px;
    height: 118px;
    /* background-color: red; */
  }

  .nilai_lr {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 650px;
    left: 690px;
    width: 80px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_lr {
    font-family: 'GothamBook';
    font-size: 14px;
    position: absolute;
    top: 604px;
    left: 33px;
    width: 620px;
    height: 118px;
    /* background-color: red; */
  }

  .nilai_gra {
    font-family: 'Montserrat-SemiBold';
    font-size: 25px;
    position: absolute;
    top: 815px;
    left: 690px;
    width: 80px;
    /* background-color: red; */
    text-align: center;
  }

  .kriteria_gra {
    font-family: 'GothamBook';
    font-size: 14px;
    position: absolute;
    top: 769px;
    left: 33px;
    width: 620px;
    height: 118px;
    /* background-color: red; */
  }

  .kriteria_tips {
    font-family: 'GothamBook';
    font-size: 14px;
    position: absolute;
    top: 940px;
    left: 23px;
    width: 746px;
    height: 118px;
    /* background-color: red; */
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
    <img src="public/assets/sertifikat/feedback-speaking.png" style="width: 210mm; height: 297mm; margin: 0;" />
  </div>

  <!-- 'kriteria_topic' => $kriteria_topic,
  'nilai_topic' => $nilai_topic,
  'kriteria_fluency' => $kriteria_fluency,
  'nilai_fluency' => $nilai_fluency,
  'kriteria_grammar' => $kriteria_grammar,
  'nilai_grammar' => $nilai_grammar,
  'kriteria_vocabulary' => $kriteria_vocabulary,
  'nilai_vocabulary' => $nilai_vocabulary, -->

  <div class="nilai_ta">
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
  </div>

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

  <div class="kriteria_tips">
    <?= $tips_3?>
  </div>
</body>
</html>

