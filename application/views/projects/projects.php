<section class="project_page">
  <div class="container projects">
    <div class="row mb-5">
    <?php foreach ($projects->result() as $project) { ?>
  <div class="col-4 px-3 mt-5">
    <a href="<?=base_url('projects/'.$project->title)?>">
      <div class="procard">
        <div class="img-box mx-auto">
          <img style="object-fit:cover;" class="p-0 rounded-0" width="406" height="220" src="<?= base_url('assets/img/' . $project->image) ?>" alt="">
        </div>
        <div class="caption p-3 pb-">
          <h3><?= $project->title ?></h3>
          <p><?= $project->subtitle ?></p>
          <a href=""><?= $project->username ?></a>
        </div>
        <div class="fund p-3">
          <div class="bargrey mb-3">
            <div class="bargreen" style="width:100%"></div>
          </div>
          <div class="typef green mb-1">
            <span>Rp.1,000,000</span>
            <span>diperoleh</span>
          </div>
          <div class="typef mb-1">
            <span>100%</span>
            <span>target</span>
          </div>
          <div class="typef mb-1">
            <span class="donation-countdown"></span>
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
  <script>
    function getCurrentDate() {
      const today = new Date();
      const year = today.getFullYear();
      let month = today.getMonth() + 1;
      let day = today.getDate();

      // Format bulan dan hari dengan 2 digit
      if (month < 10) month = '0' + month;
      if (day < 10) day = '0' + day;

      return `${year}-${month}-${day}`;
    }

    // Menghitung selisih hari antara dua tanggal
    function getDaysDiff(startDate, endDate) {
      const oneDay = 24 * 60 * 60 * 1000; // Satu hari dalam milidetik
      const start = new Date(startDate).setHours(0, 0, 0, 0); // Menghapus informasi waktu
      const end = new Date(endDate).setHours(0, 0, 0, 0); // Menghapus informasi waktu
      const diffDays = Math.round(Math.abs((start - end) / oneDay));
      return diffDays;
    }

    // Update countdown setiap detik
    function updateCountdown(targetDate, days, countdownElement) {
      const intervalId = setInterval(() => {
        const currentDate = getCurrentDate();
        const diffDays = getDaysDiff(currentDate, targetDate);

        countdownElement.innerText = `${diffDays}`;

        if (diffDays > 0) {
          countdownElement.innerText = ` ${diffDays} `;
        } else {
          clearInterval(intervalId);
          countdownElement.innerText = 'Funding selesai!';
        }
      }, 1000);
    }

    const inputDate = '2023-07-01';
    const inputDays = 22;
    const targetDate = new Date(inputDate);
    targetDate.setDate(targetDate.getDate() + inputDays);

    // Memulai countdown untuk setiap proyek
    const countdownElement = document.querySelector('.donation-countdown:last-child');
    updateCountdown(targetDate, inputDays, countdownElement);
  </script>
<?php } ?>

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