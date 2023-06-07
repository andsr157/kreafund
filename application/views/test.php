<?php foreach ($rewards as $reward) : ?>
    <div class="donation-item">
        <div class="donation-nominal">Rp. <?= $reward->amount ?></div>
        <div class="donation-details"><?= $reward->title ?></div>
        <div class="donation-info">
            <p><?= $reward->description ?></p>
        </div>
        <div class="donation-items">
            <?php foreach ($reward->items as $item) : ?>
                <div class="donation-item"><?= $item->item_name ?></div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="donation-images">
            <?php foreach ($reward->images as $image) : ?>
                <img src="<?= $image->gambar_name ?>" alt="<?= $image->gambar_name ?>">
            <?php endforeach; ?>
        </div> -->
    </div>
<?php endforeach; ?>