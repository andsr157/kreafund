<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/stylesheet.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/start/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <title>Document</title>
</head>

<body>
    <!-- navigation bar -->
    <header>
        <nav class="navbar navbar-expand-lg pt-lg-4 pb-lg-3 border border-left-0 border-right-0 border-top-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="d-lg-none d-block mx-auto" href="#">
                    <img src="./img/logos/logo.png" alt="" />Kreafund
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <a class="d-lg-block d-none mx-auto" href="<?= base_url() ?>" style="color: var(--kf-primary); font-weight: 700; font-size:large;">
                        <img src="./img/logos/logo.png" alt="" />Kreafund
                    </a>
                    <p class="unselectable text-white">AA</p>

                    <?php
                    if (!empty($this->session->userdata('user_id'))) { ?>
                        <button class="btn border-0 d-none d-lg-block p-0" style="color: #242323; width:36px; height:36px;" data-bs-toggle="modal" data-bs-target="#accountModal" data-bs-backdrop="false" type="button">
                            <img style="object-fit:cover;" src="<?= base_url('assets/img/ikon/' . $this->session->userdata('avatar')) ?>" alt="" class="w-100 h-100 rounded-circle">
                        </button>
                    <?php } else { ?>
                        <a href="<?= base_url('auth_user/login') ?>">
                            <button class="btn btn-dark-info text-nowrap border-0 d-none d-lg-block " style="color: #242323" type="button">Log In</button>
                        </a>
                        <button class="btn btn-dark-info text-nowrap border-0 d-block d-lg-none" style="color: #242323" data-bs-toggle="modal" data-bs-target="#Login" type="button">Log In</button>
                    <?php } ?>
                    </form>
                </div>

                <a class="navbar-brand mx-auto d-lg-none d-block" href="#">
                    <img src="./img/logos/logo.png" alt="" />
                </a>
            </div>
        </nav>
    </header>
    <!-- end of header section -->



    <?php echo $contents ?>



    <!-- <section style="height: 1000px"></section> -->

    <footer class="mt-5">
        <div class="container-fluid" style="position: absolute; z-index: 1021">
            <div class="row justify-content-beetween pl-20">
                <div class="col-lg-2 text-center-sm">
                    <h4 class="mb-3 mb-lg-0">A Kreafund @2023</h4>
                </div>
                <div class="col-3 col-lg-1 mb-4">
                    <h4>About Us</h4>

                </div>
                <div class="col-3 col-lg-1 mb-4">
                    <h4>About Us</h4>

                </div>
                <div class="col-3 col-lg-1 mb-4">
                    <h4>About Us</h4>
                </div>
                <div class="d-flex col-lg-4 justify-content-end">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <i class="fa-brands fa-facebook"></i>
                        </li>
                        <li class="list-group-item">
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li class="list-group-item">
                            <i class="fa-brands fa-instagram"></i>
                        </li>
                        <li class="list-group-item">
                            <i class="fa-brands fa-youtube"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pt-5 psc-8 justify-content-end">
            </div>
        </div>
    </footer>

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

    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" />
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
                    <a href="">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
        $(document).ready(function() {
            $('#back').click(function() {
                var current = $('.active');
                var prev = $('.active').prev('section');
                if (prev.length > 0) {
                    $('#' + current.attr('id')).hide();
                    $('#' + prev.attr('id')).show();
                    $('#next').show();
                    $('#submit').hide();
                    $('.active').removeClass('active');
                    prev.addClass('active');
                    if ($('.active').attr('id') == $('section').first().attr('id')) {
                        $('#back').hide();
                    }
                }
            })

            $('#next').click(function() {
                var current = $('.active');
                var next = $('.active').next('section');
                if (next.length > 0) {
                    $('#' + current.attr('id')).hide();
                    $('#' + next.attr('id')).show();
                    $('#back').show();
                    $('.active').removeClass('active');
                    next.addClass('active');
                    if ($('.active').attr('id') == $('section').last().attr('id')) {
                        $('#next').hide();
                        $('#submit').show();
                    }
                }
            })

        })
    </script>

    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var category_id = $('#category').val();

                if (category_id != '') {
                    $.ajax({
                        url: "<?= base_url(); ?>start/fetch_subcat/",
                        method: 'POST',
                        data: {
                            'category_id': category_id
                        },
                        type: JSON,
                        success: function(data) {
                            $('#subcat').html(data);
                        }
                    })
                }
            })
        })
    </script>







    <script>
        AOS.init();
    </script>


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