<section class="myproject bg-grey">
    <div class="main w-100 h-100 p-0 d-flex justify-content-center">
        <div class="col-7 py-5">
            <div class="row nav-profile">
                <ul class="list-group list-group-horizontal d-flex justify-content-end">
                    <li class="list-group-item bg-transparent border-0"><a href="" style="color: var(--kf-blue);">Backed Projects</a> </li>
                    <li class="list-group-item bg-transparent border-0"><a href="<?= base_url('profile/projects') ?>">Created Project</a></li>
                    <li class="list-group-item bg-transparent border-0"> <a href="">Setting</a></li>
                    <li class="list-group-item bg-transparent border-0"><a href="<?= base_url('profile/' . $this->session->userdata('username')) ?>">Profile</a> </li>
                </ul>
            </div>
            <div class="row mt-3">
                <h1 class="mb-3 type-t4">Backed Project</h1>
                <p class="type-st2">A place to keep track of all your backed projects</p>
            </div>
            <div class="row mt-5 mb-4">
                <div class="type-st2 fw-bold">Backed</div>
            </div>

            <div class="started">
                <ul class="list-group list-group-vertical">

                    <?php if ($backed == null) { ?>
                        <li class="list-group-item rounded-0 border-0 mb-4">
                            <div class="row py-2">
                                <div class="col-2">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/started/default.jpg" alt="" height="89" width="158">
                                    </a>
                                </div>
                                <div class="col-8 ms-5">
                                    <div class="d-flex justify-content-center align-items-center h-100 ">
                                        <div>
                                            <p class="started-title">Tidak ada project di donasi </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    <?php
                    foreach ($backed as $backed) { ?>

                        <li class="list-group-item rounded-0 border-0 mb-4">
                            <div class="row py-2">
                                <div class="col-2">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/<?= $backed->image ?>" alt="" height="89" width="158">
                                    </a>
                                </div>
                                <div class="col-8 ms-5">
                                    <div class="d-flex justify-content-between align-items-center h-100 ">
                                        <div>
                                            <a href="">
                                                <p class="started-title"><?= $backed->title ?></p>
                                            </a>
                                        </div>
                                        <?php
                                        if ($backed->status_code == 200) { ?>
                                            <div>
                                                <a href="<?= $backed->pdf_url ?>" target="_blank" >
                                                    <p>Menunggu pembayaran</p>
                                                </a>
                                            </div>
                                        <?php
                                        } else if ($backed->status_code == 201) { ?>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#detailBacker" data-reward_id = <?=$backed->reward_id?>>
                                                <p>Detail</p>
                                            </a>
                                        <?php
                                        } ?>

                                    </div>
                                </div>
                            </div>
                        </li>

                    <?php }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</section>

<div style="font-family:'maison_neuebook';" class="modal fade text-left" id="detailBacker" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">
                        <center><b>Detail Reward</b></center>
                    </h4>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container ">
                            <div class="box mb-5 rounded-2 shadow p-2">
                                <span class="" style="font-weight: 700;">Airrack-kickstarter</span>
                                <div class="border border-bottom mt-2 mb-3"></div>
                                <div id="detailBackerItem">
                                    <ul style="font-style: italic;">
                                        <li class="my-1">Sticker 2x</li>
                                        <li class="my-1">Shirt 4x</li>
                                        <li class="my-1">Cap 1x</li>
                                    </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>