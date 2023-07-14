<section class="project_detail">
  <section class="hero">
    <div class="container">
      <div class="row ptitle">
        <h2 class="mb-2"><?= $project->row()->title ?></h2>
        <p><?= $project->row()->subtitle ?></p>
      </div>
      <div class="row content">
        <div class="col-lg-8 content-box shadow ">
          <img style="object-fit:cover" src="<?= base_url('assets/img/' . $project->row()->image) ?>" class="img-fluid p-0 w-100 h-100" alt="">
        </div>


        <div class="col-lg-4 px-sm-4 ps-lg-5">
          <div class="bargrey mb-4">
            <div class="bargreen" style="width:86.35%"></div>
          </div>
          <h2>Rp.<?= $project->row()->goal ?></h2>
          <p>donasi dari target Rp.<?= $project->row()->goal ?></p>

          <div>
            <span>0</span>

            <p>Donatur</p>
          </div>

          <div>
            <span><?= $project->row()->duration ?></span>

            <p>Hari Lagi</p>
          </div>

          <div class="row">
            <button class="btn btn-lg mt-4 rounded-0 text-light" style="background-color: var(--kf-primary);">Donate</button>

          </div>
          <div class="dtl mt-2 p-0">
            <p style="display:inline" id="countdown-info">All or nothing. This project will only be funded if it reaches its goal by
            <p style="display:inline" id="countdown-date"></p>.</p>

            <script>
              const inputDateinfo = '2023-06-18';
              const inputDaysinfo = 20;

              const targetDateinfo = new Date(inputDate);
              targetDate.setDate(targetDate.getDate() + inputDays);

              // Mengupdate teks pada elemen countdown-date dengan target date yang diformat
              const countdownDateElement = document.getElementById('countdown-date');
              countdownDateElement.innerText = targetDate.toUTCString();
            </script>
          </div>

        </div>
      </div>
    </div>
  </section>



  <section class="main-content  pb-5 border border-bottom-1 border-left-0 border-right-0 border-top-0">
    <nav class="navbar navbar-expand-sm navbar-light sticky-top border p-0 st-top">
      <div class="container" style="background-color: #fff;">
        <!-- Toggler/collapsibe Button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myList" aria-controls="myList" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- List of links -->
        <div class="collapse navbar-collapse" id="myList">
          <div class="col-8">
            <ul class="navbar-nav">
              <li class="nav-item pe-lg-5 py-2">
                <a class="nav-link" href="#">Campaign</a>
              </li>
              <li class="nav-item px-lg-5 py-2">
                <a class="nav-link" href="#">FAQ</a>
              </li>
              <li class="nav-item px-lg-5 py-2">
                <a class="nav-link" href="#">Updates</a>
              </li>
              <li class="nav-item px-lg-5 py-2">
                <a class="nav-link" href="#">Comments</a>
              </li>
            </ul>
          </div>
          <div class="col-2"></div>
          <div class="col-2">
            <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3)) ?>">
              <button class="btn text-light rounded-0 w-75 me-5" style="background-color: var(--kf-primary-blue);">Kembali</button>
            </a>
          </div>

        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-2 risk">
          <div class="sticky-top p-2 pt-5" style="top: 4rem;">
            <a href="#story">
              <p class="mb-3">Story</p>
            </a>
            <a href="#resiko">
              <p class="mb-3">Resiko</p>
            </a>
          </div>
        </div>
        <div class="col-6 pt-5">
          <div id="story" class="main-text">
            <?php
            if ($story->row() && property_exists($story->row(), 'content')) {
              echo $story->row()->content;
            } else {
              echo 'Story Kosong !!';
            }
            ?>

          </div>

          ​<h2 id="resiko" style="font-size: 1.3rem;" class="my-5">
            Risks and challenges
          </h2>
          <div class="main-text">
            <p>
              <?php
              if ($story->row() && property_exists($story->row(), 'risk')) {
                echo $story->row()->risk;
              } else {
                echo 'Risk Kosong !!';
              }
              ?>
            </p>
          </div>

          </article>
        </div>
        <div class="col-4 pt-lg-5">
          <div class="sticky-top " style="top: 4rem;">
            <div class="col reward-box">
              <ul class="list-group list-group-vertical ">
                <style>
                  /* Gaya tombol yang diubah */
                  .custom-submit {
                    display: inline-block;
                    padding: 4px 8px;
                    background-color: transparent;
                    border: none;
                    cursor: pointer;
                    color: blue;
                    text-decoration: underline;
                  }

                  /* Gaya tombol ketika diklik */
                  .custom-submit:active {
                    outline: none;
                  }

                  .round-img-circle {
                    width: 72px;
                    height: 72px;
                    border-radius: 50%;
                    background-size: cover;
                    background-position: center;
                  }
                </style>
                <form action="<?= base_url('profile/detail/' . $project->row()->username) ?>" method="POST">
                  <input type="hidden" name="userId" value="<?= $project->row()->user_id ?>">
                  <li class="list-group-item mb-4 px-4 pb-4">
                    <div class="row rcard">
                      <div class="d-flex mx-auto mt-3 mb-2 justify-content-center">
                        <img style="object-fit:cover;" class="round-img-circle" src="<?= base_url('assets/img/ikon/' . $project->row()->avatar) ?>" alt="">
                      </div>
                      <h3 class="my-3"><?= $project->row()->username ?></h3>
                      <div class="row rdesc">
                        <?php
                        $words = explode(' ', $project->row()->biography);
                        $limitedWords = array_slice($words, 0, 30);
                        $limitedBiography = implode(' ', $limitedWords);
                        echo '<p>' . $limitedBiography . '...<button type="submit" class="custom-submit" onclick="submitCustomForm(event)">see details</button></p>';
                        ?>
                      </div>
                    </div>
                  </li>
                </form>

                <li class="list-group-item mb-4 px-4 pb-4">
                  <div class="row rcard">
                    <h2 class="my-4">Donasi Tanpa Reward</h2>
                    <form action="">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah :</label>
                        <input type="input" class="form-control rounded-0" placeholder="00,00">
                      </div>
                    </form>
                    <div class="row rdesc mb-3">
                      <p>Support the project for no reward, just because it speaks to you</p>

                    </div>
                    <button type="submit" class="btn rounded-0 text-light" style="background-color: var(--kf-primary);">Donate</button>
                  </div>
                </li>


                <?php
                foreach ($rewards as $reward) { ?>

                  <li class="list-group-item mb-3 ">
                    <div class="rimage">
                      <img src="<?= base_url('assets/img/reward/') . $reward->image ?>" class="img-fluid img-thumbnail rounded-0 w-100" alt="">
                    </div>
                    <div class="px-4 pb-4">
                      <div class="row rcard">
                        <h2 class="my-4">Donasi <?= formatCurrency($reward->amount) ?> atau Lebih</h2>
                        <h3 class="mb-3"><?= $reward->title ?> </h3>
                        <div class="row rdesc">
                          <p><?= $reward->description ?></p>
                          <span class="mb-2">Termasuk :</span>
                          <ul class="mb-2">
                            <?php
                            $itemlist = [];
                            $itemQty = [];
                            $items = $this->reward_m->getItems($reward->reward_id);
                            foreach ($items->result() as $item) {
                              $itemlist[] = $item->item_name;
                              $itemQty[] = $item->qty;
                              echo '<li>' . $item->item_name . ' ' . $item->qty . '<i>x</i>' . '</li>';
                            }
                            $itemdata = implode(', ', $itemlist);
                            $itemQtydata = implode(', ', $itemQty);
                            ?>
                          </ul>
                        </div>
                        <div class="row rstat">
                          <div class="row-1 my-1">
                            <button class="btn btn-xs btn-secondary">2 donatur</button>
                          </div>
                          <div class="row-1">
                            <button class="btn btn-xs btn-secondary"><?php
                                                                      if ($reward->qty != 99999) {
                                                                        echo '<span>Limited(' . $reward->qty . ')</span>';
                                                                      } else if ($reward->qty == 99999) {
                                                                        echo '<span>Unlimited</span>';
                                                                      }
                                                                      ?></button>
                          </div>
                        </div>
                        <div class="d-flex pt-3 justify-content-center">
                          <a href="">
                            <button class="btn text-light rounded-0 w-100" style="background-color: #028858; ">
                              donasi <?= formatCurrency($reward->amount) ?>
                            </button>
                          </a>

                        </div>
                      </div>
                    </div>
                  </li>
                <?php
                } ?>


              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>



</section>

<!-- <section style="height:2000px;">

    </section> -->




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
          <li class="my-3"><a href="#">My Projects</a></li>
        </ul>
        <a href="">Logout</a>
      </div>
    </div>
  </div>
</div>



<!-- end modal login -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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