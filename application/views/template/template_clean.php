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
  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-NSpLCXV1gR8C-jLq"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <title>Document</title>
</head>

<body>
  <!-- navigation bar -->
  <header>
    <nav class="navbar navbar-expand-lg pt-lg-4 pb-0 pb-lg-3 border border-left-0 border-right-0 border-top-0 ">
      <div class="container d-none d-lg-block">
        <div class="row">

          <div class="col-12">
            <a class="d-flex justify-content-center align-items-center h-100" href="<?= base_url() ?>" style="color: var(--kf-primary); font-weight: 700;">
              <img src="./img/logos/logo.png" alt="">
              <span style="font-size: larger;">
                Kreafund
              </span>
            </a>
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
              <a class="mobile-nav-link" href="<?= base_url('projects') ?>">Semua Projek</a>
              <a class="mobile-nav-link" href="<?= base_url('start') ?>">Mulai Projekmu</a>
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

  </header>

  <!-- end of navigation bar -->
  <!-- hero section -->
  <div class="content">
    <?php echo $contents ?>

  </div>

  <!-- end of info section -->
  <!-- fresh section -->



  <!-- <section style="height: 400px; background-color:#f5f5f5"></section> -->


  <footer>
    <div class="container-fluid">

      <div class="d-flex text-center justify-content-center">
        <div class="text-center-sm">
          <h4 class="mb-3 mb-lg-0">
            A Kreafund @2023

            <ul class="list-group list-group-horizontal pt-3">
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
            <li class="my-3"><a href="#">Profile</a></li>
            <li class="my-3"><a href="#">Settings</a></li>
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
            // Menganimasikan angka counter dengan data yang diterima dari CodeIgniter
            animateCounter('#projectCount', response.projectCount);
            animateCounter('#donationAmount', response.donationAmount);
            animateCounter('#successfulCount', response.successfulCount);
          },
          error: function(xhr, status, error) {
            console.log(error);
          }
        });
      }

      // Memanggil fungsi fetchData untuk pertama kali
      fetchData();

      // Memanggil fungsi fetchData setiap 5 detik (bisa disesuaikan dengan kebutuhan)
      setInterval(fetchData, 30000);
    });
  </script>

  <script>
    // Mengambil semua elemen li.list-group-item
    const listItems = document.querySelectorAll("li.list-group-item");

    // Menyimpan border awal sebelum diklik pada setiap elemen li.list-group-item
    listItems.forEach((item) => {
      item.dataset.originalBorder = item.style.border;
      item.dataset.originalBoxShadow = item.style.boxShadow;

      // Menambahkan event listener pada setiap elemen li.list-group-item
      item.addEventListener("click", () => {
        // Mengatur ulang border dan box-shadow pada semua elemen li.list-group-item
        listItems.forEach((item) => {
          item.style.border = item.dataset.originalBorder;
          item.style.boxShadow = item.dataset.originalBoxShadow;

          // Mengubah display menjadi flex pada elemen <div class="justify-content-end">
          const divElement = item.querySelector(".tombol");
          if (divElement) {
            divElement.style.display = "none";
          }
        });

        // Mengubah warna border menjadi #037362, menambahkan lebar border, dan memperlebar area shadow
        item.style.border = "2px solid #037362";
        item.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";

        // Mengubah display menjadi flex pada elemen <div class="tombol">
        const divElement = item.querySelector(".tombol");
        if (divElement) {
          divElement.style.display = "flex";
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('.donateReward').click(function() {
        var rewardId = $(this).data('reward_id');
        var projectId = $(this).data('project_id');
        var rewardTitle = $(this).data('reward_title');
        var rewardAmount = $(this).data('reward_amount');
        var rewardImage = $(this).data('reward_image');
        
        // Membuat form dinamis
        var form = $('<form>', {
          'action': '<?php echo site_url("snap/donate"); ?>',
          'method': 'post'
        });

        // Menambahkan input hidden ke dalam form
        form.append($('<input>', {
          'type': 'hidden',
          'name': 'rewardId',
          'value': rewardId
        }));
        form.append($('<input>', {
          'type': 'hidden',
          'name': 'projectId',
          'value': projectId
        }));
        form.append($('<input>', {
          'type': 'hidden',
          'name': 'rewardTitle',
          'value': rewardTitle
        }));
        form.append($('<input>', {
          'type': 'hidden',
          'name': 'rewardAmount',
          'value': rewardAmount
        }));
        form.append($('<input>', {
          'type': 'hidden',
          'name': 'rewardImage',
          'value': rewardImage
        }));

        $('body').append(form);
        form.submit();
      });
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