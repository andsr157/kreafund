<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/stylesheet.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
  <title>Document</title>
  <style>
    /* Custom CSS to adjust icon size */
    .video-js .vjs-button .vjs-icon-placeholder:before {
      font-size: 0.5em;
      color: #fff;
    }
    .project_detail span.vjs-remaining-time-display{
      font-size: 1.2rem;
      color: #fff;
      padding-bottom: 0.8rem;
    }
  </style>
</head>

<body>
  <!-- navigation bar -->
  <header>
    <nav class="navbar navbar-expand-lg pt-lg-4 pb-0 pb-lg-3 border border-left-0 border-right-0 border-top-0 ">
      <div class="container d-none d-lg-block">
        <div class="row">
          <div class="col-3">
            <ul class="navbar-nav mb-2 mb-lg-0">

              <li class="nav-item py-2 py-lg-0">
                <a class="nav-link" href="<?= base_url('discovery') ?>">Semua Projek</a>
              </li>
              <li class="nav-item pb-2 pb-lg-0">
                <a class="nav-link" href="<?= base_url('start') ?>">Mulai Projekmu</a>
              </li>
            </ul>
          </div>

          <div class="col-6 ">
            <a class="d-flex justify-content-center align-items-center h-100" href="<?= base_url() ?>" style="color: var(--kf-primary); font-weight: 700;">
              <span style="font-size: larger;">
                Kreafund
              </span>
            </a>
          </div>

          <div class="col-3 ">
            <div class="d-flex justify-content-end me-3">
              <?php
              if (!empty($this->session->userdata('user_id')) && ($this->session->userdata('level')) == 2) { ?>
                <button class="btn border-0 d-none d-lg-block p-0" style="color: #242323; width:36px; height:36px;" data-bs-toggle="modal" data-bs-target="#accountModal" data-bs-backdrop="false" type="button">
                  <img style="object-fit:cover;" src="<?= base_url('assets/img/ikon/' . $this->session->userdata('avatar')) ?>" alt="" class="w-100 h-100 rounded-circle">
                </button>
              <?php } else { ?>
                <a href="<?= base_url('auth_user/login') ?>">
                  <button class="btn btn-dark-info text-nowrap border-0 d-none d-lg-block " style="color: #242323" type="button">Log In</button>
                </a>
                <button class="btn btn-dark-info text-nowrap border-0 d-block d-lg-none" style="color: #242323" data-bs-toggle="modal" data-bs-target="#Login" type="button">Log In</button>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <!-- ------ -->
      <div class="container d-block d-lg-none mobile-nav">
        <div class="row py-3 border-bottom">
          <a class="d-lg-none d-block mx-auto text-center" href="#" style="color: var(--kf-primary); font-weight: 700;">
            <img src="./img/logos/logo.png" alt="">Kreafund
          </a>
        </div>
        <div class="row py-2">
          <div class="col-8 py-2">
            <p style="display: inline-block;">
              <a class="mobile-nav-link active" href="<?= base_url('projects') ?>">Semua Projek</a>
              <a class="mobile-nav-link active" href="<?= base_url('start') ?>">Mulai Projekmu</a>
            </p>
          </div>
          <div class="col-4">
            <div class="d-flex justify-content-center">
              <?php
              if (!empty($this->session->userdata('user_id'))) { ?>
                <button class="btn border-0  p-0" style="color: #242323; width:36px; height:36px;" data-bs-toggle="modal" data-bs-target="#accountModal" data-bs-backdrop="false" type="button">
                  <img src="<?= base_url('assets/img/user.avif') ?>" alt="" class="img-fluid rounded-circle">
                </button>
              <?php } else { ?>
                <a href="<?= base_url('auth_user/login') ?>">
                  <button class="btn btn-dark-info text-nowrap border-0  " style="color: #242323" type="button">Log In</button>
                </a>

              <?php } ?>
            </div>

          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid category border border-left-0 border-right-0 border-top-0  pt-3">
      <div class="col justify-content-center pb-0 pb-lg-3 ">
        <div class="row">
          <ul class="list-group list-group-horizontal overflow-auto">
            <li class="list-group-item">
              <a href="<?= base_url('discovery/music') ?>" style="<?php if ($this->uri->segment(2) == 'music') echo 'border-bottom: 2px solid #2752ff; padding-bottom: 5px;'; ?>">Musik</a>
            </li>
            <li class="list-group-item">
              <a href="<?= base_url('discovery/art') ?>" style="<?php if ($this->uri->segment(2) == 'art') echo 'border-bottom: 2px solid #2752ff; padding-bottom: 5px;'; ?>">Seni</a>
            </li>
            <li class="list-group-item">
              <a href="<?= base_url('discovery/film') ?>" style="<?php if ($this->uri->segment(2) == 'film') echo 'border-bottom: 2px solid #2752ff; padding-bottom: 5px;'; ?>">Film</a>
            </li>
            <li class="list-group-item"><a href="">F&B</a> </li>
            <li class="list-group-item"><a href="">Teknologi</a> </li>
            <li class="list-group-item"><a href="">Publikasi</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- end of navigation bar -->
  <!-- hero section -->
  <?php echo $contents ?>

  <!-- end of info section -->
  <!-- fresh section -->



  <!-- <section style="height: 400px; background-color:#f5f5f5"></section> -->


  <footer>
    <div class="container-fluid" style="font-family: 'maison-neubook'; background-image:url(<?=base_url('')?>); background-repeat:no-repeat; background-size:cover; background-position:-10px; " >
      <div class="row justify-content-beetween pl-20">
        <div class="col-4 col-lg-3">
          <h4 class="mb-3 " style="font-weight: 600;" >ABOUT</h4>
          <ul>
            <li class="mb-1">About us</li>
            <li class="mb-1">Stats</li>
            <li class="mb-1">Job</li>
          </ul>
        </div>
        <div class="col-4 col-lg-3">
          <h4 class="mb-3"  style="font-weight: 600;"> PROJECT</h4>
          <ul>
            <li class="mb-1">Art</li>
            <li class="mb-1">Music</li>
            <li class="mb-1">Film</li>
            <li class="mb-1">Teknologi</li>
          </ul>
        </div>
        <div class="col-4 col-lg-3">
          <h4 class="mb-3"  style="font-weight: 600;">SUPPORT</h4>
          <ul>
            <li class="mb-1">Help Center</li>
            <li class="mb-1">Our Rules</li>
            <li class="mb-1">Brand assets</li>
          </ul>
        </div>
      </div>
      <div class="row pt-5 psc-8">
        <div class="col-lg-8 text-center-sm">
          <h4 class="mb-3 mb-lg-0">
            A Kreafund @2023
          </h4>
        </div>
        <div class="col-lg-4 " >
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-transparent"><i class="fa-brands fa-facebook"></i></li>
            <li class="list-group-item"><i class="fa-brands fa-twitter"></i></li>
            <li class="list-group-item"><i class="fa-brands fa-instagram"></i></li>
            <li class="list-group-item"><i class="fa-brands fa-youtube"></i></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <button class="btn-open"></button>

  <!-- modal login -->
  <!-- <section class="modal hidden">
        <div class="container">
          <div class="col">
            <button class="btn-close">X</button>
            <h4>Your Account</h4>
            <ul>
              <li class="mt-4">Profile</li>
              <li class="mt-4">Setting</li>
              <li class="my-4">My project</li>
            </ul>
            <button class="btn btn-dark btn-sm">Login</button>
          </div>
        </div>
      </section> -->
  <!-- end of modal login -->
  <!-- <div class="overlay"></div> -->


  <div class="modal fade" id="Login" tabindex="-1" aria-hidden="true" style="font-family: 'maison_neuebook';">
    <div class="modal-dialog modal-dialog-centered modal">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-dark">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- <div class="modal no-backdrop fade accountmodal" id="accountModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4 class="modal-title">Your Account</h4>
                <ul>
                  <li class="mt-4">Profile</li>
                  <li class="mt-4">Setting</li>
                  <li class="my-4">My project</li>
                </ul>
                <button type="button" class="btn btn-dark btn-sm">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>   -->



  <div class="modal accountmodal" id="accountModal" aria-hidden="true" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Your Account</h4>
          <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="mb-5">
            <li class="my-3"><a href="<?= base_url('profile/detail/' . $this->session->userdata('username')) ?>">Profile</a></li>
            <li class="my-3"><a href="<?= base_url('profile/account/') ?>">Settings Account</a></li>
            <li class="my-3"><a href="<?= base_url('profile/projects') ?>">My Projects</a></li>
          </ul>
          <a href="<?= base_url('auth_user/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <!-- end modal login -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
  <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
  
  <script>
    videojs('project_video');
  </script>

  <script>
    $(document).ready(function() {
      function animateCounter(elementId, targetValue) {
        $({
          Counter: 0
        }).animate({
          Counter: targetValue
        }, {
          duration: 10000,
          easing: 'swing',
          step: function() {
            $(elementId).text(Math.floor(this.Counter));
          }
        });
      }

      function fetchData() {
        $.ajax({
          url: '<?= base_url('home/fetchdata') ?>',
          method: 'GET',
          dataType: 'json',
          success: function(response) {
            animateCounter('#projectCount', response.projectCount);
            animateCounter('#donationAmount', response.donationAmount);
            animateCounter('#successfulCount', response.successfulCount);
          },
          error: function(xhr, status, error) {
            console.log(error);
          }
        });
      }

      fetchData();
      setInterval(fetchData, 30000);
    });
  </script>

<script>
  function submitCustomForm(event) {
    event.preventDefault(); 
    var form = event.target.closest('form');
    if (form) {
      form.submit();
    }
  }
</script>

</body>

</html>