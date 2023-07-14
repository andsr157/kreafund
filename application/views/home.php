<section class="hero border-left-0 border-right-0 border-top-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col text-center px-lg-5">
        <a href="">
          <h1>"Jadilah pahlawan kreatif dengan menyumbang<br> untuk projek-projek inovatif."</h1>
        </a>
        <p class="lead d-none d-lg-block">Kami menyediakan platform untuk menggalang dana bagi proyek kreatifmu.<br> Bergabunglah sekarang dan jadilah bagian dari perubahan positif dalam industri kreatif di Indonesia.</p>
      </div>
    </div>
  </div>
</section>
<!-- end hero section -->
<section class="counter py-lg-1">
  <div class="container back border">
    <div class="row py-55">
      <div class="col-lg-4 text-center py-4 py-lg-0">
        <h2 class="mb-3 mb-lg-3" id="projectCount">0</h2>
        <p class="mb-2 mb-lg-0">Project</p>
      </div>
      <div class="col-lg-4 text-center py-4 py-lg-0">
        <h2 style="display: inline;" class="mb-3 mb-lg-3">Rp. <h2 style="display: inline;" id="donationAmount">0</h2>
        </h2>
        <p class="mb-2 mb-lg-0 pt-3">donasi</p>
      </div>
      <div class="col-lg-4 text-center py-4 py-lg-0">
        <h2 class="mb-3 mb-lg-3" id="successfulCount">0</h2>
        <p class="mb-2 mb-lg-0">Project berhasil</p>
      </div>
    </div>
  </div>
</section>

<!-- feaured project section -->
<section class="project border  pt-5 border-top-0">
  <div class="container">
    <div class="col">
      <div class="row">
        <h3 class=" pt-5 mb-4">Featured Project</h3>
      </div>
      <div class="row pt-3 pt-lg-1 pbox justify-content-beetween">
        <div class="col-12 col-lg-8 wrapper p-0" style="overflow: hidden;">
          <a href="<?= base_url('projects/' . $featured[0]['title'] . '/detail') ?>">
            <div class=" bg-child pt-5 px-lg-5 bg-fit border border-light border-5 w-100 h-100" style="background-image: url(<?= base_url('assets/img/' . $featured[0]['image']) ?>);">
              <h4 class="fp ps-3 mb-2">Classic Sports <br>Cars Posters</h4>
              <br>
              <p class="ps-3 " style="display: inline;">I chose to depict some of the most classic sports <br> cars that have been made and tried to make the <br>
                vehicles as accurate as possible</p>
            </div>
          </a>
        </div>
        <div class="col-12 col-lg-4 wrapper p-0" style="overflow: hidden;">
          <a href="<?= base_url('projects/' . $featured[1]['title'] . '/detail') ?>">
            <div class=" bg-child px-3 bg-fit pt-5 px-lg-5 border border-light border-5 w-100 h-100" style="background-image: url(<?= base_url('assets/img/' . $featured[1]['image']) ?>);">
              <h4><?= $featured[1]['title'] ?></h4>
            </div>
          </a>
        </div>
      </div>
      <div class="row pt-lg-1 pt-sm-0 pbox justify-content-beetween">
        <?php foreach ($featured as $index => $featured) { ?>
          <?php if ($index > 2) { ?>
            <div class="col-lg-4 wrapper p-0" style="overflow: hidden;">
              <a href="<?= base_url('projects/' . $featured['title'] . '/detail') ?>">
                <div class=" bg-child bg-fit pt-5 px-lg-5 border border-light border-5 border-top-0 w-100 h-100" style="background-image: url(<?= base_url('assets/img/' . $featured['image']) ?>);">
                  <h4><?= $featured['title'] ?></h4>
                </div>
              </a>
            </div>
          <?php
          } ?>
        <?php }
        ?>
      </div>

      <!-- <div class="row py-5 px-5">
                    <button class="btn btn-dark ">Lihat Semua Project</button>
                </div> -->
    </div>
  </div>
  <div class="container-fluid pt-lg-3">
    <div class="decor" style="background-image: url(img/hero_decor.png);"></div>
  </div>
</section>
<!-- end feaured project -->

