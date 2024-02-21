function ielts_listening(benar) {
  if (benar >= 39 && benar <= 40) {
    return 9;
  } else if (benar >= 37 && benar <= 38) {
    return 8.5;
  } else if (benar >= 35 && benar <= 36) {
    return 8;
  } else if (benar >= 32 && benar <= 34) {
    return 7.5;
  } else if (benar >= 30 && benar <= 31) {
    return 7;
  } else if (benar >= 26 && benar <= 29) {
    return 6.5;
  } else if (benar >= 23 && benar <= 25) {
    return 6;
  } else if (benar >= 18 && benar <= 22) {
    return 5.5;
  } else if (benar >= 16 && benar <= 17) {
    return 5;
  } else if (benar >= 13 && benar <= 15) {
    return 4.5;
  } else if (benar >= 11 && benar <= 12) {
    return 4;
  } else if (benar >= 8 && benar <= 10) {
    return 3.5;
  } else if (benar >= 6 && benar <= 7) {
    return 3;
  } else if (benar >= 4 && benar <= 5) {
    return 2.5;
  } else {
    return 0;
  }
}

function ielts_reading(benar, tipe_tes) {
  if (tipe_tes == "IELTS Academic") {
    if (benar >= 39 && benar <= 40) {
      return 9;
    } else if (benar >= 37 && benar <= 38) {
      return 8.5;
    } else if (benar >= 35 && benar <= 36) {
      return 8;
    } else if (benar >= 33 && benar <= 34) {
      return 7.5;
    } else if (benar >= 30 && benar <= 32) {
      return 7;
    } else if (benar >= 27 && benar <= 29) {
      return 6.5;
    } else if (benar >= 23 && benar <= 26) {
      return 6;
    } else if (benar >= 19 && benar <= 22) {
      return 5.5;
    } else if (benar >= 15 && benar <= 18) {
      return 5;
    } else if (benar >= 13 && benar <= 14) {
      return 4.5;
    } else if (benar >= 10 && benar <= 12) {
      return 4;
    } else if (benar >= 8 && benar <= 9) {
      return 3.5;
    } else if (benar >= 6 && benar <= 7) {
      return 3;
    } else if (benar >= 4 && benar <= 5) {
      return 2.5;
    } else if (benar >= 2 && benar <= 3) {
      return 2;
    } else {
      return 1;
    }
  } else if (tipe_tes == "General Training") {
    if (benar == 40) {
      return 9;
    } else if (benar == 39) {
      return 8.5;
    } else if (benar >= 37 && benar <= 38) {
      return 8;
    } else if (benar == 36) {
      return 7.5;
    } else if (benar >= 34 && benar <= 35) {
      return 7;
    } else if (benar >= 32 && benar <= 33) {
      return 6.5;
    } else if (benar >= 30 && benar <= 31) {
      return 6;
    } else if (benar >= 27 && benar <= 29) {
      return 5.5;
    } else if (benar >= 23 && benar <= 26) {
      return 5;
    } else if (benar >= 19 && benar <= 22) {
      return 4.5;
    } else if (benar >= 15 && benar <= 18) {
      return 4;
    } else if (benar >= 12 && benar <= 14) {
      return 3.5;
    } else if (benar >= 9 && benar <= 11) {
      return 3;
    } else if (benar >= 6 && benar <= 8) {
      return 2.5;
    } else if (benar >= 3 && benar <= 5) {
      return 2;
    } else {
      return 0;
    }
  }
}

function skor_ielts(
  nilai_listening,
  nilai_reading,
  nilai_writing,
  nilai_speaking
) {
  skor =
    (parseFloat(nilai_listening) +
      parseFloat(nilai_reading) +
      parseFloat(nilai_writing) +
      parseFloat(nilai_speaking)) /
    4;

  return skor;
}

function ielts_writing(
  nilai_ta_1,
  nilai_cc_1,
  nilai_gra_1,
  nilai_lr_1,
  nilai_ta_2,
  nilai_cc_2,
  nilai_gra_2,
  nilai_lr_2
) {
  let task_1 = pembulatan_skor_ielts(
    (parseFloat(nilai_ta_1) +
      parseFloat(nilai_cc_1) +
      parseFloat(nilai_gra_1) +
      parseFloat(nilai_lr_1)) /
      4
  );
  let task_2 = pembulatan_skor_ielts(
    (parseFloat(nilai_ta_2) +
      parseFloat(nilai_cc_2) +
      parseFloat(nilai_gra_2) +
      parseFloat(nilai_lr_2)) /
      4
  );

  let nilai_writing = pembulatan_skor_ielts(
    (parseFloat(task_1) + parseFloat(task_2) + parseFloat(task_2)) / 3
  );

  return nilai_writing;
}

