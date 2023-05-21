<!-- end of header section -->

<section class="project_init active" style="display: block;" id="init_category">
    <div class="container p-5">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 d-flex justify-content-center p-5 ">
                <div class="text-center px-10">
                    <h2 class="type-17 mb-5">First, let’s get you set up.</h2>
                    <h3 class="type-15 mb-3">Select a primary category and subcategory for your new project.</h3>
                    <h3 class="type-11gray">These will help backers find your project, and you can change them later if you need to.</h3>
                </div>
            </div>
            <div class="row px-18">
                <div class="col-6">
                    <select class="form-select rounded-0 py-2" name="category" id="category" aria-label="Default select example">
                        <option style="color: var(--kf-color);">Primary category</option>
                        <?php
                        foreach ($category as $row) {
                            echo '<option value="' . $row->category_id . '">' . $row->category_name . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col-6">
                    <select class="form-select rounded-0 py-2" name="subcat" id="subcat" aria-label="Default select example">
                        <option selected>Sub category</option>
                    </select>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- end of header section -->

<section class="project_init" style="display:none;" id="init_location">
    <div class="container p-5">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 d-flex justify-content-center p-5 ">
                <div class="text-center px-10">
                    <h2 class="type-17 mb-3">Set a location for your project</h2>
                    <h3 class="type-11gray" style="line-height: 1.4;">Pick your country of legal residence if you’re raising funds as an individual.
                        If you’re raising funds for a business or nonprofit, select the country where the entity’s tax ID is registered.</h3>
                </div>
            </div>
            <div class="row px-18">
                <div class="col-12">
                    <select class="form-select rounded-0 py-3" name="location" id="location" aria-label="Default select example" style="font-size:1rem ; color:var(--kf-soft-black)">
                        <option style="color: var(--kf-color); ">Primary category</option>
                        <?php
                        foreach ($category as $row) {
                            echo '<option value="' . $row->category_id . '">' . $row->category_name . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="project_init" id="init_title" style="display:none;" >
    <div class="container p-5">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 d-flex justify-content-center p-5 ">
                <div class="text-center px-10">
                    <h2 class="type-17 mb-3">Set Your Project Title</h2>
                    <h3 class="type-11gray" style="line-height: 1.4;">Pick your title of your project. Write a clear, brief title and subtitle to help people quickly understand your project</h3>
                </div>
            </div>
            <div class="row px-18">
                <div class="col-12">
                <input type="text" class="form-control rounded-0 py-3" placeholder="Inputkan  Judul Projectmu">
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container px-21 d-flex justify-content-end mt-100">
    <div class="backbtn me-4">
        <button class="btn rounded-0 px-5" id="back" style="display: none;">Back</button>
    </div>
    <div class="nextbtn">
        <button class="btn rounded-0 px-5" id="next">Next</button>
    </div>
    <div class="submitbtn">
        <button class="btn  rounded-0 px-5" id="submit" style="display: none;">Submit</button>
    </div>
</div>