<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kreafund</title>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/shared/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/datatable/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/demo_1/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/user/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
  <!-- End-CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/main/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/dashboard/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/transaction/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
      
      
  </head>

<body>

  <div class="container-scroller">
    <!-- TopNav -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url('dashboard') ?>">
          <p class="pt-1" style="font-size: 1.5rem; font-weight:600; color:#fff;">Kreafund</p> </a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('dashboard') ?>">
          <img src="<?= base_url() ?>assets/images/logo/logo-mini3.png" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-account-circle"></i> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <!-- <p class="mb-1 mt-3 font-weight-semibold"></p> -->
                <!-- <p class="font-weight-light text-muted mb-0"></p> -->
              </div>
              <a href="<?= base_url('users/edit/'.$this->session->userdata['user_id']) ?>" class="dropdown-item">Edit   Profil</a>
              <a href="<?= base_url('auth_admin/logout') ?>" class="dropdown-item">Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- End-TopNav -->

    <div class="container-fluid page-body-wrapper">
      <!-- SideNav -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li style="margin-top:9rem;">

          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard') ?>">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('users') ?>">
              <span class="menu-title">Kelola user</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('transaksi') ?>">
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('projects/verification') ?>">
                <span class="menu-title">Verifikasi Project</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('projects/done') ?>">
                <span class="menu-title">Project Selesai</span>
              </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- End-SideNav -->

      <div class="main-panel">
        <div class="content-wrapper" id="content-web-page">
          <?php echo $contents ?>
        </div>
        <div class="content-wrapper" id="content-web-search" hidden="">
          <div class="row">
            <div class="col-12 text-left">
              <h3 class="d-block">Cari Halaman</h3>
              <h5 class="mt-3 d-block"><span class="result-1"></span> <span class="result-2"></span></h5>
            </div>
            <div class="col-12 mt-3">
              <div class="row" id="page-result-parent">
              </div>
            </div>
          </div>
        </div>
        <footer class="footer" id="footer-content">
          <div class="container-fluid clearfix">
            <!-- <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i> -->
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- Javascript -->
  <script src="<?php echo base_url() ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- <script src="<//?php echo base_url() ?>assets/admin/vendors/jquery/jquery.js"></script> -->
  <script src="<?php echo base_url() ?>assets/admin/js/shared/off-canvas.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/js/shared/misc.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/plugins/js/jquery.form-validator.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/css/alert/sweetalert2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/plugins/js/jquery-ui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

  


  <script>
    $(document).ready(function() {
      $('#table1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>

<script>
    $(document).ready(function() {
      $('#table2').DataTable();
    });
  </script>

<script>
    $(document).ready(function() {
      $('#v_table').DataTable();
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#done_table').DataTable();
    });
  </script>


<script>
        CKEDITOR.replace('verification_editor', {
            toolbar: [
                ['Bold', 'Italic', 'Underline', 'Strike'],
                ['NumberedList', 'BulletedList', 'Outdent', 'Indent'],
                ['Link', 'Unlink', 'Image', 'Embed', 'Youtube', 'Source'],
                ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                ['Undo', 'Redo']
            ],
            removePlugins: 'elementspath, iframe',
            height: 200,
            filebrowserUploadUrl: '<?= base_url('story/uploadImage') ?>',
            filebrowserUploadMethod: 'form',
            contentsCss: '<?= base_url('assets/css/customck/custom.css') ?>',
            autoParagraph: true,
            maxLength: 80,
            allowedContent: true,


        });


        $(document).ready(function() {
            // Tangani klik tombol Simpan
            $('.saveVerification').click(function() {
                var editorData = CKEDITOR.instances.verification_editor.getData();
                var project_id = '<?= $this->uri->segment(4) ?>';
                var type = $(this).data('typestatus');
                console.log(type);

                // Kirim data menggunakan AJAX
                $.ajax({
                    url: '<?= base_url('review/saveReviewDetail') ?>', // Ubah dengan URL yang sesuai
                    type: 'POST',
                    data: {
                        'content': editorData,
                        'project_id': project_id,
                        'type': type
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            alert(response.message);
                            window.location.href='<?=base_url('projects/verification')?>';
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Tindakan jika terjadi kesalahan
                        console.log(error);
                    }
                });
            });

           
        });
    </script>



  
  </body>
</html>
