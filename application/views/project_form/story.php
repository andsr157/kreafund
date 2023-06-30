<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/basic') ?>">
                        <div class="ikon">
                            <span>✍️</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>

                </li>
                <li class="list-group-item mx-5 cat2">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/reward') ?>">
                        <div class="ikon">
                            <span>🎁</span>
                            <p class="mt-3">Reward</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat3">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/story') ?>">
                        <div class="ikon border-active">
                            <span>📖</span>
                            <p class="mt-3">story</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat4">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $row->project_id . '/edit/people') ?>">
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
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="story">
    <div class="story-title">
        <h2 class="text-center">Introduce your projects</h2>
        <h3 class="text-center">Tell people why they should be excited about your project. Get specific but be clear and be brief.</h3>
    </div>

    <div class="container-fluid px-0 border-bottom border-2 mt-100 mb-5"></div>
    <?php if (is_object($row)) : ?>
        <input type="hidden" id="storyId" value="<?= $row->story_id ?>">
    <?php else : ?>
        <input type="hidden" value="">
    <?php endif; ?>

    <div class="container px-5">
        <div class="row pt-4">
            <h4 class="px-0">Project description</h4>
            <div class="col-7 mt-4 px-0">
                <p class="type-d">
                    Describe what you're raising funds to do, why you care about it, how you plan to make it happen,
                    and who you are. Your description should tell backers everything
                    they need to know. If possible, include images to show them what your project is all about and
                    what rewards look like.
                </p>
            </div>
            <div class="text-editor form-group px-0" style="background: transparent;">
                <textarea name="content_editor" id="content_editor" class="form-control px-0 w-100" cols="30" rows="10"><?= isset($row->content) ? $row->content:'';?></textarea>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 border-bottom border-2 mt-100 mb-5"></div>

    <div class="container px-5">
        <div class="row pt-4">
            <div class="col-5">
                <h4 class="mb-4">Risks and challenges</h4>
                <p class="type-d">
                    Be honest about the potential risks and challenges of this project and how you plan to overcome them to complete it.
                </p>
            </div>
            <div class="col-7 side-form">
                <?php if (isset($row->risk)) { ?>
                    <textarea class="form-control rounded-0 ps-0" id="risk" rows="3" placeholder="Common risks and challenges you may want to address include budgeting, timelines for rewards and the project itself, the size of your audience..."><?= $row->risk ?></textarea>
                <?php } else { ?>
                    <textarea class="form-control rounded-0 ps-0" id="risk" rows="3" placeholder="Common risks and challenges you may want to address include budgeting, timelines for rewards and the project itself, the size of your audience..."></textarea>
                <?php } ?>

                <div class="mt-4">
                    <span class="">
                        <a href="">Communicate risks and challenges up front to set proper expectations. Learn more...</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

    <?php if (!isset($row->story_id)) { ?>
        <div class="container d-flex justify-content-center">
            <div class="save">
                <button class="btn rounded-0 px-5" id="saveStory">Save story</button>
            </div>
        </div>
    <?php } else { ?>
        <div class="container d-flex justify-content-center">
            <div class="save">
                <button class="btn rounded-0 px-5" id="updateStory">Update story</button>
            </div>
        </div>
    <?php } ?>
</section>
