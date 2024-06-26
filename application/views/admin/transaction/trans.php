<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h4 class="page-title">Data Transaksi Donasi</h4>

        </div>
        <div class="card card-noborder b-radius">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 table-responsive">

                        <table class="table table-custom" id="table1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Order_id</th>
                                    <th>Nominal</th>
                                    <th>Type Pembayaran</th>
                                    <th>Bank</th>
                                    <th>Va_number</th>
                                    <th>Time</th>
                                    <th>user ID</th>
                                    <th>project ID</th>
                                    <th>status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($trans as $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>

                                        <td>
                                            <span class="ml-2"><?= $data->order_id ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->amount ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->payment_type ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->bank ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->va_number ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->transaction_time ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->user_id ?></span>
                                        </td>
                                        <td>
                                            <span class="ml-2"><?= $data->project_id ?></span>
                                        </td>
                                        <td>
                                            <?php
                                            if ($data->status_code == 200) { ?>
                                                <label for="" class="p-2 badge bg-dark text-light">Success</label>

                                            <?php
                                            } else { ?>
                                                <label for="" class=" p-2 badge bg-secondary">Pending</label>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?= $data->pdf_url ?>" class="btn btn-success btn-sm">Download</a>
                                        </td>
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
</div>