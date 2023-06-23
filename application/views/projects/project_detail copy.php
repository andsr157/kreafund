<section class="project_detail">
  <section class="hero">
    <div class="container">
      <div class="row ptitle">
        <h2 class="mb-2">White Rabbit Crewnecks</h2>
        <p>Be a part of the team bringing new, vibrant classical music to the public's ears!</p>
      </div>
      <div class="row content">
        <div class="col-lg-8 content-box">
          <img src="img/1.jpg" class="img-fluid p-0 w-100 h-100" alt="">
        </div>
        <div class="col-lg-4 px-sm-4 ps-lg-5">
          <div class="bargrey mb-4">
            <div class="bargreen" style="width:86.35%"></div>
          </div>
          <h2>Rp.<?= $project->row()->goal ?></h2>
          <p>donasi dari target Rp.<?= $project->row()->goal ?></p>

          <div>
            <span>27</span>

            <p>Donatur</p>
          </div>

          <div>
            <span id="donation_countdown"></span>
            <script>
              function getCurrentDate() {
                const today = new Date();
                const year = today.getFullYear();
                let month = today.getMonth() + 1;
                let day = today.getDate();

                // Format bulan dan hari dengan 2 digit
                if (month < 10) month = '0' + month;
                if (day < 10) day = '0' + day;

                return `${year}-${month}-${day}`;
              }

              // Menghitung selisih hari antara dua tanggal
              function getDaysDiff(startDate, endDate) {
                const oneDay = 24 * 60 * 60 * 1000; // Satu hari dalam milidetik
                const start = new Date(startDate);
                const end = new Date(endDate);
                const diffDays = Math.round(Math.abs((start - end) / oneDay));
                return diffDays;
              }

              // Update countdown setiap detik
              function updateCountdown(targetDate, days) {
                const countdownElement = document.getElementById('donation_countdown');

                const intervalId = setInterval(() => {
                  const currentDate = getCurrentDate();
                  const diffDays = getDaysDiff(currentDate, targetDate);

                  countdownElement.innerText = `Countdown: ${diffDays} hari`;

                  if (diffDays <= days) {
                    clearInterval(intervalId);
                    countdownElement.innerText = 'Countdown selesai!';
                  }
                }, 1000);
              }

              const inputDate = '2023-06-18'; 
              const inputDays = 10; 

              const targetDate = new Date(inputDate);
              targetDate.setDate(targetDate.getDate() + inputDays);

              // Memulai countdown
              updateCountdown(targetDate, inputDays);
            </script>
            <p>Hari Lagi</p>
          </div>

          <div class="row">
            <button class="btn btn-lg mt-4 rounded-0 text-light" style="background-color: var(--kf-primary);">Donate</button>
          </div>
          <div class="dtl mt-2 p-0">
            <P>All or nothing. This project will only be funded if it reaches its goal by Fri, May 19 2023 11:00 PM UTC +07:00.</P>
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
      </div>
    </nav>
    <div class="container" style="">
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
            <?= $story->row()->content ?>
          </div>

          ​<h2 id="resiko" style="font-size: 1.3rem;" class="my-5">
            Risks and challenges
          </h2>
          <div class="main-text">
            <p>
              <?= $story->row()->risk ?>
            </p>
          </div>

          </article>
        </div>
        <div class="col-4 pt-lg-5">
          <div class="sticky-top " style="top: 4rem;">
            <div class="col reward-box">
              <ul class="list-group list-group-vertical ">
                <li class="list-group-item mb-4 px-4 pb-4">
                  <div class="row rcard ">
                    <div class="image-box mx-auto my-3">
                      <img src="" alt="">
                    </div>
                    <h3 class="my-3">Example Official </h3>
                    <div class="row rdesc">
                      <p>Get a hardcover printing of the Standard Landscape version 10" x 8".
                        Thank you for supporting this project to shine a light on Burma.</p>
                    </div>

                  </div>
                </li>
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
                <li class="list-group-item mb-3 ">
                  <div class="rimage">
                    <img src="img/6.jpg" class="img-fluid img-thumbnail rounded-0" alt="">
                  </div>
                  <div class="px-4 pb-4">
                    <div class="row rcard">
                      <h2 class="my-4">Donasi 50K atau Lebih</h2>
                      <h3 class="mb-3">A streaming link on May 20! </h3>
                      <div class="row rdesc">
                        <p>Get a hardcover printing of the Standard Landscape version 10" x 8".

                          Thank you for supporting this project to shine a light on Burma.</p>
                        <span class="mb-2">Termasuk :</span>
                        <ul class="mb-2">
                          <li>
                            A very enthusiastic high five. Real or virtual.
                          </li>
                          <li>
                            A virtual meet-up to meet the author
                          </li>
                        </ul>
                      </div>
                      <div class="row rstat">
                        <div class="row-1 my-1">
                          <button class="btn btn-xs btn-secondary">2 donatur</button>
                        </div>
                        <div class="row-1">
                          <button class="btn btn-xs btn-secondary">Limited (97/98)</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3 ">
                  <a href="">
                    <div class="rimage">
                      <img src="img/5.png" class="img-fluid img-thumbnail rounded-0" alt="">
                    </div>
                    <div class="px-4 pb-4">
                      <div class="row rcard">
                        <h2 class="my-4">Donasi 50K atau Lebih</h2>
                        <h3 class="mb-3">7" x 7" square paperback version </h3>
                        <div class="row rdesc">
                          <p>Get a hardcover printing of the Standard Landscape version 10" x 8".

                            Thank you for supporting this project to shine a light on Burma.</p>
                          <span class="mb-2">Termasuk :</span>
                          <ul class="mb-2">
                            <li>
                              A very enthusiastic high five. Real or virtual.
                            </li>
                            <li>
                              A virtual meet-up to meet the author
                            </li>
                          </ul>
                        </div>
                        <div class="row rstat">
                          <div class="row-1 my-1">
                            <button class="btn btn-xs btn-secondary">2 donatur</button>
                          </div>
                          <div class="row-1">
                            <button class="btn btn-xs btn-secondary">Limited (97/98)</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>

                </li>

                <li class="list-group-item mb-3 ">
                  <div class="rimage">
                    <img src="img/4.png" class="img-fluid img-thumbnail rounded-0" alt="">
                  </div>
                  <div class="px-4 pb-4">
                    <div class="row rcard">
                      <h2 class="my-4">Donasi 50K atau Lebih</h2>
                      <h3 class="mb-3">7" x 7" square paperback version </h3>
                      <div class="row rdesc">
                        <p>Get a hardcover printing of the Standard Landscape version 10" x 8".

                          Thank you for supporting this project to shine a light on Burma.</p>
                        <span class="mb-2">Termasuk :</span>
                        <ul class="mb-2">
                          <li>
                            A very enthusiastic high five. Real or virtual.
                          </li>
                          <li>
                            A virtual meet-up to meet the author
                          </li>
                        </ul>
                      </div>
                      <div class="row rstat">
                        <div class="row-1 my-1">
                          <button class="btn btn-xs btn-secondary">2 donatur</button>
                        </div>
                        <div class="row-1">
                          <button class="btn btn-xs btn-secondary">Limited (97/98)</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3 ">
                  <div class="rimage">
                    <img src="img/6.jpg" class="img-fluid img-thumbnail rounded-0" alt="">
                  </div>
                  <div class="px-4 pb-4">
                    <div class="row rcard">
                      <h2 class="my-4">Donasi 50K atau Lebih</h2>
                      <h3 class="mb-3">7" x 7" square paperback version </h3>
                      <div class="row rdesc">
                        <p>Get a hardcover printing of the Standard Landscape version 10" x 8".

                          Thank you for supporting this project to shine a light on Burma.</p>
                        <span class="mb-2">Termasuk :</span>
                        <ul class="mb-2">
                          <li>
                            A very enthusiastic high five. Real or virtual.
                          </li>
                          <li>
                            A virtual meet-up to meet the author
                          </li>
                        </ul>
                      </div>
                      <div class="row rstat">
                        <div class="row-1 my-1">
                          <button class="btn btn-xs btn-secondary">2 donatur</button>
                        </div>
                        <div class="row-1">
                          <button class="btn btn-xs btn-secondary">Limited (97/98)</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3 ">
                  <div class="rimage">
                    <img src="img/6.jpg" class="img-fluid img-thumbnail rounded-0" alt="">
                  </div>
                  <div class="px-4 pb-4">
                    <div class="row rcard">
                      <h2 class="my-4">Donasi 50K atau Lebih</h2>
                      <h3 class="mb-3">7" x 7" square paperback version </h3>
                      <div class="row rdesc">
                        <p>Get a hardcover printing of the Standard Landscape version 10" x 8".

                          Thank you for supporting this project to shine a light on Burma.</p>
                        <span class="mb-2">Termasuk :</span>
                        <ul class="mb-2">
                          <li>
                            A very enthusiastic high five. Real or virtual.
                          </li>
                          <li>
                            A virtual meet-up to meet the author
                          </li>
                        </ul>
                      </div>
                      <div class="row rstat">
                        <div class="row-1 my-1">
                          <button class="btn btn-xs btn-secondary">2 donatur</button>
                        </div>
                        <div class="row-1">
                          <button class="btn btn-xs btn-secondary">Limited (97/98)</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>





              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fresh">
    <div class="container">
      <div class="col cardp">
        <div class="row mb-4">
          <ul class="list-group list-group-horizontal ps-sm-2">
            <li class="list-group-item me-2"><a href="">
                <h3>Fresh Project</h3>
              </a></li>
            <li class="list-group-item"><a href="">
                <h3>Lihat lebih banyak ></h3>
              </a></li>
          </ul>
        </div>
        <div class="row">
          <ul class="list-group list-group-horizontal position-relative overflow-auto ">

            <li class="list-group-item p-1 p-lg-2">
              <div class="col-lg-3">
                <div class="boxImage">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="img/f1.avif" alt="">
                </div>
                <div class="caption">
                  <a href="">
                    <h4 class="mt-3 mb-lg-4 mb-3 ">L'Arsene's Ledger of Treasures and Trinkets - A DnD 5e Tome</h4>
                  </a>
                  <a href="">
                    <p class="mb-lg-5 mb-3">400+ pages of Heliana-compatible craftable magic items that grow with your players! Fuel your hoarding addiction!</p>
                  </a>
                  <p class="author"><a href="">by alex zorei</a></p>
                </div>
              </div>
            </li>
            <li class="list-group-item p-1 p-lg-2">
              <div class="col-lg-3">
                <div class="boxImage">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="img/f2.avif" alt="">
                </div>
                <div class="caption">
                  <a href="">
                    <h4 class="mt-3 mb-lg-4 mb-3 ">L'Arsene's Ledger of Treasures and Trinkets - A DnD 5e Tome</h4>
                  </a>
                  <a href="">
                    <p class="mb-lg-5 mb-3">400+ pages of Heliana-compatible craftable magic items that grow with your players! Fuel your hoarding addiction!</p>
                  </a>
                  <p class="author"><a href="">by alex zorei</a></p>
                </div>
              </div>
            </li>
            <li class="list-group-item p-1 p-lg-2">
              <div class="col-lg-3">
                <div class="boxImage">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="img/f4.avif" alt="">
                </div>
                <div class="caption">
                  <a href="">
                    <h4 class="mt-3 mb-lg-4 mb-3 ">L'Arsene's Ledger of Treasures and Trinkets - A DnD 5e Tome</h4>
                  </a>
                  <a href="">
                    <p class="mb-lg-5 mb-3">400+ pages of Heliana-compatible craftable magic items that grow with your players! Fuel your hoarding addiction!</p>
                  </a>
                  <p class="author"><a href="">by alex zorei</a></p>
                </div>
              </div>
            </li>
            <li class="list-group-item p-1 p-lg-2">
              <div class="col-lg-3">
                <div class="boxImage">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="img/f3.avif" alt="">
                </div>
                <div class="caption">
                  <a href="">
                    <h4 class="mt-3 mb-lg-4 mb-3 ">L'Arsene's Ledger of Treasures and Trinkets - A DnD 5e Tome</h4>
                  </a>
                  <a href="">
                    <p class="mb-lg-5 mb-3">400+ pages of Heliana-compatible craftable magic items that grow with your players! Fuel your hoarding addiction!</p>
                  </a>
                  <p class="author"><a href="">by alex zorei</a></p>
                </div>
              </div>
            </li>
            <li class="list-group-item p-1 p-lg-2">
              <div class="col-lg-3">
                <div class="boxImage">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="img/f5.avif" alt="">
                </div>
                <div class="caption">
                  <a href="">
                    <h4 class="mt-3 mb-lg-4 mb-3 ">L'Arsene's Ledger of Treasures and Trinkets - A DnD 5e Tome</h4>
                  </a>
                  <a href="">
                    <p class="mb-lg-5 mb-3">400+ pages of Heliana-compatible craftable magic items that grow with your players! Fuel your hoarding addiction!</p>
                  </a>
                  <p class="author"><a href="">by alex zorei</a></p>
                </div>
              </div>
            </li>
            <li class="list-group-item p-1 p-lg-2">
              <div class="col-lg-3">
                <div class="boxImage">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="img/f6.avif" alt="">
                </div>
                <div class="caption">
                  <a href="">
                    <h4 class="mt-3 mb-lg-4 mb-3 ">L'Arsene's Ledger of Treasures and Trinkets - A DnD 5e Tome</h4>
                  </a>
                  <a href="">
                    <p class="mb-lg-5 mb-3">400+ pages of Heliana-compatible craftable magic items that grow with your players! Fuel your hoarding addiction!</p>
                  </a>
                  <p class="author"><a href="">by alex zorei</a></p>
                </div>
              </div>
            </li>
          </ul>
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