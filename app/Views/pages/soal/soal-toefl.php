<?= $this->extend('pages/soal/layout/page_layout_toefl') ?>

<?= $this->section('content') ?>
    <?php if($full_kuota) :?>
        <div class="container py-7">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4 mb-4">
                                <a href="javascript:void()"><img src="<?= $logo?>" alt="" class="img-fluid"></a>
                            </div>
                            <div class="mb-2 mt-3">
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <?= session()->getFlashdata('msg'); ?>
                                <?php else :?>
                                    <b>The quota of participants in this test is full. Please contact admin for more info</b>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else :?>
        <div class="page page-center" id="login">
            <div class="container py-7">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column mx-auto">
                        <div class="card">
                            <div class="card-body" style="color: black">
                                <div class="text-center mt-4 mb-4">
                                    <a href="javascript:void()"><img src="<?= $logo?>" alt="" class="img-fluid"></a>
                                </div>
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <?= session()->getFlashdata('msg'); ?>
                                <?php else: ?>
                                    <div id="formLogin">
                                        <div class="mb-2 mt-3">
                                            <div class="form-floating mb-3">
                                                <input type="password" name="password" class="form form-control">
                                                <label for="">Password</label>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="button" class="btn bg-gradient-info w-100 btnSignIn">Log In</button>
                                        </div>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="soal_tes" style="display: none">
            <div class="wrapper">
                <div class="page-wrapper" id="">
                    <div class="page-body">
                        <div class="container-xl">
                            <div class="row row-cards FieldContainer" data-masonry='{"percentPosition": true }'>
                                <form action="<?= base_url()?>PesertaToefl/addJawabanToefl" method="post" id="formSoal">
                                    <input type="hidden" name="id_tes" value="<?= $id?>">
                                    <div id="sesi-0">
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h3 class="card-title">Personal Information</h3>
                                            </div>
                                            <div class="card-body" style="color: black">
                                                <?= $form?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-md btn-success btnNext" data-id="sesi-1">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                        $index = 1;
                                        $jumlah_sesi = COUNT($sesi);
                                        foreach ($sesi as $sesi) :?>
                                        <div id="sesi-<?=$index?>" style="display: none">
                                            <input type="hidden" name="sesi-<?=$index + 1?>" value="<?= $sesi['jumlah_soal']?>">
                                            <input type="hidden" name="kunci_sesi[]" value="<?= $sesi['id_sub']?>">
                                            <?php foreach ($sesi['soal'] as $i => $data) :
                                                $item = "";
                                                ?>
                                                <?php if($data['item'] == "soal") :?>
                                                    <?php $soal = '<div class="mb-3">'.$data['data']['soal'].'</div>' ?>
                                                    <input type="hidden" name="jawaban_sesi_<?= $index?>[]" data-id="soal-<?= $i?>" id="jawaban_sesi_<?= $index?><?= $i?>" value="null">
                                                    <?php $pilihan = "";?>
                                                    <?php foreach ($data['data']['pilihan'] as $k => $choice) :?>
                                                        <?php $pilihan .= '
                                                            <div class="mb-3">
                                                                <label style="font-size: 14px; font-weight: normal; color: black">
                                                                    <input type="radio" data-id="'.$index.'|'.$i.'"  name="radio-'.$index.'['.$i.']" value="'.$choice.'"> 
                                                                    '.$choice.'
                                                                </label>
                                                            </div>' ?>
                                                    <?php endforeach;?>
                                                    <?php $item = $soal.$pilihan;?>
                                                <?php elseif($data['item'] == "petunjuk") :
                                                    $item = '<div dir="ltr" class="mb-3">'.$data['data'].'</div>';?>
                                                <?php elseif($data['item'] == "audio") :
                                                    $item = '<center>
                                                                <audio id="audio-'.$data['id_item'].'" class="audio" data-id="'.$data['id_item'].'"><source src="'.base_url().'public/assets/audio-toefl/'.$data['data'].'?t='.time().'" type="audio/mpeg"></audio>
                                                                <progress id="seekbar-'.$data['id_item'].'" value="0" max="1" style="width:100%;"></progress><br>
                                                                <button class="btn btn-success btnAudio" data-id="'.$data['id_item'].'" type="button">play</button>
                                                                <p><small class="text-danger"><i>Note : the audio can only be played once</i></small></p>
                                                            </center>
                                                            ';
                                                ?>
                                                <?php endif;?>
                                                
                                                <?php if($data['tampil'] == "Ya") :?>
                                                    <div class="shadow card mb-3 soal">
                                                        <div class="card-body" style="color: black" id="soal-<?= $i?>">
                                                            <?php if($data['id_text'] != 0) :?>
                                                                <?php $text = textReading($data['id_text']) ;?>
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-lg-8">
                                                                        <?= $text['data'];?>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-4">
                                                                        <?= $item?>
                                                                    </div>
                                                                </div>
                                                            <?php else :?>
                                                                <?= $item;?>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                <?php endif;?>
                                            <?php endforeach;?>

                                            <div class="mb-3">
                                                <!-- jika index = 1, tampilkan tombol back else hanya tampilkan tombol next  -->
                                                <?php if($index == $jumlah_sesi && $jumlah_sesi != 1) :?>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-md btn-info btnSimpan" data-id="sesi-<?= $index + 1?>">
                                                            Save
                                                        </button>
                                                    </div>
                                                <?php elseif($index == 1) :?>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-md btn-success btnNext" data-id="sesi-<?= $index + 1?>">
                                                            Next
                                                        </button>
                                                    </div>
                                                <?php else :?>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-md btn-success btnNext" data-id="sesi-<?= $index + 1?>">
                                                            Next
                                                        </button>
                                                    </div>
                                                <?php endif;?>
                                            </div>

                                        </div>
                                    <?php 
                                        $index++;
                                        endforeach;?>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>
