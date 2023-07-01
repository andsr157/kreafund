<section class="start-cat" id="start-cat">
        <div class="container">
            <div class="row px-5 mb-5">
                <ul class="list-group list-group-horizontal justify-content-center">
                    <li class="list-group-item mx-5 cat1">
                        <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/basic') ?>">
                            <div class="ikon">
                                <span>✍️</span>
                                <p class="mt-3">Basic</p>
                            </div>
                        </a>

                    </li>
                    <li class="list-group-item mx-5 cat2">
                        <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/reward') ?>">
                            <div class="ikon">
                                <span>🎁</span>
                                <p class="mt-3">Reward</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat3">
                        <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/story') ?>">
                            <div class="ikon">
                                <span>📖</span>
                                <p class="mt-3">story</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat4">
                        <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/people') ?>">
                            <div class="ikon  border-active">
                                <span>👥</span>
                                <p class="mt-3">People</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat5">
                        <a href="<?=base_url('start/payment')?>">
                            <div class="ikon ">
                                <span>💰</span>
                                <p class="mt-3">Basic</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat6">
                        <a href="<?=base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/launch')?>">
                            <div class="ikon">
                                <span>📢</span>
                                <p class="mt-3">Launch</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>



<section class="people">
        <div class="people-title ">
            <h2 class="text-center">Introduce yourself</h2>
            <h3 class="text-center ">Give backers an idea of who you are, and make backer trust you</h3>
        </div>

        <div class="continer-fluid px-0 border-bottom border-2 mt-100 mb-5"></div>

        <div class="container px-5">
            <div class="row pt-4 ">
                <div class="col-4 mt-4 px-0">
                    <h4 class="px-0">Your Profile</h4>
                    <p class="type-d">
                        This will appear on your project page and must include your name, photo, and biography.
                    </p>
                </div>
                <div class="col-8 side-form">
                    <div class="row border border-1">
                        <div class="img-profile">
                            <img class="img-fluid img-thumbnail w-100 h-100 rounded-circle" style="object-fit: cover;" src="<?=base_url('assets/img/ikon/'.$user->avatar)?>" alt="">
                        </div>
                        <div class="box px-4">
                            <div class="type-11 mb-2">
                                <span>
                                    <?=$user->username?>
                                </span>
                            </div>
                            <span class="type-13">
                                Project Creator
                            </span>
                        </div>
                        <div class="continer-fluid px-0 border-bottom border-2 my-3"></div>

                        <div class="container mb-3">
                            <a href="<?= base_url('profile/detail/' . $this->session->userdata('username'))?>">
                                <button class="btn w-100 btn-dark rounded-0 py-2" style="background-color:var(--kf-btn-black);">Your profile</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="continer-fluid px-0 border-bottom border-2 mt-100 mb-5"></div>
    </section>


