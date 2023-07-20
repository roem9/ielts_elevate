<?= $this->extend('pages/soal/layout/soal_layout') ?>

<?= $this->section('sesi-listening') ?>
<?php $i = 0;?>
    <div class="shadow card mb-3">
        <div class="card-body">
            <center>
            <audio id="audio-1" class="audio" data-id="1"><source src="<?= base_url('public/assets/myaudio/soal-003.mp3?t='.time())?>" type="audio/mpeg"></audio>
                <progress id="seekbar-1" value="0" max="1" style="width:100%;"></progress><br>
                <button class="btn btn-success btnAudio" data-id="1" type="button"> play</button>
                <p><small class="text-danger"><i>note : The audio can only be played once</i></small></p>
            </center>
        </div>
    </div>

    <div class="shadow card mb-3 soal">
        <div class="card-body ps-4">
            <center><b>IELTS LISTENING</b></center>
            <p class="question">
                <b>Questions 1 - 7</b><br>
                <i>Complete the notes below.</i><br>
                <i>Write <b>ONE WORD ONLY</b> for each answer.</i>
            </p>
            <table class="tableSoal w-100 mb-3">
                <tr>
                    <td class="p-3">
                        <center><h6>Opportunities for voluntary work in Southoe village</h6></center>
                        <p><b>Library</b></p>
                        <ul>
                            <li>Help with <b>1)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> books (times to be arranged)</li>
                            <li>Help needed to keep <b>2)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> of books up to date</li>
                            <li>Library is in the <b>3)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> Room in the village hall</li>
                        </ul>
                        <p><b>Lunch club</b></p>
                        <ul>
                            <li>Help by providing <b>4)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                            <li>Help with hobbies such as <b>5)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                        </ul>
                        <p><b>Help for individuals needed next week</b></p>
                        <ul>
                            <li>Taking Mrs Carroll to <b>6)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                            <li>Work in the <b>7)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> at Mr Selsbury's house</li>
                        </ul>
                    </td>
                </tr>
            </table>

            <p class="question">
                <b>Questions 8-10</b><br>
                <i>Complete the table below.</i><br>
                <i>Write <b>ONE WORD ONLY</b> for each answer.</i>
            </p>
            <table class="tableSoal w-100 p-3">
                <tr>
                    <th class="ps-3 pe-3" colspan=4><center><h6>Village social events</h6></center></th>
                </tr>
                <tr>
                    <th class="ps-3 pe-3">Date</th>
                    <th class="ps-3 pe-3">Event</th>
                    <th class="ps-3 pe-3">Location</th>
                    <th class="ps-3 pe-3">Help Needed</th>
                </tr>
                <tr>
                    <td class="ps-3 pe-3">19 Oct</td>
                    <td class="ps-3 pe-3"><b>8)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></td>
                    <td class="ps-3 pe-3">Village hall</td>
                    <td class="ps-3 pe-3">providing refreshments</td>
                </tr>
                <tr>
                    <td class="ps-3 pe-3">18 Nov</td>
                    <td class="ps-3 pe-3">dance</td>
                    <td class="ps-3 pe-3">Village hall</td>
                    <td class="ps-3 pe-3">checking <b>9)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></td>
                </tr>
                <tr>
                    <td class="ps-3 pe-3">31 Dec</td>
                    <td class="ps-3 pe-3">New Year's Eve party</td>
                    <td class="ps-3 pe-3">Mountfort Hotel</td>
                    <td class="ps-3 pe-3">designing the <b>10)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></td>
                </tr>
            </table>

        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <p class="question">
                <b>PART 2</b><br>
                <b>Questions 11-14</b><br>
                <i>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b></i>
            </p>
            <div class="">
                <center><h6><b>Oniton Hall</b></h6></center>
                <?php
                    $data_soal_11_14  = [
                        [
                            "no" => 11,
                            "soal" => "Many past owners made changes to",
                            "pilihan" => [
                                "<b>A</b> the gardens.",
                                "<b>B</b> the house.",
                                "<b>C</b> the farm."
                            ],
                            "name" => "jawaban_listening[10]"
                        ],
                        [
                            "no" => 12,
                            "soal" => "Sir Edward Downes built Oniton Hall because he wanted",
                            "pilihan" => [
                                "<b>A</b> a place for discussing politics.",
                                "<b>B</b> a place to display his wealth.",
                                "<b>C</b> a place for artists and writers."
                            ],
                            "name" => "jawaban_listening[11]"
                        ],
                        [
                            "no" => 13,
                            "soal" => "Visitors can learn about the work of servants in the past from",
                            "pilihan" => [
                                "<b>A</b> audio guides.",
                                "<b>B</b> photographs.",
                                "<b>C</b> people in costume."
                            ],
                            "name" => "jawaban_listening[12]"
                        ],
                        [
                            "no" => 14,
                            "soal" => "What is new for children at Onion Hall?",
                            "pilihan" => [
                                "<b>A</b> clothes for dressing up",
                                "<b>B</b> mini tractors",
                                "<b>C</b> the adventure playground"
                            ],
                            "name" => "jawaban_listening[13]"
                        ],
                    ];
                    ?>

                <?php foreach ($data_soal_11_14 as $data_soal) :?>
                    <?= soal_pg_ielts($data_soal)?>
                <?php endforeach;?>
                <?php $i = $i + COUNT($data_soal_11_14)?>

                <p class="question">
                    <i><b>Questions 15-20</b></i><br>
                    <i>Which activity is offered at each of the following locations on the farm?</i><br>
                    <i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to Questions 15-20.</i>
                </p>
                <table class="tableSoal w-100 mb-3">
                    <tr>
                        <td class="p-3">
                            <p>
                                <b>Activities</b><br>
                                <b>A</b> shopping<br>
                                <b>B</b> watching cows being milked<br>
                                <b>C</b> seeing old farming equipment<br>
                                <b>D</b> eating and drinking<br>
                                <b>E</b> starting a trip<br>
                                <b>F</b> seeing rare breeds of animals<br>
                                <b>G</b> helping to look after animals<br>
                                <b>H</b> using farming tools
                            </p>
                        </td>
                    </tr>
                </table>
                <?php $choice = ["A", "B", "C", "D", "E", "F", "G", "H"];?>

                <p><b>Locations on the farm</b></p>
                <p><b>15</b> dairy <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "120"); $i++?></p>
                <p><b>16</b> large barn <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "120"); $i++?></p>
                <p><b>17</b> small barn <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "120"); $i++?></p>
                <p><b>18</b> stables <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "120"); $i++?></p>
                <p><b>19</b> shed <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "120"); $i++?></p>
                <p><b>20</b> parkland <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "120"); $i++?></p>
            </div>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <div class="row">
                <p class="question">
                    <b>PART 3</b><br>
                    <i><b>Questions 21 and 22</b></i><br>
                    <i>Choose <b>TWO</b> letters, <b>A-E.</b></i>
                </p>
                <p>
                    Which <b>TWO</b> things do the students agree they need to include in their review of Romeo and Juliet?<br>
                    <b>A</b> analysis of the text<br>
                    <b>B</b> a summary of the plot<br>
                    <b>C</b> a description of the theatre<br>
                    <b>D</b> a personal reaction<br>
                    <b>E</b> a reference to particular scenes
                </p>
                <?php $choice = ["A", "B", "C", "D", "E"]; ?>
                <p><b>21</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>
                <p><b>22</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>

                <p class="question">
                    <i><b>Questions 23-27</b></i><br>
                    <i>Which opinion do the speakers give about each of the following aspects of The Emporium’s production of Romeo and Juliet?</i><br>
                    <i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions 23-27</i>
                </p>
                <table class="tableSoal w-100 mb-3">
                    <tr>
                        <td class="p-3">
                            <p>
                                <b>Opinions</b><br>
                                <b>A</b> They both expected this to be more traditional.<br>
                                <b>B</b> They both thought this was original.<br>
                                <b>C</b> They agree this created the right atmosphere.<br>
                                <b>D</b> They agree this was a major strength.<br>
                                <b>E</b> They were both disappointed by this.<br>
                                <b>F</b> They disagree about why this was an issue.<br>
                                <b>G</b> They disagree about how this could be improved.<br>
                            </p>
                        </td>
                    </tr>
                </table>
                <?php $choice = ["A", "B", "C", "D", "E", "F", "G"]; ?>
                <p><b>Aspects of the production</b></p>
                <p><b>23</b> The set <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>
                <p><b>24</b> The lighting <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>
                <p><b>25</b> The costume design <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>
                <p><b>26</b> The music <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>
                <p><b>27</b> The actors' delivery <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++?></p>

                <p class="question">
                    <b>Questions 28-30</b><br>
                    <i>Choose the correct letter, <b>A</b>, <b>B</b>, or <b>C</b></i>
                </p>
                <div class="">
                    <?php
                    $data_soal_28_30 = [
                        [
                            "no" => 28,
                            "soal" => "The students think the story of Romeo and Juliet is still relevant for young people today because",
                            "pilihan" => [
                                "<b>A</b> it illustrates how easily conflict can start.",
                                "<b>B</b> it deals with problems that families experience.",
                                "<b>C</b> it teaches them about relationships."
                            ],
                            "name" => "jawaban_listening[27]"
                        ],
                        [
                            "no" => 29,
                            "soal" => "The students found watching Romeo and Juliet in another language",
                            "pilihan" => [
                                "<b>A</b> frustrating.",
                                "<b>B</b> demanding.",
                                "<b>C</b> moving."
                            ],
                            "name" => "jawaban_listening[28]"
                        ],
                        [
                            "no" => 30,
                            "soal" => "Why do the students think Shakespeare’s plays have such international appeal?",
                            "pilihan" => [
                                "<b>A</b> The stories are exciting.",
                                "<b>B</b> There are recognisable characters.",
                                "<b>C</b> They can be interpreted in many ways."
                            ],
                            "name" => "jawaban_listening[29]"
                        ],
                    ];
                    ?>
                    <?php foreach ($data_soal_28_30 as $data_soal) : ?>
                        <?= soal_pg_ielts($data_soal) ?>
                    <?php endforeach; ?>
                    <?php $i = $i + COUNT($data_soal_28_30)?>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <p class="question">
                <b>PART 4</b>
            </p>
            <p class="question">
                <b>Questions 31-40</b><br>
                <i>Complete the notes below.</i><br>
                <i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i>
            </p>
            <table class="tableSoal w-100 mb-3">
                <tr>
                    <td class="p-3">
                        <p><b><center>The impact of digital technology on the Icelandic language</center></b></p>
                        <p><b>The Icelandic language</b></p>
                        <ul>
                            <li>has approximately <b>31</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> speakers</li>
                            <li>has a <b>32</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> that is still growing</li>
                            <li>has not changed a lot over the last thousand years</li>
                            <li>has its own words for computer-based concepts, such as web browser and <b>33</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                        </ul>
                        <p><b>Young speakers</b></p>
                        <ul>
                            <li>are big users of digital technology, such as <b>34</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                            <li>are becoming <b>35</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> very quickly</li>
                            <li>are having discussions using only English while they are in the <b>36</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> at school</li>
                            <li>are better able to identify the content of a <b>37</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> in English than Icelandic</li>
                        </ul>
                        <p><b>Technology and internet companies</b></p>
                        <ul>
                            <li>write very little in Icelandic because of the small number of speakers and because of how complicated its <b>38</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> is</li>
                        </ul>
                        <p><b>The Icelandic government</b></p>
                        <ul>
                            <li>has set up a fund to support the production of more digital content in the language</li>
                            <li>believes that Icelandic has a secure future</li>
                            <li>is worried that young Icelanders may lose their <b>39</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> as Icelanders</li>
                            <li>is worried about the consequences of children not being <b>40</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> in either Icelandic or English</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('sesi-reading')?>
    <?php $i = 0 ;?>
    <?php
        $text = "
            <p class=\"question\">
                <b>READING PASSAGE 1</b><br>
                You should spend about 20 minutes on <b>Questions 1-13</b> which are based on Reading Passage 1 below.
            </p>

            <h6><center><b>Materials to take us beyond concrete</b></center></h6>
            <p><i><center>Concrete is everywhere, but it’s bad for the planet, generating large amounts of carbon dioxide – alternatives are being developed</center></i></p>
            <div class=\"reading-1\">
                ((p1))
                    ((b1))A((/b1))((br1))
                    Concrete is the second most used substance in the global economy, after water – and one of the world’s biggest single sources of greenhouse gas emissions. The chemical process by which cement, the key ingredient of concrete, is created results in large quantities of carbon dioxide. The UN estimates that there will be 9.8 billion people living on the planet by mid-century. They will need somewhere to live. If concrete is the only answer to the construction of new cities, then carbon emissions will soar, aggravating global warming. And so scientists have started innovating with other materials, in a scramble for alternatives to a universal commodity that has underpinned our modem life for many years.
                ((/p1))

                ((p2))
                    ((b))B((/b))((br2))
                    The problem with replacing concrete is that it is so very good at what it does. Chris Cheeseman, an engineering professor at Imperial College London, says the key thing to consider is the extent to which concrete is used around the world, and is likely to continue to be used. ‘Concrete is not a high-carbon product. Cement is high carbon, but concrete is not. But it is the scale on which it is used that makes it high carbon. The sheer scale of manufacture is so huge, that is the issue.’
                ((/p2))

                ((p3))
                    ((b3))C((/b3))((br3))
                    Not only are the ingredients of concrete relatively cheap and found in abundance in most places around the globe, the stuff itself has marvellous properties: Portland cement, the vital component of concrete, is mouldable and pourable, but quickly sets hard. Cheeseman also notes another advantage: concrete and steel have similar thermal expansion properties, so steel can be used to reinforce concrete, making it far stronger and more flexible as a building material than it could be on its own. According to Cheeseman, all these factors together make concrete hard to beat. ‘Concrete is amazing stuff. Making anything with similar properties is going to be very difficult.’
                ((/p3))

                ((p4))
                    ((b4))D((/b4))((br4))
                    A possible alternative to concrete is wood. Making buildings from wood may seem like a rather medieval idea, but climate change is driving architects to turn to treated timber as a possible resource. Recent years have seen the emergence of tall buildings constructed almost entirely from timber. Vancouver, Vienna and Brumunddal in Norway are all home to constructed tall, wooden buildings.
                ((/p4))

                ((p5))
                    ((b5))E((/b5))((br5))
                    Using wood to construct buildings, however, is not straightforward. Wood expands as it absorbs moisture from the air and is susceptible to pests, not to mention fire. But treating wood and combining it with other materials can improve its properties. Cross-laminated timber is engineered wood. An adhesive is used to stick layers of solid-sawn timber together, crosswise, to form building blocks. This material is light but has the strength of concrete and steel. Construction experts say that wooden buildings can be constructed at a greater speed than ones of concrete and steel and the process, it seems, is quieter.
                ((/p5))

                ((p6))
                    ((b6))F((/b6))((br6))
                    Stora Enso is Europe’s biggest supplier of cross-laminated timber, and its vice-president Markus Mannstrom reports that the company is seeing increasing demand globally for building in wood, with climate change concerns the key driver. Finland, with its large forests, where Stora Enso is based, has been leading the way, but the company is seeing a rise in demand for its timber products across the world, including in Asia. Of course, using timber in a building also locks away the carbon that it absorbed as it grew. But even treated wood has its limitations and only when a wider range of construction projects has been proven in practice will it be possible to see wood as a real alternative to concrete in constructing tall buildings.
                ((/p6))

                ((p7))
                    ((b7))G((/b7))((br7))
                    Fly ash and slag from iron ore are possible alternatives to cement in a concrete mix. Fly ash, a byproduct of coal-burning power plants, can be incorporated into concrete mixes to make up as much as 15 to 30% of the cement, without harming the strength or durability of the resulting mix. Iron-ore slag, a byproduct of the iron-ore smelting process, can be used in a similar way. Their incorporation into concrete mixes has the potential to reduce greenhouse gas emissions.((br8))
                    But Anna Surgenor, of the UK’s Green Building Council, notes that although these waste products can save carbon in the concrete mix, their use is not always straightforward. ‘It’s possible to replace the cement content in concrete with waste products to lower the overall carbon impact. But there are several calculations that need to be considered across the entire life cycle of the building- these include factoring in where these materials are being shipped from. If they are transported over long distances, using fossil fuels, the use of alternative materials might not make sense from an overall carbon reduction perspective.’
                ((p7))
                
                ((p8))
                    ((b8))H((/b8))((br9))
                    While these technologies are all promising ideas, they are either unproven or based on materials that are not abundant. In their overview of innovation in the concrete industry, Felix Preston and Johanna Lehne of the UK’s Royal Institute of International Affairs reached the conclusion that, ‘Some novel cements have been discussed for more than a decade within the research community, without breaking through. At present, these alternatives are rarely as cost-effective as conventional cement, and they face raw-material shortages and resistance from customers.’
                ((/p8))
            </div>
        ";
    ?>
    
    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <div class="row">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                            <?= $text?>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                            <p class="question">
                                <b><i>Questions 1-4</i></b><br>
                                <i>Reading Passage 1 has eight sections, <b>A-H</b>.</i><br>
                                <i>Which section contains the following information?</i><br>
                                <i>Write the correct letter, <b>A-H</b>, in boxes 1-4 on your answer sheet.</i>
                            </p>

                            <?php $choice = ["A", "B", "C", "D", "F", "G", "H"];?>

                            <b>1</b> an explanation of the industrial processes that create potential raw materials for concrete <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <b>2</b> a reference to the various locations where high-rise wooden buildings can be found <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <b>3</b> an indication of how widely available the raw materials of concrete are <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <b>4</b> the belief that more high-rise wooden buildings are needed before wood can be regarded as a viable construction material <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>

                            <p class="question">
                                <b><i>Questions 5-8</i></b><br>
                                <i>Complete the summary below.</i><br>
                                <i>Choose <b>ONE WORD ONLY</b> from the passage for each answer.</i><br>
                                <i>Write your answers in boxes 5-8 on your answer sheet.</i>
                            </p>

                            <h6><center>Making buildings with wood</center></h6>
                            <p>
                                Wood is a traditional building material, but current environmental concerns are encouraging <?php echo "<b>" . $i + 1 . ")</b>" . soal_isian_ielts("jawaban_reading[$i]"); $i++?> to use wood in modern construction projects. Using wood, however, has its challenges. For example, as <?php echo "<b>" . $i + 1 . ")</b>" . soal_isian_ielts("jawaban_reading[$i]"); $i++?> in the atmosphere enters wood, it increases in size. In addition, wood is prone to pests and the risk of fire is greater. However, wood can be turned into a better construction material if it is treated and combined with other materials. In one process, <?php echo "<b>" . $i + 1 . ")</b>" . soal_isian_ielts("jawaban_reading[$i]"); $i++?> of solid wood are glued together to create building blocks. These blocks are lighter than concrete and steel but equal them in strength. Experts say that wooden buildings are an improvement on those made of concrete and steel in terms of the <?php echo "<b>" . $i + 1 . ")</b>" . soal_isian_ielts("jawaban_reading[$i]"); $i++?> with which they can be constructed and how much noise is generated by the process.
                            </p>

                            <p class="question">
                                <i>
                                    <b>Questions 9-13</b><br>
                                    Look at the following statements (Questions 9-13) and the list of people below.<br>
                                    Match each statement with the correct person,<b> A</b>, <b>B</b>, <b>C</b> or <b>D</b>.<br>
                                    Write the correct letter,<b> A</b>, <b>B</b>, <b>C</b> or <b>D</b>, in boxes 9-13 on your answer sheet.<Br>
                                    <b>NB</b> You may use any letter more than once.
                                </i>
                            </p>

                            <table class="tableSoal w-100 mb-3">
                                <tr>
                                    <td class="p-3">
                                        <p>
                                            <b>List of people</b><br>
                                            <b>A</b> Chris Cheeseman<br>
                                            <b>B</b> Markus Mannstrom<br>
                                            <b>C</b> Anna Surgenor<br>
                                            <b>D</b> Felix Preston and Johanna Lehne<br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <?php $choice = ["A", "B", "C", "D"];?>

                            <p><b>9</b> The environmental advantage of cement alternatives may not be as great as initially assumed. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>10</b> It would be hard to create a construction alternative to concrete that offers so many comparable benefits. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>11</b> Worries about the environment have led to increased interest in wood as a construction material. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>12</b> Expense has been a factor in the negative response to the development of new cements. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>13</b> The environmental damage caused by concrete is due to it being produced in large quantities. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $text = "
            <p class=\"question\">
                <b>READING PASSAGE 2</b><br>
                You should spend about 20 minutes on <b>Questions 14-26</b> which are based on Reading Passage 2 below. 
            </p>

            <h6><center><b>The steam car</b></center></h6>
            <p><i><center>The successes and failures of the Doble brothers and their steam cars</center></i></p>
            <div class=\"reading-2\">
                ((p1))
                    ((b1))A((/b1))((br1))
                    When primitive automobiles first began to appear in the 1800s, their engines were based on steam power. Steam had already enjoyed a long and successful career in the railways, so it was only natural that the technology evolved into a miniaturized version which was separate from the trains. But these early cars inherited steam’s weaknesses along with its strengths. The boilers had to be lit by hand, and they required about twenty minutes to build up pressure before they could be driven. Furthermore, their water reservoirs only lasted for about thirty miles before needing replenishment. Despite such shortcomings, these newly designed self-propelled carriages offered quick transportation, and by the early 1900s it was not uncommon to see such machines shuttling wealthy citizens around town.
                ((/p1))

                ((p2))
                    ((b))B((/b))((br2))
                    But the glory days of steam cars were few. A new technology called the Internal Combustion Engine soon appeared, which offered the ability to drive down the road just moments after starting up. At first, these noisy gasoline cars were unpopular because they were more complicated to operate and they had difficult hand-crank starters, which were known to break arms when the engines backfired. But in 1912 General Motors introduced the electric starter, and over the following few years steam power was gradually phased out.
                ((/p2))

                ((p3))
                    ((b3))C((/b3))((br3))
                    Even as the market was declining, four brothers made one last effort to rekindle the technology. Between 1906 and 1909, while still attending high school, Abner Doble and his three brothers built their first steam car in their parents’ basement. It comprised parts taken from a wrecked early steam car but reconfigured to drive an engine of their own design. Though it did not run well, the Doble brothers went on to build a second and third prototype in the following years. Though the Doble boys’ third prototype, nicknamed the Model B, still lacked the convenience of an internal combustion engine, it drew the attention of automobile trade magazines due to its numerous improvements over previous steam cars. The Model B proved to be superior to gasoline automobiles in many ways. Its high-pressure steam drove the engine pistons in virtual silence, in contrast to clattering gas engines which emitted the aroma of burned hydrocarbons. Perhaps most impressively, the Model B was amazingly swift. It could accelerate from zero to sixty miles per hour in just fifteen seconds, a feat described as ‘remarkable acceleration’ by ((i1))Automobile((/i1)) magazine in 1914.
                ((/p3))

                ((p4))
                    ((b4))D((/b4))((br4))
                    The following year Abner Doble drove the Model B from Massachusetts to Detroit in order to seek investment in his automobile design, which he used to open the General Engineering Company. He and his brothers immediately began working on the Model C, which was intended to expand upon the innovations of the Model B. The brothers added features such as a key-based ignition in the cabin, eliminating the need for the operator to manually ignite the boiler. With these enhancements, the Dobles’ new car company promised a steam vehicle which would provide all of the convenience of a gasoline car, but with much greater speed, much simpler driving controls, and a virtually silent powerplant. By the following April, the General Engineering Company had received 5,390 deposits for Doble Detroits, which were scheduled for delivery in early 1918.
                ((/p4))

                ((p5))
                    ((b5))E((/b5))((br5))
                    Later that year Abner Doble delivered unhappy news to those eagerly awaiting the delivery of their modem new cars. Those buyers who received the handful of completed cars complained that the vehicles were sluggish and erratic, sometimes going in reverse when they should go forward. The new engine design, though innovative, was still plagued with serious glitches.
                ((/p5))

                ((p6))
                    ((b6))F((/b6))((br6))
                    The brothers made one final attempt to produce a viable steam automobile. In early 1924, the Doble brothers shipped a Model E to New York City to be road-tested by the Automobile Club of America. After sitting overnight in freezing temperatures, the car was pushed out into the road and left to sit for over an hour in the frosty morning air. At the turn of the key, the boiler lit and reached its operating pressure inside of forty seconds. As they drove the test vehicle further, they found that its evenly distributed weight lent it surprisingly good handling, even though it was so heavy. As the new Doble steamer was further developed and tested, its maximum speed was pushed to over a hundred miles per hour, and it achieved about fifteen miles per gallon of kerosene with negligible emissions.
                ((/p6))

                ((p7))
                    ((b7))G((/b7))((br7))
                    Sadly, the Dobles’ brilliant steam car never was a financial success. Priced at around $18,000 in 1924, it was popular only among the very wealthy. Plus, it is said that no two Model Es were quite the same, because Abner Doble tinkered endlessly with the design. By the time the company folded in 1931, fewer than fifty of the amazing Model E steam cars had been produced. For his whole career, until his death in 1961, Abner Doble remained adamant that steam-powered automobiles were at least equal to gasoline cars, if not superior. Given the evidence, he may have been right. Many of the Model E Dobles which have survived are still in good working condition, some having been driven over half a million miles with only normal maintenance. Astonishingly, an unmodified Doble Model E runs clean enough to pass the emissions laws in California today, and they are pretty strict. It is true that the technology poses some difficult problems, but you cannot help but wonder how efficient a steam car might be with the benefit of modem materials and computers. Under the current pressure to improve automotive performance and reduce emissions, it is not unthinkable that the steam car may rise again.
                ((/p7))
            </div>
        ";
    ?>
    
    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <div class="row">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                            <?= $text?>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                            <p class="question">
                                <i><b>Questions 14-20</b></i><br>
                                Reading Passage 2 has seven paragraphs, <b>A-G.</b><br>
                                <i>Choose the correct heading for each paragraph from the list of headings below.</i><br>
                                <i>Write the correct number, <b>i-viii</b>, in boxes 14-20 on your answer sheet.</i>
                            </p>
                            <table class="tableSoal w-100 mb-3">
                                <tr>
                                    <td class="p-3">
                                        <p>
                                            <b>List of Headings</b><br>
                                            <b>i</b> A period in cold conditions before the technology is assessed<br>
                                            <b>ii</b> Marketing issues lead to failure<br>
                                            <b>iii</b> Good and bad aspects of steam technology are passed on<br>
                                            <b>iv</b> A possible solution to the issues of today<br>
                                            <b>v</b> Further improvements lead to commercial orders<br>
                                            <b>vi</b> Positive publicity at last for this quiet, clean, fast vehicle<br>
                                            <b>vii</b> A disappointing outcome for customers<br>
                                            <b>viii</b> A better option than the steam car arises<br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <?php $choice = ["i","ii","iii","iv","v","vi","vii","viii"];?>
                            <p><b>14</b> Paragraph A <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>15</b> Paragraph B <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>16</b> Paragraph C <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>17</b> Paragraph D <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>18</b> Paragraph E <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>19</b> Paragraph F <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>20</b> Paragraph G <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>

                            <p class="question">
                                <i><b>Questions 21-23</b></i><br>
                                <i>Choose the correct letter,<b> A</b>, <b>B</b>, <b>C</b> or <b>D</b>.<br>
                                Write the correct letter in boxes 21-23 on your answer sheet.</i>
                            </p>

                            <?php
                                $data_soal_21_23 = [
                                    [
                                        "no" => 21,
                                        "soal" => "What point does the writer make about the steam car in Paragraph B?",
                                        "pilihan" => [
                                            "<b>A</b> Its success was short-lived.",
                                            "<b>B</b> Not enough cars were made.",
                                            "<b>C</b> Car companies found them hard to sell.",
                                            "<b>D</b> People found them hard to drive.",
                                        ],
                                        "name" => "jawaban_reading[20]",
                                    ],
                                    [
                                        "no" => 22,
                                        "soal" => "When building their first steam car, the Doble brothers",
                                        "pilihan" => [
                                            "<b>A</b> constructed all the parts themselves.",
                                            "<b>B</b> made written notes at each stage of the construction.",
                                            "<b>C</b> needed several attempts to achieve a competitive model.",
                                            "<b>D</b> sought the advice of experienced people in the car industry.",
                                        ],
                                        "name" => "jawaban_reading[21]",
                                    ],
                                    [
                                        "no" => 23,
                                        "soal" => "In order to produce the Model C, the Doble brothers",
                                        "pilihan" => [
                                            "<b>A</b> moved production to a different city.",
                                            "<b>B</b> raised financial capital.",
                                            "<b>C</b> employed an additional worker.",
                                            "<b>D</b> abandoned their earlier designs.",
                                        ],
                                        "name" => "jawaban_reading[22]",
                                    ],
                                ];
                            ?>

                            <?php foreach ($data_soal_21_23 as $data_soal) : ?>
                                <?= soal_pg_ielts($data_soal) ?>
                            <?php endforeach; ?>
                            <?php $i = $i + COUNT($data_soal_21_23) ?>

                            <p class="question">
                                <i>
                                    <b>Questions 24-26</b><br>
                                    Complete the summary below.<br>
                                    Choose ONE WORD ANDIOR A NUMBER from the passage for each answer.<br>
                                    Write your answers in boxes 24-26 on your answer sheet.
                                </i>
                            </p>

                            <center><h6><b>The Model E</b></h6></center>
                            <p>
                                The Model E was road-tested in 1924 by the Automobile Club of America. They found it easy to drive, despite its weight, and it impressed the spectators. A later version of the Model E raised its <b>24)</b> <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?>, while keeping its emissions extremely low.
                                The steam car was too expensive for many people and its design was constantly being altered. Under <b>25)</b> <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> cars were produced before the company went out of business. However, even today, there are Model Es on the road in the US. They are straightforward to maintain, and they satisfy California’s <b>26)</b> <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> emissions laws. Perhaps today’s technology and materials would help us revive the steam car.
                                <!-- <p>Advertisements</p> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $text = "
        <p class='question'>
            <b>READING PASSAGE 3</b><br>
            You should spend about 20 minutes on <b>Questions 27-40</b> which are based on Reading Passage 3 below.<br>
        </p>
        
        <h6><center>The case for mixed-ability classes</center></h6><br>
        
        <div class='reading-24'>
            ((p1))
            Picture this scene. It’s an English literature lesson in a UK school, and the teacher has just read an extract from Shakespeare’s ((i1))Romeo and Juliet((/i1)) with a class of 15-year-olds. He’s given some of the students copies of ((i2))No Fear Shakespeare((/i2)), a kid-friendly translation of the original. For three students, even these literacy demands are beyond them. Another girl simply can’t focus and he gives her pens and paper to draw with. The teacher can ask the ((i3))No Fear((/i3))  group to identify the key characters and maybe provide a tentative plot summary. He can ask most of the class about character development, and five of them might be able to support their statements with textual evidence. Now two curious students are wondering whether Shakespeare advocates living a life of moderation or one of passionate engagement.
            ((/p1))
            ((p2))
            As a teacher myself, I’d think my lesson would be going rather well if the discussion went as described above. But wouldn’t this kind of class work better if there weren’t such a huge gap between the top and the bottom? If we put all the kids who needed literacy support into one class, and all the students who want to discuss the virtue of moderation into another?
            The practice of ‘streaming’, or ‘tracking’, involves separating students into classes depending on their diagnosed levels of attainment. At a macro level, it requires the establishment of academically selective schools for the brightest students, and comprehensive schools for the rest. Within schools, it means selecting students into a ‘stream’ of general ability, or ‘sets’ of subject-specific ability. The practice is intuitively appealing to almost every stakeholder.
            ((/p2))
            ((p3))
            I have heard the mixed-ability model attacked by way of analogy: a group hike. The fittest in the group take the lead and set a brisk pace, only to have to stop and wait every 20 minutes. This is frustrating, and their enthusiasm wanes. Meanwhile, the slowest ones are not only embarrassed but physically struggling to keep up. What’s worse, they never get a long enough break. They honestly just want to quit. Hiking, they feel, is not for them.
            Mixed-ability classes bore students, frustrate parents and bum out teachers. The brightest ones will never summit Mount Qomolangma, and the stragglers won’t enjoy the lovely stroll in the park they are perhaps more suited to. Individuals suffer at the demands of the collective, mediocrity prevails. So: is learning like hiking?
            ((/p3))
            ((p4))
            The current pedagogical paradigm is arguably that of constructivism, which emerged out of the work of psychologist Lev Vygotsky. In the 1930s, Vygotsky emphasised the importance of targeting a student’s specific ‘zone of proximal development’ (ZPD). This is the gap between what they can achieve only with support – teachers, textbooks, worked examples, parents and so on – and what they can achieve independently. The purpose of teaching is to provide and then gradually remove this ‘scaffolding’ until they are autonomous. If we accept this model, it follows that streaming students with similar ZPDs would be an efficient and effective solution. And that forcing everyone on the same hike – regardless of aptitude – would be madness.
            ((/p4))
            ((p5))
            Despite all this, there is limited empirical evidence to suggest that streaming results in better outcomes for students. Professor John Hattie, director of the Melbourne Education Research Institute, notes that ‘tracking has minimal effects on learning outcomes’. What is more, streaming appears to significantly – and negatively – affect those students assigned to the lowest sets. These students tend to have much higher representation of low socioeconomic class. Less significant is the small benefit for those lucky clever students in the higher sets. The overall result is that the smart stay smart and the dumb get dumber, further entrenching the social divide.
            In the latest update of Hattie’s influential meta-analysis of factors influencing student achievement, one of the most significant factors is the teachers’ estimate of achievement. Streaming students by diagnosed achievement automatically limits what the teacher feels the student is capable of. Meanwhile, in a mixed environment, teachers’ estimates need to be more diverse and flexible.
            ((/p5))
            ((p6))
            While streaming might seem to help teachers effectively target a student’s ZPD, it can underestimate the importance of peer-to-peer learning. A crucial aspect of constructivist theory is the role of the MKO – ‘more knowledgeable other’ – in knowledge construction. While teachers are traditionally the MKOs in classrooms, the value of knowledgeable student peers must not go unrecognised either.
            ((p7))
            I find it amazing to watch students get over an idea to their peers in ways that I would never think of. They operate with different language tools and different social tools from teachers and, having just learnt it themselves, they possess similar cognitive structures to their struggling classmates. There is also something exciting about passing on skills and knowledge that you yourself have just mastered – a certain pride and zeal, a certain freshness to the interaction between ‘teacher’ and ‘learner’ that is often lost by the expert for whom the steps are obvious and the joy of discovery forgotten.
            ((/p7))
            ((p8))
            Having a variety of different abilities in a collaborative learning environment provides valuable resources for helping students meet their learning needs, not to mention improving their communication and social skills. And today, more than ever, we need the many to flourish – not suffer at the expense of a few bright stars. Once a year, I go on a hike with my class, a mixed bunch of students. It is challenging. The fittest students realise they need to encourage the reluctant. There are lookouts who report back, and extra items to carry for others. We make it – together.
            ((/p8))
        </div>
    ";?>

    <div class="card shadow mb-3">
        <div class="card-body ps-4">
            <div class="row">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                            <?= $text?>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">

                        <?php 
                            // $arrow = '<center>'.tablerIcon("arrow-narrow-down", "mb-1 mt-1").'</center>';
                        ?>

                        <div class="card-body ps-4" style="height: 600px; overflow: scroll">
                            <p class="question">
                                <i><b>Questions 27-30</b></i><br>
                                Choose the correct letter,, <b>A</b>, <b>B</b>,<b>C</b> or <b>D</b>.<br>
                                Write the correct letter in boxes <b>27-30</b> on your answer sheet.
                            </p>
                            
                            <?php
                                $data_soal_27_30 = [
                                    [
                                        "no" => 27,
                                        "soal" => "The writer describes the Romeo and Juliet lesson in order to demonstrate",
                                        "pilihan" => [
                                            "<b>A</b> how few students are interested in literature.",
                                            "<b>B</b> how a teacher handles a range of learning needs.",
                                            "<b>C</b> how unsuitable Shakespeare is for most teenagers.",
                                            "<b>D</b> how weaker students can disrupt their classmates’ learning.",
                                        ],
                                        "name" => "jawaban_reading[26]",
                                    ],
                                    [
                                        "no" => 28,
                                        "soal" => "What does the writer say about streaming in the third paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> It has a very broad appeal.",
                                            "<b>B</b> It favours cleverer students.",
                                            "<b>C</b> It is relatively simple to implement.",
                                            "<b>D</b> It works better in some schools than others.",
                                        ],
                                        "name" => "jawaban_reading[27]",
                                    ],
                                    [
                                        "no" => 29,
                                        "soal" => "What idea is suggested by the reference to Mount Qomolangma in the fifth paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> students following unsuitable paths",
                                            "<b>B</b> students attempting interesting tasks",
                                            "<b>C</b> students not achieving their full potential",
                                            "<b>D</b> students not being aware of their limitations",
                                        ],
                                        "name" => "jawaban_reading[28]",
                                    ],
                                    [
                                        "no" => 30,
                                        "soal" => "What does the word ‘scaffolding’ in the sixth paragraph refer to?",
                                        "pilihan" => [
                                            "<b>A</b> the factors which prevent a student from learning effectively",
                                            "<b>B</b> the environment where most of a student’s learning takes place",
                                            "<b>C</b> the assistance given to a student in their initial stages of learning",
                                            "<b>D</b> the setting of appropriate learning targets for a student’s aptitude",
                                        ],
                                        "name" => "jawaban_reading[29]",
                                    ],
                                ];
                                ?>

                                <?php foreach ($data_soal_27_30 as $data_soal) : ?>
                                    <?= soal_pg_ielts($data_soal) ?>
                                <?php endforeach; ?>
                                <?php $i = $i + COUNT($data_soal_27_30) ?>

                            <p class="question">
                                <i>
                                    <b>Questions 31-35</b><br>
                                    Complete the summary using the list of phrases, <b>A-l</b>, below.<br>
                                    Write the correct letter, <b>A-l</b>, in boxes 31-35 on your answer sheet.
                                </i>
                            </p>
                            <table class="tableSoal w-100 mb-3">
                                <tr>
                                    <td class="p-3">
                                        <p>
                                            <b>A</b> wrong classes      <br>
                                            <b>B</b> lower expectations<br>
                                            <b>C</b> average learners     <br>
                                            <b>D</b> bottom sets<br>
                                            <b>E</b> brightest pupils      <br>
                                            <b>F</b> disadvantaged backgrounds<br>
                                            <b>G</b> weaker students     <br>
                                            <b>H</b> higher achievements<br>
                                            <b>I</b> positive impressions
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            
                            <?php $choice = ["A","B","C","D","E","F","G","H","I"];?>

                            <center><h6>Is streaming effective?</h6></center>
                            <p>
                                According to Professor John Hattie of the Melbourne Education Research Institute there is very little indication that streaming leads to <b><?= $i + 1?>)</b> <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?> . He points out that, in schools which use streaming, the most significant impact is on those students placed in the <b><?= $i + 1?>)</b> <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?>, especially where a large proportion of them have <b><?= $i + 1?>)</b> <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?> . Meanwhile, for the <b><?= $i + 1?>)</b> <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?>, there appears to be only minimal advantage. A further issue is that teachers tend to have <b><?= $i + 1?>)</b> <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?> of students in streamed groups.
                            </p>
                            
                            <p class="question">
                                <b><i>Questions 36-40</i></b><br>
                                <i>Do the following statements agree with the views of the writer in Reading Passage 3?</i><br>
                                <i>In boxes 36-40 on your answer sheet, write</i><br>
                            </p>
                            <table class="tableTes w-100 mb-3">
                                <tr>
                                    <td><i><b>YES</b></i></td>
                                    <td><i>if the statement agrees with the views of the writer</i></td>
                                </tr>
                                <tr>
                                    <td><i><b>NO</b></i></td>
                                    <td><i>if the statement contradicts the views of the writer</i></td>
                                </tr>
                                <tr>
                                    <td><i><b>NOT GIVEN</b></i></td>
                                    <td><i>if it is impossible to say what the writer thinks about this</i></td>
                                </tr>
                            </table>

                            <?php $choice = ["YES", "NO", "NOT GIVEN"];?>

                            <p><b>36</b> The Vygotsky model of education supports the concept of a mixed-ability class. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>37</b> Some teachers are uncertain about allowing students to take on MKO roles in the classroom. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>38</b> It can be rewarding to teach knowledge which you have only recently acquired. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>39</b> The priority should be to ensure that the highest-achieving students attain their goals. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>40</b> Taking part in collaborative outdoor activities with teachers and classmates can improve student outcomes in the classroom. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection()?>

<?= $this->section('sesi-writing')?>
    <div class="card mb-3">
        <div class="card-body">
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
                    <img src="<?= base_url()?>public/assets/img-soal/writing-1-soal-003.png" alt="" height="400px">
                </center>
            </div>

            <p><span>Type your answer here</span></p>
            <textarea id="textarea-1" class="form-control mb-3" name="text_writing[0]" data-bs-toggle="autosize" placeholder="" style="height: 300px;"></textarea>
            <center>Total word Count : <span id="count-textarea-1">0</span></center>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
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

            <p><span>Type your answer here</span></p>
            <textarea id="textarea-2" class="form-control mb-3" name="text_writing[1]" data-bs-toggle="autosize" placeholder="" style="height: 300px;"></textarea>
            <center>Total word Count : <span id="count-textarea-2">0</span></center>
        </div>
    </div>
<?= $this->endSection()?>