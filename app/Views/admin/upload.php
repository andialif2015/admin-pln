<?= $this->extend('admin/default') ?>
<?= $this->section('content')  ?>
<section class="section">
          <div class="section-header">
            <h1>Upload File Excel</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url('/admin/dashboard') ?>">Dashboard</a></div>
              <div class="breadcrumb-item">Upload File</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="row">
              <div class="col-12 col-md-8 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Empty Data</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('/admin/import') ?>" method="POST" id="setting-form" enctype="multipart/form-data">
                    <?= csrf_field() ?>           
                        <div class="form-group row align-items-center">
                            <label class="form-control-label col-sm-3 text-md-right">Site Logo</label>
                            <div class="col-sm-6 col-md-9">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="site-logo">
                                <label class="custom-file-label">Choose File</label>
                            </div>
                            <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                            </div>
                        </div>
                            
                        <div class="card-footer text-md-right">
                            <button class="btn btn-primary" id="save-btn">Save Changes</button>
                            <button class="btn btn-secondary" type="button">Reset</button>
                        </div>
                        
                    </form>
                                       
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<?= $this->endsection() ?>