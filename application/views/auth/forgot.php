<section class="auth-form">
        <div class="container-fluid w-100 h-100 p-0">
            <div class="d-flex py-5 justify-content-center align-items-center back">
                <div class="form-box" style="background-color: white;">
                  
                    <div class="px-4 pb-4" style="font-family: 'maison_neuebook';">
                    <?= $this->session->flashdata('pesan'); ?>
                        <p class="type-18 mb-3 ps-8 mt-3">Forgot your password</p>
                        <form action="<?=base_url('auth_user/process')?>" method="post">
                            
                            <div class="mb-3">
                                <input type="email" name="email" id="email" class="form-control rounded-0 py-2" placeholder="Email" onclick="show_re()">
                                <?= form_error('email', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                            </div>
                    
                            <button class="btn w-100 btn-dark rounded-0 mt-4 border-0" value="true" name="forgot" style="background-color: var(--kf-primary);">send</button>
                            <div style="height: 15rem;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>