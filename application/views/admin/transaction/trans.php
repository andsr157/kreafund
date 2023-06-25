<div class="row">
  <div class="col-md-12 grid-margin">
  <div class="page-header d-flex justify-content-between align-items-center">
      <h4 class="page-title">Data Barang</h4>
      <div class="d-flex justify-content-start">
	      <a href="<?=base_url('item/add')?>" class="btn btn-icons btn-inverse-primary btn-new ml-2">
	      	<i class="mdi mdi-plus"></i>
	      </a>
      </div>
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
                    <th>Action</th>
                    
                   
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($trans as $data) { ?>
                    <tr>
                        <td><?=$no++?></td>
                        
                        <td>    
                            <span class="ml-2"><?= $data->order_id?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->amount?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->payment_type?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->bank?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->va_number?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->transaction_time?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->user_id?></span>
                        </td>
                        <td>    
                            <span class="ml-2"><?= $data->project_id?></span>
                        </td>
                        <td>    
                            <a href="<?=$data->pdf_url?>" class="btn btn-success btn-sm">Download</a>
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