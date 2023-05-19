

      <!-- end of navigation bar -->
      <section class="auth-form">
        <div class="container-fluid w-100 p-0">
            <div class="d-flex py-5 justify-content-center align-items-center back">
                <div class="form-box" style="background-color: white;">
                    <div class="py-4 px-8 mb-3" style="background-color: rgba(241,238,234,0.2);">
                        <span>have account? <a href="<?=base_url('auth_user/login')?>">Login</a></span> 
                    </div>
                    <div class="px-4 pb-4">
                        <p class="type-18 mb-3">Sign up</p>
                        <form action="<?=base_url('auth_user/process')?> " method="POST">
                            <div class="mb-3">
                                <input type="text" name="username" id="username" class="form-control rounded-0" placeholder="Username">
                                <?= form_error('username', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" id="email" class="form-control rounded-0" placeholder="Email" onclick="show_re()">
                                <?= form_error('email', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                              </div>
                            <div class="mb-3">
                                <input type="text" style="display: none;" name="re_email" id="re_email" class="form-control rounded-0" placeholder="Re-enter Email">
                                <?= form_error('re_email', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                              </div>
                            <div class="mb-3">
                                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" onclick="show_rp()">
                                <?= form_error('password', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                              </div>
                            <div class="mb-4">
                              <input type="password" style="display: none;" name="re_password" id="re_password" class="form-control rounded-0" placeholder="Re-enter Password">
                              <?= form_error('re_password', '<div style="font-size:0.8rem;" class="text-danger pl-3 mt-2">', '</div>'); ?>
                            </div>
                            <input type="hidden" name="level" value="2">

                            <button class="btn w-100 btn-dark rounded-0 mt-5" type="submit" name="signup" value="true">Create Account</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>


      <!-- <section style="height: 400px; background-color:#f5f5f5"></section> -->



<!-- modal login -->
      <!-- <section class="modal hidden">
        <div class="container">
          <div class="col">
            <button class="btn-close">X</button>
            <h4>Your Account</h4>
            <ul>
              <li class="mt-4">Profile</li>
              <li class="mt-4">Setting</li>
              <li class="my-4">My project</li>
            </ul>
            <button class="btn btn-dark btn-sm">Login</button>
          </div>
        </div>
      </section> -->
<!-- end of modal login -->
      <!-- <div class="overlay"></div> -->


      <div class="modal fade" id="Login" tabindex="-1"  aria-hidden="true" style="font-family: 'maison_neuebook';">
        <div class="modal-dialog modal-dialog-centered modal">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>



      <!-- <div class="modal no-backdrop fade accountmodal" id="accountModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4 class="modal-title">Your Account</h4>
                <ul>
                  <li class="mt-4">Profile</li>
                  <li class="mt-4">Setting</li>
                  <li class="my-4">My project</li>
                </ul>
                <button type="button" class="btn btn-dark btn-sm">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>   -->



      <div class="modal accountmodal" id="accountModal" aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Your Account</h4>
              <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ul class="mb-5">
                <li class="my-3"><a href="#">Profile</a></li>
                <li class="my-3"><a href="#">Settings</a></li>
                <li class="my-3"><a href="#">My Projects</a></li>
              </ul>
              <a href="">Logout</a>
            </div>
          </div>
        </div>
      </div>
      
      

    <!-- end modal login -->
    
    <!-- <script>
      const modal = document.querySelector('.modal');
      // const overlay = document.querySelector('.overlay');     
      const openModalBtn = document.querySelector("header nav .btn-open");
      const closeModalBtn = document.querySelector(".btn-close");

      const openModal = function () {
      modal.classList.remove("hidden");
      openModalBtn.addEventListener('click', openModal);
};

    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function show_re(){
            document.getElementById('re_email').style.display = 'block';
        }

        function show_rp(){
            document.getElementById('re_password').style.display = 'block';
        }
    </script>


</body>
</html>