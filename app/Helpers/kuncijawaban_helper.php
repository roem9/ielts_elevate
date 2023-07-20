<?php
    function soal_001($jawaban_listening_peserta, $jawaban_reading_peserta){
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["litter"],
            ],
            [
                "no" => 2,
                "jawaban" => ["dogs"],
            ],
            [
                "no" => 3,
                "jawaban" => ["insects"],
            ],
            [
                "no" => 4,
                "jawaban" => ["butterflies"],
            ],
            [
                "no" => 5,
                "jawaban" => ["wall"],
            ],
            [
                "no" => 6,
                "jawaban" => ["island"],
            ],
            [
                "no" => 7,
                "jawaban" => ["boots"],
            ],
            [
                "no" => 8,
                "jawaban" => ["beginners"],
            ],
            [
                "no" => 9,
                "jawaban" => ["spoons"],
            ],
            [
                "no" => 10,
                "jawaban" => ["35", "thirty five"],
            ],
            [
                "no" => 11,
                "jawaban" => ["<b>A.</b> 9"],
            ],
            [
                "no" => 12,
                "jawaban" => ["<b>C.</b> light green"],
            ],
            [
                "no" => 13,
                "jawaban" => ["<b>B.</b> Lunchbox 2"],
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>B.</b> hand it to a member of staff"],
            ],
            // ini 
            [
                "no" => 15,
                "jawaban" => ["A", "D"],
            ],
            [
                "no" => 16,
                "jawaban" => ["D", "A"],
            ],
            // ini 
            [
                "no" => 17,
                "jawaban" => ["B", "C"],
            ],
            [
                "no" => 18,
                "jawaban" => ["C", "B"],
            ],
            // ini 
            [
                "no" => 19,
                "jawaban" => ["D", "E"],
            ],
            [
                "no" => 20,
                "jawaban" => ["E", "D"],
            ],
            [
                "no" => 21,
                "jawaban" => ["<b>A.</b> making initial contact with suitable farms"],
            ],
            [
                "no" => 22,
                "jawaban" => ["<b>B.</b> a sheep that was having difficulty giving birth."],
            ],
            [
                "no" => 23,
                "jawaban" => ["<b>B.</b> were mainly reared for their meat."],
            ],
            [
                "no" => 24,
                "jawaban" => ["<b>A.</b> These should only be given if specially needed."],
            ],
            [
                "no" => 25,
                "jawaban" => ["<b>C.</b> She made a mistake when storing milk."],
            ],
            [
                "no" => 26,
                "jawaban" => ["<b>C.</b> Some jobs could be done by the farmer rather than by a vet."],
            ],
            [
                "no" => 27,
                "jawaban" => ["A"],
            ],
            [
                "no" => 28,
                "jawaban" => ["E"],
            ],
            [
                "no" => 29,
                "jawaban" => ["F"],
            ],
            [
                "no" => 30,
                "jawaban" => ["C"],
            ],
            [
                "no" => 31,
                "jawaban" => ["puzzle"],
            ],
            [
                "no" => 32,
                "jawaban" => ["logic"],
            ],
            [
                "no" => 33,
                "jawaban" => ["confusion"],
            ],
            [
                "no" => 34,
                "jawaban" => ["meditation"],
            ],
            [
                "no" => 35,
                "jawaban" => ["stone"],
            ],
            [
                "no" => 36,
                "jawaban" => ["coins"],
            ],
            [
                "no" => 37,
                "jawaban" => ["tree"],
            ],
            [
                "no" => 38,
                "jawaban" => ["breathing"],
            ],
            [
                "no" => 39,
                "jawaban" => ["paper"],
            ],
            [
                "no" => 40,
                "jawaban" => ["anxiety"],
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 2,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 3,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 4,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 5,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 6,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 7,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 8,
                "jawaban" => ["violent"],
            ],
            [
                "no" => 9,
                "jawaban" => ["tool"],
            ],
            [
                "no" => 10,
                "jawaban" => ["meat"],
            ],
            [
                "no" => 11,
                "jawaban" => ["photographer"],
            ],
            [
                "no" => 12,
                "jawaban" => ["game"],
            ],
            [
                "no" => 13,
                "jawaban" => ["frustration"],
            ],
            [
                "no" => 14,
                "jawaban" => ["iv"],
            ],
            [
                "no" => 15,
                "jawaban" => ["vii"],
            ],
            [
                "no" => 16,
                "jawaban" => ["ii"],
            ],
            [
                "no" => 17,
                "jawaban" => ["v"],
            ],
            [
                "no" => 18,
                "jawaban" => ["i"],
            ],
            [
                "no" => 19,
                "jawaban" => ["viii"],
            ],
            [
                "no" => 20,
                "jawaban" => ["vi"],
            ],
            [
                "no" => 21,
                "jawaban" => ["city"],
            ],
            [
                "no" => 22,
                "jawaban" => ["priests"],
            ],
            [
                "no" => 23,
                "jawaban" => ["trench"],
            ],
            [
                "no" => 24,
                "jawaban" => ["location"],
            ],
            // ini 
            [
                "no" => 25,
                "jawaban" => ["B", "D"],
            ],
            [
                "no" => 26,
                "jawaban" => ["D", "B"],
            ],
            [
                "no" => 27,
                "jawaban" => ["<b>B.</b> the extent to which AI will after the nature of the work that people do."],
            ],
            [
                "no" => 28,
                "jawaban" => ["<b>D.</b> It is a key factor driving current developments in the workplace."],
            ],
            [
                "no" => 29,
                "jawaban" => ["<b>C.</b> staff making sure that AI produces the results that they want"],
            ],
            [
                "no" => 30,
                "jawaban" => ["<b>D.</b> illustrates how changes in the job market can be successfully handled."],
            ],
            [
                "no" => 31,
                "jawaban" => ["G"],
            ],
            [
                "no" => 32,
                "jawaban" => ["E"],
            ],
            [
                "no" => 33,
                "jawaban" => ["C"],
            ],
            [
                "no" => 34,
                "jawaban" => ["F"],
            ],
            [
                "no" => 35,
                "jawaban" => ["B"],
            ],
            [
                "no" => 36,
                "jawaban" => ["A"],
            ],
            [
                "no" => 37,
                "jawaban" => ["C"],
            ],
            [
                "no" => 38,
                "jawaban" => ["A"],
            ],
            [
                "no" => 39,
                "jawaban" => ["B"],
            ],
            [
                "no" => 40,
                "jawaban" => ["C"],
            ],
        ];

        $jawaban_ielts = "";

        $benar_listening = 0;
        foreach ($jawaban_listening_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = $data_jawaban_listening;
            }

            if($i == 15){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[14], $jawaban_listening_peserta[15], 'A', 'D');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i == 17){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[16], $jawaban_listening_peserta[17], 'B', 'C');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i == 19){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[18], $jawaban_listening_peserta[19], 'D', 'E');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i != 14 && $i != 16 && $i != 18) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_listening++;
                } else {
                    $status = "Salah";
                }

                $jawaban_ielts .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }

        }

        $benar_reading = 0;
        foreach ($jawaban_reading_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = $data_jawaban_reading;
            }

            if($i == 25){
                $data_ielts = dua_nomor_tidak_boleh_sama_reading($jawaban_reading_peserta[24], $jawaban_reading_peserta[25], 'B', 'D');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_reading = $benar_reading + $data_ielts['benar_reading'];
            } else if($i != 24) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_reading++;
                } else {
                    $status = "Salah";
                }
    
                $jawaban_ielts .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }
        }

        $jawaban_ielts = substr($jawaban_ielts, 0, -3);

        $data_koreksi = [
            'jawaban_ielts' =>  $jawaban_ielts,
            'benar_listening' =>  $benar_listening,
            'benar_reading' =>  $benar_reading
        ];

        return $data_koreksi;
    }

    function soal_002($jawaban_listening_peserta, $jawaban_reading_peserta){
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["28", "28th"],
            ],
            [
                "no" => 2,
                "jawaban" => ["550"],
            ],
            [
                "no" => 3,
                "jawaban" => ["Chervil"],
            ],
            [
                "no" => 4,
                "jawaban" => ["garage"],
            ],
            [
                "no" => 5,
                "jawaban" => ["garden"],
            ],
            [
                "no" => 6,
                "jawaban" => ["parking"],
            ],
            [
                "no" => 7,
                "jawaban" => ["wood"],
            ],
            [
                "no" => 8,
                "jawaban" => ["bridge"],
            ],
            [
                "no" => 9,
                "jawaban" => ["monument"],
            ],
            [
                "no" => 10,
                "jawaban" => ["March"],
            ],
            [
                "no" => 11,
                "jawaban" => ["<b>C</b> changes in the type of traffic."],
            ],
            [
                "no" => 12,
                "jawaban" => ["<b>A</b> It will be widened."],
            ],
            [
                "no" => 13,
                "jawaban" => ["<b>B</b> the proposed location is unsafe."],
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>B</b> asking motorists to switch off engines when waiting at the level crossing."],
            ],
            [
                "no" => 15,
                "jawaban" => ["C"],
            ],
            [
                "no" => 16,
                "jawaban" => ["F"],
            ],
            [
                "no" => 17,
                "jawaban" => ["A"],
            ],
            [
                "no" => 18,
                "jawaban" => ["I"],
            ],
            [
                "no" => 19,
                "jawaban" => ["E"],
            ],
            [
                "no" => 20,
                "jawaban" => ["H"],
            ],
            // ini 
            [
                "no" => 21,
                "jawaban" => ["B", "C"],
            ],
            [
                "no" => 22,
                "jawaban" => ["B", "C"],
            ],
            // ini 
            [
                "no" => 23,
                "jawaban" => ["B", "C"],
            ],
            [
                "no" => 24,
                "jawaban" => ["B", "C"],
            ],
            [
                "no" => 25,
                "jawaban" => ["C"],
            ],
            [
                "no" => 26,
                "jawaban" => ["F"],
            ],
            [
                "no" => 27,
                "jawaban" => ["D"],
            ],
            [
                "no" => 28,
                "jawaban" => ["E"],
            ],
            [
                "no" => 29,
                "jawaban" => ["B"],
            ],
            [
                "no" => 30,
                "jawaban" => ["A"],
            ],
            [
                "no" => 31,
                "jawaban" => ["spice", "spices"],
            ],
            [
                "no" => 32,
                "jawaban" => ["colony", "settlement"],
            ],
            [
                "no" => 33,
                "jawaban" => ["fat"],
            ],
            [
                "no" => 34,
                "jawaban" => ["head"],
            ],
            [
                "no" => 35,
                "jawaban" => ["movement"],
            ],
            [
                "no" => 36,
                "jawaban" => ["balance", "balancing"],
            ],
            [
                "no" => 37,
                "jawaban" => ["brain"],
            ],
            [
                "no" => 38,
                "jawaban" => ["smell"],
            ],
            [
                "no" => 39,
                "jawaban" => ["rats"],
            ],
            [
                "no" => 40,
                "jawaban" => ["forest"],
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["D"],
            ],
            [
                "no" => 2,
                "jawaban" => ["C"],
            ],
            [
                "no" => 3,
                "jawaban" => ["E"],
            ],
            [
                "no" => 4,
                "jawaban" => ["B"],
            ],
            [
                "no" => 5,
                "jawaban" => ["D"],
            ],
            [
                "no" => 6,
                "jawaban" => ["energy"],
            ],
            [
                "no" => 7,
                "jawaban" => ["food"],
            ],
            [
                "no" => 8,
                "jawaban" => ["gardening"],
            ],
            [
                "no" => 9,
                "jawaban" => ["obesity"],
            ],
            // ini 
            [
                "no" => 10,
                "jawaban" => ["C", "D"],
            ],
            [
                "no" => 11,
                "jawaban" => ["C", "D"],
            ],
            // ini 
            [
                "no" => 12,
                "jawaban" => ["A", "D"],
            ],
            [
                "no" => 13,
                "jawaban" => ["A", "D"],
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>B</b> when ideas about the nature of intelligence began to shift"],
            ],
            [
                "no" => 15,
                "jawaban" => ["<b>C</b> have confidence in their potential to succeed."],
            ],
            [
                "no" => 16,
                "jawaban" => ["<b>D</b> are afraid to push themselves beyond what they see as their limitations."],
            ],
            [
                "no" => 17,
                "jawaban" => ["C"],
            ],
            [
                "no" => 18,
                "jawaban" => ["B"],
            ],
            [
                "no" => 19,
                "jawaban" => ["A"],
            ],
            [
                "no" => 20,
                "jawaban" => ["E"],
            ],
            [
                "no" => 21,
                "jawaban" => ["B"],
            ],
            [
                "no" => 22,
                "jawaban" => ["D"],
            ],
            [
                "no" => 23,
                "jawaban" => ["YES"],
            ],
            [
                "no" => 24,
                "jawaban" => ["NO"],
            ],
            [
                "no" => 25,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 26,
                "jawaban" => ["YES"],
            ],
            [
                "no" => 27,
                "jawaban" => ["YES"],
            ],
            [
                "no" => 28,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 29,
                "jawaban" => ["NO"],
            ],
            [
                "no" => 30,
                "jawaban" => ["NO"],
            ],
            [
                "no" => 31,
                "jawaban" => ["I"],
            ],
            [
                "no" => 32,
                "jawaban" => ["F"],
            ],
            [
                "no" => 33,
                "jawaban" => ["A"],
            ],
            [
                "no" => 34,
                "jawaban" => ["C"],
            ],
            [
                "no" => 35,
                "jawaban" => ["H"],
            ],
            [
                "no" => 36,
                "jawaban" => ["E"],
            ],
            [
                "no" => 37,
                "jawaban" => ["<b>B</b> explaining why it is desirable to read the whole book"],
            ],
            [
                "no" => 38,
                "jawaban" => ["<b>A</b> He was not a particularly ambitious person."],
            ],
            [
                "no" => 39,
                "jawaban" => ["<b>D</b> They are easier subjects to write about than Wegener."],
            ],
            [
                "no" => 40,
                "jawaban" => ["<b>C</b> People have little control over many aspects of their lives."],
            ],
        ];

        $jawaban_ielts = "";

        $benar_listening = 0;
        foreach ($jawaban_listening_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = $data_jawaban_listening;
            }

            if($i == 21){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[20], $jawaban_listening_peserta[21], 'B', 'C');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i == 23){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[22], $jawaban_listening_peserta[23], 'B', 'C');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i != 20 && $i != 22) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_listening++;
                } else {
                    $status = "Salah";
                }

                $jawaban_ielts .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }

        }

        $benar_reading = 0;
        foreach ($jawaban_reading_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = $data_jawaban_reading;
            }

            if($i == 10){
                $data_ielts = dua_nomor_tidak_boleh_sama_reading($jawaban_reading_peserta[9], $jawaban_reading_peserta[10], 'C', 'D');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_reading = $benar_reading + $data_ielts['benar_reading'];
            } else if($i == 12){
                $data_ielts = dua_nomor_tidak_boleh_sama_reading($jawaban_reading_peserta[11], $jawaban_reading_peserta[12], 'A', 'D');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_reading = $benar_reading + $data_ielts['benar_reading'];
            } else if($i != 9 && $i != 11) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_reading++;
                } else {
                    $status = "Salah";
                }
    
                $jawaban_ielts .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }
        }

        $jawaban_ielts = substr($jawaban_ielts, 0, -3);

        $data_koreksi = [
            'jawaban_ielts' =>  $jawaban_ielts,
            'benar_listening' =>  $benar_listening,
            'benar_reading' =>  $benar_reading
        ];

        return $data_koreksi;
    }

    function soal_003($jawaban_listening_peserta, $jawaban_reading_peserta){
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["collecting"],
            ],
            [
                "no" => 2,
                "jawaban" => ["records"],
            ],
            [
                "no" => 3,
                "jawaban" => ["West"],
            ],
            [
                "no" => 4,
                "jawaban" => ["transport"],
            ],
            [
                "no" => 5,
                "jawaban" => ["art"],
            ],
            [
                "no" => 6,
                "jawaban" => ["hospital"],
            ],
            [
                "no" => 7,
                "jawaban" => ["garden"],
            ],
            [
                "no" => 8,
                "jawaban" => ["quiz"],
            ],
            [
                "no" => 9,
                "jawaban" => ["tickets"],
            ],
            [
                "no" => 10,
                "jawaban" => ["poster"],
            ],
            [
                "no" => 11,
                "jawaban" => ["<b>B</b> the house."],
            ],
            [
                "no" => 12,
                "jawaban" => ["<b>C</b> a place for artists and writers."],
            ],
            [
                "no" => 13,
                "jawaban" => ["<b>C</b> people in costume."],
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>B</b> mini tractors"],
            ],
            [
                "no" => 15,
                "jawaban" => ["D"],
            ],
            [
                "no" => 16,
                "jawaban" => ["C"],
            ],
            [
                "no" => 17,
                "jawaban" => ["G"],
            ],
            [
                "no" => 18,
                "jawaban" => ["A"],
            ],
            [
                "no" => 19,
                "jawaban" => ["E"],
            ],
            [
                "no" => 20,
                "jawaban" => ["F"],
            ],
            // ini 
            [
                "no" => 21,
                "jawaban" => ["D", "E"],
            ],
            [
                "no" => 22,
                "jawaban" => ["E", "D"],
            ],
            [
                "no" => 23,
                "jawaban" => ["D"],
            ],
            [
                "no" => 24,
                "jawaban" => ["C"],
            ],
            [
                "no" => 25,
                "jawaban" => ["A"],
            ],
            [
                "no" => 26,
                "jawaban" => ["E"],
            ],
            [
                "no" => 27,
                "jawaban" => ["F"],
            ],
            [
                "no" => 28,
                "jawaban" => ["<b>A</b> it illustrates how easily conflict can start."],
            ],
            [
                "no" => 29,
                "jawaban" => ["<b>C</b> moving."],
            ],
            [
                "no" => 30,
                "jawaban" => ["<b>C</b> They can be interpreted in many ways."],
            ],
            [
                "no" => 31,
                "jawaban" => ["321,000"],
            ],
            [
                "no" => 32,
                "jawaban" => ["vocabulary"],
            ],
            [
                "no" => 33,
                "jawaban" => ["podcast"],
            ],
            [
                "no" => 34,
                "jawaban" => ["smartphones"],
            ],
            [
                "no" => 35,
                "jawaban" => ["bilingual"],
            ],
            [
                "no" => 36,
                "jawaban" => ["playground"],
            ],
            [
                "no" => 37,
                "jawaban" => ["picture"],
            ],
            [
                "no" => 38,
                "jawaban" => ["grammar"],
            ],
            [
                "no" => 39,
                "jawaban" => ["identity"],
            ],
            [
                "no" => 40,
                "jawaban" => ["fluent"],
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["G"],
            ],
            [
                "no" => 2,
                "jawaban" => ["D"],
            ],
            [
                "no" => 3,
                "jawaban" => ["C"],
            ],
            [
                "no" => 4,
                "jawaban" => ["F"],
            ],
            [
                "no" => 5,
                "jawaban" => ["architects"],
            ],
            [
                "no" => 6,
                "jawaban" => ["moisture"],
            ],
            [
                "no" => 7,
                "jawaban" => ["layers"],
            ],
            [
                "no" => 8,
                "jawaban" => ["speed"],
            ],
            [
                "no" => 9,
                "jawaban" => ["C"],
            ],
            [
                "no" => 10,
                "jawaban" => ["A"],
            ],
            [
                "no" => 11,
                "jawaban" => ["B"],
            ],
            [
                "no" => 12,
                "jawaban" => ["D"],
            ],
            [
                "no" => 13,
                "jawaban" => ["A"],
            ],
            [
                "no" => 14,
                "jawaban" => ["iii"],
            ],
            [
                "no" => 15,
                "jawaban" => ["viii"],
            ],
            [
                "no" => 16,
                "jawaban" => ["vi"],
            ],
            [
                "no" => 17,
                "jawaban" => ["v"],
            ],
            [
                "no" => 18,
                "jawaban" => ["vii"],
            ],
            [
                "no" => 19,
                "jawaban" => ["i"],
            ],
            [
                "no" => 20,
                "jawaban" => ["iv"],
            ],
            [
                "no" => 21,
                "jawaban" => ["<b>A</b> Its success was short-lived."],
            ],
            [
                "no" => 22,
                "jawaban" => ["<b>C</b> needed several attempts to achieve a competitive model."],
            ],
            [
                "no" => 23,
                "jawaban" => ["<b>B</b> raised financial capital."],
            ],
            [
                "no" => 24,
                "jawaban" => ["speed"],
            ],
            [
                "no" => 25,
                "jawaban" => ["fifty", "50"],
            ],
            [
                "no" => 26,
                "jawaban" => ["strict"],
            ],
            [
                "no" => 27,
                "jawaban" => ["<b>B</b> how a teacher handles a range of learning needs."],
            ],
            [
                "no" => 28,
                "jawaban" => ["<b>A</b> It has a very broad appeal."],
            ],
            [
                "no" => 29,
                "jawaban" => ["<b>C</b> students not achieving their full potential"],
            ],
            [
                "no" => 30,
                "jawaban" => ["<b>C</b> the assistance given to a student in their initial stages of learning"],
            ],
            [
                "no" => 31,
                "jawaban" => ["H"],
            ],
            [
                "no" => 32,
                "jawaban" => ["D"],
            ],
            [
                "no" => 33,
                "jawaban" => ["F"],
            ],
            [
                "no" => 34,
                "jawaban" => ["E"],
            ],
            [
                "no" => 35,
                "jawaban" => ["B"],
            ],
            [
                "no" => 36,
                "jawaban" => ["NO"],
            ],
            [
                "no" => 37,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 38,
                "jawaban" => ["YES"],
            ],
            [
                "no" => 39,
                "jawaban" => ["NO"],
            ],
            [
                "no" => 40,
                "jawaban" => ["NOT GIVEN"],
            ],
        ];
        

        $jawaban_ielts = "";

        $benar_listening = 0;
        foreach ($jawaban_listening_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = $data_jawaban_listening;
            }

            if($i == 21){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[20], $jawaban_listening_peserta[21], 'D', 'E');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i != 20) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_listening++;
                } else {
                    $status = "Salah";
                }

                $jawaban_ielts .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }

        }

        $benar_reading = 0;
        foreach ($jawaban_reading_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = $data_jawaban_reading;
            }

            if (in_array(trim($jawaban), $data_jawaban)){
                $status = "Benar";
                $benar_reading++;
            } else {
                $status = "Salah";
            }

            $jawaban_ielts .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
        }

        $jawaban_ielts = substr($jawaban_ielts, 0, -3);

        $data_koreksi = [
            'jawaban_ielts' =>  $jawaban_ielts,
            'benar_listening' =>  $benar_listening,
            'benar_reading' =>  $benar_reading
        ];

        return $data_koreksi;
    }

    function soal_004($jawaban_listening_peserta, $jawaban_reading_peserta){
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["family"],
            ],
            [
                "no" => 2,
                "jawaban" => ["fit"],
            ],
            [
                "no" => 3,
                "jawaban" => ["hotels"],
            ],
            [
                "no" => 4,
                "jawaban" => ["Carrowniskey"],
            ],
            [
                "no" => 5,
                "jawaban" => ["week"],
            ],
            [
                "no" => 6,
                "jawaban" => ["bay"],
            ],
            [
                "no" => 7,
                "jawaban" => ["September"],
            ],
            [
                "no" => 8,
                "jawaban" => ["19", "nineteen"],
            ],
            [
                "no" => 9,
                "jawaban" => ["30", "thirty"],
            ],
            [
                "no" => 10,
                "jawaban" => ["boots"],
            ],
            // ini 
            [
                "no" => 11,
                "jawaban" => ["B", "E"],
            ],
            [
                "no" => 12,
                "jawaban" => ["E", "B"],
            ],
            [
                "no" => 13,
                "jawaban" => ["<b>C</b> £7.20"],
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>C</b> Children are given a proper meal at 5 p.m."],
            ],
            [
                "no" => 15,
                "jawaban" => ["<b>A</b> Children from other schools can attend."],
            ],
            [
                "no" => 16,
                "jawaban" => ["E"],
            ],
            [
                "no" => 17,
                "jawaban" => ["D"],
            ],
            [
                "no" => 18,
                "jawaban" => ["G"],
            ],
            [
                "no" => 19,
                "jawaban" => ["F"],
            ],
            [
                "no" => 20,
                "jawaban" => ["C"],
            ],
            [
                "no" => 21,
                "jawaban" => ["<b>B</b> it is outdoors."],
            ],
            [
                "no" => 22,
                "jawaban" => ["<b>A</b> ensuring children stay in the stadium"],
            ],
            [
                "no" => 23,
                "jawaban" => ["<b>A</b> They can be hard to manage."],
            ],
            [
                "no" => 24,
                "jawaban" => ["<b>B</b> an injury"],
            ],
            [
                "no" => 25,
                "jawaban" => ["C"],
            ],
            [
                "no" => 26,
                "jawaban" => ["A"],
            ],
            [
                "no" => 27,
                "jawaban" => ["D"],
            ],
            [
                "no" => 28,
                "jawaban" => ["B"],
            ],
            [
                "no" => 29,
                "jawaban" => ["F"],
            ],
            [
                "no" => 30,
                "jawaban" => ["H"],
            ],
            [
                "no" => 31,
                "jawaban" => ["mud"],
            ],
            [
                "no" => 32,
                "jawaban" => ["feathers"],
            ],
            [
                "no" => 33,
                "jawaban" => ["shape"],
            ],
            [
                "no" => 34,
                "jawaban" => ["moon"],
            ],
            [
                "no" => 35,
                "jawaban" => ["neck"],
            ],
            [
                "no" => 36,
                "jawaban" => ["evidence"],
            ],
            [
                "no" => 37,
                "jawaban" => ["destinations"],
            ],
            [
                "no" => 38,
                "jawaban" => ["oceans"],
            ],
            [
                "no" => 39,
                "jawaban" => ["recovery"],
            ],
            [
                "no" => 40,
                "jawaban" => ["atlas"],
            ],
        ];
        

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["deer antlers"],
            ],
            [
                "no" => 2,
                "jawaban" => ["timber posts"],
            ],
            [
                "no" => 3,
                "jawaban" => ["tree trunks"],
            ],
            [
                "no" => 4,
                "jawaban" => ["oxen"],
            ],
            [
                "no" => 5,
                "jawaban" => ["glaciers"],
            ],
            [
                "no" => 6,
                "jawaban" => ["druids"],
            ],
            [
                "no" => 7,
                "jawaban" => ["burial"],
            ],
            [
                "no" => 8,
                "jawaban" => ["calendar"],
            ],
            [
                "no" => 9,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 10,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 11,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 12,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 13,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>C</b> The future is unlikely to see limitations on the capabilities of AI."],
            ],
            [
                "no" => 15,
                "jawaban" => ["<b>A</b> explaining why machines will be able to outperform humans"],
            ],
            [
                "no" => 16,
                "jawaban" => ["<b>B</b> to illustrate that poorly defined objectives can go wrong"],
            ],
            [
                "no" => 17,
                "jawaban" => ["<b>D</b> ensuring AI is more human-friendly than we are ourselves"],
            ],
            [
                "no" => 18,
                "jawaban" => ["<b>C</b> Machines will be superior to humans in certain respects."],
            ],
            [
                "no" => 19,
                "jawaban" => ["<b>D</b> Human shortcomings will make creating the machines we need more difficult."],
            ],
            [
                "no" => 20,
                "jawaban" => ["YES"],
            ],
            [
                "no" => 21,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 22,
                "jawaban" => ["NO"],
            ],
            [
                "no" => 23,
                "jawaban" => ["YES"],
            ],
            [
                "no" => 24,
                "jawaban" => ["C"],
            ],
            [
                "no" => 25,
                "jawaban" => ["A"],
            ],
            [
                "no" => 26,
                "jawaban" => ["E"],
            ],
            [
                "no" => 27,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 28,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 29,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 30,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 31,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 32,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 33,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 34,
                "jawaban" => ["transport"],
            ],
            [
                "no" => 35,
                "jawaban" => ["staircases"],
            ],
            [
                "no" => 36,
                "jawaban" => ["engineering"],
            ],
            [
                "no" => 37,
                "jawaban" => ["rule"],
            ],
            [
                "no" => 38,
                "jawaban" => ["Roman"],
            ],
            [
                "no" => 39,
                "jawaban" => ["Paris"],
            ],
            [
                "no" => 40,
                "jawaban" => ["outwards"],
            ],
        ];
        

        $jawaban_ielts = "";

        $benar_listening = 0;
        foreach ($jawaban_listening_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = $data_jawaban_listening;
            }

            if($i == 11){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[10], $jawaban_listening_peserta[11], 'B', 'E');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i != 10) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_listening++;
                } else {
                    $status = "Salah";
                }

                $jawaban_ielts .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }

        }

        $benar_reading = 0;
        foreach ($jawaban_reading_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = $data_jawaban_reading;
            }

            if (in_array(trim($jawaban), $data_jawaban)){
                $status = "Benar";
                $benar_reading++;
            } else {
                $status = "Salah";
            }

            $jawaban_ielts .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
        }

        $jawaban_ielts = substr($jawaban_ielts, 0, -3);

        $data_koreksi = [
            'jawaban_ielts' =>  $jawaban_ielts,
            'benar_listening' =>  $benar_listening,
            'benar_reading' =>  $benar_reading
        ];

        return $data_koreksi;
    }

    function soal_005($jawaban_listening_peserta, $jawaban_reading_peserta){
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["park"],
            ],
            [
                "no" => 2,
                "jawaban" => ["blue"],
            ],
            [
                "no" => 3,
                "jawaban" => ["reference"],
            ],
            [
                "no" => 4,
                "jawaban" => ["story"],
            ],
            [
                "no" => 5,
                "jawaban" => ["rain"],
            ],
            [
                "no" => 6,
                "jawaban" => ["snack"],
            ],
            [
                "no" => 7,
                "jawaban" => ["medication"],
            ],
            [
                "no" => 8,
                "jawaban" => ["helmet"],
            ],
            [
                "no" => 9,
                "jawaban" => ["tent"],
            ],
            [
                "no" => 10,
                "jawaban" => ["199"],
            ],
            // ini 
            [
                "no" => 11,
                "jawaban" => ["A", "C"],
            ],
            [
                "no" => 12,
                "jawaban" => ["C", "A"],
            ],
            // ini 
            [
                "no" => 13,
                "jawaban" => ["B", "C"],
            ],
            [
                "no" => 14,
                "jawaban" => ["C", "B"],
            ],
            [
                "no" => 15,
                "jawaban" => ["D"],
            ],
            [
                "no" => 16,
                "jawaban" => ["F"],
            ],
            [
                "no" => 17,
                "jawaban" => ["A"],
            ],
            [
                "no" => 18,
                "jawaban" => ["H"],
            ],
            [
                "no" => 19,
                "jawaban" => ["C"],
            ],
            [
                "no" => 20,
                "jawaban" => ["G"],
            ],
            // ini 
            [
                "no" => 21,
                "jawaban" => ["C", "D"],
            ],
            [
                "no" => 22,
                "jawaban" => ["D", "C"],
            ],
            // ini 
            [
                "no" => 23,
                "jawaban" => ["C", "E"],
            ],
            [
                "no" => 24,
                "jawaban" => ["E", "C"],
            ],
            [
                "no" => 25,
                "jawaban" => ["<b>C</b> were organised in a particular way."],
            ],
            [
                "no" => 26,
                "jawaban" => ["<b>A</b> make calorie counts hard to understand."],
            ],
            [
                "no" => 27,
                "jawaban" => ["<b>B</b> Most people overestimate how much they do."],
            ],
            [
                "no" => 28,
                "jawaban" => ["<b>A</b> practical changes that can influence people’s behaviour."],
            ],
            [
                "no" => 29,
                "jawaban" => ["<b>A</b> They should probably leave it out."],
            ],
            [
                "no" => 30,
                "jawaban" => ["<b>C</b> decide on its content and organisation"],
            ],
            [
                "no" => 31,
                "jawaban" => ["grandmother"],
            ],
            [
                "no" => 32,
                "jawaban" => ["decade"],
            ],
            [
                "no" => 33,
                "jawaban" => ["equipment"],
            ],
            [
                "no" => 34,
                "jawaban" => ["economic"],
            ],
            [
                "no" => 35,
                "jawaban" => ["basic"],
            ],
            [
                "no" => 36,
                "jawaban" => ["round"],
            ],
            [
                "no" => 37,
                "jawaban" => ["bone"],
            ],
            [
                "no" => 38,
                "jawaban" => ["rough"],
            ],
            [
                "no" => 39,
                "jawaban" => ["style"],
            ],
            [
                "no" => 40,
                "jawaban" => ["sheep"],
            ],
        ];
        
        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["lettuces"],
            ],
            [
                "no" => 2,
                "jawaban" => ["1000kg", "1000 kilograms"],
            ],
            [
                "no" => 3,
                "jawaban" => ["food consumption"],
            ],
            [
                "no" => 4,
                "jawaban" => ["pesticides"],
            ],
            [
                "no" => 5,
                "jawaban" => ["journeys"],
            ],
            [
                "no" => 6,
                "jawaban" => ["producers"],
            ],
            [
                "no" => 7,
                "jawaban" => ["flavour", "flavor"],
            ],
            [
                "no" => 8,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 9,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 10,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 11,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 12,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 13,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 14,
                "jawaban" => ["B"],
            ],
            [
                "no" => 15,
                "jawaban" => ["A"],
            ],
            [
                "no" => 16,
                "jawaban" => ["C"],
            ],
            [
                "no" => 17,
                "jawaban" => ["E"],
            ],
            [
                "no" => 18,
                "jawaban" => ["B"],
            ],
            [
                "no" => 19,
                "jawaban" => ["B"],
            ],
            [
                "no" => 20,
                "jawaban" => ["C"],
            ],
            [
                "no" => 21,
                "jawaban" => ["C"],
            ],
            [
                "no" => 22,
                "jawaban" => ["fire"],
            ],
            [
                "no" => 23,
                "jawaban" => ["nutrients"],
            ],
            [
                "no" => 24,
                "jawaban" => ["cavities"],
            ],
            [
                "no" => 25,
                "jawaban" => ["hawthorn"],
            ],
            [
                "no" => 26,
                "jawaban" => ["rare"],
            ],
            [
                "no" => 27,
                "jawaban" => ["C"],
            ],
            [
                "no" => 28,
                "jawaban" => ["F"],
            ],
            [
                "no" => 29,
                "jawaban" => ["A"],
            ],
            [
                "no" => 30,
                "jawaban" => ["E"],
            ],
            [
                "no" => 31,
                "jawaban" => ["B"],
            ],
            [
                "no" => 32,
                "jawaban" => ["sustainability"],
            ],
            [
                "no" => 33,
                "jawaban" => ["fuel"],
            ],
            [
                "no" => 34,
                "jawaban" => ["explosions"],
            ],
            [
                "no" => 35,
                "jawaban" => ["bankrupt"],
            ],
            // tambahan
            [
                "no" => 36,
                "jawaban" => ["C"],
            ],
            [
                "no" => 37,
                "jawaban" => ["D"],
            ],
            [
                "no" => 38,
                "jawaban" => ["B"],
            ],
            [
                "no" => 39,
                "jawaban" => ["D"],
            ],
            [
                "no" => 40,
                "jawaban" => ["A"],
            ],
        ];
        
        $jawaban_ielts = "";

        $benar_listening = 0;
        foreach ($jawaban_listening_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = $data_jawaban_listening;
            }

            if($i == 11){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[10], $jawaban_listening_peserta[11], 'A', 'C');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i == 13){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[12], $jawaban_listening_peserta[13], 'B', 'C');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i == 21){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[20], $jawaban_listening_peserta[21], 'C', 'D');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i == 23){
                $data_ielts = dua_nomor_tidak_boleh_sama_listening($jawaban_listening_peserta[21], $jawaban_listening_peserta[22], 'C', 'E');

                $jawaban_ielts .= $data_ielts['jawaban_ielts'];
                $benar_listening = $benar_listening + $data_ielts['benar_listening'];
            } else if($i != 10 && $i != 12 && $i != 20 && $i != 22) {
                if (in_array(trim($jawaban), $data_jawaban)){
                    $status = "Benar";
                    $benar_listening++;
                } else {
                    $status = "Salah";
                }

                $jawaban_ielts .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }

        }

        $benar_reading = 0;
        foreach ($jawaban_reading_peserta as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = $data_jawaban_reading;
            }

            if (in_array(trim($jawaban), $data_jawaban)){
                $status = "Benar";
                $benar_reading++;
            } else {
                $status = "Salah";
            }

            $jawaban_ielts .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
        }

        $jawaban_ielts = substr($jawaban_ielts, 0, -3);

        $data_koreksi = [
            'jawaban_ielts' =>  $jawaban_ielts,
            'benar_listening' =>  $benar_listening,
            'benar_reading' =>  $benar_reading
        ];

        return $data_koreksi;
    }

    function dua_nomor_tidak_boleh_sama_listening($jawaban_no_awal, $jawaban_no_akhir, $kunci_no_awal, $kunci_no_akhir){
        $benar_listening = 0;
        if($jawaban_no_awal == $kunci_no_awal && $jawaban_no_akhir == $kunci_no_akhir){
            $jawaban_ielts = 'Listening&&&' . $jawaban_no_awal . '&&&Benar|||Listening&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_listening = $benar_listening + 2;
        } else if($jawaban_no_awal == $kunci_no_akhir && $jawaban_no_akhir == $kunci_no_awal){
            $jawaban_ielts = 'Listening&&&' . $jawaban_no_awal . '&&&Benar|||Listening&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_listening = $benar_listening + 2;
        } else if($jawaban_no_awal == $kunci_no_akhir){
            $jawaban_ielts = 'Listening&&&' . $jawaban_no_awal . '&&&Benar|||Listening&&&'.trim(str_replace('"', "&quot;", $jawaban_no_akhir)).'&&&Salah|||';
            $benar_listening++;
        } else if($jawaban_no_awal == $kunci_no_awal){
            $jawaban_ielts = 'Listening&&&' . $jawaban_no_awal . '&&&Benar|||Listening&&&'.trim(str_replace('"', "&quot;", $jawaban_no_akhir)).'&&&Salah|||';
            $benar_listening++;
        } else if($jawaban_no_akhir == $kunci_no_akhir){
            $jawaban_ielts = 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban_no_awal)).'&&&Salah|||Listening&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_listening++;
        } else if($jawaban_no_akhir == $kunci_no_awal){
            $jawaban_ielts = 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban_no_awal)).'&&&Salah|||Listening&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_listening++;
        } else {
            $jawaban_ielts = 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban_no_awal)).'&&&Salah|||Listening&&&'.trim(str_replace('"', "&quot;", $jawaban_no_akhir)).'&&&Salah|||';
        }

        $data = [
            "jawaban_ielts" => $jawaban_ielts,
            "benar_listening" => $benar_listening
        ];

        return $data;
    }

    function dua_nomor_tidak_boleh_sama_reading($jawaban_no_awal, $jawaban_no_akhir, $kunci_no_awal, $kunci_no_akhir){
        $benar_reading = 0;
        if($jawaban_no_awal == $kunci_no_awal && $jawaban_no_akhir == $kunci_no_akhir){
            $jawaban_ielts = 'Reading&&&' . $jawaban_no_awal . '&&&Benar|||Reading&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_reading = $benar_reading + 2;
        } else if($jawaban_no_awal == $kunci_no_akhir && $jawaban_no_akhir == $kunci_no_awal){
            $jawaban_ielts = 'Reading&&&' . $jawaban_no_awal . '&&&Benar|||Reading&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_reading = $benar_reading + 2;
        } else if($jawaban_no_awal == $kunci_no_akhir){
            $jawaban_ielts = 'Reading&&&' . $jawaban_no_awal . '&&&Benar|||Reading&&&'.trim(str_replace('"', "&quot;", $jawaban_no_akhir)).'&&&Salah|||';
            $benar_reading++;
        } else if($jawaban_no_awal == $kunci_no_awal){
            $jawaban_ielts = 'Reading&&&' . $jawaban_no_awal . '&&&Benar|||Reading&&&'.trim(str_replace('"', "&quot;", $jawaban_no_akhir)).'&&&Salah|||';
            $benar_reading++;
        } else if($jawaban_no_akhir == $kunci_no_akhir){
            $jawaban_ielts = 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban_no_awal)).'&&&Salah|||Reading&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_reading++;
        } else if($jawaban_no_akhir == $kunci_no_awal){
            $jawaban_ielts = 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban_no_awal)).'&&&Salah|||Reading&&&' . $jawaban_no_akhir . '&&&Benar|||';
            $benar_reading++;
        } else {
            $jawaban_ielts = 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban_no_awal)).'&&&Salah|||Reading&&&'.trim(str_replace('"', "&quot;", $jawaban_no_akhir)).'&&&Salah|||';
        }

        $data = [
            "jawaban_ielts" => $jawaban_ielts,
            "benar_reading" => $benar_reading
        ];

        return $data;
    }

?>