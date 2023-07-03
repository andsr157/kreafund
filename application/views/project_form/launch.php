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
        <?php 
        if ($status == 'rejected') { ?>
            <div class="container text-center p-5  mt-4 " style="border: solid; border-color:red; border-width:2px; ">
                <h4><?= $rejected->verification_desc ?></h4>
            </div>
        <?php
        } ?>
    </div>

    <div class="save d-flex justify-content-center">
        <?php if ($status === 'creating') { ?>
            <a href="<?= base_url('review/submit/' . $this->uri->segment(3)) ?>" onclick="return confirm('Apakah anda yakin mensubmit project?')">
                <button class="btn rounded-0">Submit Project!!</button>
            </a>
        <?php
        } ?>
        <?php if ($status == 'revisi') { ?>
            <a href="<?= base_url('review/submit/' . $this->uri->segment(3)) ?>"  onclick="return confirm('Apakah anda yakin mensubmit project?')">
                <button class="btn rounded-0 revisi-btn" style="background-color: var(--kf-primary-blue);">Submit Again!!</button>
            </a>
        <?php
        } ?>
    </div>



    <!-- modal log launch -->

    <div style="font-family:'maison_neuebook';" class="modal fade text-left logModal" id="logModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">
                        <center><b>Detail Revisi</b></center>
                    </h4>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container p-5">

                            <?php foreach ($revisi->result() as $revisi) { ?>
                                <div class="box mb-5 rounded-2 shadow p-2">
                                    <span class=""><?= format_datetime($revisi->created) ?></span>
                                    <h3 class="mt-3">
                                        <?= $revisi->verification_desc ?>
                                    </h3>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- end modal log launch -->




</section>