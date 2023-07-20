<?= $this->extend('pages/soal/layout/soal_layout') ?>

<?= $this->section('sesi-listening') ?>
    <?php $i = 0 ?>
    <div class="shadow card mb-3">
        <div class="card-body">
            <center>
            <audio id="audio-1" class="audio" data-id="1"><source src="<?= base_url('public/assets/myaudio/soal-004.mp3?t='.time())?>" type="audio/mpeg"></audio>
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
                <b>PART 1 </b>
            </p>
            <p class="question">
                <i>Questions 1–10</i><br>
                <i>Complete the notes below.</i><br>
                <i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i>
            </p>
            <table class="tableSoal w-100">
                <tr>
                    <td class="p-3">
                        <center><h6>Advice on Surfing Holidays</h6></center>
                        <p><b>Jack's advice</b></p>
                        <ul type="radio">
                            <li>
                                Recommends surfing for <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> holidays in the summer
                            </li>
                            <li>
                                Need to be quite <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?>
                            </li>
                        </ul>
                        <p><b>Irish Surfing Locations</b></p>
                        <p>County Clare</p>
                        <ul type="radio">
                            <li>Lahinch has some good quality <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> and surf schools</li>
                            <li>There are famous cliffs nearby</li>
                        </ul>
                        <p>County Mayo</p>
                        <ul type="radio">
                            <li>Good surf school at <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> beach</li>
                            <li>Surf camp lasts for one <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                            <li>Can also explore the local <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> by kayak</li>
                        </ul>
                        <p><b>Weather</b></p>
                        <ul type="radio">
                            <li>Best month to go: <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?>
                            <li>Average temperature in summer: approx. <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> degrees</li>
                        </ul>
                        <p><b>Costs</b></p>
                        <p>Equipment</p>
                        <ul type="radio">
                            <li>Wetsuit and surfboard: <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> euros per day</li>
                            <li>Also advisable to hire <b><?= $i +1?>)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> for warmth</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <p class="question">
                <b>PART 2</b>
            </p>
            <p class="question">
                <i>
                    <b>Questions 11 – 12</b><br>
                    Choose <b>TWO</b> letters, <b>A-E</b>.
                </i>
            </p>
            <p>
                Which <b>TWO</b> facts are given about the school’s extended hours childcare service?
                <b>A</b> It started recently.<br>
                <b>B</b> More children attend after school than before school.<br>
                <b>C</b> An average of 50 children attend in the mornings.<br>
                <b>D</b> A child cannot attend both the before and after school sessions.<br>
                <b>E</b> The maximum number of children who can attend is 70.<br>
            </p>
            <?php $choice = ["A", "B", "C", "D", "E"];?>
            <p><b>11</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>12</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>

            <p class="question">
                <i><b>Questions 13-15</b></i><br>
                Choose the correct letter,<b>A</b>, <b>B</b> or <b>C</b>.
            </p>

            <?php
                $data_soal_13_15  = [
                    [
                        "no" => 13,
                        "soal" => "How much does childcare cost for a complete afternoon session per child?",
                        "pilihan" => [
                            "<b>A</b> £3.50",
                            "<b>B</b> £5.70",
                            "<b>C</b> £7.20",
                        ],
                        "name" => "jawaban_listening[12]"
                    ],
                    [
                        "no" => 14,
                        "soal" => "What does the manager say about food?",
                        "pilihan" => [
                            "<b>A</b> Children with allergies should bring their own food.",
                            "<b>B</b> Children may bring healthy snacks with them.",
                            "<b>C</b> Children are given a proper meal at 5 p.m.",
                        ],
                        "name" => "jawaban_listening[13]"
                    ],
                    [
                        "no" => 15,
                        "soal" => "What is different about arrangements in the school holidays?",
                        "pilihan" => [
                            "<b>A</b> Children from other schools can attend.",
                            "<b>B</b> Older children can attend.",
                            "<b>C</b> A greater number of children can attend.",
                        ],
                        "name" => "jawaban_listening[14]"
                    ],
                ];
            ?>

            <?php foreach ($data_soal_13_15 as $data_soal) :?>
                <?= soal_pg_ielts($data_soal)?>
            <?php endforeach;?>
            <?php $i = $i + COUNT($data_soal_13_15)?>

            <p class="question">
                <b>Questions 16-20</b><br>
                What information is given about each of the following activities on offer?<br>
                <i>Choose <b>FIVE</b> answers from the box and write the correct letter, <b>A-G</b>, next to Questions 16-20.</i>
            </p>
            <table class="tableSoal w-100 mb-3">
                <tr>
                    <td class="p-3">
                        <p>
                            <b>Information</b>
                        </p>
                        <p>
                            <b>A</b> has limited availability<br>
                            <b>B</b> is no longer available<br>
                            <b>C</b> is for over 8s only<br>
                            <b>D</b> requires help from parents<br>
                            <b>E</b> involves an additional fee<br>
                            <b>F</b> is a new activity<br>
                            <b>G</b> was requested by children<br>
                        </p>
                    </td>
                </tr>
            </table>
            <?php $choice = ["A", "B", "C", "D", "E", "F", "G"];?>
            <p><b>Activities</b></p>
            <p><b>16</b> Spanish         <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>17</b> Music            <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>18</b> Painting       <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>19</b> Yoga             <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>20</b> Cooking       <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <div class="row">
                <p class="question">
                    <b>PART 3 <i>Questions 21–30</i></b><br>
                    <i>Questions 21-24</i><br>
                    <i>Choose the correct letter, <b>A</b>, <b>B</b> or <b>C</b>.</i>
                </p>

                <h6><center><b>Holly’s Work Placement Tutorial</b></center></h6>

                <?php
                    $data_soal_21_24  = [
                        [
                            "no" => 21,
                            "soal" => "Holly has chosen the Orion Stadium placement because",
                            "pilihan" => [
                                "<b>A</b> it involves children.",
                                "<b>B</b> it is outdoors.",
                                "<b>C</b> it sounds like fun.",
                            ],
                            "name" => "jawaban_listening[20]"
                        ],
                        [
                            "no" => 22,
                            "soal" => "Which aspect of safety does Dr Green emphasise most?",
                            "pilihan" => [
                                "<b>A</b> ensuring children stay in the stadium",
                                "<b>B</b> checking the equipment children will use",
                                "<b>C</b> removing obstacles in changing rooms",
                            ],
                            "name" => "jawaban_listening[21]"
                        ],
                        [
                            "no" => 23,
                            "soal" => "What does Dr Green say about the spectators?",
                            "pilihan" => [
                                "<b>A</b> They can be hard to manage.",
                                "<b>B</b> They make useful volunteers.",
                                "<b>C</b> They shouldn’t take photographs.",
                            ],
                            "name" => "jawaban_listening[22]"
                        ],
                        [
                            "no" => 24,
                            "soal" => "What has affected the schedule in the past?",
                            "pilihan" => [
                                "<b>A</b> bad weather",
                                "<b>B</b> an injury",
                                "<b>C</b> extra time",
                            ],
                            "name" => "jawaban_listening[23]"
                        ],
                    ];
                ?>

                <?php foreach ($data_soal_21_24 as $data_soal) :?>
                    <?= soal_pg_ielts($data_soal)?>
                <?php endforeach;?>
                <?php $i = $i + COUNT($data_soal_21_24)?>

                <p class="question">
                    <b>Questions 25-30</b><br>
                    What do Holly and her tutor agree is an important aspect of each of the following events management skills?<br>
                    <i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to Questions 25-30.</i>
                </p>
                <table class="tableSoal w-100 mb-3">
                    <tr>
                        <td class="p-3">
                            <p>
                                <b>Important aspects</b>
                            </p>
                            <p>
                                <b>A</b> being flexible<br>
                                <b>B</b> focusing on details<br>
                                <b>C</b> having a smart appearance<br>
                                <b>D</b> hiding your emotions<br>
                                <b>E</b> relying on experts<br>
                                <b>F</b> trusting your own views<br>
                                <b>G</b> doing one thing at a time<br>
                                <b>H</b> thinking of the future<br>
                            </p>
                        </td>
                    </tr>
                </table>
                <?php $choice = ["A", "B", "C", "D", "E", "F", "G", "H"];?>
                <p><b>Events management skills</b></p>
                <p><b>25</b> Communication <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>26</b> Organisation <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>27</b> Time management <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>28</b> Creativity <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>29</b> Leadership <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>30</b> Networking <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            </div>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <p class="question">
                <b>PART 4</b> <br>
                <i>
                    Questions 31 – 40<br>
                    Complete the notes below.<br>
                    Write <b>ONE WORD ONLY</b> for each answer.
                </i>
            </p>

            
            <table class="tableSoal w-100">
                <tr>
                    <td class="p-3">
                        <center><h6>Bird Migration Theory</h6></center>
                        <p>Most birds are believed to migrate seasonally.</p>
                        <p><b>Hibernation theory</b></p>
                        <ul type="radio">
                            <li>
                                It was believed that birds hibernated underwater or buried themselves in <b>31</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?>.
                            </li>
                            <li>
                                This theory was later disproved by experiments on caged birds.
                            </li>
                        </ul>
                        <p><b>Transmutation theory</b></p>
                        <ul type="radio">
                            <li>
                                Aristotle believed birds changed from one species into another in summer and winter.
                                <ul type="dash">
                                    <li>
                                        In autumn he observed that redstarts experience the loss of <b>32</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> and thought they then turned into robins.
                                    </li>
                                    <li>
                                        Aristotle’s assumptions were logical because the two species of birds had a similar <b>33</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> .
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p><b>17th century</b></p>
                        <ul type="radio">
                            <li>
                                Charles Morton popularised the idea that birds fly to the <b>34</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> in winter.
                            </li>
                        </ul>
                        <p><b>Scientific developments</b></p>
                        <ul type="radio">
                            <li>
                                In 1822, a stork was killed in Germany which had an African spear in its <b>35</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> .
                                <ul type="dash">
                                    <li>
                                        previously there had been no <b>36</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> that storks migrate to Africa
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Little was known about the <b>37</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> and journeys of migrating birds until the practice of ringing was established.
                                <ul type="dash">
                                    <li>
                                        It was thought large birds carried small birds on some journeys because they were considered incapable of travelling across huge <b>38</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> .
                                    </li>
                                    <li>
                                        Ringing depended on what is called the <b>39</b> ‘<?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?>’ of dead birds.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                In 1931, the first <b>40</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++;?> to show the migration of European birds was printed.
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>

        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('sesi-reading')?>
    <?php $i = 0 ?>
    <?php
        $text = "
        
            <p class='question'>
                <b>READING PASSAGE 1</b><br>
                You should spend about 20 minutes on <b>Questions 1-13</b> which are based on Reading Passage 1 below.
            </p>

            <h6><center>Stonehenge</center></h6><br>
            
            <div class=\"reading-1\">
                ((p1))
                For centuries, historians and archaeologists have puzzled over the many mysteries of Stonehenge, a prehistoric monument that took an estimated 1,500 years to erect. Located on Salisbury Plain in southern England, it is comprised of roughly 100 massive upright stones placed in a circular layout.((br1))
                Archaeologists believe England’s most iconic prehistoric ruin was built in several stages with the earliest constructed 5,000 or more years ago. First, Neolithic<sup>*</sup> Britons used primitive tools, which may have been fashioned out of deer antlers, to dig a massive circular ditch and bank, or henge. Deep pits dating back to that era and located within the circle may have once held a ring of timber posts, according to some scholars.
                ((/p1))
                ((p2))
                Several hundred years later, it is thought, Stonehenge’s builders hoisted an estimated 80 bluestones, 43 of which remain today, into standing positions and placed them in either a horseshoe or circular formation. These stones have been traced all the way to the Preseli Hills in Wales, some 300 kilometres from Stonehenge. How, then, did prehistoric builders without sophisticated tools or engineering haul these boulders, which weigh up to four tons, over such a great distance?((br2))
                According to one long-standing theory among archaeologists, Stonehenge’s builders fashioned sledges and rollers out of tree trunks to lug the bluestones from the Preseli Hills. They then transferred the boulders onto rafts and floated them first along the Welsh coast and then up the River Avon toward Salisbury Plain; alternatively, they may have towed each stone with a fleet of vessels. More recent archaeological hypotheses have them transporting the bluestones with supersized wicker baskets on a combination of ball bearings and long grooved planks, hauled by oxen.
                ((/p2))
                ((p3))
                As early as the 1970s, geologists have been adding their voices to the debate over how Stonehenge came into being. Challenging the classic image of industrious builders pushing, carting, rolling or hauling giant stones from faraway Wales, some scientists have suggested that it was glaciers, not humans, that carried the bluestones to Salisbury Plain. Most archaeologists have remained sceptical about this theory, however, wondering how the forces of nature could possibly have delivered the exact number of stones needed to complete the circle.
                ((/p3))
                ((p4))
                The third phase of construction took place around 2000 BCE. At this point, sandstone slabs – known as ‘sarsens’ – were arranged into an outer crescent or ring; some were assembled into the iconic three-pieced structures called trilithons that stand tall in the centre of Stonehenge. Some 50 of these stones are now visible on the site, which may once have contained many more. Radiocarbon dating has revealed that work continued at Stonehenge until roughly 1600 BCE, with the bluestones in particular being repositioned multiple times.
                ((/p4))
                ((p5))
                But who were the builders of Stonehenge? In the 17th century, archaeologist John Aubrey made the claim that Stonehenge was the work of druids, who had important religious, judicial and political roles in Celtic<sup>**</sup> society. This theory was widely popularized by the antiquarian William Stukeley, who had unearthed primitive graves at the site. Even today, people who identify as modern druids continue to gather at Stonehenge for the summer solstice. However, in the mid-20th century, radiocarbon dating demonstrated that Stonehenge stood more than 1,000 years before the Celts inhabited the region.
                ((/p5))
                ((p6))
                Many modern historians and archaeologists now agree that several distinct tribes of people contributed to Stonehenge, each undertaking a different phase of its construction. Bones, tools and other artefacts found on the site seem to support this hypothesis. The first stage was achieved by Neolithic agrarians who were likely to have been indigenous to the British Isles. Later, it is believed, groups with advanced tools and a more communal way of life left their mark on the site. Some believe that they were immigrants from the European continent, while others maintain that they were probably native Britons, descended from the original builders.
                ((/p6))
                ((p7))
                If the facts surrounding the architects and construction of Stonehenge remain shadowy at best, the purpose of the striking monument is even more of a mystery. While there is consensus among the majority of modern scholars that Stonehenge once served the function of burial ground, they have yet to determine what other purposes it had.
                ((/p7))
                ((p8))
                In the 1960s, the astronomer Gerald Hawkins suggested that the cluster of megalithic stones operated as a form of calendar, with different points corresponding to astrological phenomena such as solstices, equinoxes and eclipses occurring at different times of the year. While his theory has received a considerable amount of attention over the decades, critics maintain that Stonehenge’s builders probably lacked the knowledge necessary to predict such events or that England’s dense cloud cover would have obscured their view of the skies.
                ((/p8))
                ((p9))
                More recently, signs of illness and injury in the human remains unearthed at Stonehenge led a group of British archaeologists to speculate that it was considered a place of healing, perhaps because bluestones were thought to have curative powers.
                ((/p9))
                ((p10))
                <sup>*</sup> Neolithic – The era, also known as the New Stone Age, which began around 12,000 years ago and ended around 3500 BCE((br10))
                <sup>**</sup> Celtic – The Celts were people who lived in Britain and northwest Europe during the Iron Age from 600 BCE to 43 CE
                ((/p10))
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
                                <i>
                                    <b>Questions 1-8</b><br>
                                    Complete the notes below.<br>
                                    Choose NO MORE THAN TWO WORDS from the passage for each answer.<br>
                                    Write your answers in boxes 1-8 on your answer sheet.
                                </i>
                            </p>
                            <h6><center><b>Stonehenge</b></center></h6>
                            <p><b>Construction</b></p>
                            <p>Stage 1:</p>
                            <ul type="radio">
                                <li>the ditch and henge were dug, possibly using tools made from <b>1</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?></li>
                                <li><b>2</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> may have been arranged in deep pits inside the circle</li>
                            </ul>
                            <p>Stage 2:</p>
                            <ul type="radio">
                                <li>
                                    bluestones from the Preseli Hills were placed in standing position
                                </li>
                                <li>
                                    theories about the transportation of the bluestones:
                                    <ul type="dash">
                                        <li>archaeological:</li>
                                        <ul type="circle">
                                            <li>builders used <b>3</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> to make sledges and rollers</li>
                                            <li><b>4</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> pulled them on giant baskets</li>
                                        </ul>
                                        <li>geological:</li>
                                        <ul type="circle">
                                            <li>
                                                they were brought from Wales by <b>5</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?>
                                            </li>
                                        </ul>
                                    </ul>
                                </li>
                            </ul>
                            <p>Stage 3:</p>
                            <ul type="radio">
                                <li>
                                    sandstone slabs were arranged into an outer crescent or ring
                                </li>
                            </ul>
                            <p><b>Builders</b></p>
                            <ul type="radio">
                                <li>
                                    a theory arose in the 17th century that its builders were Celtic <b>6</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?>
                                </li>
                            </ul>
                            <p><b>Purpose</b></p>
                            <ul type="radio">
                                <li>
                                    many experts agree it has been used as a <b>7</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> site
                                </li>
                                <li>
                                    in the 1960s, it was suggested that it worked as a kind of <b>8</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?>
                                </li>
                            </ul>

                            <p class="question">
                                <i><b>Questions 9-13</b></i><br>
                                Do the following statements agree with the information given in Reading Passage 1?<br>
                                <i>In boxes <b>9-13</b> on your answer sheet, write</i>
                            </p>
                            <table class="tableTes w-100 mb-3">
                                <tr>
                                    <td>TRUE</td>
                                    <td>if the statement agrees with the information</td>
                                </tr>
                                <tr>
                                    <td>FALSE</td>
                                    <td>if the statement contradicts the information</td>
                                </tr>
                                <tr>
                                    <td>NOT GIVEN</td>
                                    <td>if there is no information on this</td>
                                </tr>
                            </table>

                            <?php $choice = ["TRUE", "FALSE", "NOT GIVEN"];?>
                            <p><b>9</b> During the third phase of construction, sandstone slabs were placed in both the outer areas and the middle of the Stonehenge site. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++;?></p>
                            <p><b>10</b> There is scientific proof that the bluestones stood in the same spot until approximately 1600 BCE. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++;?></p>
                            <p><b>11</b> John Aubrey’s claim about Stonehenge was supported by 20th-century findings. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++;?></p>
                            <p><b>12</b> Objects discovered at Stonehenge seem to indicate that it was constructed by a number of different groups of people. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++;?></p>
                            <p><b>13</b> Criticism of Gerald Hawkins’ theory about Stonehenge has come mainly from other astronomers. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $text = "
        
            <p class='question'>
                <b>READING PASSAGE 2</b><br>
                You should spend about 20 minutes on <b>Questions 14-26</b> which are based on Reading Passage 2 below. 
            </p>

            <h6>
                <center>
                    Living with artificial intelligence<br>
                </center>
            </h6>
            <p><i><center>Powerful artificial intelligence (AI) needs to be reliably aligned with human values, but does this mean AI will eventually have to police those values?</center></i></p>
            
            <div class=\"reading-2\">
                ((p1))
                    This has been the decade of AI, with one astonishing feat after another. A chess-playing AI that can defeat not only all human chess players, but also all previous human-programmed chess machines, after learning the game in just four hours? That’s yesterday’s news, what’s next? True, these prodigious accomplishments are all in so-called narrow AI, where machines perform highly specialised tasks. But many experts believe this restriction is very temporary. By mid-century, we may have artificial general intelligence (AGI) – machines that can achieve human-level performance on the full range of tasks that we ourselves can tackle.
                ((/p1))
                ((p2))
                    If so, there’s little reason to think it will stop there. Machines will be free of many of the physical constraints on human intelligence. Our brains run at slow biochemical processing speeds on the power of a light bulb, and their size is restricted by the dimensions of the human birth canal. It is remarkable what they accomplish, given these handicaps. But they may be as far from the physical limits of thought as our eyes are from the incredibly powerful Webb Space Telescope.
                ((/p2))
                ((p3))
                    Once machines are better than us at designing even smarter machines, progress towards these limits could accelerate. What would this mean for us? Could we ensure a safe and worthwhile coexistence with such machines? On the plus side, AI is already useful and profitable for many things, and super AI might be expected to be super useful and super profitable. But the more powerful AI becomes, the more important it will be to specify its goals with great care. Folklore is full of tales of people who ask for the wrong thing, with disastrous consequences- King Midas, for example, might have wished that everything he touched turned to gold, but didn’t really intend this to apply to his breakfast.
                ((/p3))
                ((p4))
                    So we need to create powerful AI machines that are ‘human-friendly’- that have goals reliably aligned with our own values. One thing that makes this task difficult is that we are far from reliably human-friendly ourselves. We do many terrible things to each other and to many other creatures with whom we share the planet. If superintendent machines don’t do a lot better than us, we’ll be in deep trouble. We’ll have powerful new intelligence amplifying the dark sides of our own fallible natures.
                ((/p4))
                ((p5))
                    For safety’s sake, then, we want the machines to be ethically as well as cognitively superhuman. We want them to aim for the moral high ground, not for the troughs in which many of us spend some of our time. Luckily they’ll be smart enough for the job. If there are routes to the moral high ground, they’ll be better than us at finding them, and steering us in the right direction.
                ((/p5))
                ((p6))
                    However, there are two big problems with this utopian vision. One is how we get the machines started on the journey, the other is what it would mean to reach this destination. The ‘getting started’ problem is that we need to tell the machines what they’re looking for with sufficient clarity that we can be confident they will find it – whatever ‘it’ actually turns out to be. This won’t be easy, given that we are tribal creatures and conflicted about the ideals ourselves. We often ignore the suffering of strangers, and even contribute to it, at least indirectly. How then, do we point machines in the direction of something better?
                ((/p6))
                ((p7))
                    As for the ‘destination’ problem, we might, by putting ourselves in the hands of these moral guides and gatekeepers, be sacrificing our own autonomy – an important part of what makes us human. Machines who are better than us at sticking to the moral high ground may be expected to discourage some of the lapses we presently take for granted. We might lose our freedom to discriminate in favour of our own communities, for example.
                ((/p7))
                ((p8))
                    Loss of freedom to behave badly isn’t always a bad thing, of course: denying ourselves the freedom to put children to work in factories, or to smoke in restaurants are signs of progress. But are we ready for ethical silicon police limiting our options? They might be so good at doing it that we won’t notice them; but few of us are likely to welcome such a future.
                ((/p8))
                ((p9))
                    These issues might seem far-fetched, but they are to some extent already here. AI already has some input into how resources are used in our National Health Service (NHS) here in the UK, for example. If it was given a greater role, it might do so much more efficiently than humans can manage, and act in the interests of taxpayers and those who use the health system. However, we’d be depriving some humans (e.g. senior doctors) of the control they presently enjoy. Since we’d want to ensure that people are treated equally and that policies are fair, the goals of AI would need to be specified correctly.
                ((/p9))
                ((p10))
                    We have a new powerful technology to deal with- itself, literally, a new way of thinking. For our own safety, we need to point these new thinkers in the right direction, and get them to act well for us. It is not yet clear whether this is possible, but if it is, it will require a cooperative spirit, and a willingness to set aside self-interest.
                ((/p10))
                ((p11))
                    Both general intelligence and moral reasoning are often thought to be uniquely human capacities. But safety seems to require that we think of them as a package: if we are to give general intelligence to machines, we’ll need to give them moral authority, too. And where exactly would that leave human beings? All the more reason to think about the destination now, and to be careful about what we wish for.
                ((/p11))
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
                                <b><i>Questions 14-19</i></b><br>
                                <i>Choose the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.</i><br>
                                <i>Write the correct letter in boxes 14-19 on your answer sheet.</i>
                            </p>

                            <?php
                                $data_soal_14_19  = [
                                    [
                                        "no" => 14,
                                        "soal" => "What point does the writer make about AI in the first paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> It is difficult to predict how quickly AI will progress.",
                                            "<b>B</b> Much can be learned about the use of AI in chess machines.",
                                            "<b>C</b> The future is unlikely to see limitations on the capabilities of AI.",
                                            "<b>D</b> Experts disagree on which specialised tasks AI will be able to perform.",
                                        ],
                                        "name" => "jawaban_reading[13]"
                                    ],
                                    [
                                        "no" => 15,
                                        "soal" => "What is the writer doing in the second paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> explaining why machines will be able to outperform humans",
                                            "<b>B</b> describing the characteristics that humans and machines share",
                                            "<b>C</b> giving information about the development of machine intelligence",
                                            "<b>D</b> indicating which aspects of humans are the most advanced",
                                        ],
                                        "name" => "jawaban_reading[14]"
                                    ],
                                    [
                                        "no" => 16,
                                        "soal" => "Why does the writer mention the story of King Midas?",
                                        "pilihan" => [
                                            "<b>A</b> to compare different visions of progress",
                                            "<b>B</b> to illustrate that poorly defined objectives can go wrong",
                                            "<b>C</b> to emphasise the need for cooperation",
                                            "<b>D</b> to point out the financial advantages of a course of action",
                                        ],
                                        "name" => "jawaban_reading[15]"
                                    ],
                                    [
                                        "no" => 17,
                                        "soal" => "What challenge does the writer refer to in the fourth paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> encouraging humans to behave in a more principled way",
                                            "<b>B</b> deciding which values we want AI to share with us",
                                            "<b>C</b> creating a better world for all creatures on the planet",
                                            "<b>D</b> ensuring AI is more human-friendly than we are ourselves",
                                        ],
                                        "name" => "jawaban_reading[16]"
                                    ],
                                    [
                                        "no" => 18,
                                        "soal" => "What does the writer suggest about the future of AI in the fifth paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> The safety of machines will become a key issue.",
                                            "<b>B</b> It is hard to know what impact machines will have on the world.",
                                            "<b>C</b> Machines will be superior to humans in certain respects.",
                                            "<b>D</b> Many humans will oppose machines having a wider role.",
                                        ],
                                        "name" => "jawaban_reading[17]"
                                    ],
                                    [
                                        "no" => 19,
                                        "soal" => "Which of the following best summarises the writer’s argument in the sixth paragraph?",
                                        "pilihan" => [
                                            "<b>A</b> More intelligent machines will result in greater abuses of power.",
                                            "<b>B</b> Machine learning will share very few features with human learning.",
                                            "<b>C</b> There are a limited number of people with the knowledge to program machines.",
                                            "<b>D</b> Human shortcomings will make creating the machines we need more difficult.",
                                        ],
                                        "name" => "jawaban_reading[18]"
                                    ]
                                ];
                            ?>

                            <?php foreach ($data_soal_14_19 as $data_soal) :?>
                                <?= soal_pg_ielts($data_soal)?>
                            <?php endforeach;?>
                            <?php $i = $i + COUNT($data_soal_14_19)?>

                            <p class="question">
                                <i><b>Questions 20-23</b></i><br>
                                Do the following statements agree with the claims of the writer in Reading Passage 2?<br>
                                <i>In boxes 20-23 on your answer sheet, write</i>
                            </p>
                            <table class="tableTes w-100 mb-3">
                                <tr>
                                    <td><i><b>YES</b></i></td>
                                    <td><i>if the statement agrees with the claims of the writer</i></td>
                                </tr>
                                <tr>
                                    <td><i><b>NO</b></i></td>
                                    <td><i> if the statement contradicts the claims of the writer</i></td>
                                </tr>
                                <tr>
                                    <td><i><b>NOT GIVEN</b></i></td>
                                    <td><i>if it is impossible to say what the writer thinks about this</i></td>
                                </tr>
                            </table>

                            <?php $choice = ["YES", "NO", "NOT GIVEN"];?>
                            <p><b>20</b> Machines with the ability to make moral decisions may prevent us from promoting the interests of our communities. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>21</b> Silicon police would need to exist in large numbers in order to be effective. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>22</b> Many people are comfortable with the prospect of their independence being restricted by machines. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>23</b> If we want to ensure that machines act in our best interests, we all need to work together. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>

                            <p class="question">
                                <i>
                                    <b>Questions 24-26</b><br>
                                    Complete the summary using the list of phrases, <b>A-F</b>, below.<br>
                                    Write the correct letter, <b>A-F</b>, in boxes 24-26 on your answer sheet.
                                </i>
                            </p>

                            <table class="tableSoal w-100 mb-3">
                                <tr>
                                    <td class="p-3">
                                        <p>
                                            <b>A</b> medical practitioners <br>
                                            <b>B</b> specialised tasks<br>
                                            <b>C</b> available resources<br>
                                            <b>D</b> reduced illness<br>
                                            <b>E</b> professional authority <br>
                                            <b>F</b> technology experts<br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <?php $choice = ["A", "B", "C", "D", "E", "F"];?>
                            <h6><center><b>Using AI in the UK health system</b></center></h6>
                            <p>
                                AI currently has a limited role in the way <b>24</b><?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?> are allocated in the health service. The positive aspect of AI having a bigger role is that it would be more efficient and lead to patient benefits. However, such a change would result, for example, in certain <b>25</b><?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?> not having their current level of <b>26</b><?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?> . It is therefore important that AI goals are appropriate so that discriminatory practices could be avoided.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $text = "
            <p class='question'>
                <b>READING PASSAGE 2</b><br>
                You should spend about 20 minutes on <b>Questions 14-26</b> which are based on Reading Passage 2 below.
            </p>
            <h6>
                <center>An ideal city</center><br>
                <i>Leonardo da Vinci’s ideal city was centuries ahead of its time</i>
            </h6>

            <div class='reading-3'>
                ((p1))
                The word ‘genius’ is universally associated with the name of Leonardo da Vinci. A true Renaissance man, he embodied scientific spirit, artistic talent and humanist sensibilities. Five hundred years have passed since Leonardo died in his home at Chateau du Clos Luce, outside Tours, France. Yet far from fading into insignificance, his thinking has carried down the centuries and still surprises today.
                ((/p1))
                ((p2))
                The Renaissance marked the transition from the 15th century to modernity and took place after the spread of the plague in the 14th century, which caused a global crisis resulting in some 200 million deaths across Europe and Asia. Today, the world is on the cusp of a climate crisis, which is predicted to cause widespread displacement, extinctions and death, if left unaddressed. Then, as now, radical solutions were called for to revolutionise the way people lived and safeguard humanity against catastrophe.
                ((/p2))
                ((p3))
                Around 1486 – after a pestilence that killed half the population in Milan, Italy – Leonardo turned his thoughts to urban planning problems. Following a typical Renaissance trend, he began to work on an ‘ideal city’ project, which – due to its excessive costs – would remain unfulfilled. Yet given that unsustainable urban models are a key cause of global climate change today, it’s only natural to wonder how Leonardo might have changed the shape of modem cities.
                ((/p3))
                ((p4))
                Although the Renaissance is renowned as an era of incredible progress in art and architecture, it is rarely noted that the 15th century also marked the birth of urbanism as a true academic discipline. The rigour and method behind the conscious conception of a city had been largely missing in Western thought until the moment when prominent Renaissance men pushed forward large-scale urban projects in Italy, such as the reconfiguration of the town of Pienza and the expansion of the city of Ferrara. These works surely inspired Leonardo’s decision to rethink the design of medieval cities, with their winding and overcrowded streets and with houses piled against one another.
                ((/p4))
                ((p5))
                It is not easy to identify a coordinated vision of Leonardo’s ideal city because of his disordered way of working with notes and sketches. But from the largest collection of Leonardo’s papers ever assembled, a series of innovative thoughts can be reconstructed regarding the foundation of a new city along the Ticino River, which runs from Switzerland into Italy and is 248 kilometres long. He designed the city for the easy transport of goods and clean urban spaces, and he wanted a comfortable and spacious city, with well-ordered streets and architecture. He recommended ‘high, strong walls’, with ‘towers and battlements of all necessary and pleasant beauty’.
                ((/p5))
                ((p6))
                His plans for a modem and ‘rational’ city were consistent with Renaissance ideals. But, in keeping with his personality, Leonardo included several innovations in his urban design. Leonardo wanted the city to be built on several levels, linked with vertical outdoor staircases. This design can be seen in some of today’s high-rise buildings but was unconventional at the time. Indeed, this idea of taking full advantage of the interior spaces wasn’t implemented until the 1920s and 1930s, with the birth of the Modernist movement.
                ((/p6))
                ((p7))
                While in the upper layers of the city, people could walk undisturbed between elegant palaces and streets, the lower layer was the place for services, trade, transport and industry. But the true originality of Leonardo’s vision was its fusion of architecture and engineering. Leonardo designed extensive hydraulic plants to create artificial canals throughout the city. The canals, regulated by clocks and basins, were supposed to make it easier for boats to navigate inland. Leonardo also thought that the width of the streets ought to match the average height of the adjacent houses: a rule still followed in many contemporary cities across Italy, to allow access to sun and reduce the risk of damage from earthquakes.
                ((/p7))
                ((p8))
                Although some of these features existed in Roman cities, before Leonardo’s drawings there had never been a multi-level, compact modem city which was thoroughly technically conceived. Indeed, it wasn’t until the 19th century that some of his ideas were applied. For example, the subdivision of the city by function- with services and infrastructures located in the lower levels and wide and well-ventilated boulevards and walkways above for residents – is an idea that can be found in Georges-Eugene Haussmann’s renovation of Paris under Emperor Napoleon III between 1853 and 1870.
                ((/p8))
                ((p9))
                Today, Leonardo’s ideas are not simply valid, they actually suggest a way forward for urban planning. Many scholars think that the compact city, built upwards instead of outwards, integrated with nature (especially water systems), with efficient transport infrastructure, could help modem cities become more efficient and sustainable. This is yet another reason why Leonardo was aligned so closely with modem urban planning and centuries ahead of his time.
                ((/p9))
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
                        <div class="card-body" style="height: 600px; overflow: scroll">
                            <p class="question">
                                <i><b>Questions 27-33</b></i><br>
                                Do the following statements agree with the information given in Reading Passage 3?<br>
                                <i>In boxes 27-33 on your answer sheet, write</i>
                            </p>
                            <table class="tableTes w-100 mb-3">
                                <tr>
                                    <td><i><b>TRUE</b></i></td>
                                    <td>if the statement agrees with the information</td>
                                </tr>
                                <tr>
                                    <td><b><i>FALSE</i></b></td>
                                    <td>if the statement contradicts the information</td>
                                </tr>
                                <tr>
                                    <td><i><b>NOT GIVEN</b></i></td>
                                    <td>if there is no information on this</td>
                                </tr>
                            </table>

                            <?php $choice = ["TRUE", "FALSE", "NOT GIVEN"];?>

                            <p><b>27</b> People first referred to Leonardo da Vinci as a genius 500 years ago. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>28</b> The current climate crisis is predicted to cause more deaths than the plague. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>29</b> Some of the challenges we face today can be compared to those of earlier times. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>30</b> Leonardo da Vinci’s ‘ideal city’ was constructed in the 15th century. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>31</b> Poor town planning is a major contributor to climate change. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>32</b> In Renaissance times, local people fought against the changes to Pienza and Ferrara. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>33</b> Leonardo da Vinci kept a neat, organised record of his designs. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>

                            <p class="question">
                                <i>
                                    <b>Questions 34-40</b><br>
                                    Complete the summary below.<br>
                                    Choose <b>ONE WORD ONLY</b> from the passage for each answer.<br>
                                    Write your answers in boxes 34-40 on your answer sheet.
                                </i>
                            </p>
                            <h6><center><b>Leonardo da Vinci’s ideal city</b></center></h6>
                            <p>
                                A collection of Leonardo da Vinci’s paperwork reveals his design of a new city beside the Ticino River. This was to provide better <b>34</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> for trade and a less polluted environment. Although Leonardo da Vinci’s city shared many of the ideals of his time, some of his innovations were considered unconventional in their design. They included features that can be seen in some tower blocks today, such as <b>35</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> on the exterior of a building.
                            </p>
                            <p>
                                Leonardo da Vinci wasn’t only an architect. His expertise in <b>36</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> was evident in his plans for artificial canals within his ideal city. He also believed that the height of houses should relate to the width of streets in case earthquakes occurred. The design of many cities in Italy today follows this <b>37</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> .
                            </p>
                            <p>
                                While some cities from <b>38</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> times have aspects that can also be found in Leonardo’s designs, his ideas weren’t put into practice until long after his  death. <b>39</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> is one example of a city that was redesigned in the 19th century in the way that Leonardo had envisaged. His ideas are also relevant to today’s world, where building <b>40</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++;?> no longer seems to be the best approach.
                            </p>
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
                    <img src="<?= base_url()?>public/assets/img-soal/writing-1-soal-004.png" alt="" height="400px">
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

            <p><span>Type your answer here</span></p>
            <textarea id="textarea-2" class="form-control mb-3" name="text_writing[1]" data-bs-toggle="autosize" placeholder="" style="height: 300px;"></textarea>
            <center>Total word Count : <span id="count-textarea-2">0</span></center>
        </div>
    </div>
<?= $this->endSection()?>