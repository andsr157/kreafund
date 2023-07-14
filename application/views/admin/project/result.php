<div class="row">

    <div class="page-header d-flex justify-content-between align-items-center">

    </div>
    <div class="col-6">
        <div class="card card-noborder b-radius">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 table-responsive">

                        <table class="table table-custom" id="table1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>backer</th>
                                    <th>Nominal</th>
                                    <th>Bank</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                $amount = 0;
                                foreach ($trans as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>

                                        <td>
                                            <span class="ml-2"><?= $data->username ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->amount ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->bank ?></span>
                                        </td>
                                        <?php
                                        $amount +=$data->amount
                                        ?>
                                        
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card card-noborder b-radius">
            <div class="card-body">
                <h3 style="font-weight: 800;">Total Donasi</h3>
                <h4>Rp.<?= number_format($amount, 0, ',', '.') ?></h4>
            </div>
           
        </div>

        <div class="card card-noborder b-radius mt-4">
            <div class="card-body">
            <h4 style="font-weight: 800;">Informasi Rekening </h4>
                <h6>No Rekening : <?=$payment->rekening?></h6>
                <h6>Bank : <?=$payment->bank_name?> </h6>
            </div>
           
        </div>

        <div class="card card-noborder b-radius mt-4">
            <div class="card-body p-4 text-center">
                <?php
                if($amount >= $project->goal){?>
                    <h1 class="text-success">PROJECT BERHASIL !!</h1>
                    <?php
                }else{?>
                <h1 class="text-danger">PROJECT GAGAL !!</h1>
<?php
                }
                ?>
            </div>
           
        </div>
    </div>

</div>