<!-- info section -->
<!-- <section class="info">
        <div class="container">
          <div class="row px-55">
            <div class="col-md-6 d-lg-block d-none">
              <img src="img/info.png" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="cbox">
                  <h3 class="mb-1 mb-lg-3">Misi Kami</h3>
                  <p>Platform kami memiliki tujuan untuk meningkatkan industri kreatif di indonesia </p>
                  <div class="row pt-5 pt-lg-5 px-2">
                    <div class="col-2">
                      <div class="icon">
                        <span><i class="fa-solid fa-magnifying-glass fa-rotate-90"></i></span>
                      </div>
                    </div>
                    <div class="col-10 ps-lg-4">
                      <h4 class="pb-lg-3">Meningkatkan Idsutri Kreatif</h4>
                      <p>Tujuan Utama kami adalah meningkatkan industri kreatif agar terbuka lapangan pekerjaan</p>
                    </div>
                  </div>

                  <div class="row pt-lg-5">
                    <div class="col-2 icon">
                      <div class="icon">
                        <span><i class="fa-solid fa-house"></i></i></span>
                      </div>
                    </div>
                    <div class="col-10 ps-lg-4">
                      <h4 class="pb-lg-3">Meningkatkan Idsutri Kreatif</h4>
                      <p>Tujuan Utama kami adalah meningkatkan industri kreatif agar terbuka lapangan pekerjaan</p>
                    </div>
                  </div>

                  <div class="row pt-lg-5 px-2">
                    <div class="col-2">
                      <div class="icon" style="box-sizing: border-box;">
                        <span><i class="fa-solid fa-star"></i></span>
                      </div>
                    </div>
                    <div class="col-10 ps-lg-4">
                      <h4 class="pb-lg-3">Meningkatkan Idsutri Kreatif</h4>
                      <p>Tujuan Utama kami adalah meningkatkan industri kreatif agar terbuka lapangan pekerjaan</p>
                    </div>
                  </div>

                </div>
            </div>
          </div>
        </div>
      </section> -->
<!-- end of info section -->

<!-- fresh section -->
<section class="fresh">
  <div class="container">
    <div class="row garis mb-1 mb-lg-5"></div>
    <div class="col cardp">
      <div class="row mb-4">
        <ul class="list-group list-group-horizontal ps-sm-2">
          <li class="list-group-item me-2"><a href="">
              <h3 style="font-size: 1rem;">Fresh Project</h3>
            </a></li>
          <li class="list-group-item"><a href="">
              <h3 style="font-size: 1rem;">Lihat lebih banyak ></h3>
            </a></li>
        </ul>
      </div>
      <div class="row">
        <ul class="list-group list-group-horizontal position-relative overflow-auto ">
          <?php foreach ($fresh as $fresh) { ?>
            <a href="<?= base_url('projects/' . $fresh->title . '/detail') ?>">
              <li class="list-group-item p-1 p-lg-2 ">
                <div class="col-lg-3">
                  <div class="wrapperimg">
                    <div class="boxImage bg-child">
                      <img style="object-fit: cover;" class="w-100 h-100 p-0 rounded-0" src="<?= base_url('assets/img/' . $fresh->image) ?>" alt="">
                    </div>
                  </div>

                  <div class="caption">
                      <h4 class="mt-3 mb-lg-4 mb-3" style="font-weight: 600; color:#282828;"><?= $fresh->title ?></h4>
                    <a href="">
                      <p class="mb-lg-5 mb-3" style="font-family: 'maison_neuebook';"><?= $fresh->description ?></p>
                    </a>
                    <p class="author"><a href="">by <?= $fresh->username ?></a></p>
                  </div>
                </div>
              </li>
            </a>
          <?php
          } ?>


        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end of fresh section -->

<!-- info section -->
<section class="info border border-left-0 border-right-0 border-bottom-0">
  <div class="container">
    <div class="row">
      <div class="wrapper col-12 col-lg-6">
        <div class=" bg-child">
          <img class="img-info w-100 h-100" src="<?= base_url('assets/') ?>img/1.jpg" alt="">
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="row ps-lg-5 caption">
          <div class="col-lg-11 ps-lg-4 garis">
            <a href="">
              <h3 class=" mb-lg-4">Section Info</h3>
            </a>
            <a href="">
              <p class="pe-lg-3">Get access to funds from nonprofits and foundations that back Kreafund campaigns related
                to their visions for a more creative and equitable world.</p>
            </a>
          </div>
        </div>
        <div class="row link"><a href="">
            <p>Learn More</p>
          </a></div>
      </div>
    </div>
  </div>
</section>


