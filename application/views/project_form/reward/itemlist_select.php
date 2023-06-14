<label for="exampleInputEmail1" class="form-label mb-2">Item List</label>

<select class="form-select rounded-0" aria-label="Default select example" placeholder="item list" name="item_reward" id="item_reward">
    <option value="">item</option>
    <?php
    foreach ($item->result() as $row_item) { ?>
        <option value="<?= $row_item->item_name ?>"> <?= $row_item->item_name ?></option>';
    <?php
    } ?>
</select>