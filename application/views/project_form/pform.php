<section class="project_start">
  <div class="container px-5 mt-100 ">
    <div class="row">
      <div class="mt-3 pb-5">
        <h2 class="mb-2"><?= $row->title ?></h2>
        <h3>by <?= $row->username ?></h3>
      </div>
    </div>
  </div>
  <div class="continer-fluid px-0 border-bottom border-2 "></div>
  <div class="container px-5 ">
    <div class="row mt-5 content">
      <h3 class="mb-3">
        Informasi Projek
      </h3>
      <ul class="list-group">
        <li class="list-group-item">
          <div class="col-2">
          </div>
          <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/basic') ?>">
            <div class="col-10">
              <h4>Info Dasar</h4>
              <p>Name your project, upload an image or video, and establish your campaign details.</p>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <div class="col-2">
          </div>
          <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/reward') ?>">
            <div class="col-10">
              <h4>Rewards</h4>
              <p>Set your rewards and shipping costs.</p>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <div class="col-2">
          </div>
          <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/story') ?>">
            <div class="col-10">
              <h4>Story</h4>
              <p>Add a detailed project description and convey your risks and challenges.</p>
            </div>
          </a>
        </li>
        <li class="list-group-item">
          <div class="col-2">
          </div>
          <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/people') ?>">
            <div class="col-10">
              <h4>People / Team</h4>
              <p>Edit your Kickstarter profile and add collaborators.</p>
            </div>
          </a>
        </li>
        <li class="list-group-item">
          <div class="col-2">
          </div>
          <a href="">
            <div class="col-10">
              <h4>Payment</h4>
              <p>Chose your payment method</p>
            </div>
          </a>
        </li>
        <div class="row">
          <div class="col-1">
            <div class="connect">
              <div class="h-line mx-auto">
              </div>
              <div class="dot"></div>
            </div>
          </div>
          <div class="mmin-30 col-9 ">
            <P class="m-con">Submit your project for review</P>
          </div>
        </div>
        <?php
        if ($row->status == 'pending' || $row->status == 'revisi' || $row->status == 'rejected') { ?>
          <li class="list-group-item" style="border:solid; border-width:2px; border-color:var(--kf-primary-dark);">
            <div class="col-2">
            </div>
            <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/launch') ?>">
              <div class="col-10">
                <h4>Project Review</h4>
                <p>We’ll check to make sure it follows our rules and guidelines.</p>
              </div>
            </a>
          </li>
        <?php
        } else if ($row->status == 'creating') { ?>
          <li class="list-group-item">
            <div class="col-2">
            </div>
            <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/launch') ?>">
              <div class="col-10">
                <h4>Project Review</h4>
                <p>We’ll check to make sure it follows our rules and guidelines.</p>
              </div>
            </a>
          </li>
        <?php
        } ?>

      </ul>

      <h3 class="mt-5 mb-3">
        Prepare to launch
      </h3>
      <ul class="list-group">
        <li class="list-group-item">
          <div class="col-2">
          </div>
          <a href="<?= base_url('start/launch') ?>">
            <div class="col-10">
              <h4>Ready To launch</h4>
              <p>Final setup before launch your project</p>
            </div>
          </a>
        </li>
        <div class="row">
          <div class="col-1">
            <div class="connect">
              <div class="h-line mx-auto">
              </div>
              <div class="dot"></div>
            </div>
          </div>
          <div class="mmin-30 col-9 ">
            <P class="m-con">Launch!!</P>
          </div>
        </div>
      </ul>
    </div>
  </div>
  <div class="continer-fluid px-0 border-bottom border-2 "></div>
  <div class="container mt-5 mb-5 px-5">
    <div class="row content">
      <h3 class="mt-1 mb-3">
        Progress
      </h3>
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item rounded-0 w-100">
          <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/backer') ?>">
            <h4 class="mb-2">Check backer</h4>
            <p>Check your donation backer</p>
          </a>

        </li>
        <li class="list-group-item w-10 border-0"></li>
        <li class="list-group-item rounded-0 w-100 border border-left-1">
          <a href="">
            <h4 class="mb-2">Ready To launch</h4>
            <p>Final setup before launch your project</p>
          </a>

        </li>
      </ul>
    </div>
  </div>

  <div class="continer-fluid px-0 border-bottom border-2"></div>
  <div class="container mt-5 mb-5 px-5">
    <div class="del-button">
      <button class="btn rounded-0">
        <span><i class="fa-solid fa-trash"></i></span>
        <span class="px-2">Delete project</span>
      </button>
    </div>
  </div>
</section>