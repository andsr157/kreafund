<section class="myproject bg-grey">
        <div class="main w-100 h-100 p-0 d-flex justify-content-center">
            <div class="col-7 py-5">
                <div class="row nav-profile">
                    <ul class="list-group list-group-horizontal d-flex justify-content-end" >
                        <li class="list-group-item bg-transparent border-0"><a href="">Backed Projects</a> </li>
                        <li class="list-group-item bg-transparent border-0"><a href="" style="color: var(--kf-blue);">Created Project</a></li>
                        <li class="list-group-item bg-transparent border-0"> <a href="">Setting</a></li>
                        <li class="list-group-item bg-transparent border-0"><a href="<?=base_url('profile/'.$this->session->userdata('username'))?>">Profile</a> </li>
                    </ul>
                </div>
                <div class="row mt-3">
                    <h1 class="mb-3 type-t4">Created Project</h1>
                    <p class="type-st2">A place to keep track of all your created projects</p>
                </div>
                <div class="row mt-5 mb-4">
                    <div class="type-st2 fw-bold">Started</div>
                </div>

                <div class="started">
                    <ul class="list-group list-group-vertical">

                    <?php if($project == null){ ?>
                            <li class="list-group-item rounded-0 border-0 mb-4">
                                <div class="row py-2">
                                <div class="col-2">
                                    <a href="">
                                        <img src="<?=base_url('assets/')?>img/started/default.jpg" alt="" height="89" width="158" >
                                    </a>
                                </div>
                                <div class="col-8 ms-5">
                                    <div class="d-flex justify-content-center align-items-center h-100 ">
                                        <div>
                                            <p class="started-title">Tidak ada project yang dibuat <a href="<?=base_url('start')?>">(tambah +)</a> </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </li>
                        <?php } ?>
                        <?php 
                        foreach($project as $row){ ?>

                            <li class="list-group-item rounded-0 border-0 mb-4">
                                <div class="row py-2">
                                <div class="col-2">
                                    <a href="">
                                        <img src="<?=base_url('assets/')?>img/<?=$row->image?>" alt="" height="89" width="158" >
                                    </a>
                                </div>
                                <div class="col-8 ms-5">
                                    <div class="d-flex justify-content-between align-items-center h-100 ">
                                        <div>
                                            <a href=""><p class="started-title"><?=$row->title?></p></a>
                                        </div>

                                        <div>
                                            <a href="<?=base_url('project/').$this->session->userdata('username').'/'.$row->project_id?>"><p>Continue Editing</p></a>
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
      </section>