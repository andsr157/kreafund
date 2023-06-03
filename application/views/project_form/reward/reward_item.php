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


<?php
if ($item->num_rows() > 0) {
    foreach ($item->result() as $key => $row_item) {  ?>

        <div class="row r-outter my-4">
            <a href="">
                <div class="row rbox">
                    <h3><?= $row_item->item_name ?></h3>
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

<?php
    }
} else {
    echo ' <div class="row dummy mt-4" style="cursor: pointer;">
                <div class="container-fluid d-flex justify-content-center align-items-center p-5 type-10 " id="add_reward2">
                    <p class="m-5">There Will Item List + </p>
                </div>
            </div>';
}
?>