<!-- end of info section -->
<!-- fresh section -->
<section class="fresh">
  <div class="container">
    <div class="row garis mb-1 mb-lg-5"></div>
    <div class="col cardp">
      <div class="row mb-4">
        <ul class="list-group list-group-horizontal ps-sm-2">
          <li class="list-group-item"><a href="">
              <h3>Project Berhasil ></h3>
            </a></li>
        </ul>
      </div>
      <div class="row">
        <ul class="list-group list-group-horizontal position-relative overflow-auto ">
          <li class="list-group-item p-1 p-lg-2">
            <div class="col-lg-3">
            <div class="wrapperimg">
              <div class="boxImage bg-child">
                <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="<?= base_url('assets/') ?>img/s1.avif" alt="">
              </div>
            </div>
              <div class="caption">
                <a href="">
                  <h4 class="mt-3 mb-lg-4 mb-3 ">Leviathan Wilds</h4>
                </a>
                <a href="">
                  <p class="mb-lg-5 mb-3">Leviathan Wild is an iconic cornerstone of the board game world that combines bidding, development and conquest mechanics.</p>
                </a>
                <p class="author"><a href="">by alex zorei</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item p-1 p-lg-2">
            <div class="col-lg-3">
              <div class="wrapperimg">
                <div class="boxImage bg-child">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="<?= base_url('assets/') ?>img/s2.avif" alt="">
                </div>
              </div>
              <div class="caption">
                <a href="">
                  <h4 class="mt-3 mb-lg-4 mb-3 ">Pies, Mori, Lunar, Bacon</h4>
                </a>
                <a href="">
                  <p class="mb-lg-5 mb-3">uick and tasty! In Pies, play fruit cards over the course of three rounds</p>
                </a>
                <p class="author"><a href="">by alex zorei</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item p-1 p-lg-2">
            <div class="col-lg-3">
              <div class="wrapperimg">
                <div class="boxImage bg-child">
                  <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="<?= base_url('assets/') ?>img/s3.avif" alt="">
                </div>
              </div>
              <div class="caption">
                <a href="">
                  <h4 class="mt-3 mb-lg-4 mb-3 ">Adventure Intrigue Flowers</h4>
                </a>
                <a href="">
                  <p class="mb-lg-5 mb-3">In 2012, Basic Action Games released Honor + Intrigue, a cinematic standalone swashbuckling RPG system built on the same streamlined engine as the BarbariansS!</p>
                </a>
                <p class="author"><a href="">by alex zorei</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item p-1 p-lg-2">
            <div class="col-lg-3">
            <div class="wrapperimg">
              <div class="boxImage bg-child">
                <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="<?= base_url('assets/') ?>img/s4.avif" alt="">
              </div>
            </div>
              <div class="caption">
                <a href="">
                  <h4 class="mt-3 mb-lg-4 mb-3 ">Fablecraft</h4>
                </a>
                <a href="">
                  <p class="mb-lg-5 mb-3">This is Haunted Table's first crowdfunding campaign, but we've worked with experienced professionals to determine our budget, timeline, and creative plan</p>
                </a>
                <p class="author"><a href="">by alex zorei</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item p-1 p-lg-2">
            <div class="col-lg-3">
              <div class="boxImage">
                <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="<?= base_url('assets/') ?>img/s5.avif" alt="">
              </div>
              <div class="caption">
                <a href="">
                  <h4 class="mt-3 mb-lg-4 mb-3 ">DIY Creative Starter tools</h4>
                </a>
                <a href="">
                  <p class="mb-lg-5 mb-3">British Machete Co. (BMC) is positioning to become the UK's leading high quality large blade manufacturer. Our products are developed to be ergonomic,  </p>
                </a>
                <p class="author"><a href="">by alex zorei</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item p-1 p-lg-2">
            <div class="col-lg-3">
              <div class="boxImage">
                <img class="w-100 h-100 img-fluid img-thumbnail p-0 rounded-0" src="<?= base_url('assets/') ?>img/s6.avif" alt="">
              </div>
              <div class="caption">
                <a href="">
                  <h4 class="mt-3 mb-lg-4 mb-3 ">Break Isekai Wolrd</h4>
                </a>
                <a href="">
                  <p class="mb-lg-5 mb-3">Break is a Peru-based store that brings popular characters to the plane of pins, stickers, and cute things like that.</p>
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
<!-- end of fresh section -->
<!-- info_corner section -->
<section class="info_corner" style="font-family: 'maison_neuebook';">
  <div class="container">
    <div class="col">
      <div class="row mb-lg-4">
        <h3>Info Corner</h3>
      </div>

      <div class="row corner p-lg-2 mb-lg-5">
        <div class="col-lg-6">
          <div class="box d-flex">
            <div class="col-4">
              <img src="<?= base_url('assets/') ?>img/c1.jpeg" class="img-fluid img-thumbnail p-0 rounded-0" alt="" width="180px">
            </div>
            <div class="col-8 ms-3 ms-lg-0">
              <h3>How To Make Your Project Presentation</h3>
              <p>Our definitive roundup of everything from planning shipping to communicating with backers.</p>
              <a href="">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box d-flex">
            <div class="col-4">
              <img src="<?= base_url('assets/') ?>img/c2.png" class="img-fluid img-thumbnail p-0 rounded-0" alt="" width="180px">
            </div>
            <div class="col-8 ms-3 ms-lg-0">
              <h3>How To Tell Your Story</h3>
              <p>Our definitive roundup of everything from planning shipping to communicating with backers.</p>
              <a href="">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row corner p-lg-2 mtc-100">
        <div class="col-lg-6">
          <div class="box d-flex">
            <div class="col-4">
              <img src="<?= base_url('assets/') ?>img/c3.avif" class="img-fluid img-thumbnail p-0 rounded-0" alt="" width="180px">
            </div>
            <div class="col-8 ms-3 ms-lg-0">
              <h3>How To Make Your Project Presentation</h3>
              <p>Our definitive roundup of everything from planning shipping to communicating with backers.</p>
              <a href="">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box d-flex border-sm-0">
            <div class="col-4">
              <img src="<?= base_url('assets/') ?>img/c4.jpg" class="img-fluid img-thumbnail p-0 rounded-0" alt="" width="180px">
            </div>
            <div class="col-8 ms-3 ms-lg-0">
              <h3>How To Make Your Project Presentation</h3>
              <p>Our definitive roundup of everything from planning shipping to communicating with backers.</p>
              <a href="">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>