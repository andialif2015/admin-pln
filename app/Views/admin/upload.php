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
              <div class="col-12 col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>File Excel</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url('/admin/preview') ?>" method="POST" id="setting-form" enctype="multipart/form-data">
                    <?= csrf_field() ?>           
                        <div class="form-group row align-items-center">
                            
                            <div class="col">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="file-upload" required>
                                <label class="custom-file-label" id="file-name">Choose File</label>
                            </div>
                            <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                            </div>
                        </div>
                            
                        <div class="card-footer text-md-right">
                            <button class="btn btn-primary" id="save-btn">Save Changes</button>
                            <button class="btn btn-secondary" type="button" id="reset">Reset</button>
                        </div>
                        
                    </form>
                                       
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
<?= $this->endsection() ?>

<?= $this->section('script')?>
      <script>
           let input = document.getElementById('file-upload');
           let label = document.getElementById('file-name');
           let resetBtn = document.getElementById('reset');
           input.addEventListener('change', (event) => {
              let inputData = event.srcElement;
              let fileName = inputData.files[0].name;
              label.textContent = fileName;
           });
           if(input.value == null){
              label.textContent = 'Choose File';
           }
           resetBtn.addEventListener('click', function() {
              input.value = null;
              label.textContent = 'Choose File';
           });
        </script>
<?= $this->endsection() ?>