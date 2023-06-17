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
                                
                                <div class="type-10 mt-5">
                                    <?php
                                    if($rqty != 99999){
                                        echo'<span>Limited('.$rqty.')</span>';
                                    } 
                                    else if($rqty == 99999){
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
                            <button class="btn ms-2 type-13 duplicate_reward" type="button" data-reward_id="<?= $reward->reward_id ?>">
                                Duplicate
                            </button>
                            <button class="btn ms-2 type-13 delete_reward" type="button" data-reward_id="<?= $reward->reward_id ?>">
                                Delete
                            </button>
                        </div>
                    </div>

                </div>
            <?php
            } ?>