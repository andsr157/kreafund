<div class="project_detail">
  <section class="donate my-5">

    <div class="container " style="padding-left: 5rem;">
      <div class="row" style="top: 4rem;">

        <div class="col-9">
          <ul class="list-group list-group-vertical ">

            <li class="list-group-item rounded-0 mb-4 px-4 pb-4">
              <div class="row rcard">
                <h2 class="my-4">Donasi Tanpa Reward</h2>
                <form action="">
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-8"><input type="input" class="form-control rounded-0" placeholder="00,00"></div>
                      <div class="col-4">
                        <button type="submit" class="btn rounded-0 text-light w-100" style="background-color: var(--kf-primary);">Donate</button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="row rdesc mb-3">
                  <p>Support the project for no reward, just because it speaks to you</p>

                </div>
              </div>
            </li>

            <?php foreach ($rewards as $reward) { 
              $estDelivery = $reward->est_delivery;
              $dateParts = explode("/", $estDelivery);

              $month = $dateParts[0];
              $year = $dateParts[1];
              $rqty = $reward->qty;
              ?>
              <li class="list-group-item mb-3 ">
                <div class="px-4 pb-4">
                  <div class="row rcard">
                    <h2 class="my-4">Donasi <?= formatCurrency($reward->amount) ?> atau Lebih</h2>
                    <div class="row">
                      <div class="col-7">
                        <h3 class="mb-3 type-14"><?= $reward->title ?></h3>
                        <div class="row rdesc">
                          <p><?= $reward->description ?></p>
                          <span class="mb-2">Estimated Delivery</span>
                          <p style="color: var(--kf-black); font-size: 1rem;"><?=$month .'-'. $year?></p>

                          <span class="mb-2">Termasuk :</span>
                          <ul class="mb-2">
                            <?php
                            $items = $this->reward_m->getItems($reward->reward_id);
                            foreach ($items->result() as $item) {
                              echo '<li>' . $item->item_name . ' ' . $item->qty . '<i>x</i>' . '</li>';
                            }
                            ?>
                          </ul>
                        </div>
                        <div class="d-flex rstat pt-4">
                          <span class="pe-2">
                            <button class="btn btn-xs btn-secondary backed">2 donatur</button>
                          </span>
                          <span>
                            <button class="btn btn-xs btn-secondary quantity">
                              <?php
                              if ($rqty != 99999) {
                                echo 'Limited(' . $rqty . ')';
                              } else if ($rqty == 99999) {
                                echo 'Unlimited';
                              }
                              ?>
                            </button>
                          </span>
                        </div>
                      </div>
                      <div class="col-1"></div>
                      <div class="col-4 ps-5">
                        <img src="<?=base_url('assets/img/reward/'.$reward->image)?>" alt="" width="250px" height="165px" style="object-fit:cover;">
                      </div>
                    </div>
                    <div class="justify-content-end tombol" style="display: none;">
                      <button class="btn text-light rounded-0 w-25 donateReward" style="background-color: #037362;" 
                      data-reward_id = <?=$reward->reward_id?>
                      data-project_id = <?=$project_id?>
                      data-reward_title = <?=$reward->title?>
                      data-reward_amount = <?=$reward->amount?>
                      data-reward_image = <?=$reward->image?> >
                        Donate
                      </button> 
                    </div>

                  </div>
                </div>
              </li>
            <?php
            } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>