<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $id . '/edit/basic') ?>">
                        <div class="ikon ">
                            <span>✍️</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>

                </li>
                <li class="list-group-item mx-5 cat2">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $id . '/edit/reward') ?>">
                        <div class="ikon border-active">
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




<section class="reward" id="rewardlink">
    <div class="container px-100">
        <div class="row">
            <ul class="list-group list-group-horizontal r-nav">
                <li class="list-group-item rcat rborder-active me-3 pb-4 rounded-0" id="reward_items">
                    <p>
                        <span class="ikonr text-light"><i class="fa-solid fa-gift"></i></span>
                        <span class="type-d type-d-active ms-2">Reward Items</span>
                    </p>
                </li>

                <li class="list-group-item rcat  me-3 pb-4 rounded-0" id="items">
                    <p>
                        <span class="ikonr text-secondary bg-transparent"><i class="fa-solid fa-gift"></i></span>
                        <span class="type-d type-d-deactive ms-2">Items</span>
                    </p>
                </li>



                <!-- <li class="list-group-item rcat pb-4 rounded-0">
                        <p>
                            <span class="ikonr text-secondary bg-transparent"><i class="fa-solid fa-gift"></i></span>
                            <span class="type-d-deactive ms-2">Items</span>
                        </p>
                    </li> -->
            </ul>
        </div>

        <div class="continer-fluid px-0 border-bottom border-3 mb-3"></div>
        <div id="reward-wrapper1">
            <div class="row">
                <div class="col-8 p-0">
                    <p class="type-r mt-4 mb-3">
                        Most creators offer 3-10 reward tiers, which can be physical items or special experiences. Make sure to set reasonable backer expectations
                    </p>
                    <span class="mb-5">
                        <a href="">
                            Learn about creating and managing rewards
                        </a>
                    </span>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="new text-center w-50">
                        <button class="btn rounded-0 w-100 btn-dark" style="color: white;" id="add_reward">
                            + New Reward
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-3 t-head ">
                <div class="col-2 ps-3">
                    <span>NOMINAL DONASI</span>
                </div>
                <div class="col-4 ps-3">
                    <span>
                        DETAIL
                    </span>
                </div>
                <div class="col-3 ps-0">
                    <span>
                        ITEM
                    </span>
                </div>
                <div class="col-3 pe-0"><span>GAMBAR</span></div>
            </div>

            <div class="row r-outter mb-4">
                <a href="">
                    <div class="row rbox">
                        <div class="col-2 ">
                            <h3>Rp. 50K</h3>
                        </div>
                        <div class="col-4 ">
                            <h3 class="mb-4">Digital Poster Exclusive</h3>
                            <div class="type-9 mb-1">
                                <span>Estimated delivery:</span>
                                <span>7 Juny 2023</span>
                            </div>
                            <div class="type-9 mb-1">
                                <span>Reward Located</span>
                                <span>Sukoharjo</span>
                            </div>
                            <div class="type-9 mb-1">
                                <span>Includes some physical goods</span>
                            </div>
                            <div class="type-10 mt-5">
                                <span>Limited(100/100)</span>
                            </div>

                        </div>
                        <div class="col-3 ">
                            <ul>
                                <li>Digital Print</li>
                                <li>Sticker</li>
                                <li>Cloth</li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <div class="rimage">
                                <img src="../img/1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </a>
                <div class="continer-fluid px-0 border-bottom border-1 "></div>
                <div class="row my-3">
                    <div class="col-6 type-13 d-flex align-items-center">
                        <span class="me-1">0</span>
                        <span>Backers</span>
                    </div>
                    <div class="col-6 d-flex justify-content-end ">
                        <button class="btn ms-2 type-13">
                            <span>Edit</span>
                        </button>
                        <button class="btn ms-2 type-13">
                            <span>Duplicate</span>
                        </button>
                        <button class="btn ms-2 type-13">
                            <span>Delete</span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="row r-outter mb-4">
                <a href="">
                    <div class="row rbox">
                        <div class="col-2 ">
                            <h3>Rp. 50K</h3>
                        </div>
                        <div class="col-4 ">
                            <h3 class="mb-4">Digital Poster Exclusive</h3>
                            <div class="type-9 mb-1">
                                <span>Estimated delivery:</span>
                                <span>7 Juny 2023</span>
                            </div>
                            <div class="type-9 mb-1">
                                <span>Reward Located</span>
                                <span>Sukoharjo</span>
                            </div>
                            <div class="type-9 mb-1">
                                <span>Includes some physical goods</span>
                            </div>
                            <div class="type-10 mt-5">
                                <span>Limited(100/100)</span>
                            </div>

                        </div>
                        <div class="col-3 ">
                            <ul>
                                <li>Digital Print</li>
                                <li>Sticker</li>
                                <li>Cloth</li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <div class="rimage">
                                <img src="../img/3.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </a>
                <div class="continer-fluid px-0 border-bottom border-1 "></div>
                <div class="row my-3">
                    <div class="col-6 type-13 d-flex align-items-center">
                        <span class="me-1">0</span>
                        <span>Backers</span>
                    </div>
                    <div class="col-6 d-flex justify-content-end ">
                        <button class="btn ms-2 type-13">
                            <span>Edit</span>
                        </button>
                        <button class="btn ms-2 type-13">
                            <span>Duplicate</span>
                        </button>
                        <button class="btn ms-2 type-13">
                            <span>Delete</span>
                        </button>
                    </div>
                </div>

            </div>

            <div class="row dummy">
                <a href="">
                    <div class="container-fluid d-flex justify-content-center align-items-center p-5 type-10">
                        <p class="m-5">There Will be your reward box +</p>
                    </div>
                </a>

            </div>
        </div>
        <div id="reward-wrapper2" style="display: none;">
            <div class="row">
                <div class="col-8 p-0">
                    <p class="type-r mt-4 mb-3">
                        Including items in your rewards and add-ons makes it easy for backers to understand and compare
                        your offerings. An item can be
                        anything you plan to offer your backers. Some examples include playing cards, a digital copy of
                        a book, a ticket
                        to a play, or even a thank-you in your documentary
                    </p>
                    <span class="mb-5">
                        <a href="">
                            Learn about creating and managing rewards
                        </a>
                    </span>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="new text-center w-50">
                        <button class="btn rounded-0 w-100 btn-dark" style="color: white;" id="add_item">
                            + New Item
                        </button>
                    </div>
                </div>
            </div>



            <div class="row r-outter my-4">
                <a href="">
                    <div class="row rbox">
                        <h3>Item name</h3>
                    </div>
                </a>
                <div class="continer-fluid px-0 border-bottom border-1 "></div>
                <div class="row my-3">
                    <div class="col-12 d-flex justify-content-end ">
                        <button class="btn ms-2 type-13">
                            <span>Edit</span>
                        </button>
                        <button class="btn ms-2 type-13">
                            <span>Duplicate</span>
                        </button>
                        <button class="btn ms-2 type-13">
                            <span>Delete</span>
                        </button>
                    </div>
                </div>

            </div>


            <div class="row dummy" style="cursor: pointer;">
                    <div class="container-fluid d-flex justify-content-center align-items-center p-5 type-10 " id="add_reward2">
                        <p class="m-5">There Will Item List + </p>
                    </div>
            </div>
        </div>


    </div>
