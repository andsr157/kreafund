<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/basic') ?>">
                        <div class="ikon ">
                            <span>✍️</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>

                </li>
                <li class="list-group-item mx-5 cat2">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/reward') ?>">
                        <div class="ikon border-active">
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
                    <a href="<?= base_url('start/people') ?>">
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




<section class="reward" id="rewardlink">
    <div class="container px-100">
        <div class="row">
            <ul class="list-group list-group-horizontal r-nav">
                <li class="list-group-item rcat rborder-active me-3 pb-4 rounded-0" id="reward_items">
                    <p>
                        <span class="ikonr text-light"><i class="fa-solid fa-gift"></i></span>
                        <span class="type-d type-d-active ms-2">Reward Items</span>
                    </p>
                </li>

                <li class="list-group-item rcat  me-3 pb-4 rounded-0" id="items">
                    <p>
                        <span class="ikonr text-secondary bg-transparent"><i class="fa-solid fa-gift"></i></span>
                        <span class="type-d type-d-deactive ms-2">Items</span>
                    </p>
                </li>



                <!-- <li class="list-group-item rcat pb-4 rounded-0">
                        <p>
                            <span class="ikonr text-secondary bg-transparent"><i class="fa-solid fa-gift"></i></span>
                            <span class="type-d-deactive ms-2">Items</span>
                        </p>
                    </li> -->
            </ul>
        </div>

        <div class="continer-fluid px-0 border-bottom border-3 mb-3"></div>
        <div id="reward-wrapper1">
            <div class="row">
                <div class="col-8 p-0">
                    <p class="type-r mt-4 mb-3">
                        Most creators offer 3-10 reward tiers, which can be physical items or special experiences. Make sure to set reasonable backer expectations
                    </p>
                    <span class="mb-5">
                        <a href="">
                            Learn about creating and managing rewards
                        </a>
                    </span>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="new text-center w-50">
                        <button class="btn rounded-0 w-100 btn-dark" style="color: white;" id="add_reward">
                            + New Reward
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-3 t-head ">
                <div class="col-2 ps-3">
                    <span>NOMINAL DONASI</span>
                </div>
                <div class="col-4 ps-3">
                    <span>
                        DETAIL
                    </span>
                </div>
                <div class="col-3 ps-0">
                    <span>
                        ITEM
                    </span>
                </div>
                <div class="col-3 pe-0"><span>GAMBAR</span></div>
            </div>
            <?php foreach ($rewards as  $reward) {
                $estDelivery = $reward->est_delivery;
                $dateParts = explode("/", $estDelivery);

                $today = date('Y-m-d'); // Mendapatkan tanggal hari ini
                $jumlah_hari = $reward->time_limit; // Jumlah hari yang ingin ditambahkan

                if ($jumlah_hari == 99999) {
                    $tanggal_baru = "sampai penggalangan dana selesai";
                } else {
                    $tanggal_baru = date('Y-m-d', strtotime($today . ' + ' . $jumlah_hari . ' days')); // Menambahkan jumlah hari ke tanggal hari ini
                }
                $rqty = $reward->qty;
                $month = $dateParts[0];
                $year = $dateParts[1]; ?>

                <div class="row r-outter mb-4">
                    <a href="">
                        <div class="row rbox">
                            <div class="col-2 ">
                                <h3><?= $reward->amount ?></h3>
                            </div>
                            <div class="col-4 ">
                                <h3 class="mb-4">Digital Poster Exclusive</h3>
                                <div class="type-9 mb-1">
                                    <span>Estimated delivery:</span>
                                    <span><?=$month .'-'. $year?>'</span>
                                </div>
                                <div class="type-9 mb-1">
                                    <span>Reward Time</span>
                                    <span> : <?=$tanggal_baru?></span>
                                </div>
                                <div class="type-9 mb-1">
                                    <span>Includes some physical goods</span>
                                </div>
                                <div class="type-10 mt-5">
                                    <?php
                                    if($rqty != 99999){
                                        echo'<span>Limited('.$rqty.')</span>';
                                    } 
                                    else{
                                        echo'<span>Unlimited</span>';
                                    }
                                    ?>
                                </div>

                            </div>
                            <div class="col-3">
                                <ul>
                                    <?php
                                    $itemlist = [];
                                    $itemQty = [];
                                    $items = $this->reward_m->getItems($reward->reward_id);
                                    foreach ($items->result() as $item) {
                                        $itemlist[] = $item->item_name;
                                        $itemQty[] = $item->qty;
                                        echo '<li>' . $item->item_name .' '.$item->qty.'<i>x</i>'. '</li>';
                                    }
                                    $itemdata = implode(', ', $itemlist);
                                    $itemQtydata = implode(', ', $itemQty);
                                    ?>
                                </ul>
                            </div>
                            <div class="col-3">
                                <div class="rimage">
                                    <img src="<?=base_url('assets/img/reward/').$reward->image?>"  alt="" width="230" height="170" style="object-fit:cover">
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="continer-fluid px-0 border-bottom border-1 "></div>
                    <div class="row my-3">
                        <div class="col-6 type-13 d-flex align-items-center">
                            <span class="me-1">0</span>
                            <span>Backers</span>
                        </div>
                        <div class="col-6 d-flex justify-content-end ">
                            <button class="btn ms-2 type-13 edit_reward" type="button" data-reward_id="<?= $reward->reward_id ?>" data-title="<?= $reward->title ?>" data-amount="<?= $reward->amount ?>" data-image="<?= $reward->image ?>" data-desc="<?= $reward->description ?>" data-month="<?= $month ?>" data-year="<?= $year ?>" data-qty="<?= $reward->qty ?>" data-timelimit="<?= $reward->time_limit ?>" data-items="<?= htmlspecialchars(json_encode($items), ENT_QUOTES, 'UTF-8') ?>" data-itemsQty="<?= $itemQtydata ?>">
                                Edit
                            </button>
                            <button class="btn ms-2 type-13">
                                <span>Duplicate</span>
                            </button>
                            <button class="btn ms-2 type-13">
                                <span>Delete</span>
                            </button>
                        </div>
                    </div>

                </div>
            <?php
            } ?>



            <div class="row dummy">
                <a href="">
                    <div class="container-fluid d-flex justify-content-center align-items-center p-5 type-10">
                        <p class="m-5">There Will be your reward box +</p>
                    </div>
                </a>

            </div>
        </div>
        <div id="reward-wrapper2" style="display: none;">
            <?php $this->view('project_form/reward/reward_item'); ?>
        </div>


    </div>
</section>
<section class="reward_form mt-5" id="reward_form" style="display: none;">
    <?php $this->view('project_form/reward/reward_form'); ?>
</section>



<section class="reward_form mt-5" id="item_form" style="display:none;">
    <div class="container px-5">
        <div class="ms-5">
            <div class="row">
                <div class="title-form">
                    <h2>Add Item</h2>
                </div>

            </div>
            <div class="row mt-100 mb-4">
                <div class="col-4">
                    <label class="form-label mb-3">Title</label>
                    <div class="type-13">
                        <span>
                            Add a title that quickly and clearly describes this item
                        </span>
                    </div>
                </div>
                <div class="col-8">
                    <input type="hidden" class="form-control rounded-0 py-3 mb-2" name="item_id" id="item_id" placeholder="Inputkan Judul Projectmu">
                    <input type="text" class="form-control rounded-0 py-3 mb-2" name="item" id="item" placeholder="Inputkan Judul Projectmu">
                    <span id="item_error" class="text-danger"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8">
                    <button class="btn  p-2 btn-dark rounded-0 px-5" id="btn_add_item" style="background-color: var(--kf-primary); border-width: 0;" type="button">Save Reward
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>