<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<main class="main-content  mt-0">
  <section>
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-0">
              <div class="card-header pb-0 text-left bg-transparent">
                <div class="text-center">
                  <img src="public/assets/img/logo.png" alt="" class="img-fluid" width="30%">
                  <?php if (empty(session()->getFlashdata('msg')))  :?>
                    <h3 class="font-weight-bolder text-info text-gradient">Registrasi</h3>
                    <p class="mb-0">Silakan mengisi data lengkap Anda</p>
                  <?php endif;?>
                </div>
              </div>
              <div class="card-body">
                <?php if (session()->getFlashdata('msg')) :?>
                    <div class="">
                      <?= session()->getFlashdata('msg'); ?>
                    </div>
                <?php else :?>
                    <?php if (session()->getFlashdata('msg_error')) :?>
                      <div class="">
                        <?= session()->getFlashdata('msg_error'); ?>
                      </div>
                    <?php endif;?>
                    <form action="<?= base_url()?>registration/process" method="post" id="formPeserta">
                        <div class="form-floating mb-3">
                            <input type="text" name="nama" class="form form-control required" required>
                            <label>Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" name="tgl_lahir" class="form form-control required" required>
                            <label>Tgl Lahir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="email" class="form form-control required" required>
                            <label>Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="no_hp" class="form form-control number required" required>
                            <label>No Whatsapp</label>
                            <small class="text-danger text-xs">*Isi nomor whatsapp dengan menggunakan kode negara. Misal 081234567890 menjadi 6281234567890</small>
                        </div>
                        <div class="text-sm text-dark">
                            Saya menyetujui untuk mengikuti Prediction Test dan membayar penuh biaya tes dan menyetujui bahwa biaya yang sudah dibayarkan tidak dapat ditarik kembali (refund) dengan alasan apapun.
                            <label class="form-check">
                                <input class="form-check-input required" id="check1" type="checkbox">
                                <span class="form-check-label">
                                    Ya, saya menyetujui hal ini
                                </span>
                            </label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-success btnSimpan">Simpan</button>
                        </div>
                    </form>
                <?php endif;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?= $this->endSection() ?>

<?= $this->section('js-script') ?>
  <script>
    $(".btnSimpan").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'Yakin akan menyimpan data Anda?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
                let form = "#formPeserta";
                let eror = required(form);
                if( eror == 1){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'lengkapi isi form terlebih dahulu'
                    })
                } else if($('#check1').is(':checked') === false){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Anda harus menyetujui persyaratan terlebih dahulu'
                    })
                } else {
                    swal.fire({
                        html: '<h4>Menyimpan Data Anda ...</h4>',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });

                    $(".btnSimpan").html("Menyimpan...");
                    $(".btnSimpan").prop("disabled", true);
                    $("#formPeserta").submit()
                }
            }
        })
    })
  </script>
<?= $this->endSection() ?>