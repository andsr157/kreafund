<section class="profile pb-5">
  <div class="container p-5">
    <div class="row mb-4">
      <h3>Profile Settings</h3>
    </div>
    <div class="nav nav-profile">
      <ul class="list-group list-group-horizontal d-flex justify-content-end">
        <li class="list-group-item bg-transparent border-0"><a href="">Backed Projects</a> </li>
        <li class="list-group-item bg-transparent border-0"><a href="<?= base_url('profile/projects') ?>">Created Project</a></li>
        <li class="list-group-item bg-transparent border-0"> <a href="<?= base_url('profile/account') ?>">Setting Account</a></li>
        <li class="list-group-item bg-transparent border-0"><a style="color: var(--kf-blue);" href="<?= base_url('profile/' . $this->session->userdata('username')) ?>">Profile</a> </li>
      </ul>
    </div>

    <hr style="background: #333;">
    <form method="POST" action="<?= base_url('profile/update') ?>" enctype="multipart/form-data">
      <div class="row mt-5">
        <div class="col-4">
          <div class="input-box mb-3">
            <label for="" class="plabel">Nama</label>
            <input name="user_id" type="hidden" value="<?= $this->session->userdata('user_id') ?>">
            <input class="form-control mt-2 rounded-0" name="name" type="text" value="<?= $user->name ?>">
            <?= form_error('name') ?>
          </div>
          <div class="input-box mb-3">
            <label for="" class="plabel">Username</label>
            <input class="form-control mt-2 rounded-0" name="username" type="text" value="<?= $user->username ?>">
          </div>
          <div class="input-box mb-3">
            <label for="" class="plabel">Email</label>
            <input class="form-control mt-2 rounded-0" name="email" type="text" value="<?= $user->email ?>">
          </div>

          <div class="input-box mb-3">
            <label for="" class="plabel">Address</label>
            <input class="form-control mt-2 rounded-0" name="address" type="text" value="<?= $user->address ?>">
          </div>
          <div class="input-box mb-3">
            <label for="" class="plabel">Social Media (optional)</label>
            <span class="text-danger" style="font-weight: 600; font-style:italic;">Input the Url link </span>
            <div class="d-flex align-items-center mt-3">
              <label for="" class="plabel me-2" style="width: 32px; width:32px;">
                <img src="<?=base_url('assets/img/ikon/facebook.png')?>" alt="Facebook Icon" width="100%" height="109%" class="icon-image pt-2">
              </label>
              <input class="form-control mt-2 rounded-0"  style="border-color: #1877F2; border-width:1px;" name="fb" type="text" value="<?= $user->facebook ?>">
            </div>
            <div class="d-flex align-items-center mt-2">
              <label for="" class="plabel me-2" style="width: 32px; width:32px;">
                <img src="<?=base_url('assets/img/ikon/twitter.png')?>" alt="Facebook Icon" width="100%" height="109%" class="icon-image pt-2">
              </label>
              <input class="form-control mt-2 rounded-0" style="border-color: #03A9F4; border-width:1px;" name="twitter" type="text" value="<?= $user->twitter ?>">
            </div>
            <div class="d-flex align-items-center mt-2">
              <label for="" class="plabel me-2" style="width: 32px; width:32px;">
                <img src="<?=base_url('assets/img/ikon/instagram.png')?>" alt="Facebook Icon" width="100%" height="109%" class="icon-image pt-2">
              </label>
              <input class="form-control mt-2 rounded-0" name="insta" style="border-color: #FE3E6F; border-width:1px;"  type="text" value="<?= $user->instagram ?>">
            </div>
            <div class="d-flex align-items-center mt-2">
              <label for="" class="plabel me-2" style="width: 32px; width:32px;">
                <img src="<?=base_url('assets/img/ikon/website.png')?>" alt="Facebook Icon" width="100%" height="109%" class="icon-image pt-2">
              </label>
              <input class="form-control mt-2 rounded-0" name="web" style="border-color: var(--kf-soft-black); border-width:1px;"  type="text" value="<?= $user->website ?>">
            </div>
          </div>



          <!-- <div class="input-box mb-3">
            <label for="" class="plabel">Your Url</label>
            <input class="form-control mt-2 rounded-0" type="text" value="www.kreafund/profile/jimek" disabled>
          </div> -->

        </div>
        <div class="col-2"></div>
        <div class="col-6">
          <div class="row mb-5">
            <div class="col-2">
              <div class="preview">
                <img style="object-fit:cover;" src="<?= base_url('assets/img/ikon/' . $user->avatar) ?>" alt="" width="92px" height="92px" id="previewImage" class="rounded-circle">
              </div>
            </div>
            <div class="col-10 pt-2">
              <div class="input-box mb-3">
                <label for="" class="plabel">Avatar</label>
                <input class="form-control mt-2 rounded-0" name="avatar" type="file" id="avatarInput">
              </div>
            </div>
          </div>
          <div class="input-box mb-3">
            <label for="" class="plabel mb-2">Biography</label>
            <textarea id="biography" cols="30" rows="10" name="biography" class="form-control rounded-0"><?= $user->biography ?></textarea>
          </div>
        </div>
      </div>
      <script>
        document.getElementById('avatarInput').addEventListener('change', function(event) {
          var input = event.target;
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              var previewImage = document.getElementById('previewImage');
              previewImage.src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
          }
        });
      </script>
      <div class="mt-5">
        <a href="">
          <button class="btn text-light px-4 rounded-1 me-3" style="background-color: var(--kf-primary-blue);" type="submit">Save</button>
        </a>
        <a href="<?= base_url('profile/detail/' . $this->session->userdata('username')) ?>">
          <button class="btn text-dark px-4 rounded-1   btn-light border" type="button">View Profile</button>
        </a>
      </div>
    </form>
  </div>
</section>