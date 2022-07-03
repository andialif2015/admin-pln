<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div>
          </div>
          <!-- 1. no. agenda (3-1) int=25
2. tnggal permohonan=date/time
3. no register (3-7) int=15
4. id pelanggan (3-2) int= 15
5. alamat text
6. no telp int=12
7.  daya (R1T) string=6
8. panjang kabel sr int=50
9. nama surveyor varchar
10. tnggal survey date/time -->


          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Survay</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('user/survey/proses') ?>" method="POST">
                        <div class="form-group">
                            <label for="no_agenda">No Agenda</label>
                            <input type="text" name="NO_AGENDA" id="no_agenda" class="form-control" value="<?= $costumer['NO_AGENDA']?>" readonly="true">
                        </div>
                        <div class="form-group">
                        <label for="tgl_mohon">Tanggal Permohonan</label>
                            <div class="form-group"> 
                                <input type="date" name="TGL_MOHON" id="tgl_mohon"  class="form-control datemask" value="<?= $costumer['TGL_MOHON']?>" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_register">No Register</label>
                            <input type="text" name="NO_REGISTER" id="no_register" class="form-control" value="<?= $costumer['NO_REGISTER']?>" readonly="true">
                        </div>
                        <div class="form-group">
                            <label for="id_pel">ID Pelanggan</label>
                            <input type="text" name="ID_PEL" id="id_pel" class="form-control" value="<?= $costumer['IDPEL']?>" readonly="true">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label> <br>
                            <textarea name="ALAMAT" id="alamat" cols="60" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="text" name="NO_TELP" id="no_telp" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label for="daya">Golongan Daya Listrik</label>
                          <select name="DAYA" id="daya" class="form-control">
                            <option value="">Pilih Daya</option>
                            <option value="R-1/TR">R-1/TR</option>
                            <option value="">Option 2</option>
                            <option value="">Option 3</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="panjang_kabel_sr">Panjang Kabel SR</label>
                            <input type="number" name="PANJANG_KABEL_SR" id="panjang_kabel_sr" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="nama_surveyor">Nama Surveyor</label>
                            <input type="text" name="NAMA_SURVEYOR" id="nama_surveyor" class="form-control" value="">
                        </div>
                        <div class="form-group">
                          <label for="tgl_survey">Tanggal Survey</label>
                            <div class="form-group"> 
                                <input type="date" name="TGL_SURVEY" id="tgl_survey"  class="form-control datemask">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-warning" value="Reset" >
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?= $this->endSection() ?>