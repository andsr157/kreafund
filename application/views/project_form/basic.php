<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="<?= base_url('start/basic') ?>">
                        <div class="ikon border-active">
                            <span>✍️</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>

                </li>
                <li class="list-group-item mx-5 cat2">
                    <a href="<?= base_url('start/reward') ?>">
                        <div class="ikon">
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



<form action="<?= base_url('projects/process') ?>" method="POST" enctype="multipart/form-data">
    <div class="basic-title">
        <h2 class="text-center">Start with the basics</h2>
        <h3 class="text-center ">Make it easy for people to learn about your project.</h3>
    </div>
    <div class="container-fluid px-0 border-bottom border-2 my-5"></div>
    <section class="basic">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Project Title</h4>
                    <p class="type-d">Write a clear, brief title and subtitle to help people quickly understand your
                        project.
                        Both will appear on your project and pre-launch pages.
                    </p>
                    <p class="type-d">
                        Potential backers will also see them if your project appears on category pages,
                        search results, or in emails we send to our community.
                    </p>
                </div>
                <div class="col-8 side-form ">
                    <div class="mb-5">
                        <input type="hidden" name="project_id" value="<?= $row->project_id ?>">
                        <label for="exampleInputEmail1" class="form-label mb-3">Title</label>
                        <input type="text" class="form-control rounded-0" name="title" value="<?= $row->title ?>" placeholder="Inputkan Judul Projectmu">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label mb-3">Subtitle</label>
                        <input type="text" class="form-control rounded-0" name="subtitle" value="<?= $row->subtitle ?>" placeholder="Inputkan Sub Judul Singkat Projectmu">
                    </div>
                    <span class="">
                        <a href="">Give backers the best first impression of your project with great titles. </a>
                    </span>

                </div>
            </div>
        </div>


        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Project category</h4>
                    <p class="type-d">Choose a primary category and subcategory to help backers find your project.
                    </p>
                    <p class="type-d">
                        Your second subcategory will help us provide more relevant guidance
                        for your project. It won’t display on your project page or affect how it appears in search
                        results.
                    </p>
                    <p class="type-d">
                        You can change these anytime before and during your campaign.
                    </p>
                </div>
                <div class="col-8 side-form cat-form ">
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputEmail1" class="form-label mb-1">Primary category</label>
                            <select class="form-select rounded-0" aria-label="Default select example" id="category" name="category">
                                <?php
                                foreach ($category as $cat) { ?>
                                    <option value="<?= $cat->category_id ?>" <?= $cat->category_id == $row->category_id ? 'selected' : null ?>><?= $cat->category_name ?></option>';
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="col-6"><label for="exampleInputEmail1" class="form-label mb-1">subcategory</label>
                            <select class="form-select rounded-0" aria-label="Default select example" id="subcat" name="subcat">
                                <option value="<?= $row->subcat_id ?>"><?= $row->subcat_name ?></option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Project Location</h4>
                    <p class="type-d">
                        Enter the location that best describes where your project is based.
                    </p>
                </div>
                <div class="col-8 side-form ">
                    <div class="mb-5">
                        <select class="form-select rounded-0" aria-label="Default select example" id="location" name="location">
                            <?php
                            foreach ($location as $loc) { ?>
                                <option value="<?= $loc->location_id ?>" <?= $loc->location_id == $row->location_id ? 'selected' : null ?>><?= $loc->location_name ?></option>';
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Project Image</h4>
                    <p class="type-d">
                        Add an image that clearly represents your project. Choose one that looks good at different
                        sizes—it’ll
                        appear on your project page, across the Kickstarter website and mobile apps, and (when shared)
                        on social channels.
                    </p>
                    <p class="type-d">
                        Your image should be at least 1024x576 pixels. It will be cropped to a 16:9 ratio.
                    </p>
                    <p class="type-d">
                        Avoid images with banners, badges, or text—they are illegible at smaller sizes, can be penalized
                        by the Facebook algorithm,
                        and decrease your chances of getting Kickstarter homepage and newsletter features.
                    </p>
                </div>
                <div class="col-8 side-form" id="image_side_form">
                    <?php
                    
                    if (isset($row->image) && $row->image == 'default.jpg') { ?>
                        <div id="image_basic_form">
                            <div style="display: flex;" class="media-form h-75 w-100  justify-content-center align-items-center flex-column" id="upload_box">
                                <div class="btn-circle">
                                    <label for="gambar_basic">
                                        <i class="fa-sharp fa-regular fa-image"></i>
                                    </label>
                                    <input type="file" name="gambar" id="gambar_basic" style="display: none;">
                                </div>
                                <p class="type-1 mt-3">Drop an image here, or select a file.</p>
                                <p class="type-2 mt-2">It must be a JPG, PNG, GIF, TIFF, or BMP, no larger than 200 MB.</p>
                            </div>

                            <div class="shadow p-3 mb-5 bg-body overflow-auto" id="uploaded_box" style="display: none;">
                                <img src="<?= $row->image ?>" alt="" style="object-fit: cover;" width="100%" height="387" id="uploaded_image">
                                <div class="d-flex flex-row mt-2">
                                    <button class="btn media-button p-2 px-3 rounded-0" style="font-size: 0.9rem;" type="button" id="delcurrent_image">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    <?php
                    } else { ?>

                        <div class="shadow p-3 mb-5 bg-body overflow-auto" id="preview">
                            <input type="hidden" value="<?= $row->image ?>" id="image_project">
                            <img src="<?= base_url('assets/img/') . $row->image ?>" alt="" style="object-fit: cover;" width="100%" height="387" id="uploaded_image">
                            <div class="d-flex flex-row mt-2">

                                <button class="btn media-button p-2 px-3 rounded-0" id="del-prev" style="font-size: 0.9rem;" type="button">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>


        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Project video (optional)</h4>
                    <p class="type-d">
                        Add a video that describes your project.
                    </p>
                    <p class="type-d">
                        Tell people what you’re raising funds to do, how you plan to make it happen, who you are, and
                        why you care about this project.
                    </p>
                    <p class="type-d pb-0">
                        After you’ve uploaded your video, use our editor to add captions and subtitles so your project
                        is more accessible to everyone.
                    </p>
                </div>
                <div class="col-8 side-form h-100">
                    <div class="media-form h-100 w-100 d-flex justify-content-center align-items-center flex-column">
                        <div class="btn-circle" style="padding-left: 2.2rem; padding-right:2.2rem;">
                            <a href="">
                                <label for="input-gambar">
                                    <i class="fa-sharp fa-regular fa-file-video"></i>
                                </label>
                                <input type="file" id="input-gambar" style="display: none;">
                            </a>
                        </div>
                        <p class="type-1 mt-3">Drop a video here, or select a file.</p>
                        <p class="type-2 mt-2">It must be a MOV, MPEG, AVI, MP4, 3GP, WMV, or FLV, no larger than 5120
                            MB.</p>
                    </div>
                    <span class="mt-4">
                        <a href="">
                            80% of successful projects have a video. Make a great one, regardless of your budget.
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Funding Goal</h4>
                    <p class="type-d">
                        Enter the location that best describes where your project is based.
                    </p>
                </div>
                <div class="col-8 side-form ">
                    <div class="input-group">
                        <span class="input-group-text rounded-0">Rp</span>
                        <input type="text" name="goal" class="form-control rounded-0" value="<?= $row->goal ?>" placeholder="00,00">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Campaign duration</h4>
                    <p class="type-d">
                        Set a time limit for your campaign. You won’t be able to change this after you launch.
                    </p>
                </div>
                <div class="col-8 side-form ">

                    <div class="outter mb-4">
                        <div class="radiobox pt-0">
                            <input class="form-check-input pt-0 mt-0" type="radio" name="radio" id="rbtn1" onclick="show1()" value="30" <?= $row->duration == '30' ? 'checked' : null ?>>
                            <span class="ms-2">Standar</span>

                        </div>
                        <div id="radio1" style="display: none;">
                            <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                            <div class="fixeddate mx-3">
                                <label for="exampleInputEmail1" class="form-label my-2">Durasi standar</label>
                                <input type="number" id="standar" name="standar" value="30" class="form-control rounded-0 mb-5" placeholder="" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="outter">
                        <div class="radiobox pt-0">
                            <input class="form-check-input pt-0 mt-0" type="radio" name="radio" id="rbtn2" onclick="show2()" value="0" <?= $row->duration != '30' ? 'checked' : null ?>>
                            <span class="ms-2">Custom</span>
                        </div>
                        <div id="radio2" style="display: none;">
                            <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                            <div class="fixeddate mx-3">
                                <label for="exampleInputEmail1" class="form-label my-2">Masukan hari</label>
                                <input type="number" id="custom" name="custom" class="form-control rounded-0 mb-5" placeholder="0-60" value="<?= $row->duration ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 border-bottom border-2 my-5"></div>
        <input type="hidden" name="edit" value="edit">

        <div class="container d-flex justify-content-center">
            <div class="save">
                <button class="btn rounded-0 px-5" type="submit">Save</button>
            </div>
        </div>
    </section>
</form>