<?= $this->endSection() ?>

<?= $this->section('js-script') ?>
<script>
    let start = false;

    $('.audio').on('timeupdate', function() {
        let id = $(this).data("id");
        $('#seekbar-'+id).attr("value", this.currentTime / this.duration);
    });

    $(".btnSignIn").click(function(){
        let id_tes = $("input[name='id_tes']").val();
        let password = $("input[name='password']").val();

        $.ajax({
            url: "<?= base_url()?>PesertaToefl/passwordCheck",
            method: "POST",
            data: {id_tes:id_tes, password:password},
            success: function(result){
                var $obj = $.parseJSON(result);

                if($obj === null){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid password. Try again.'
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: 'Success!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#login").hide();
                    $("#soal_tes").show();
                }
            }
        })
    })

    $(".btnAudio").click(function(){
        id = $(this).data("id");
        $("#audio-"+id)[0].play();
        $(this).hide();
    })

    var click = false;
    $(".btnNext").click(function(){
        let id = $(this).data("id");

        if(id == "sesi-1"){

            let form = "#sesi-0";

            let email = $(form+" [name='email']").val();
            let id_tes = $("input[name='id_tes']").val();

            
            let eror = required(form);
            
            if(eror == 1){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please complete all of the fields and input valid e-mail address. ',
                })
            } else {
                
                $.ajax({
                    url: "<?= base_url()?>PesertaToefl/cekEmail",
                    data: {email:email, id_tes:id_tes},
                    method: "POST",
                    success: function(result){
                        var $obj = $.parseJSON(result);
                        console.log($obj)

                        if($obj !== null){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Email Anda telah digunakan',
                            })
                        } else {
                            if(click == false) {
                                Swal.fire({
                                    icon: 'question',
                                    html: 'Start the session now?',
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes',
                                    cancelButtonText: 'No'
                                }).then(function (result) {
                                    if (result.value) {
                                        // hide all id 
                                        $("#navbarTes").show();

                                        $("div[id^='sesi-'").hide();
                                        // show sesi 
                                        $("#"+id).show();
                                        
                                        // scroll to top 
                                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                                            $([document.documentElement, document.body]).animate({
                                                scrollTop: $("#elementtoScrollToID").offset().top
                                            }, 1000);
                                        }

                                    } else {
                                        return;
                                    }
                                })
                            } else {
                                // hide all id 
                                $("div[id^='sesi-'").hide();
                                // show sesi 
                                $("#"+id).show();
                                
                                // scroll to top 
                                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                                    $([document.documentElement, document.body]).animate({
                                        scrollTop: $("#elementtoScrollToID").offset().top
                                    }, 1000);
                                }
                            }
                        }
                    }
                })
            }
            
        } else {

            jumlah_soal = $("[name='"+id+"']").val();

            sesi = id.replace("sesi-", "");
            sesi = parseInt(sesi-1);

            if($('#sesi-'+sesi+' input:radio:checked').length != jumlah_soal){
            
                $.each($("#sesi-"+sesi+" [name='jawaban_sesi_"+sesi+"[]']"), function(){
                    index = $(this).data("id");
                    $("#sesi-"+sesi+" #"+index).removeClass("list-group-item-danger")

                    if($(this).val() == "null"){
                        $("#sesi-"+sesi+" #"+index).addClass("list-group-item-danger")
                    }
                })

                if(id == 'sesi-2'){
                    Swal.fire({
                        icon: 'question',
                        html: `You haven't submitted your answer. Are you sure you want to move to the next session?<br><small style="font-size: 0.70em" class="form-text text-danger">You will not be able to return to this session</small>`,
                        showCloseButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No'
                    }).then(function (result) {
                        if (result.value) {
                            if(typeof countDown != 'undefined'){
                                clearInterval(countDown);
                            }

                            if(id == 'sesi-2'){
                                
                                var audios = document.getElementsByTagName('audio');  
                                for(var i = 0, len = audios.length; i < len;i++){  
                                    if(audios[i]){  
                                        audios[i].pause();  
                                    }  
                                }

                                sec = 25 * 60;
                            } else if(id == 'sesi-3'){
                                sec = 55 * 60;
                            }

                            countDiv = document.getElementById("waktu"),
                            secpass,
                            countDown = setInterval(function () {
                                'use strict';
                                secpass(id);
                            }, 1000);

                            // hide all id 
                            $("div[id^='sesi-'").hide();
                            // show sesi 
                            $("#"+id).show();
                            
                            // scroll to top 
                            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                                $([document.documentElement, document.body]).animate({
                                    scrollTop: $("#elementtoScrollToID").offset().top
                                }, 1000);
                            }
                        }
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'You haven’t submitted your answer in this session',
                    })
                }
            } else {
                Swal.fire({
                    icon: 'question',
                    html: 'Move to the next session?<br><small style="font-size: 0.70em" class="form-text text-danger">You will not be able to return to this session</small>',
                    showCloseButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then(function (result) {
                    if (result.value) {
                        if(typeof countDown != 'undefined'){
                            clearInterval(countDown);
                        }

                        if(id == 'sesi-2'){
                            
                            var audios = document.getElementsByTagName('audio');  
                            for(var i = 0, len = audios.length; i < len;i++){  
                                if(audios[i]){  
                                    audios[i].pause();  
                                }  
                            }

                            sec = 25 * 60;
                        } else if(id == 'sesi-3'){
                            sec = 55 * 60;
                        }

                        countDiv = document.getElementById("waktu"),
                        secpass,
                        countDown = setInterval(function () {
                            'use strict';
                            secpass(id);
                        }, 1000);

                        // hide all id 
                        $("div[id^='sesi-'").hide();
                        // show sesi 
                        $("#"+id).show();
                        
                        // scroll to top 
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            $([document.documentElement, document.body]).animate({
                                scrollTop: $("#elementtoScrollToID").offset().top
                            }, 1000);
                        }
                    }
                })
            }
        }
    })
    
    $(".btnBack").click(function(){
        let id = $(this).data("id");
        $("div[id^='sesi-'").hide();
        $("#"+id).show();
    })

    $(".btnSimpan").click(function(){
        let id = $(this).data("id");
        jumlah_soal = $("[name='"+id+"']").val();

        sesi = id.replace("sesi-", "");
        sesi = parseInt(sesi-1);

        if($('#sesi-'+sesi+' input:radio:checked').length != jumlah_soal){
        
            $.each($("#sesi-"+sesi+" [name='jawaban_sesi_"+sesi+"[]']"), function(){
                index = $(this).data("id");
                $("#sesi-"+sesi+" #"+index).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#sesi-"+sesi+" #"+index).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You haven’t submitted your answer in this session',
            })
        } else {
            Swal.fire({
                icon: 'question',
                html: 'Finish the test?',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then(function (result) {
                if (result.value) {
                    swal.fire({
                        html: '<h4>Saving your answer ...</h4>',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });

                    $(".btnSimpan").html("Saving...");
                    $(".btnSimpan").prop("disabled", true);
                    $(".btnBack").prop("disabled", true);
                    $("#formSoal").submit()
                }
            })
        }
    })

    function secpass(id) {
        'use strict';
        var min = Math.floor(sec / 60),
        remSec  = sec % 60;
        if (remSec < 10) {
            remSec = '0' + remSec;
        }
        if (min < 10) {
            min = '0' + min;
        }

        countDiv.innerHTML = min + ":" + remSec;
        if (sec > 0) {
            sec = sec - 1;
        } else {
            if(id == 'sesi-2'){
                clearInterval(countDown);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Waktu Anda telah habis untuk mengerjakan soal structure',
                    allowOutsideClick: false,
                }).then(function (result) {
                    
                    // scroll to top 
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#elementtoScrollToID").offset().top
                        }, 1000);
                    }

                    // hide all id 
                    $("div[id^='sesi-'").hide();
                    // show sesi 
                    $("#sesi-3").show();

                    sec = 55 * 60
                    countDown = setInterval(function () {
                        'use strict';
                        secpass('sesi-3');
                    }, 1000);
                })
            } else {
                clearInterval(countDown);

                // scroll to top 
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#elementtoScrollToID").offset().top
                    }, 1000);
                }

                swal.fire({
                    title: 'Waktu Anda Telah Habis',
                    html: '<h4>Saving your answer ...</h4>',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

                $(".btnSimpan").html("Saving...");
                $(".btnSimpan").prop("disabled", true);
                $(".btnBack").prop("disabled", true);
                $("#formSoal").submit()
            }
        }
    }

    $('input:radio').click(function () {
        let id = $(this).data("id");
        id = id.split("|");
        let value = $(this).val();
        $("#jawaban_sesi_"+id[0]+""+id[1]).val(value);
    });

    document.addEventListener('play', function(e){  
        var audios = document.getElementsByTagName('audio');  
        for(var i = 0, len = audios.length; i < len;i++){  
            if(audios[i] != e.target){  
                audios[i].pause();  
            }  
        }  
    }, true);
</script>
<?= $this->endSection() ?>
