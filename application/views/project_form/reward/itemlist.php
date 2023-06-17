    <?php

    if ($temp->num_rows() > 0) {
        foreach ($temp->result() as $data) {
    ?>
            <div class="row item mb-3">
                <div class="col-9 border border-1 py-4 px-3" id="itemlistName" style="border-color: var(--kf-border-gray);"><?= $data->item_name ?></div>
                <div class="col-2">
                    <label class="form-label">Qty:</label>
                    <input type="number" name="save_item_qty"  value="<?= $data->qty ?>" class="form-control rounded-0 " placeholder="0">
                </div>
                <div class="col-1 d-flex  align-items-end">
                    <button class="btn bg-transparent type-13 del_item_temp" data-temp_id="<?= $data->item_temp_id ?>" type="button" ">Remove</button>
                </div>
            </div>
    <?php
        }
    } else {
        echo '<div class="row item mb-3">
                <div class="col-12 border border-1 py-4 px-3" style="border-color: var(--kf-border-gray);">data tidak ada atau belum ditambahkan</div>
            </div>';
    }
    ?>