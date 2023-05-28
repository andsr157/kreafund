<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <!-- navigation bar -->
    <header>
        <nav class="navbar navbar-expand-lg pt-lg-4 pb-lg-3 border border-left-0 border-right-0 border-top-0 ">
          <div class="container">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
              <span class="navbar-toggler-icon" ></span>
            </button>
            <a class="d-lg-none d-block mx-auto" href="#">
              <img src="./img/logos/logo.png" alt="">LOGO
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="nav-item py-2 py-lg-0">
                  <a class="nav-link active" href="<?=base_url('projects')?>">Semua Projek</a>
                </li>
                <li class="nav-item pb-2 pb-lg-0">
                  <a class="nav-link" href="<?=base_url('start')?>">Mulai Projekmu</a>
                </li>
              </ul>
              <p class="unselectable text-white">AAAAAAAAAAA</p>
              <a class="d-lg-block d-none mx-auto" href="<?=base_url()?>" style="color: var(--kf-primary); font-weight: 700;">
                <img src="./img/logos/logo.png" alt="">LOGO
              </a>
              
              <form class="d-flex ms-lg-5 mb-lg-0 mb-3 " role="search">
                <div class="input-group mw-320px me-3">
                  <span class="input-group-text pe-0 border-0 bg-white mx-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_3_316" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 2H21.4768V21.477H2V2Z" fill="white"/>
                      </mask>
                        <g mask="url(#mask0_3_316)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7388 3.5C7.1958 3.5 3.4998 7.195 3.4998 11.738C3.4998 16.281 7.1958 19.977 11.7388 19.977C16.2808 19.977 19.9768 16.281 19.9768 11.738C19.9768 7.195 16.2808 3.5 11.7388 3.5M11.7388 21.477C6.3688 21.477 1.9998 17.108 1.9998 11.738C1.9998 6.368 6.3688 2 11.7388 2C17.1088 2 21.4768 6.368 21.4768 11.738C21.4768 17.108 17.1088 21.477 11.7388 21.477" fill="#858585"/>
                      </g>
                      <mask id="mask1_3_316" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="17" y="17" width="6" height="6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.24 17.7069H22.264V22.7217H17.24V17.7069Z" fill="white"/>
                      </mask>
                      <g mask="url(#mask1_3_316)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5142 22.7217C21.3232 22.7217 21.1312 22.6487 20.9842 22.5027L17.4602 18.9887C17.1672 18.6957 17.1662 18.2207 17.4592 17.9277C17.7512 17.6327 18.2262 17.6347 18.5202 17.9257L22.0442 21.4407C22.3372 21.7337 22.3382 22.2077 22.0452 22.5007C21.8992 22.6487 21.7062 22.7217 21.5142 22.7217" fill="#858585"/>
                      </g>
                    </svg>                 
                  </span>
                  <input class="form-control form-control-sm text-truncate ps-3 rounded-0" type="search" placeholder="Cari Project" aria-label="Search">
                </div>
                <?php
                if(!empty($this->session->userdata('user_id'))) { ?>
                <button class="btn border-0 d-none d-lg-block p-0 pt-1" style="color: #242323; width:36px; height:36px;" data-bs-toggle="modal" data-bs-target="#accountModal" data-bs-backdrop="false" type="button">
                  <img src="<?=base_url('assets/img/user.avif')?>" alt="" class="img-fluid rounded-circle" >
                </button>
                <?php } else { ?>
                <a href="<?=base_url('auth_user/login')?>">
                  <button class="btn btn-dark-info text-nowrap border-0 d-none d-lg-block " style="color: #242323" type="button">Log In</button>
                </a>
                <button class="btn btn-dark-info text-nowrap border-0 d-block d-lg-none" style="color: #242323" data-bs-toggle="modal" data-bs-target="#Login" type="button">Log In</button>
                <?php } ?>
              </form>
            </div>
            
            <a class="navbar-brand mx-auto d-lg-none d-block" href="#">
              <img src="./img/logos/logo.png" alt="">
            </a>
          </div>
        </nav>
        <div class="container-fluid category mt-3">
          <div class="col justify-content-center" >
            <div class="row">
              <ul class="list-group list-group-horizontal overflow-auto"  >
                <li class="list-group-item">Musik</li>
                <li class="list-group-item">Seni</li>
                <li class="list-group-item">Film</li>
                <li class="list-group-item">F&B</li>
                <li class="list-group-item">Teknologi</li>
                <li class="list-group-item">Publikasi</li>
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
        <div class="container-fluid">
          <div class="row justify-content-beetween pl-20">
            <div class="col-4 col-lg-3">
              <h4>About Us</h4>
              <ul>
                <li>asasas</li>
                <li>sas</li>
                <li>asas</li>
                <li>aasas</li>
              </ul>
            </div>
            <div class="col-4 col-lg-3">
              <h4>About Us</h4>
              <ul>
                <li>asasas</li>
                <li>sas</li>
                <li>asas</li>
                <li>aasas</li>
              </ul>
            </div>
            <div class="col-4 col-lg-3">
              <h4>About Us</h4>
              <ul>
                <li>asasas</li>
                <li>sas</li>
                <li>asas</li>
                <li>aasas</li>
              </ul>
            </div>   
          </div>
          <div class="row pt-5 psc-8">
            <div class="col-lg-8 text-center-sm"><h4 class="mb-3 mb-lg-0">
              A Kreafund @2023
            </h4></div>
            <div class="col-lg-4">
              <ul class="list-group list-group-horizontal">
                <li class="list-group-item"><i class="fa-brands fa-facebook"></i></li>
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


      <div class="modal fade" id="Login" tabindex="-1"  aria-hidden="true" style="font-family: 'maison_neuebook';">
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
                <li class="my-3"><a href="#">Profile</a></li>
                <li class="my-3"><a href="#">Settings</a></li>
                <li class="my-3"><a href="<?=base_url('profile/projects')?>">My Projects</a></li>
              </ul>
              <a href="<?=base_url('auth_user/logout')?>">Logout</a>
            </div>
          </div>
        </div>
      </div>
      
      

    <!-- end modal login -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <!-- <script>
      const modal = document.querySelector('.modal');
      // const overlay = document.querySelector('.overlay');     
      const openModalBtn = document.querySelector("header nav .btn-open");
      const closeModalBtn = document.querySelector(".btn-close");

      const openModal = function () {
      modal.classList.remove("hidden");
      openModalBtn.addEventListener('click', openModal);
};

    </script> -->
</body>
</html>