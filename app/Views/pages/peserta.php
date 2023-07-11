<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="col-12">
  <div class="card mb-4">
    <div class="card-header pb-0 d-flex justify-content-between">
      <div class="d-lg-flex">
        <div>
          <h5 class="mb-0"><?= $title ?></h5>
          <p class="text-sm mb-0">
            List Peserta Terdaftar
          </p>
        </div>
      </div>
      <div class="d-lg-flex">
      </div>
    </div>
    <div class="card-body p-3">
      <div class="row">
        <div class="card">
          <div class="">
            <table class="table table-hover align-items-center mb-0 text-dark" id="table-peserta">
              <thead>
                <tr>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder"></th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder desktop w-1">Tgl. Daftar</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder all">Nama Lengkap</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder desktop">Email</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder all">No. WA</th>
                  <!-- <th class="text-uppercase text-dark text-xxs font-weight-bolder all">Action</th> -->
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('modal') ?>
<!-- Modal Add Data Tes-->
<div class="modal fade" id="modalFormKurir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalFormKurirLabel">Tambah Kurir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- KALAU SUKSES -->
        <div class="alert alert-success fade show text-light alert-sukses" role="alert" style="display: none">
          <div class="sukses"></div>
        </div>
        <!-- KALAU ERROR -->
        <div class="alert alert-danger fade show text-light alert-error" role="alert" style="display: none">
          <div class="error"></div>
        </div>
        <form id="formTambahKurir">
            <input type="hidden" name="id_kurir" id="id_kurir">
            <div class="col-12 mb-3">
                <label>Tgl Bergabung</label>
                <input name="tgl_bergabung" class="multisteps-form__input form-control" type="date">
            </div>
            <div class="col-12 mb-3">
                <label>Nama Kurir</label>
                <input name="nama_kurir" class="multisteps-form__input form-control" type="text" placeholder="nama kurir">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="jenis_kelamin">Gender</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="multisteps-form__input form-control">
                <option value="">Pilih Gender</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label>Tempat Lahir</label>
                <input name="t4_lahir" class="multisteps-form__input form-control" type="text" placeholder="tempat lahir">
            </div>
            <div class="col-12 mb-3">
                <label>Tgl Lahir</label>
                <input name="tgl_lahir" class="multisteps-form__input form-control" type="date">
            </div>
            <div class="col-12 mb-3">
                <label>No. KTP</label>
                <input name="no_ktp" class="multisteps-form__input form-control" type="text" placeholder="nomor ktp">
            </div>
            <div class="col-12 mb-3">
                <label>No. HP</label>
                <input name="no_hp" class="multisteps-form__input form-control" type="text" placeholder="nomor hp">
            </div>
            <div class="col-12 mb-3">
                <label>No. WA</label>
                <input name="no_wa" class="multisteps-form__input form-control" type="text" placeholder="nomor wa">
                <p class='text-danger text-xs'>isi nomor wa menggunakan kode negara misal : 6281xxxx</p>
            </div>
            <div class="col-12 mb-3">
                <label>Username</label>
                <input name="username" class="multisteps-form__input form-control" type="text" placeholder="username">
                <p class='text-danger text-xs'>username digunakan untuk mengakses web kurir</p>
            </div>
            <div class="col-12 mb-3">
                <label>Password</label>
                <input name="password" class="multisteps-form__input form-control" type="password">
                <p class='text-danger text-xs'>password digunakan untuk mengakses web kurir</p>
            </div>
            <div class="mb-3">
                <label for="foto_ktp" class="form-label">Foto KTP</label>
                <div id="view_foto_ktp" style="display:none" class="text-center mb-3"></div>
                <input name="foto_ktp" class="form-control" type="file" id="foto_ktp">
            </div>
            <div class="mb-3">
                <label for="foto_bersama_ktp" class="form-label">Foto Bersama KTP</label>
                <div id="view_foto_bersama_ktp" style="display:none" class="text-center mb-3"></div>
                <input name="foto_bersama_ktp" class="form-control" type="file" id="foto_bersama_ktp">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-info" id="btnSimpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js-script') ?>
<script>
  // kumpulan function

  document.addEventListener('DOMContentLoaded', () => {
    showData();

    const btnModalFormPeserta = $(".btnModalFormPeserta");
    const btnSimpan = $("#btnSimpan");

    btnModalFormPeserta.on("click", showModalFormPeserta);
    btnSimpan.on("click", tambahKurir);
  });

  function showModalFormPeserta() {
    $('#modalFormKurirLabel').html('Tambah Kurir');
    $("#formTambahKurir")[0].reset();
    $(`#formTambahKurir [name='id_kurir']`).val(0);
    $("#view_foto_ktp").hide();
    $("#view_foto_bersama_ktp").hide();

    $('.alert-error').hide();
    $('.alert-sukses').hide();
  }

  // show data from database
  function showData() {
    $('#table-peserta').DataTable({
      processing: true,
      serverSide: true,
      ajax: `<?= base_url()?>/peserta/getAllPeserta`,
      responsive: {
          details: {
              type: 'column'
          }
      },
      columns: [
        {
          className: 'dtr-control w-1',
          searchable: false,
          orderable: false,
          data: null,
          defaultContent: '',
        },
        {
          data: 'tgl_daftar',
          searchable: true,
          className: 'text-sm w-1 text-center',
          orderable: true
        },
        {
          data: 'nama',
          searchable: true,
          className: 'text-sm',
          orderable: true
        },
        {
          data: 'email',
          searchable: true,
          className: 'text-sm w-1',
          orderable: false
        },
        {
          data: 'no_hp',
          searchable: true,
          className: 'text-sm w-1',
          orderable: false,
          render: function(data, type, row) {
            return `<a href="https://wa.me/${row.no_hp}" target="_blank">${row.no_hp}</a>`
          }
        },
      ],
      language: {
        paginate: {
          first: '<<',
          previous: '<',
          next: '>',
          last: '>>'
        }
      },
      pageLength: 5,
      lengthMenu: [
        [5, 10, 20],
        [5, 10, 20]
      ]
    });
    $.fn.DataTable.ext.pager.numbers_length = 5;
  }
</script>
<?= $this->endSection() ?>