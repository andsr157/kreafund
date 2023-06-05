<section class="auth-form">
        <div class="container-fluid w-100 h-100 p-0">
            <div class="d-flex py-5 justify-content-center align-items-center back">
                <div class="form-box" style="background-color: white;">
                  
                    <div class="px-4 pb-4 text-center px-5" style="font-family: 'maison_neuebook';">
                        <p class="type-18 px-5 mt-3">Change Password for:</p>
                        <p class="text-secondary mb-3 " style="font-size: 1.1rem;"><?=$this->session->userdata('reset_email')?></p>
                        <form action="<?=base_url('auth_user/process')?>" method="post">
                            
                            <div class="mb-3 text-start">
                                <input type="password" name="password" id="password" class="form-control rounded-0 py-2" placeholder="New Password" click="show_re()">
                                <?= form_error('password', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2 ">', '</div>'); ?>
                            </div>

                            <div class="mb-3 text-start">
                                <input type="password" name="re_password" id="re_password" class="form-control rounded-0 py-2" placeholder="Confirm Password" onclick="show_re()">
                                <?= form_error('re_password', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                            </div>

    
                           
                    
                            <button class="btn w-100 btn-dark rounded-0 mt-4 border-0" value="true" name="reset" style="background-color: var(--kf-primary);">Update Password</button>
                            
                        </form>
                       
                    </div>
                    
                    
                    <!-- Tampilkan pesan sukses atau kesalahan -->
                    
                </div>
                
            </div>
            <div class="back" style="height: 10rem;"></div>
        </div>
      </section>