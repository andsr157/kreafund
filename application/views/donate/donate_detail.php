<?php $data = $this->project_m->get($projectId)->row()?>
<form id="payment-form" method="post" action="<?=site_url()?>snap/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>

      <input type="hidden" id="project_id" name="project_id" value="<?=$projectId?>">
      <input type="hidden" id="reward_id"  name="reward_id" value="<?=$rewardId?>">
      <input type="hidden" id="backer_id" name="backer_id" value="<?=$data->user_id?>">
      <input type="hidden" id="backer" name="backer" value="<?=$this->session->userdata('username')?>">
      <input type="hidden" id="amount" name="amount" value="<?=$rewardAmount?>">
    </form>
    
<div class="project_detail">

<section class="donate_detail">
    <div class="container-fluid">
      <h2 class="mb-4">Donate</h2>
      <p>
        We won’t charge you at this time. If the project reaches its funding goal, your payment method will be charged
        when the campaign ends.
        You’ll receive a confirmation email at duniaselamat1@gmail.com when your pledge is successfully processed.
      </p>
      <div class="row mt-5">
        <div class="col-6">
          <div class="row">
            <div class="col-6">
              <img src="img/3.png" alt="" class="img-fluid" width="600" height="420" style="object-fit: cover;">
            </div>
            <div class="col-6 pt-3">
                
              <a href="" class="type-14">
                <?=$data->title?>
              </a>
              <div class="my-3"></div>
              <a href=" " class="type-span">
                <span class="">By</span>

                <span> <?=$data->username?></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-6 ps-5 pt-3">
          <div class="row text-center">
            <h3>DETAIL</h3>
          </div>
          <div class="row payment mt-2">
            <div class="col-4">Reward</div>
            <div class="col-4"><?=$rewardTitle?></div>
            <div class="col-4">Rp.<?=$rewardAmount?></div>
          </div>
          <div class="row payment mt-2">
            <div class="col-4">Shipping</div>
            <div class="col-4">Bandung</div>
            <div class="col-4">Rp.1000</div>
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
          <hr class="pt-3" style="height: 1px; ; border-color: #333; ">
          <div class="row">
            <div class="col-9">
              <p class="type-14" style="text-decoration: none;">total amount</p>
            </div>
            <div class="col-3 ps-5" style="color: var(--kf-primary); font-weight: 600;">
              Rp.<?=$rewardAmount?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row mt-5">
        <button class="btn btn-lg w-100 text-light rounded-0" id="pay-button" style="background-color: #037362;">
          Donate
        </button>
        
      </div>
    </div>

  </section>
</div>

<script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");

        var projectId = $('#project_id').val()
        var rewardId = $('#reward_id').val()
        var backer = $('#backer').val()
        var backerId = $('#backer_id').val()
        var amount = $('#amount').val()
    $.ajax({
        type:'POST',
      url: '<?=site_url()?>snap/token',
      cache: false,
      data: {
        projectId : projectId,
        rewardId: rewardId,
        backer:backer,
        amount:amount
      },

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>
