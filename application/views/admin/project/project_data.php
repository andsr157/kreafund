<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h4 class="page-title">Project Diajukan</h4>
            <div class="d-flex justify-content-start">
                <a href="<?= base_url('users/add') ?>" class="btn btn-icons btn-inverse-primary btn-new ml-2">
                    <i class="mdi mdi-plus"></i>
                </a>
            </div>
        </div>

        <div class="started">
            <ul class="list-group list-group-vertical">

                <?php if ($project == null) { ?>
                    <li class="list-group-item rounded-0 border-0 mb-4">
                        <div class="row py-2">
                            <div class="col-2">
                                <a href="">
                                    <img style="object-fit:cover;" src="<?= base_url('assets/') ?>img/started/default.jpg" alt="" height="89" width="158" >
                                </a>
                            </div>
                            <div class="col-8 ms-5">
                                <div class="d-flex justify-content-center align-items-center h-100 ">
                                    <div>
                                        <p class="started-title">Tidak ada project yang diajukan <a href="<?= base_url('start') ?>">(tambah +)</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
                <?php
                foreach ($project as $key => $row) { ?>

                    <li class="card list-group-item rounded-0 border-0 mb-4">
                        <div class="row py-2">
                            <div class="col-2">
                                <a href="">
                                    <img src="<?= base_url('assets/') ?>img/<?= $row->image ?>" alt="" height="89" width="158">
                                </a>
                            </div>
                            <div class="col-8 ms-5">
                                <div class="d-flex justify-content-between align-items-center h-100 ">
                                    <div>
                                        <a href="">
                                            <p class="started-title"><?= $row->title ?></p>
                                        </a>
                                    </div>

                                    <div>
                                        <a href="<?=base_url('projects/review/'.$row->project_id)?>">
                                        <button type="button" id="detail-report" class="btn btn-edit py-3 btn-success" data-project_id="<?=$row->project_id?>" data-toggle="modal">
                                            <i class="mdi mdi-eye "></i> Review
                                        </button>
                                        </a>
                                        
                                    </div>
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