<?= $this->extend('pages/soal/layout/soal_layout') ?>

<?= $this->section('sesi-listening') ?>
    <?php $i = 0;?>
    <div class="shadow card mb-3">
        <div class="card-body">
            <center>
            <audio id="audio-1" class="audio" data-id="1"><source src="<?= base_url('public/assets/myaudio/soal-005.mp3?t='.time())?>" type="audio/mpeg"></audio>
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
                <b>PART 1 <i>Questions 1–10</i></b><br>
                <i>Complete the notes below.</i><br>
                <i>Write <b>ONE WORD AND/OR A NUMBER</b> for each answer.</i>
            </p>
            <table class="tableSoal w-100">
                <tr>
                    <td class="p-3">
                        <center><h6>JUNIOR CYCLE CAMP</h6></center>
                        <p><b>The course focuses on skills and safety</b></p>
                        <ul type="radio">
                            <li>Charlie would be placed in Level 5.</li>
                            <li>First of all, children at this level are taken to practise in a <b>1)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> .</li>
                        </ul>
                        <p><b>Instructors</b></p>
                        <ul type="radio">
                            <li>Instructors wear <b>2)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> shirts.</li>
                            <li>A <b>3)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> is required and training is given.</li>
                        </ul>
                        <p><b>Classes</b></p>
                        <ul type="radio">
                            <li>The size of the classes is limited.</li>
                            <li>There are quiet times during the morning for a <b>4)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> or a game.</li>
                            <li>Classes are held even if there is <b>5)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> .</li>
                        </ul>
                        <p><b>What to bring</b></p>
                        <ul type="radio">
                            <li>a change of clothing</li>
                            <li>a <b>6)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                            <li>shoes (not sandals)</li>
                            <li>Charlie’s <b>7)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?></li>
                        </ul>
                        <p><b>Day 1</b></p>
                            <ul type="radio">
                                <li>Charlie should arrive at 9.20 am on the first day.</li>
                                <li>Before the class, his <b>8)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> will be checked.</li>
                                <li>He should then go to the <b>10)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> to meet his class instructor.</li>
                            </ul>
                        <p><b>Cost</b></p>
                        <ul type="radio">
                            <li>The course costs <b>10)</b> $ <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> per week.</li>
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
                    <b>Questions 11 - 12</b><br>
                    Choose <b>TWO</b> letters, <b>A-E</b>.
                </i>
            </p>
            <p>
                According to Megan, what are the <b>TWO</b> main advantages of working in the agriculture and horticulture sectors?<br>
                <b>A</b> the active lifestyle<br>
                <b>B</b> the above-average salaries<br>
                <b>C</b> the flexible working opportunities<br>
                <b>D</b> the opportunities for overseas travel<br>
                <b>E</b> the chance to be in a natural environment<br>
            </p>
            <?php $choice = ["A", "B", "C", "D", "E"];?>
            <p><b>11</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>12</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>

            <p class="question">
                <i>
                    <b>Questions 13 - 14</b><br>
                    Choose <b>TWO</b> letters, <b>A-E</b>.
                </i>
            </p>
            <p>
                Which <b>TWO</b> of the following are likely to be disadvantages for people working outdoors?<br>
                <b>A</b> the increasing risk of accidents<br>
                <b>B</b> being in a very quiet location<br>
                <b>C</b> difficult weather conditions at times<br>
                <b>D</b> the cost of housing<br>
                <b>E</b> the level of physical fitness required<br>
            </p>
            <?php $choice = ["A", "B", "C", "D", "E"];?>
            <p><b>13</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>14</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>

            <p class="question">
                <i>
                    <b>Questions 15 - 20</b><br>
                    What information does Megan give about each of the following job opportunities?<br>
                    <i>Choose <b>SIX</b> answers from the box and write the correct letter, <b>A-H</b>, next to Questions 15-20.</i>
                </i>
            </p>
            <p>
                <b>Information</b><br>
                <b>A</b> not a permanent job<br>
                <b>B</b> involves leading a team<br>
                <b>C</b> experience not essential<br>
                <b>D</b> intensive work but also fun<br>
                <b>E</b> chance to earn more through overtime<br>
                <b>F</b> chance for rapid promotion<br>
                <b>G</b> accommodation available<br>
                <b>H</b> local travel involved<br>
            </p>
            <?php $choice = ["A", "B", "C", "D", "E", "F", "G", "H"];?>
            <p><b>Job opportunities</b></p>
            <p><b>15</b> Fresh food commercial manager <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>16</b> Agronomist <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>17</b> Fresh produce buyer <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>18</b> Garden centre sales manager <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>19</b> Tree technician <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
            <p><b>20</b> Farm worker <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <div class="row">
                <p class="question">
                    <b>PART 3</b>
                </p>
                <p class="question">
                    <i>
                        <b>Questions 21 - 22</b><br>
                        Choose <b>TWO</b> letters, <b>A-E</b>.
                    </i>
                </p>
                <p>
                    Which <b>TWO</b> points does Adam make about his experiment on artificial sweeteners?<br>
                    <b>A</b> The results were what he had predicted.<br>
                    <b>B</b> The experiment was simple to set up<br>
                    <b>C</b> A large sample of people was tested.<br>
                    <b>D</b> The subjects were unaware of what they were drinking.<br>
                    <b>E</b> The test was repeated several times for each person.<br>
                </p>
                <?php $choice = ["A", "B", "C", "D", "E"];?>
                <p><b>21</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>22</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>

                
                <p class="question">
                    <i>
                        <b>Questions 23 - 24</b><br>
                        Choose <b>TWO</b> letters, <b>A-E</b>.
                    </i>
                </p>
                <p>
                    Which <b>TWO</b> problems did Rosie have when measuring the fat content of nuts?<br>
                    <b>A</b> She used the wrong sort of nuts.<br>
                    <b>B</b> She used an unsuitable chemical.<br>
                    <b>C</b> She did not grind the nuts finely enough.<br>
                    <b>D</b> The information on the nut package was incorrect.<br>
                    <b>E</b> The weighing scales may have been unsuitable.<br>
                </p>
                <?php $choice = ["A", "B", "C", "D", "E"];?>
                <p><b>23</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>
                <p><b>24</b> <?php echo soal_select_ielts("jawaban_listening[$i]", $choice, "80"); $i++;?></p>

                <p class="question">
                    <i><b>Questions 25-30</b></i><br>
                    Choose the correct letter,<b>A</b>, <b>B</b> or <b>C</b>.
                </p>
                
                <?php
                    $data_soal_25_30  = [
                        [
                            "no" => 25,
                            "soal" => "Adam suggests that restaurants could reduce obesity if their menus",
                            "pilihan" => [
                                "<b>A</b> offered fewer options.",
                                "<b>B</b> had more low-calorie foods.",
                                "<b>C</b> were organised in a particular way.",
                            ],
                            "name" => "jawaban_listening[24]"
                        ],
                        [
                            "no" => 26,
                            "soal" => "The students agree that food manufacturers deliberately",
                            "pilihan" => [
                                "<b>A</b> make calorie counts hard to understand.",
                                "<b>B</b> fail to provide accurate calorie counts.",
                                "<b>C</b> use ineffective methods to reduce calories.",
                            ],
                            "name" => "jawaban_listening[25]"
                        ],
                        [
                            "no" => 27,
                            "soal" => "What does Rosie say about levels of exercise in England?",
                            "pilihan" => [
                                "<b>A</b> The amount recommended is much too low.",
                                "<b>B</b> Most people overestimate how much they do.",
                                "<b>C</b> Women now exercise more than they used to.",
                            ],
                            "name" => "jawaban_listening[26]"
                        ],
                        [
                            "no" => 28,
                            "soal" => "Adam refers to the location and width of stairs in a train station to illustrate",
                            "pilihan" => [
                                "<b>A</b> practical changes that can influence people’s behaviour.",
                                "<b>B</b> methods of helping people who have mobility problems.",
                                "<b>C</b> ways of preventing accidents by controlling crowd movement.",
                            ],
                            "name" => "jawaban_listening[27]"
                        ],
                        [
                            "no" => 29,
                            "soal" => "What do the students agree about including reference to exercise in their presentation?",
                            "pilihan" => [
                                "<b>A</b> They should probably leave it out.",
                                "<b>B</b> They need to do more research on it.",
                                "<b>C</b> They should discuss this with their tutor.",
                            ],
                            "name" => "jawaban_listening[28]"
                        ],
                        [
                            "no" => 30,
                            "soal" => "What are the students going to do next for their presentation?",
                            "pilihan" => [
                                "<b>A</b> prepare some slides for it",
                                "<b>B</b> find out how long they have for it",
                                "<b>C</b> decide on its content and organisation",
                            ],
                            "name" => "jawaban_listening[29]"
                        ],
                    ];
                ?>

                <?php foreach ($data_soal_25_30 as $data_soal) :?>
                    <?= soal_pg_ielts($data_soal)?>
                <?php endforeach;?>
                <?php $i = $i + COUNT($data_soal_25_30)?>
            </div>
        </div>
    </div>

    <div class="shadow card mb-3">
        <div class="card-body ps-4">
            <p class="question">
                <b>PART 4 <i>Questions 31–40</i></b><br>
                <i>Complete the notes below.</i><br>
                <i>Write <b>ONE WORD ONLY</b> for each answer.</i>
            </p>

            
            <table class="tableSoal w-100">
                <tr>
                    <td class="p-3">
                        <center><h6>Hand knitting</h6></center>
                        <p><b>Interest in knitting</b></p>
                        <ul type="radio">
                            <li>
                                a winding spiral path leading to a central area
                            </li>
                        </ul>
                        <p><b>Labyrinths compared with mazes</b></p>
                        <ul type="radio">
                            <li>
                                Knitting has a long history around the world.
                            </li>
                            <li>
                                We imagine someone like a <b>31)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> knitting.
                            </li>
                            <li>
                                A <b>32)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> ago, knitting was expected to disappear.
                            </li>
                            <li>
                                The number of knitting classes is now increasing.
                            </li>
                            <li>
                                People are buying more <b>33)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> for knitting nowadays.
                            </li>
                        </ul>
                        <p><b>Benefits of knitting</b></p>
                        <ul type="radio">
                            <li>gives support in times of <b>34)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> difficulty</li>
                            <li>requires only <b>35)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> skills and little money to start</li>
                            <li>reduces stress in a busy life</li>
                        </ul>
                        <p><b>Early knitting</b></p>
                        <ul type="radio">
                            <li>The origins are not known.</li>
                            <li>Findings show early knitted items to be <b>36)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> in shape.</li>
                            <li>The first needles were made of natural materials such as wood and <b>37)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> .</li>
                            <li>Early yarns felt <b>38)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> to touch.</li>
                            <li>Wool became the most popular yarn for spinning.</li>
                            <li>Geographical areas had their own <b>39)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> of knitting.</li>
                            <li>Everyday tasks like looking after <b>40)</b> <?php echo soal_isian_ielts("jawaban_listening[$i]"); $i++?> were done while knitting.</li>
                        </ul>
                    </td>
                </tr>
            </table>

        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('sesi-reading')?>
    <?php $i = 0?>
    <?php
        $text = "
        
            <p class='question'>
                <b>READING PASSAGE 1</b><br>
                You should spend about 20 minutes on <b>Questions 1-13</b> which are based on Reading Passage 1 below.
            </p>

            <h6><center>Urban farming</center></h6><br>
            <center><i>In Paris, urban farmers are trying a soil-free approach to agriculture that uses less space and fewer resources. Could it help cities face the threats to our food supplies?</i></center>
            
            <div class='reading-1'>
                ((p1))
                    On top of a striking new exhibition hall in southern Paris, the world’s largest urban rooftop farm has started to bear fruit. Strawberries that are small, intensely flavoured and resplendently red sprout abundantly from large plastic tubes. Peer inside and you see the tubes are completely hollow, the roots of dozens of strawberry plants dangling down inside them. From identical vertical tubes nearby burst row upon row of lettuces; near those are aromatic herbs, such as basil, sage and peppermint. Opposite, in narrow, horizontal trays packed not with soil but with coconut fibre, grow cherry tomatoes, shiny aubergines and brightly coloured chards.
                ((/p1))
                ((p2))
                    Pascal Hardy, an engineer and sustainable development consultant, began experimenting with vertical farming and aeroponic growing towers- as the soil-free plastic tubes are known – on his Paris apartment block roof five years ago. The urban rooftop space above the exhibition hall is somewhat bigger: 14,000 square metres and almost exactly the size of a couple of football pitches. Already, the team of young urban farmers who tend it have picked, in one day, 3,000 lettuces and 150 punnets of strawberries. When the remaining two thirds of the vast open area are in production, 20 staff will harvest up to 1,000 kg of perhaps 35 different varieties of fruit and vegetables, every day. ‘We’re not ever, obviously, going to feed the whole city this way,’ cautions Hardy. ‘In the urban environment you’re working with very significant practical constraints, clearly, on what you can do and where. But if enough unused space can be developed like this, there’s no reason why you shouldn’t eventually target maybe between 5% and 10% of consumption.’
                ((/p2))
                ((p3))
                    Perhaps most significantly, however, this is a real-life showcase for the work of Hardy’s flourishing urban agriculture consultancy, Agripolis, which is currently fielding enquiries from around the world to design, build and equip a new breed of soil-free inner-city farm. ‘The method’s advantages are many,’ he says. ‘First, I don’t much like the fact that most of the fruit and vegetables we eat have been treated with something like 17 different pesticides, or that the intensive farming techniques that produced them are such huge generators of greenhouse gases. I don’t much like the fact, either, that they’ve travelled an average of 2,000 refrigerated kilometres to my plate, that their quality is so poor, because the varieties are selected for their capacity to withstand such substantial journeys, or that 80% of the price I pay goes to wholesalers and transport companies, not the producers.’
                ((/p3))
                ((p4))
                    Produce grown using this soil-free method, on the other hand- which relies solely on a small quantity of water, enriched with organic nutrients, pumped around a closed circuit of pipes, towers and trays- is ‘produced up here, and sold locally, just down there. It barely travels at all,’ Hardy says. ‘You can select crop varieties for their flavour, not their resistance to the transport and storage chain, and you can pick them when they’re really at their best, and not before.’ No soil is exhausted, and the water that gently showers the plants’ roots every 12 minutes is recycled, so the method uses 90% less water than a classic intensive farm for the same yield.
                ((/p4))
                ((p5))
                    Urban farming is not, of course, a new phenomenon. Inner-city agriculture is booming from Shanghai to Detroit and Tokyo to Bangkok. Strawberries are being grown in disused shipping containers, mushrooms in underground carparks. Aeroponic farming, he says, is ‘virtuous’. The equipment weighs little, can be installed on almost any flat surface and is cheap to buy: roughly 100 to 150 per square metre. It is cheap to run, too, consuming a tiny fraction of the electricity used by some techniques.
                ((/p5))
                ((p6))
                    Produce grown this way typically sells at prices that, while generally higher than those of classic intensive agriculture, are lower than soil-based organic growers. There are limits to what farmers can grow this way, of course, and much of the produce is suited to the summer months. ‘Root vegetables we cannot do, at least not yet,’ he says. ‘Radishes are OK, but carrots, potatoes, that kind of thing- the roots are simply too long. Fruit trees are obviously not an option. And beans tend to take up a lot of space for not much return.’ Nevertheless, urban farming of the kind being practised in Paris is one part of a bigger and fast-changing picture that is bringing food production closer to our lives.
                ((/p6))
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
                                <i><b>Questions 1-3</b></i><br>
                            </p>
                            <p class="question">
                                <i>
                                    Complete the sentences below.<br>
                                    Choose <b>NO MORE THAN TWO WORDS ANDIOR A NUMBER</b> from the passage for each answer.<br>
                                    Write your answers in boxes 1-3 on your answer sheet.
                                </i>
                            </p>

                            <h6><center><b>Urban farming in Paris</b></center></h6>
                            <p><b>1</b> Vertical tubes are used to grow strawberries, <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> and herbs.</p>
                            <p><b>2</b> There will eventually be a daily harvest of as much as <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> in weight of fruit and vegetables.</p>
                            <p><b>3</b> It may be possible that the farm’s produce will account for as much as 10% of the city’s <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> overall.</p>

                            <p class="question">
                                <i><b>Questions 4-7</b></i><br>
                            </p>
                            <p class="question">
                                <i>
                                    Complete the table below.<br>
                                    Choose <b>ONE WORD ONLY</b> from the passage for each answer.<br>
                                    Write your answers in boxes 4-7 on your answer sheet.
                                </i>
                            </p>

                            <table class="tableTes w-100 mb-3">
                                <tr>
                                    <th colspan=4>Intensive farming versus aeroponic urban farming</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><b>Growth</b></td>
                                    <td><b>Selection</b></td>
                                    <td><b>Sale</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        Intensive farming
                                    </td>
                                    <td>
                                        <ul type="radio">
                                            <li>
                                                wide range of <b>4)</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> used
                                            </li>
                                            <li>
                                                techniques pollute air	
                                            </li>
                                        </ul>
                                    </td>	
                                    <td>
                                        <ul type="radio">
                                            <li>quality not good</li>
                                            <li>varieties of fruit and vegetables chosen that can survive long <b>5)</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?>	</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul type="radio">
                                            <li><b>6)</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> receive very little of overall income</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Aeroponic 
                                    </td>
                                    <td>
                                        <ul type="radio">
                                            <li>
                                                no soil used
                                            </li>
                                        </ul>
                                    </td>	
                                    <td>
                                        <ul type="radio">
                                            <li>produce chosen</li>
                                        </ul>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        urban farming 
                                    </td>
                                    <td>
                                        <ul type="radio">
                                            <li>
                                                nutrients added to water, which is recycled
                                            </li>
                                        </ul>
                                    </td>	
                                    <td>
                                        <ul type="radio">
                                            <li>because of its <b>7)</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?></li>
                                        </ul>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </table>

                            <p class="question">
                                <i><b>Questions 8-13</b></i><br>
                                Do the following statements agree with the information given in Reading Passage 1?<br>
                                <i>In boxes 8-13 on your answer sheet, write</i>
                            </p>
                            <table class="tableTes w-100 mb-3">
                                <tr>
                                    <td><b><i>TRUE</i></b></td>
                                    <td>if the statement agrees with the information</td>
                                </tr>
                                <tr>
                                    <td><b><i>FALSE</i></b></td>
                                    <td>if the statement contradicts the information</td>
                                </tr>
                                <tr>
                                    <td><b><i>NOT GIVEN</i></b></td>
                                    <td>if there is no information on this</td>
                                </tr>
                            </table>

                            <?php $choice = ["TRUE", "FALSE", "NOT GIVEN"];?>
                            <p><b>8</b> Urban farming can take place above or below ground. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>9</b> Some of the equipment used in aeroponic farming can be made by hand. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>10</b> Urban farming relies more on electricity than some other types of farming. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>11</b> Fruit and vegetables grown on an aeroponic urban farm are cheaper than traditionally grown organic produce. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>12</b> Most produce can be grown on an aeroponic urban farm at any time of the year. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
                            <p><b>13</b> Beans take longer to grow on an urban farm than other vegetables. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "120"); $i++?></p>
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

            <h6><center>Forest management in Pennsylvania, USA</center></h6><br>
            <center><i>How managing low-quality wood (also known as low-use wood) for bioenergy can encourage sustainable forest management</i></center>
            
            <div class='reading-2'>
                ((p1))
                    ((b1))A((/b1))((br1))
                    A tree’s ‘value’ depends on several factors including its species, size, form, condition, quality, function, and accessibility, and depends on the management goals for a given forest. The same tree can be valued very differently by each person who looks at it. A large, straight black cherry tree has high value as timber to be cut into logs or made into furniture, but for a landowner more interested in wildlife habitat, the real value of that stem (or trunk) may be the food it provides to animals. Likewise, if the tree suffers from black knot disease, its value for timber decreases, but to a woodworker interested in making bowls, it brings an opportunity for a unique and beautiful piece of art.
                ((/p1))
                ((p2))
                    ((b2))B((/b2))((br2))
                    In the past, Pennsylvania landowners were solely interested in the value of their trees as high-quality timber. The norm was to remove the stems of highest quality and leave behind poorly formed trees that were not as well suited to the site where they grew. This practice, called ‘high-grading’, has left a legacy of ‘low-use wood’ in the forests. Some people even call these ‘junk trees’, and they are abundant in Pennsylvania. These trees have lower economic value for traditional timber markets, compete for growth with higher-value trees, shade out desirable regeneration and decrease the health of a stand leaving it more vulnerable to poor weather and disease. Management that specifically targets low-use wood can help landowners manage these forest health issues, and wood energy markets help promote this.
                ((/p2))
                ((p3))
                    ((b3))C((/b3))((br3))
                    Wood energy markets can accept less expensive wood material of lower quality than would be suitable for traditional timber markets. Most wood used for energy in Pennsylvania is used to produce heat or electricity through combustion. Many schools and hospitals use wood boiler systems to heat and power their facilities, many homes are primarily heated with wood, and some coal plants incorporate wood into their coal streams to produce electricity. Wood can also be gasified for electrical generation and can even be made into liquid fuels like ethanol and gasoline for lorries and cars. All these products are made primarily from low-use wood. Several tree- and plant-cutting approaches, which could greatly improve the long-term quality of a forest, focus strongly or solely on the use of wood for those markets.
                ((/p3))
                ((p4))
                    ((b4))D((/b4))((br4))
                    One such approach is called a Timber Stand Improvement (TSI) Cut. In a TSI Cut, really poor-quality tree and plant material is cut down to allow more space, light, and other resources to the highest-valued stems that remain. Removing invasive plants might be another primary goal of a TSI Cut. The stems that are left behind might then grow in size and develop more foliage and larger crowns or tops that produce more coverage for wildlife; they have a better chance to regenerate in a less crowded environment. TSI Cuts can be tailored to one farmer’s specific management goals for his or her land.
                ((/p4))
                ((p5))
                    ((b5))E((/b5))((br5))
                    Another approach that might yield a high amount of low-use wood is a Salvage Cut. With the many pests and pathogens visiting forests including hemlock wooly adelgid, Asian longhomed beetle, emerald ash borer, and gypsy moth, to name just a few, it is important to remember that those working in the forests can help ease these issues through cutting procedures. These types of cut reduce the number of sick trees and seek to manage the future spread of a pest problem. They leave vigorous trees that have stayed healthy enough to survive the outbreak.
                ((/p5))
                ((p6))
                    ((b6))F((/b6))((br6))
                    A Shelterwood Cut, which only takes place in a mature forest that has already been thinned several times, involves removing all the mature trees when other seedlings have become established. This then allows the forester to decide which tree species are regenerated. It leaves a young forest where all trees are at a similar point in their growth. It can also be used to develop a two-tier forest so that there are two harvests and the money that comes in is spread out over a decade or more.
                ((/p6))
                ((p7))
                    ((b7))G((/b7))((br7))
                    Thinnings and dense and dead wood removal for fire prevention also center on the production of low-use wood. However, it is important to remember that some retention of what many would classify as low-use wood is very important. The tops of trees that have been cut down should be left on the site so that their nutrients cycle back into the soil. In addition, trees with many cavities are extremely important habitats for insect predators like woodpeckers, bats and small mammals. They help control problem insects and increase the health and resilience of the forest. It is also important to remember that not all small trees are low-use. For example, many species like hawthorn provide food for wildlife. Finally, rare species of trees in a forest should also stay behind as they add to its structural diversity.
                ((/p7))
                ((p8))
                    ((sup1))*((/sup1))Stand – An area covered with trees that have common features (e.g. size)
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
                                <i>Questions 14-18</i><br>
                                Reading Passage 2 has seven paragraphs, <b>A-G</b>.<br>
                                Which paragraph contains the following information?<br>
                                <i>
                                    Write the correct letter, <b>A-G</b>, in boxes 14-18 on your answer sheet.<br>
                                    <b>NB</b>   You may use any letter more than once.
                                </i>
                            </p>
                            <?php $choice = ["A", "B", "C", "D", "E", "F", "G"];?>
                            <p><b>14</b> bad outcomes for a forest when people focus only on its financial reward <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>15</b> reference to the aspects of any tree that contribute to its worth <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>16</b> mention of the potential use of wood to help run vehicles <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>17</b> examples of insects that attack trees <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>18</b> an alternative name for trees that produce low-use wood <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>

                            <p class="question">
                                <b>Questions 19-21</b><br>
                                Look at the following purposes (Questions 18-21) and the list of timber cuts below.<br>
                                Match each purpose with the correct timber cut, <b>A</b>, <b>B</b> or <b>C</b>.<br>
                                Write the correct letter, <b>A</b>, <b>B</b> or <b>C</b>, in boxes 19-21 on your answer sheet.<br>
                                <b>NB</b>   You may use any letter more than once.<br>
                            </p>
                            <p>
                                <b>List of Timber Cuts</b><br>
                                <b>A</b> a TSI Cut<br>
                                <b>B</b> a Salvage Cut<br>
                                <b>C</b> a Shelterwood Cut
                            </p>
                            
                            <?php $choice = ["A", "B", "C"]?>

                            <p><b>19</b> to remove trees that are diseased <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>20</b> to generate income across a number of years <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>21</b> to create a forest whose trees are close in age <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            
                            <p class="question">
                                <b>Questions 22-26</b><br>
                                <i>
                                    Complete the sentences below.<br>
                                    Choose <b>ONE WORD ONLY</b> from the passage for each answer.<br>
                                    Write your answers in boxes 22-26 on your answer sheet.
                                </i>
                            </p>

                            <p><b>22</b> Some dead wood is removed to avoid the possibility of <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> .</p>
                            <p><b>23</b> The <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> from the tops of cut trees can help improve soil quality.</p>
                            <p><b>24</b> Some damaged trees should be left, as their <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> provide habitats for a range of creatures.</p>
                            <p><b>25</b> Some trees that are small, such as <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?>, are a source of food for animals and insects.</p>
                            <p><b>26</b> Any trees that are <?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> should be left to grow, as they add to the variety of species in the forest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $text = "
            <p class='question'>
                <b>READING PASSAGE 3</b><br>
                You should spend about 20 minutes on <b>Questions 27-40</b> which are based on Reading Passage 3 below.
            </p>
            <h6><center>Conquering Earth’s space junk problem</center></h6><br>
            <i><center>Satellites, rocket shards and collision debris are creating major traffic risks in orbit around the planet. Researchers are working to reduce these threats</center></i>

            <div class='reading-3'>
                ((p1))
                    ((b1))A((/b1))((br1))
                    Last year, commercial companies, military and civil departments and amateurs sent more than 400 satellites into orbit, over four times the yearly average in the previous decade. Numbers could rise even more sharply if leading space companies follow through on plans to deploy hundreds to thousands of large constellations of satellites to space in the next few years.((br20))
                    All that traffic can lead to disaster. Ten years ago, a US commercial Iridium satellite smashed into an inactive Russian communications satellite called Cosmos-2251, creating thousands of new pieces of space shrapnel that now threaten other satellites in low Earth orbit – the zone stretching up to 2,000 kilometres in altitude. Altogether, there are roughly 20,000 human-made objects in orbit, from working satellites to small rocket pieces. And satellite operators can’t steer away from every potential crash, because each move consumes time and fuel that could otherwise be used for the spacecraft’s main job.
                ((/p1))
                ((p2))
                    ((b2))B((/b2))((br2))
                        Concern about space junk goes back to the beginning of the satellite era, but the number of objects in orbit is rising so rapidly that researchers are investigating new ways of attacking the problem. Several teams are trying to improve methods for assessing what is in orbit, so that satellite operators can work more efficiently in ever-more-crowded space. Some researchers are now starting to compile a massive data set that includes the best possible information on where everything is in orbit. Others are developing taxonomies of space – working on measuring properties such as the shape and size of an object, so that satellite operators know how much to worry about what’s coming their way.((br21))
                        The alternative, many say, is unthinkable. Just a few uncontrolled space crashes could generate enough debris to set off a runaway cascade of fragments, rendering near-Earth space unusable. ‘If we go on like this, we will reach a point of no return,’ says Carolin Frueh, an astrodynamical researcher at Purdue University in West Lafayette, Indiana.
                ((/p2))
                ((p3))
                    ((b3))C((/b3))((br3))
                    Even as our ability to monitor space objects increases, so too does the total number of items in orbit. That means companies, governments and other players in space are collaborating in new ways to avoid a shared threat. International groups such as the Inter-Agency Space Debris Coordination Committee have developed guidelines on space sustainability. Those include inactivating satellites at the end of their useful life by venting pressurised materials or leftover fuel that might lead to explosions. The intergovernmental groups also advise lowering satellites deep enough into the atmosphere that they will burn up or disintegrate within 25 years. But so far, only about half of all missions have abided by this 25-year goal, says Holger Krag, head of the European Space Agency’s space-debris office in Darmstadt, Germany. Operators of the planned large constellations of satellites say they will be responsible stewards in their enterprises in space, but Krag worries that problems could increase, despite their best intentions. ‘What happens to those that fail or go bankrupt?’ he asks. They are probably not going to spend money to remove their satellites from space.’
                ((/p3))
                ((p4))
                    ((b4))D((/b4))((br4))
                    In theory, given the vastness of space, satellite operators should have plenty of room for all these missions to fly safely without ever nearing another object. So some scientists are tackling the problem of space junk by trying to find out where all the debris is to a high degree of precision. That would alleviate the need for many of the unnecessary manoeuvres that are carried out to avoid potential collisions. ‘If you knew precisely where everything was, you would almost never have a problem,’ says Marlon Sorge, a space-debris specialist at the Aerospace Corporation in El Segundo, California.
                ((/p4))
                ((p5))
                    ((b5))E((/b5))((br5))
                    The field is called space traffic management, because it’s similar to managing traffic on the roads or in the air. Think about a busy day at an airport, says Moriba Jah, an astrodynamicist at the University of Texas at Austin: planes line up in the sky, landing and taking off close to one another in a carefully choreographed routine. Air-traffic controllers know the location of the planes down to one metre in accuracy. The same can’t be said for space debris. Not all objects in orbit are known, and even those included in databases are not tracked consistently.
                ((/p5))
                ((p6))
                    ((b6))F((/b6))((br6))
                    An additional problem is that there is no authoritative catalogue that accurately lists the orbits of all known space debris. Jah illustrates this with a web-based database that he has developed. It draws on several sources, such as catalogues maintained by the US and Russian governments, to visualise where objects are in space. When he types in an identifier for a particular space object, the database draws a purple line to designate its orbit. Only this doesn’t quite work for a number of objects, such as a Russian rocket body designated in the database as object number 32280. When Jah enters that number, the database draws two purple lines: the US and Russian sources contain two completely different orbits for the same object. Jah says that it is almost impossible to tell which is correct, unless a third source of information made it possible to cross-correlate.((br25))
                    Jah describes himself as a space environmentalist: ‘I want to make space a place that is safe to operate, that is free and useful for generations to come.’ Until that happens, he argues, the space community will continue devolving into a tragedy in which all spaceflight operators are polluting a common resource.
                ((/p6))
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
                                <b><i>Questions 27-31</i></b><br>
                                Reading Passage 3 has six sections, <b> A-F.</b><br>
                                Which section contains the following information?<br>
                                Write the correct number, <b>A-F</b>, in boxes 27-31 on your answer sheet.</i>
                            </p>

                            <?php $choice = ["A", "B", "C", "D", "E", "F"];?>

                            <p><b>27</b> a reference to the cooperation that takes place to try and minimise risk <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>28</b> an explanation of a person’s aims <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>29</b> a description of a major collision that occurred in space <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>30</b> a comparison between tracking objects in space and the efficiency of a transportation system <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>31</b> a reference to efforts to classify space junk <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>

                            <p class="question">
                                <b><i>Questions 32-35</i></b><br>
                                <i>
                                    Complete the summary below.<br>
                                    Choose <b>ONE WORD ONLY</b> from the passage for each answer.<br>
                                    Write your answers in boxes 32-35 on your answer sheet.
                                </i>
                            </p>

                            <h6><center><b>The Inter-Agency Space Debris Coordination Committee</b></center></h6>
                            <p>
                                The committee gives advice on how the <b>32</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> of space can be achieved. The committee advises that when satellites are no longer active, any unused <b>33</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> or pressurised material that could cause <b>34</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> should be removed.
                            </p>
                            <p>
                                Although operators of large satellite constellations accept that they have obligations as stewards of space, Holger Krag points out that the operators that become <b>35</b><?php echo soal_isian_ielts("jawaban_reading[$i]"); $i++?> are unlikely to prioritise removing their satellites from space.
                            </p>

                            <p class="question">
                                <i><b>Questions 36-40</b></i><br>
                                Look at the following statements (Questions 36-40) and the list of people below.<br>
                                Match each statement with the correct person, <b>A</b>, <b>B</b>, <b>C</b> or <b>D</b>.<br>
                                Write the correct letter, <b>A</b>, <b>B</b>, <b>C</b> or <b>D, in boxes 36-40 on your answer sheet.<br>
                                <b></b> You may use any letter more than once.
                            </p>
                            <p>
                                <b>List of People</b><br>
                                <b>A</b> Carolin Frueh<br>
                                <b>B</b> Holger Krag<br>
                                <b>C</b> Marlon Sorge<br>
                                <b>D</b> Moriba Jah<br>
                            </p>
                            <?php $choice = ["A", "B", "C", "D"];?>
                            
                            <p><b>36</b> Knowing the exact location of space junk would help prevent any possible danger. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>37</b> Space should be available to everyone and should be preserved for the future. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>38</b> A recommendation regarding satellites is widely ignored. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>39</b> There is conflicting information about where some satellites are in space. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
                            <p><b>40</b> There is a risk we will not be able to undo the damage that occurs in space. <?php echo soal_select_ielts("jawaban_reading[$i]", $choice, "80"); $i++?></p>
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
                    <img src="<?= base_url()?>public/assets/img-soal/writing-1-soal-005.png" alt="" height="400px">
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

            <p><span>Type your answer here</span></p>
            <textarea id="textarea-2" class="form-control mb-3" name="text_writing[1]" data-bs-toggle="autosize" placeholder="" style="height: 300px;"></textarea>
            <center>Total word Count : <span id="count-textarea-2">0</span></center>
        </div>
    </div>
<?= $this->endSection()?>