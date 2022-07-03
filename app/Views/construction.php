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
  <link href="<?=base_url()?>/templates/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css" rel="stylesheet">
  <link href="<?=base_url()?>/templates/node_modules/@fortawesome/fontawesome-free/css/brands.css" rel="stylesheet">
  <link href="<?=base_url()?>/templates/node_modules/@fortawesome/fontawesome-free/css/solid.css" rel="stylesheet">
  <link href="<?=base_url()?>/templates/node_modules/@fortawesome/fontawesome-free/css/regular.css" rel="stylesheet">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/templates/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/templates/assets/css/components.css">
</head>

<body>
  <div id="app">
  <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <!-- <h1><i class="fa-brands fa-whatsapp"></i></h1> -->
            <!-- <span style="font-size: 150px;"> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="50px" height="50px"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M272 95.93c26.5 0 47.99-21.47 47.99-47.97S298.5 0 272 0C245.5 0 224 21.47 224 47.97S245.5 95.93 272 95.93zM209.7 357.3c-25.75-17.25-52.25-33.24-79.5-48.11L58.62 270.2L1.246 471.1c-4.875 16.1 4.1 34.74 22 39.62s34.63-4.998 39.5-21.99l36.63-128.1l60.63 40.37v78.86c0 17.62 14.38 31.99 32 31.99s32-14.37 32-31.99l.0022-95.93C224 373.2 218.6 363.2 209.7 357.3zM311.1 416c-13.88 0-25.95 8.863-30.33 21.86l-24.75 74.07h319.9l-101.9-206.3c-11.38-22.49-43.1-23.63-56.1-2.01l-31.89 54.21l-65.26-35.64l-24-121.2C288.1 161.3 263.2 127.7 227.1 109.7c-1-.4999-2.125-.625-3.125-1.125c-2.25-1.125-4.752-1.1-7.252-2.625C201.5 99.85 185.2 95.98 168.7 95.98H95.1c-9.25 0-18.05 4.061-24.18 10.93l-55.95 63.92c-.75 .9998-1.5 2.124-2.25 3.249c-8.875 13.1-3 32.87 11.63 40.74l336.6 184.3l-9.837 16.87H311.1zM105.9 204.1l-23.5-12.87l28.13-32.12h34.38L105.9 204.1zM199.5 256.1l34.9-41.28l13.5 67.61L199.5 256.1z"/></svg>
            <!-- </span> -->
            <div class="page-description">
              Cooming Soon. Under Construction.
            </div>
            <div class="mt-3">
                <?= $this->renderSection('url') ?>
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
  <?= $this->renderSection('script') ?>
  <!-- Page Specific JS File -->
</body>
</html>
