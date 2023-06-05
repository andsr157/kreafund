<form id="data_reward" method="post" enctype="multipart/form-data">
    <div class="container px-5">
        <div class="ms-5">
            <div class="row">
                <div class="title-form">
                    <h2>Add Rewardd</h2>
                </div>
                <div class="type-13">
                    <span>
                        Offer tangible or intangible things that bring backers closer to your project.
                    </span>
                </div>
            </div>
            <div class="row mt-100">
                <div class="col-8 side-form ">
                    <div>
                        <div>
                            <label class="form-label mb-3">Title</label>
                            <input type="text" class="form-control rounded-0" name="rtitle" id="rtitle" placeholder="Inputkan Judul Projectmu">
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div>
                        <label for="amount" class="form-label mb-3">Amount</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-0 bg-transparent">Rp</span>
                            <input type="number" class="form-control rounded-0" name="amount" id="amount" placeholder="00,00">
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div>
                        <label class="form-label mb-3">Image</label>
                        <div class="type-13 mb-3">
                            <span>Show your backers what they'll receive for their support. Images should b honest,
                                and should avoid banners, badges, and overlaid text. </span>
                        </div>
                        <div style="display: flex;" class="media-form h-75 w-100 justify-content-center align-items-center flex-column" id="upload_reward_box">
                            <div class="btn-circle">
                                <a href="">
                                    <label for="reward-gambar">
                                        <i class="fa-sharp fa-regular fa-image"></i>
                                    </label>
                                    <input type="file" id="reward-gambar" name="reward-gambar" class="hidden" style="display: none;">
                                </a>
                            </div>
                            <p class="type-1 mt-3">Drop an image here, or select a file.</p>
                            <p class="type-2 mt-2">It must be a JPG, PNG, GIF, TIFF, or BMP, no larger than 200 MB.
                            </p>
                        </div>
                        <div class="shadow p-3 mb-5 bg-body overflow-auto" id="uploaded_reward_box" style="display: none;">
                            <img src="" alt="" style="object-fit: cover;" width="100%" height="387" id="uploaded_reward_image">
                            <div class="d-flex flex-row mt-2">

                                <button class="btn media-button p-2 px-3 me-3 rounded-0" style="font-size: 0.9rem;" id="upload_reward_image" type="button">
                                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                </button>
                                <button class="btn media-button p-2 px-3 rounded-0" style="font-size: 0.9rem;" type="button" id="delcurrent_image">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div>
                        <label for="">description (optional)</label>
                        <div class="type-13 my-3">
                            <span>
                                Describe what makes this reward stand out from your
                                other offerings. Avoid re-listing items as this will look repetitive to backers.
                            </span>
                        </div>
                        <textarea class="form-control rounded-0" id="desc" name="desc" rows="3"></textarea>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div>
                        <label for="">Items *</label>
                        <div class="type-13 my-3">
                            <span>
                                Including items in your rewards and add-ons makes it easy for backers to understand
                                and compare your offerings. An item can be anything you plan to offer your backers.
                                Some examples include playing cards, a digital copy of a book, a ticket to a play,
                                or even a thank-you in your documentary.
                            </span>
                        </div>

                        <div class="row itemlist my-3 hide" id="itemlist">
                            <?php $this->view('project_form/reward/itemlist') ?>
                        </div>

                        <div class="row">
                            <button class="btn w-100 p-2 btn-dark rounded-0 " style="background-color: var(--kf-btn-grey);" onclick="show11()" type="button"> + New Item</button>
                        </div>



                        <div class="row p-3 mt-3 border border-1 hide" id="itemform-wrap">
                            <div class="item-form">
                                <div>
                                    <label for="exampleInputEmail1" class="form-label mb-2">Item List</label>

                                    <select class="form-select rounded-0" aria-label="Default select example" placeholder="item list" name="item_reward" id="item_reward">
                                        <option value="">item</option>
                                        <?php
                                        foreach ($item->result() as $row_item) { ?>
                                            <option value="<?= $row_item->item_name ?>"> <?= $row_item->item_name ?></option>';
                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="type-13 my-4">
                                    <span>Or</span>
                                </div>

                                <div>
                                    <label class="form-label mb-3">Create New Item</label>
                                    <input type="text" class="form-control rounded-0 " placeholder="Sticker" id="custom_item">
                                </div>
                                <div class="row px-3 mt-3">
                                    <button class="btn w-100 p-2 btn-dark rounded-0" style="background-color: var(--kf-btn-grey);"  id="save_item" type="button">
                                        save
                                    </button>
                                </div>
                                <div class="row px-3 mt-3">
                                    <button class="btn w-100 p-2 btn-light rounded-0" style="background-color: var(--kf-bg-grey-color);"  onclick="hide1()" type="button">
                                        cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div class="row">
                        <label for="">Estimated delivery</label>
                        <div class="type-13 my-3">
                            <span>
                                Give yourself plenty of time. It's better to deliver to backers ahead of schedule
                                than behind.
                            </span>
                        </div>
                        <div class="col-6">
                            <select class="form-select rounded-0" name="month" id="month" aria-label="Default select example">
                                <option selected>Month</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-select rounded-0" name="year" id="year" aria-label="Default select example">
                                <option selected>Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                            </select>
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div class="row project_qty">
                        <label for="">Reward Quantity</label>
                        <div class="type-13 my-3">
                            <span>
                                Including items in your rewards and add-ons makes it easy for backers to understand
                                and compare your offerings. An item can be anything you plan to offer your backers.
                                Some examples include playing cards, a digital copy of a book, a ticket to a play,
                                or even a thank-you in your documentary.
                            </span>
                        </div>
                        <div class="outter mb-4">
                            <div class="radiobox pt-0">
                                <input class="form-check-input pt-0 mt-0" name="pqty" type="radio" id="rqty1" onclick="rqty11()">
                                <span class="ms-2">Unlimited</span>
                            </div>
                            <div id="rqty_form2" class="hide">
                                <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                                <div class="fixeddate mx-3">
                                    <label for="exampleInputEmail1" class="form-label my-2">Total Available</label>
                                    <input type="number" value="9999999999" name="unlimited" class="form-control rounded-0 mb-4 " placeholder="unlimited" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="outter mb-4">
                            <div class="radiobox pt-0">
                                <input class="form-check-input pt-0 mt-0" name="pqty" type="radio" id="rqty2" onclick="rqty22()">
                                <span class="ms-2">Limit</span>
                            </div>
                            <div id="rqty_form" class="hide">
                                <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                                <div class="fixeddate mx-3">
                                    <label for="exampleInputEmail1" class="form-label my-2">Total Available</label>
                                    <input type="number" name="limited" class="form-control rounded-0 mb-4 " placeholder="100">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div class="row time_limit">
                        <label for="">Time Limit</label>
                        <div class="type-13 my-3">
                            <span>
                                Including items in your rewards and add-ons makes it easy for backers to understand
                                and compare your offerings. An item can be anything you plan to offer your backers.
                                Some examples include playing cards, a digital copy of a book, a ticket to a play,
                                or even a thank-you in your documentary.
                            </span>
                        </div>
                        <div class="outter mb-4">
                            <div class="radiobox pt-0">
                                <input class="form-check-input pt-0 mt-0" name="rtime" type="radio" id="time1" onclick="time11()">
                                <span class="ms-2">No limit <span style="font-size:0.9rem;color: var(--kf-primary); font-weight: 600;">(until
                                        the project end)</span>
                                </span>

                            </div>
                            <div id="time_form2" class="hide">
                                <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                                <div class=" mx-3">
                                    <input type="number" name="time-unlimit" class="form-control rounded-0 mb-5" value="99999" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="outter mb-4">
                            <div class="radiobox pt-0">
                                <input class="form-check-input pt-0 mt-0" name="rtime" type="radio" id="time2" onclick="time22()">
                                <span class="ms-2">Fixed number of days (1-60)</span>
                                <input type="hidden" name="time-unlimit" class="form-control rounded-0 mb-5" value="999999">
                            </div>
                            <div id="time_form" class="hide">
                                <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                                <div class=" mx-3">
                                    <label for="exampleInputEmail1" class="form-label my-2">Enter Number Of
                                        Days</label>
                                    <input type="number" name="time-limit" class="form-control rounded-0 mb-5">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div class="row mb-3">
                        <button class="btn w-100 p-2 btn-dark rounded-0" id="save_reward" style="background-color: var(--kf-primary); border-width: 0;" type="submit">Save Reward
                        </button>
                    </div>
                    <div class="row">
                        <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/reward') ?>">
                            <button class="btn w-100 p-2 border-0 rounded-0" style="background-color: var(--kf-bg-grey-color);">
                                cancel
                            </button>
                        </a>
                    </div>
                </div>


                <div class="col-4 ps-5">

                    <label for="">Reward preview</label>
                    <div class="type-13 my-3">
                        <span>
                            Get a glimpse of how this reward will look on your project page.
                        </span>
                    </div>
                    <div class="side sticky-top" style="top: 5.5rem;">
                        <div class="rimage">
                            <img src="../img/4.png" class="img-fluid img-thumbnail rounded-0 p-0" alt="">
                        </div>
                        <div class="px-4 pb-4">
                            <div class="row rcard">
                                <h2 class="my-4">Donasi 50K atau Lebih</h2>
                                <h3 class="mb-3">A streaming link on May 20! </h3>
                                <div class="row rdesc">
                                    <p>Get a hardcover printing of the Standard Landscape version 10" x 8".

                                        Thank you for supporting this project to shine a light on Burma.</p>
                                    <span class="mb-2">Termasuk :</span>
                                    <ul class="mb-2">
                                        <li>
                                            A very enthusiastic high five. Real or virtual.
                                        </li>
                                        <li>
                                            A virtual meet-up to meet the author
                                        </li>
                                    </ul>
                                </div>
                                <div class="row rstat">
                                    <div class="row-1 my-1">
                                        <button class="btn btn-xs btn-secondary">2 donatur</button>
                                    </div>
                                    <div class="row-1">
                                        <button class="btn btn-xs btn-secondary">Limited (97/98)</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</form>