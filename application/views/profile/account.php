<section class="profile pb-5">
  <div class="container p-5">
    <div class="row mb-4">
      <h3>Profile Settings</h3>
    </div>
    <div class="nav nav-profile">
      <ul class="list-group list-group-horizontal d-flex justify-content-end">
        <li class="list-group-item bg-transparent border-0"><a href="">Backed Projects</a> </li>
        <li class="list-group-item bg-transparent border-0"><a href="<?= base_url('profile/projects') ?>">Created Project</a></li>
        <li class="list-group-item bg-transparent border-0"> <a style="color: var(--kf-blue);" href="">Setting Account</a></li>
        <li class="list-group-item bg-transparent border-0"><a  href="<?= base_url('profile/' . $this->session->userdata('username')) ?>">Profile</a> </li>
      </ul>
    </div>

    <hr style="background: #333;">
    <form method="POST" action="<?= base_url('profile/saveSetting') ?>" enctype="multipart/form-data">
      <div class="row mt-5">
        <div class="col-5">
          <div class="input-box mb-3">
            <label for="" class="plabel">Email</label>
            <input name="user_id" type="hidden" value="<?= $user->id ?>">
            <input class="form-control mt-2 rounded-0" name="email" type="text" value="<?= $user->email ?>">
            <?= form_error('email') ?>
          </div>
          <div class="input-box mb-3">
            <label for="" class="plabel mb-2">Password</label>
            <a href="<?=base_url('auth_user/forgotPassword')?>" style="display:block ;"> 
                <button class="btn text-light rounded-0" style="background-color: #5a5a96;" type="button" >Change Password</button>
            </a>
          </div>
          <div class="input-box mb-3">
            <label for="" class="plabel">Current Password</label>
            <input class="form-control mt-2 rounded-0 mb-1" name="currentPassword" type="password">
            <span style="color:var(--kf-soft-black); font-weight:500">Enter your current password to save these changes. </span>
          </div>
        
          <div class="input-box mb-3">
            <button class="btn rounded-0 text-light" style="background-color: var(--kf-primary-blue);">Save Settings</button>
          </div>


        </div>
        
    </form>
  </div>
</section>