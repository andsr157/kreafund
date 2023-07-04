<section class="project_page">
  <div class="container projects">
    <div class="row mb-5">
      <?php foreach ($projects->result() as $index => $project) { ?>
        <div class="col-4 px-3 mt-5">
          <a href="<?= base_url('projects/' . $project->title . '/detail') ?>">
            <div class="procard">
              <div class="img-box mx-auto">
                <img style="object-fit:cover;" class="p-0 rounded-0" width="406" height="220" src="<?= base_url('assets/img/' . $project->image) ?>" alt="">
              </div>
              <div class="caption p-3 pb-">
                <h3><?= $project->title ?></h3>
                <p><?= $project->subtitle ?></p>
                <a href=""><?= $project->username ?></a>
              </div>
              <?php
                  $amount = $this->trans_m->getById($project->project_id);
                  $percentage = calculatePercentage($amount, $project->goal);
                  ?> 
              <div class="fund p-3">
                <div class="bargrey mb-3">
                  
                  <div class="bargreen" style="width:<?=$percentage?>%"></div>
                </div>
                <div class="typef green mb-1">
                  
                  <span>Rp.<?=number_format($amount, 0, ',', '.')?></span>
                  <span>diperoleh</span>
                </div>
                <div class="typef mb-1">
                  <span><?=$percentage?>%</span> 
                  <span>target</span>
                </div>
                <?php
                $targetDate = new DateTime($project->updated);
                $endDate = clone $targetDate;
                $endDate->add(new DateInterval('P' . ($project->duration) . 'D'));
                $currentDate = new DateTime();

                $diff = $endDate->diff($currentDate);
                $diffDays = $diff->format('%a') + 1;
                ?>
                <div class="typef mb-1">
                  <span class="donation_countdown" data-target-date="<?= $endDate->format('Y-m-d H:i:s') ?>"></span>
                  <span>hari lagi</span>
                </div>
              </div>
              <div class="bcaption d-flex p-3">
                <a href="" class="pe-3"><?= $project->category_name ?></a>
                <a href=""><?= $project->location_name ?></a>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>

      <script>
        function updateCountdown() {
          const countdownElements = document.querySelectorAll('.donation_countdown');

          countdownElements.forEach(element => {
            const targetDate = new Date(element.dataset.targetDate);
            const currentDate = new Date();

            function calculateCountdown(target, current) {
              const diffTime = target.getTime() - current.getTime();
              const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
              return diffDays;
            }

            const diffDays = calculateCountdown(targetDate, currentDate);

            if (diffDays > 0) {
              element.innerText = `${diffDays}`;
            } else {
              element.innerText = 'Funding Selesai!';
            }
          });
        }

        updateCountdown();
      </script>





    </div>
  </div>
</section>

<section class="page-number">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&lsaquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&rsaquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</section>