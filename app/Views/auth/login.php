<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/templates/node_modules/bootstrap/dist/css/bootstrap.min.css" >
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?=base_url()?>/templates/node_modules/@fortawesome/fontawesome-free/css/all.min.css" >

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/templates/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/templates/assets/css/components.css">
</head>

<body>
<div id="app">
    <section class="section">
      <div class="container ">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?= base_url() ?>/templates/assets/img/Logo_PLN.png" alt="logo" width="80" class="shadow-light ">
            </div>

            <div class="card card-primary">
              <div class="card-header d-flex justify-content-center"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= site_url('login/proses') ?>" class="needs-validation" novalidate="">
                  <?= csrf_field() ?>
                  <div class="form-group">
                    <?php
                      if(session()->has('message_login')){
                        echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        '. session("message_login") .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      
                      }
                    ?>
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
           

              </div>
            </div>
            
            <div class="simple-footer">
              Copyright &copy; SIPEDAS 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <!-- General JS Scripts -->
    <script src="<?=base_url()?>/templates/node_modules/jquery/dist/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  <script src="<?=base_url()?>/templates/node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <script src="<?=base_url()?>/templates/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <script src="<?=base_url()?>/templates/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?=base_url()?>/templates/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/templates/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
