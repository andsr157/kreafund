<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="<?= base_url('start/basic') ?>">
                        <div class="ikon ">
                            <span>✍️</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>

                </li>
                <li class="list-group-item mx-5 cat2">
                    <a href="<?= base_url('start/reward') ?>">
                        <div class="ikon">
                            <span>🎁</span>
                            <p class="mt-3">Reward</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat3">
                    <a href="<?= base_url('start/story') ?>">
                        <div class="ikon">
                            <span>📖</span>
                            <p class="mt-3">story</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat4">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/people') ?>">
                        <div class="ikon">
                            <span>👥</span>
                            <p class="mt-3">People</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat5">
                    <a href="<?= base_url('start/payment') ?>">
                        <div class="ikon ">
                            <span>💰</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat6">
                    <a href="<?= base_url('start/launch') ?>">
                        <div class="ikon border-active">
                            <span>📢</span>
                            <p class="mt-3">Launch</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="launch">
    <div class="launch-title ">
        <h2 class="text-center">Prepare For Launch</h2>
        <h3 class="text-center ">
            Get ready to launch your project.
        </h3>
    </div>

    <div class="row my-5 px-5">
        <div class="container d-flex justify-content-center p-5 border border-2">
            <div class="box text-center">
                <?php if ($status == 'creating') { ?>
                    <h4 id="typed-text">Pastikan Data sudah terisi semua dengan baik dan benar sesuai aturan</h4>
                <?php
                } else { ?>
                    <h4 class="mb-4">Status :</h4>
                    <?php if ($status == 'pending') { ?>
                        <h3 class="mb-2 pending">Pending (on review)</h3>
                    <?php
                    } ?>
                    <?php if ($status == 'revisi') { ?>
                        <h3 class="mb-2 revisi">Revisi</h3>
                        <button class="btn btn-dark rounded-0 w-100 px-5" data-bs-toggle="modal" data-bs-target="#logModal">Detail</button>
                    <?php
                    } ?>
                    <?php if ($status == 'rejected') { ?>
                        <h3 class="mb-2 rejected">rejected</h3>
                    <?php
                    } ?>
                    <?php if ($status == 'accepted') { ?>
                        <h3 class="mb-2 acc">Accepted</h3>
                        <p>Your project already launch </p>
                    <?php
                    } ?>
                <?php
                } ?>

            </div>
        </div>
    </div>

    <div class="save d-flex justify-content-center">
        <?php if ($status == 'creating') { ?>
            <a href="" style="display: none;">
                <button class="btn rounded-0">Submit Project!!</button>
            </a>
        <?php
        } ?>
        <?php if ($status == 'pending') { ?>
            <a href="">
            <button class="p-3 rounded-0 launch-button-disabled" style="display: none;" disabled>Launch Now!!</button>
        </a>
        <?php
        } ?>
        <?php if ($status == 'revisi') { ?>
            
        <a href="">
            <button class="btn rounded-0 revisi-btn" style="background-color: var(--kf-primary-blue);">Submit Again!!</button>
        </a>
        <?php
        } ?>
        
       
    </div>

</section>