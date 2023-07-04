<section class="start-cat" id="start-cat">
    <div class="container">
        <div class="row px-5 mb-5">
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item mx-5 cat1">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/basic') ?>">
                        <div class="ikon">
                            <span>✍️</span>
                            <p class="mt-3">Basic</p>
                        </div>
                    </a>

                </li>
                <li class="list-group-item mx-5 cat2">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/reward') ?>">
                        <div class="ikon">
                            <span>🎁</span>
                            <p class="mt-3">Reward</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat3">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/story') ?>">
                        <div class="ikon">
                            <span>📖</span>
                            <p class="mt-3">story</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat4">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/people') ?>">
                        <div class="ikon  ">
                            <span>👥</span>
                            <p class="mt-3">People</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat5">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/edit/payment') ?>">
                        <div class="ikon border-active">
                            <span>💰</span>
                            <p class="mt-3">Payment</p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item mx-5 cat6">
                    <a href="<?= base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/launch') ?>">
                        <div class="ikon">
                            <span>📢</span>
                            <p class="mt-3">Launch</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="people">
    <div class="people-title ">
        <h2 class="text-center">Verify your bank account</h2>
        <h3 class="text-center " style="line-height: 1.5;">Confirm who’s raising funds and receiving them if this project reaches its funding goal.
            Double-check<br> your information—you agree the details you provide are true and acknowledge they can’t be changed once <br>submitted.</h3>
    </div>

    <div class="continer-fluid px-0 border-bottom border-2 mt-100 mb-5"></div>

    <div class="container px-5">
        <div class="row pt-4 ">
            <div class="col-4 mt-4 px-0">
                <h4 class="px-0 mb-2">Bank Account</h4>
                <p class="type-d" style="line-height: 1.7;">
                    Add the checking account where you want to receive funds. This account must be located in Austria, and able to receive direct deposits in the currency in which you raise funds. Projects raising funds in euros
                    can use bank accounts in applicable European countries. We don’t support wire transfers, savings accounts, or virtual bank accounts.
                </p>
                <p class="type-d mt-4" style="line-height: 1.5;">

                    You represent you're authorized to link this bank account to this project. If you’re raising funds as an individual, the account is registered in your name. If it’s on behalf of a business or nonprofit, the account is registered in the name of that entity

                </p>
                <p class="type-d mt-4" style="line-height: 1.5;">


                    Make sure all your details are correct—you can’t change them after you submit your project for review. Kickstarter isn’t responsible for lost bank transfers as a result of incorrect or unsupported bank credentials or accounts.
                </p>
            </div>
           
                <div class="col-8 side-form pt-4">
                <form action="<?=base_url('projects/method/'.$this->uri->segment(3))?>" method="POST">
                    <label for="exampleInputEmail1" class="form-label mb-2">Bank</label>
                    <select class="form-select rounded-0" aria-label="Default select example" id="bank" name="bank">
                        <option value=""></option>
                        <?php
                        foreach ($banks as $bank) { ?>
                            <?php if ($payment == null) { ?>
                                <option value="<?= $bank->bank_id ?>"><?= $bank->bank_name ?></option>';
                            <?php
                            } else { ?>
                                <option value="<?= $bank->bank_id ?>" <?= $bank->bank_id == $payment->bank_id ? 'selected' : null ?>><?= $bank->bank_name ?></option>';
                            <?php }
                            ?>
                        <?php
                        } ?>
                    </select>
                    <div class="mt-5">
                        <?php if ($payment == null) { ?>
                            <input type="hidden" name="rek" value="">
                        <?php
                        } else { ?>
                            <input type="hidden" name="rek" value="<?= $payment->project_id ?>">
                        <?php
                        } ?>
                        <label for="exampleInputEmail1" class="form-label mb-3">No Rekening</label>
                        <?php if ($payment == null) { ?>
                            <input type="text" class="form-control rounded-0" name="rek" value="" placeholder="Inputkan No Rekening">
                        <?php
                        } else { ?>

                            <input type="text" class="form-control rounded-0" name="rek" value="<?= $payment->rekening ?>" placeholder="Inputkan No Rekening">
                        <?php
                        } ?>
                        <?php if ($payment == null) { ?>
                            <input type="hidden" class="form-control rounded-0" name="add" value="add" >
                        <?php
                        } else { ?>
                            <input type="hidden" class="form-control rounded-0" name="edit" value="edit" >
                        <?php
                        } ?>
                    </div>
                    
                </div>
            
        </div>
    </div>
    </div>

        <div class="container d-flex justify-content-center " style="margin-top:5rem;">
            <div class="save">
                <button class="btn rounded-0 px-5" type="submit">Save</button>
            </div>
        </div>
        </form>
</section>