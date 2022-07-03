<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <h1>DataTables</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">daftar-data</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>Daftar Survey</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>No Agenda</th>
                            <th>Tanggal Permohonan</th>
                            <th>No Registrasi</th>
                            <th>ID Pelanggan</th>
                            <th>Nama Surveyor</th>
                            <th>Action</th>  
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php for($i=0; $i<count($costumer); $i++) { ?>
                          <tr>
                            <td>
                              <?= $no ?>
                            </td>
                            <td>
                                <?= $costumer[$i]['NO_AGENDA'] ?>

                            </td>
                            <td>
                                <?= $costumer[$i]['TGL_MOHON'] ?>
                            </td>
                            <td>
                                <?= $costumer[$i]['NO_REGISTER']  ?> 
                            </td>
                            <td>
                                <?= $costumer[$i]['ID_PEL'] ?> 
                            </td>
                            <td>
                                <?= $costumer[$i]['NAMA_SURVEYOR'] ?> 
                            </td>
                            <td>
                                <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                            </td>
                          </tr>
                          <?php $no++; ?>
                          <?php } ?>
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>


<?= $this->endsection()?>