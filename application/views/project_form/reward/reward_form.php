<section class="start-cat" id="start-cat">
        <div class="container">
            <div class="row px-5 mb-3">
                <ul class="list-group list-group-horizontal justify-content-center">
                    <li class="list-group-item mx-5 cat1">
                        <a href="<?=base_url('start/basic')?>">
                            <div class="ikon ">
                                <span>✍️</span>
                                <p class="mt-3">Basic</p>
                            </div>
                        </a>

                    </li>
                    <li class="list-group-item mx-5 cat2">
                        <a href="<?=base_url('start/reward')?>">
                            <div class="ikon border-active">
                                <span>🎁</span>
                                <p class="mt-3">Reward</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat3">
                        <a href="../story/story.html">
                            <div class="ikon">
                                <span>📖</span>
                                <p class="mt-3">story</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat4">
                        <a href="../people/people.html">
                            <div class="ikon">
                                <span>👥</span>
                                <p class="mt-3">People</p>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item mx-5 cat5">
                        <div class="ikon ">
                            <span>💰</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </li>
                    <li class="list-group-item mx-5 cat6">
                        <div class="ikon">
                            <span>📢</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>


    <section class="reward_form">
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
                                <input type="text" class="form-control rounded-0 "
                                    placeholder="Inputkan Judul Projectmu">
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
                            <div
                                class="media-form h-75 w-100 d-flex justify-content-center align-items-center flex-column">
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
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
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
                                    <div class="col-9 border border-1 py-4 px-3"
                                        style="border-color: var(--kf-border-gray);">Sticker</div>
                                    <div class="col-2">
                                        <label class="form-label">Qty:</label>
                                        <input type="number" class="form-control rounded-0 " placeholder="0">
                                    </div>
                                    <div class="col-1 d-flex  align-items-end">
                                        <a href="" class="type-13">Remove</a>
                                    </div>
                                </div>

                                <div class="row item mb-3">
                                    <div class="col-9 border border-1 py-4 px-3"
                                        style="border-color: var(--kf-border-gray);">Sticker</div>
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
                                <button class="btn w-100 p-2 btn-dark rounded-0 "
                                    style="background-color: var(--kf-btn-grey);" onclick="show11()"> + New Item</button>
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
                                        <button class="btn w-100 p-2 btn-dark rounded-0"
                                            style="background-color: var(--kf-btn-grey);" onclick="show22()">
                                            save
                                        </button>
                                    </div>
                                    <div class="row px-3 mt-3">
                                        <button class="btn w-100 p-2 btn-light rounded-0"
                                            style="background-color: var(--kf-bg-grey-color);" onclick="hide1()">
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
                                    <input class="form-check-input pt-0 mt-0" name="pqty" type="radio" id="rqty1"
                                        onclick="rqty1()">
                                    <span class="ms-2">Unlimited</span>
                                </div>
                            </div>
                            <div class="outter mb-4">
                                <div class="radiobox pt-0">
                                    <input class="form-check-input pt-0 mt-0" name="pqty" type="radio" id="rqty2"
                                        onclick="rqty2()">
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
                                    <span class="ms-2">No limit <span
                                            style="font-size:0.9rem;color: var(--kf-primary); font-weight: 600;">(until
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
                            <button class="btn w-100 p-2 btn-dark rounded-0 "
                                style="background-color: var(--kf-primary); border-width: 0;" onclick="show11()">Save Reward
                            </button>
                        </div>
                        <div class="row">
                            <a href="<?=base_url('start/reward')?>">
                                <button class="btn w-100 p-2 border-0 rounded-0"
                                    style="background-color: var(--kf-bg-grey-color);" >
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
                        <div class="side sticky-top" style="top: 2rem;">
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