function ielts_speaking(
  nilai_topic,
  nilai_fluency,
  nilai_grammar,
  nilai_vocabulary
) {
  let nilai_speaking = pembulatan_skor_ielts(
    (parseFloat(nilai_topic) +
      parseFloat(nilai_fluency) +
      parseFloat(nilai_grammar) +
      parseFloat(nilai_vocabulary)) /
      4
  );

  return nilai_speaking;
}

function pembulatan_skor_ielts(angka) {
  var decimal = angka - Math.floor(angka); // hitung nilai desimal

  if (decimal < 0.25) {
    // jika desimal < 0.25
    return Math.floor(angka); // bulatkan ke bawah menjadi 0
    // } else if (decimal > 0.25 && decimal <= 0.75) {
  } else if (decimal >= 0.25 && decimal < 0.75) {
    // jika desimal >= 0.25 dan < 0.75
    return Math.floor(angka) + 0.5; // bulatkan menjadi 0.5
  } else {
    // jika desimal > 0.75
    return Math.ceil(angka); // bulatkan ke atas menjadi 1
  }
}

function writing(tipe_soal, task, url) {
  if (tipe_soal == "Soal_001") {
    if (task == 1) {
      return `
        <p class="question mb-3">
            <b>Writing Task 1</b>
        </p>

        <p>You should spend about 20 minutes on this task.</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <b><i>The graph below shows the number of shops that closed and the number of new shops that opened in one country between 2011 and 2018.</i></b>
                    </p>
                    <p>
                        <b><i>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</i></b>
                    </p>
                </td>
            </tr>
        </table>

        <p>Write at least 150 words.</p>

        <div class="">
            <center>
                <img src="${url}public/assets/img-soal/writing-1-soal-001.png" alt="" class="img-fluid">
            </center>
        </div>
      `;
    } else if (task == 2) {
      return `
        <p class="question mb-3">
            <b>Writing Task 2</b>
        </p>

        <p>You should spend about 40 minutes on this task.</p>
        <p>Write about the following topic:</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <i><b>In their advertising, businesses nowadays usually emphasise that their products are new in some way.</b></i>
                    </p>
                    <p>
                        <i><b>Why is this? Do you think it is a positive or negative development?</b></i>
                    </p>
                </td>
            </tr>
        </table>

        <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.</p>
        <p>Write at least 250 words</p>
      `;
    }
  } else if (tipe_soal == "Soal_002") {
    if (task == 1) {
      return `
      <p class="question mb-3">
          <b>Writing Task 1</b>
      </p>

      <p>You should spend about 20 minutes on this task.</p>

      <table class="tableSoal w-100 mb-3">
          <tr>
              <td class="text-wrap p-3">
                  <p>
                      <b><i>The diagram below shows the process for recycling plastic bottles.</i></b>
                  </p>
                  <p>
                      <b><i>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</i></b>
                  </p>
              </td>
          </tr>
      </table>

      <p>Write at least 150 words.</p>

        <div class="">
            <center>
                <img src="${url}public/assets/img-soal/writing-1-soal-002.png" alt="" class="img-fluid">
            </center>
        </div>
      `;
    } else if (task == 2) {
      return `
        <p class="question mb-3">
            <b>Writing Task 2</b>
        </p>

        <p>You should spend about 40 minutes on this task.</p>
        <p>Write about the following topic:</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <i><b>In the future all cars, buses and trucks will be driverless. The only people travelling inside these vehicles will be passengers.</b></i>
                    </p>
                    <p>
                        <i><b>Do you think the advantages of driverless vehicles outweight the disadvantages?</b></i>
                    </p>
                </td>
            </tr>
        </table>

        <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.</p>
        <p>Write at least 250 words</p>
      `;
    }
  } else if (tipe_soal == "Soal_003") {
    if (task == 1) {
      return `
        <p class="question mb-3">
            <b>Writing Task 1</b>
        </p>

        <p>You should spend about 20 minutes on this task.</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <b><i>The chart below gives information about how families in one country spent their weekly income in 1968 and in 2018.</i></b>
                    </p>
                    <p>
                        <b><i>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</i></b>
                    </p>
                </td>
            </tr>
        </table>

        <p>Write at least 150 words.</p>

        <div class="">
            <center>
                <img src="${url}public/assets/img-soal/writing-1-soal-003.png" alt="" class="img-fluid">
            </center>
        </div>
      `;
    } else if (task == 2) {
      return `
        <p class="question mb-3">
            <b>Writing Task 2</b>
        </p>

        <p>You should spend about 40 minutes on this task.</p>
        <p>Write about the following topic:</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <i><b>Some people believe that professionals, such as doctors and engineers, should be required to work in the country where they did their training. Others believe they should be free to work in another country if they wish.</b></i>
                    </p>
                    <p>
                        <i><b>Discuss both these views and give your own opinion.</b></i>
                    </p>
                </td>
            </tr>
        </table>

        <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.</p>
        <p>Write at least 250 words</p>
      `;
    }
  } else if (tipe_soal == "Soal_004") {
    if (task == 1) {
      return `
        <p class="question mb-3">
            <b>Writing Task 1</b>
        </p>

        <p>You should spend about 20 minutes on this task.</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <b><i>The table and charts below give information on the police budget for 2017 and 2018 in one are of Britain. The table shows where the money came from and the charts show how it was distributed.</i></b>
                    </p>
                    <p>
                        <b><i>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</i></b>
                    </p>
                </td>
            </tr>
        </table>

        <p>Write at least 150 words.</p>

        <div class="">
            <center>
                <img src="${url}public/assets/img-soal/writing-1-soal-004.png" alt="" class="img-fluid">
            </center>
        </div>
      `;
    } else if (task == 2) {
      return `
        <p class="question mb-3">
            <b>Writing Task 2</b>
        </p>

        <p>You should spend about 40 minutes on this task.</p>
        <p>Write about the following topic:</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <i>
                            <b>
                                Living in a country where you have to speak a foreign language can cause serious social problems, as well as practical problems
                            </b>
                        </i>
                    </p>
                    <p>
                        <i>
                            <b>
                                To what extent do you agree or disagree with this statement?
                            </b>
                        </i>
                    </p>
                </td>
            </tr>
        </table>

        <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.</p>
        <p>Write at least 250 words</p>
      `;
    }
  } else if (tipe_soal == "Soal_005") {
    if (task == 1) {
      return `
        <p class="question mb-3">
            <b>Writing Task 1</b>
        </p>

        <p>You should spend about 20 minutes on this task.</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <b><i>The charts below show the percentage of water used for different purposes in six areas of the world</i></b>
                    </p>
                    <p>
                        <b><i>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</i></b>
                    </p>
                </td>
            </tr>
        </table>

        <p>Write at least 150 words.</p>

        <div class="">
            <center>
                <img src="${url}public/assets/img-soal/writing-1-soal-005.png" alt="" class="img-fluid">
            </center>
        </div>
      `;
    } else if (task == 2) {
      return `
        <p class="question mb-3">
            <b>Writing Task 2</b>
        </p>

        <p>You should spend about 40 minutes on this task.</p>
        <p>Write about the following topic:</p>

        <table class="tableSoal w-100 mb-3">
            <tr>
                <td class="text-wrap p-3">
                    <p>
                        <i><b>Some people say that the only reason for learning a foreign language is in order to travel to or work in a foreign country. Others say that these are not the only reasons why someone should learn a foreign language</b></i>
                    </p>
                    <p>
                        <i><b>Discuss both these views and give your own opinion.</b></i>
                    </p>
                </td>
            </tr>
        </table>

        <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.</p>
        <p>Write at least 250 words</p>
      `;
    }
  }
}

// soal toefl
function required(form) {
  let eror = 0;
  $.each($(form + " .required"), function () {
    if ($(this).val() == "") {
      eror = 1;
      // console.log($(this).attr("name"));
      $(this).addClass("bg-red-lt");
    } else {
      $(this).removeClass("bg-red-lt");
    }
  });

  return eror;
}
