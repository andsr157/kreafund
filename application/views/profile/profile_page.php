<section class="creator mb-5">
    <div class="board">
        <?php
        if (!empty($this->session->userdata('username')) && ($this->session->userdata('level') == 2)) { ?>
            <div class="container d-flex justify-content-end pe-5">
                <a href="<?= base_url('profile/' . $this->session->userdata('username')) ?>">
                    <button class="btn btn-primary rounded-0">Edit Profile</button>
                </a>
            </div>
        <?php
        } ?>

        <div class="container">
            <div class="creatorAvatar d-flex justify-content-center">
                <a href="">
                    <img src="<?= base_url('assets/img/ikon/' . $user->avatar) ?>" alt="">
                </a>
            </div>
            <div class="creatorBio text-center mt-4">
                <h2 class="mb-3"><?= $user->name ?></h2>
                <span>Joined <?= getFormattedDate($user->created) ?></span>
            </div>

            <?php
            function getFormattedDate($dateStr)
            {
                $date = new DateTime($dateStr);
                $monthNames = [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                ];
                $month = $monthNames[$date->format('n') - 1];
                $year = $date->format('Y');
                return $month . ' ' . $year;
            }
            ?>
        </div>
    </div>
    <div class="mainProfile" style="padding-bottom: 8rem;">
        <div class="navtop text-center py-4">
            <a href="">About</a>
        </div>
        <!-- <div class="container-fluid px-0 border-primary border-bottom border-3"></div> -->
        <div class="about mt-5">
            <div class="d-flex justify-content-center">
                <div class="box" style="width:750px;">
                    <h2 class="mb-2"><?= $user->name ?></h2>
                    <span><?= $user->address ?></span>
                    <p class="type-16 mt-4"><?= $user->biography ?></p>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="<?= $user->facebook ?>" target="_blank" rel="noopener noreferrer" class="mx-3" title="<?= $user->facebook ?>">
                    <img src="<?= base_url('assets/') ?>img/ikon/facebook.png" alt="Facebook" style="width: 28px; height: 28px; margin-right: 10px;">
                </a>
                <a href="<?= $user->twitter ?>" target="_blank" rel="noopener noreferrer" class="mx-3" title="<?= $user->twitter ?>">
                    <img src="<?= base_url('assets/') ?>img/ikon/twitter.png" alt="Twitter" style="width: 28px; height: 28px; margin-right: 10px;">
                </a>
                <a href="<?= $user->instagram ?>" target="_blank" rel="noopener noreferrer" class="mx-3" title="<?= $user->instagram ?>">
                    <img src="<?= base_url('assets/') ?>img/ikon/instagram.png" alt="Instagram" style="width: 28px; height: 28px; margin-right: 10px;">
                </a>
                <a href="<?= $user->website ?>" target="_blank" rel="noopener noreferrer" class="mx-3" title="<?= $user->website ?>">
                    <img src="<?= base_url('assets/') ?>img/ikon/website.png" alt="Website" style="width: 28px; height: 28px;">
                </a>
            </div>

        </div>
    </div>
</section>