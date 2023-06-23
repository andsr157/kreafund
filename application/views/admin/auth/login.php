<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/shared/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/login/style.css">
    <link rel="shortcut icon" href="icons/favicon.png"/>
    <!-- End-CSS -->

  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex justify-content-center align-items-center auth login-page theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form action="<?= base_url('auth_admin/process')?>" method="POST" >
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text check-value" id="username_error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="password" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text check-value" id="password_error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block" name="login">Masuk</button>
                  </div>
                </form>
              </div>
              <!-- <p class="mt-3 footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Javascript -->
    <script src="<?php echo base_url() ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendors/js/vendor.bundle.addons.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/shared/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/shared/misc.js"></script>
    <!-- End-Javascript -->

  </body>
</html>