</section>
<section class="reward_form mt-5" id="reward_form" style="display: none;">
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
                            <input type="text" class="form-control rounded-0 " placeholder="Inputkan Judul Projectmu">
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div>
                        <label for="amount" class="form-label mb-3">Amount</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-0 bg-transparent">Rp</span>
                            <input type="text" class="form-control rounded-0" id="amount" placeholder="00,00">
                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div>
                        <label class="form-label mb-3">Image</label>
                        <div class="type-13 mb-3">
                            <span>Show your backers what they'll receive for their support. Images should b honest,
                                and should avoid banners, badges, and overlaid text. </span>
                        </div>
                        <div class="media-form h-75 w-100 d-flex justify-content-center align-items-center flex-column">
                            <div class="btn-circle">
                                <a href="">
                                    <label for="input-gambar">
                                        <i class="fa-sharp fa-regular fa-image"></i>
                                    </label>
                                    <input type="file" id="input-gambar" class="hidden" style="display: none;">
                                </a>
                            </div>
                            <p class="type-1 mt-3">Drop an image here, or select a file.</p>
                            <p class="type-2 mt-2">It must be a JPG, PNG, GIF, TIFF, or BMP, no larger than 200 MB.
                            </p>
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
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                            <div class="row item mb-3">
                                <div class="col-9 border border-1 py-4 px-3" style="border-color: var(--kf-border-gray);">Sticker</div>
                                <div class="col-2">
                                    <label class="form-label">Qty:</label>
                                    <input type="number" class="form-control rounded-0 " placeholder="0">
                                </div>
                                <div class="col-1 d-flex  align-items-end">
                                    <a href="" class="type-13">Remove</a>
                                </div>
                            </div>

                            <div class="row item mb-3">
                                <div class="col-9 border border-1 py-4 px-3" style="border-color: var(--kf-border-gray);">Sticker</div>
                                <div class="col-2">
                                    <label class="form-label">Qty:</label>
                                    <input type="number" class="form-control rounded-0 " placeholder="0">
                                </div>
                                <div class="col-1 d-flex  align-items-end">
                                    <a href="" class="type-13">Remove</a>
                                </div>
                            </div>



                        </div>

                        <div class="row">
                            <button class="btn w-100 p-2 btn-dark rounded-0 " style="background-color: var(--kf-btn-grey);" onclick="show11()"> + New Item</button>
                        </div>



                        <div class="row p-3 mt-3 border border-1 hide" id="itemform-wrap">
                            <div class="item-form">
                                <div>
                                    <label for="exampleInputEmail1" class="form-label mb-2">Primary category</label>
                                    <select class="form-select rounded-0" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="type-13 my-4">
                                    <span>Or</span>
                                </div>

                                <div>
                                    <label class="form-label mb-3">Create New Item</label>
                                    <input type="text" class="form-control rounded-0 " placeholder="Sticker">
                                </div>
                                <div class="row px-3 mt-3">
                                    <button class="btn w-100 p-2 btn-dark rounded-0" style="background-color: var(--kf-btn-grey);" onclick="show22()">
                                        save
                                    </button>
                                </div>
                                <div class="row px-3 mt-3">
                                    <button class="btn w-100 p-2 btn-light rounded-0" style="background-color: var(--kf-bg-grey-color);" onclick="hide1()">
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
                            <select class="form-select rounded-0" aria-label="Default select example">
                                <option selected>Month</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-select rounded-0" aria-label="Default select example">
                                <option selected>Year</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
                                <input class="form-check-input pt-0 mt-0" name="pqty" type="radio" id="rqty1" onclick="rqty1()">
                                <span class="ms-2">Unlimited</span>
                            </div>
                        </div>
                        <div class="outter mb-4">
                            <div class="radiobox pt-0">
                                <input class="form-check-input pt-0 mt-0" name="pqty" type="radio" id="rqty2" onclick="rqty2()">
                                <span class="ms-2">Limit</span>
                            </div>
                            <div id="rqty_form" class="hide">
                                <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                                <div class="fixeddate mx-3">
                                    <label for="exampleInputEmail1" class="form-label my-2">Total Available</label>
                                    <input type="text" class="form-control rounded-0 mb-4   " placeholder="100">
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
                                <input class="form-check-input pt-0 mt-0" type="radio" id="time1" onclick="time1()">
                                <span class="ms-2">No limit <span style="font-size:0.9rem;color: var(--kf-primary); font-weight: 600;">(until
                                        the project end)</span></span>
                            </div>
                        </div>
                        <div class="outter mb-4">
                            <div class="radiobox pt-0">
                                <input class="form-check-input pt-0 mt-0" type="radio" id="time2" onclick="time2()">
                                <span class="ms-2">Fixed number of days (1-60)</span>
                            </div>
                            <div id="time_form" class="hide">
                                <div class="container-fluid px-0 border-bottom border-1 mb-3"></div>
                                <div class=" mx-3">
                                    <label for="exampleInputEmail1" class="form-label my-2">Enter Number Of
                                        Days</label>
                                    <input type="date" class="form-control rounded-0 mb-5">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="continer-fluid px-0 border-bottom border-2 my-5 "></div>

                    <div class="row mb-3">
                        <button class="btn w-100 p-2 btn-dark rounded-0 " style="background-color: var(--kf-primary); border-width: 0;" onclick="show11()">Save Reward
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
</section>



<section class="reward_form mt-5" id="item_form" style="display:none;">
    <div class="container px-5">
        <div class="ms-5">
            <div class="row">
                <div class="title-form">
                    <h2>Add Item</h2>
                </div>

            </div>
            <div class="row mt-100 mb-4">
                <div class="col-4">
                    <label class="form-label mb-3">Title</label>
                    <div class="type-13">
                        <span>
                            Add a title that quickly and clearly describes this item
                        </span>
                    </div>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control rounded-0 py-3" placeholder="Inputkan Judul Projectmu">
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8">
                <button class="btn  p-2 btn-dark rounded-0 px-5" style="background-color: var(--kf-primary); border-width: 0;" onclick="show11()">Save Reward
                </button>
                </div>
            </div>
        </div>
    </div>
</section>