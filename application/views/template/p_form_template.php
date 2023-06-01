<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/stylesheet.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/start/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/reward/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/story/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/people/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/launch/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <!-- navigation bar -->
    <header class="sticky-top bg-white">
        <nav class="navbar navbar-expand-lg pt-lg-4 pb-lg-3 border border-left-0 border-right-0 border-top-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="d-lg-none d-block mx-auto" href="#">
                    <img src="./img/logos/logo.png" alt="" />LOGO
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item py-2 py-lg-0">
                            <a class="nav-link active" href="<?= base_url('start/project') ?>"><- Judul Project</a>
                        </li>
                        <li class="nav-item pb-2 pb-lg-0">
                            <a class="nav-link" href="#">Aturan</a>
                        </li>
                    </ul>

                    <a class="d-lg-block d-none mx-auto" href="<?= base_url() ?>">
                        <img src="./img/logos/logo.png" alt="" />LOGO
                    </a>
                    <p class="unselectable text-white">AAAAAAAAAAAA</p>

                    <?php
                    if (!empty($this->session->userdata('user_id'))) { ?>
                        <button class="btn border-0 d-none d-lg-block p-0 pt-1" style="color: #242323; width:36px; height:36px;" data-bs-toggle="modal" data-bs-target="#accountModal" data-bs-backdrop="false" type="button">
                            <img src="<?= base_url('assets/img/user.avif') ?>" alt="" class="img-fluid rounded-circle">
                        </button>
                    <?php } else { ?>
                        <a href="<?= base_url('auth_user/login') ?>">
                            <button class="btn btn-dark-info text-nowrap border-0 d-none d-lg-block " style="color: #242323" type="button">Log In</button>
                        </a>
                        <button class="btn btn-dark-info text-nowrap border-0 d-block d-lg-none" style="color: #242323" data-bs-toggle="modal" data-bs-target="#Login" type="button">Log In</button>
                    <?php } ?>
                    </form>
                </div>

                <a class="navbar-brand mx-auto d-lg-none d-block" href="../index.html">
                    <img src="./img/logos/logo.png" alt="" />Logo
                </a>
            </div>
        </nav>
    </header>
    <!-- end of header section -->



    <?php echo $contents ?>



    <!-- <section style="height: 1000px"></section> -->

    <footer class="mt-5">
        <div class="container-fluid" style="position: absolute; z-index: 1021">
            <div class="row justify-content-beetween pl-20">
                <div class="col-lg-2 text-center-sm">
                    <h4 class="mb-3 mb-lg-0">A Kreafund @2023</h4>
                </div>
                <div class="col-3 col-lg-1 mb-4">
                    <h4>About Us</h4>

                </div>
                <div class="col-3 col-lg-1 mb-4">
                    <h4>About Us</h4>

                </div>
                <div class="col-3 col-lg-1 mb-4">
                    <h4>About Us</h4>
                </div>
                <div class="d-flex col-lg-4 justify-content-end">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <i class="fa-brands fa-facebook"></i>
                        </li>
                        <li class="list-group-item">
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li class="list-group-item">
                            <i class="fa-brands fa-instagram"></i>
                        </li>
                        <li class="list-group-item">
                            <i class="fa-brands fa-youtube"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pt-5 psc-8 justify-content-end">
            </div>
        </div>
    </footer>

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

    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" />
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#del-prev').click(function() {

                var image_name = $('#image_project').val();
                var project_id = <?= $row->project_id ?>

                if (image_name != '') {
                    $.ajax({
                        url: "<?= base_url(); ?>projects/del_basic_image/",
                        method: 'POST',
                        data: {
                            'image': image_name,
                            'project_id': project_id
                        },
                        type: JSON,
                        success: function(result) {
                            console.log(result)
                            if (result.success === true) {
                                alert('Gagal Hapus item gambar')
                            } else {
                                $('#image_side_form').load(' #image_basic_form', function() {
                                    document.getElementById('gambar_basic').onchange = function() {
                                        document.getElementById('uploaded_image').src = URL.createObjectURL(gambar_basic.files[0]);
                                        console.log(URL.createObjectURL(gambar_basic.files[0]))

                                        document.getElementById('upload_box').style.display = "none";
                                        document.getElementById('uploaded_box').style.display = 'block';
                                    }


                                    document.getElementById('delcurrent_image').onclick = function() {
                                        document.getElementById('upload_box').style.display = "flex";
                                        document.getElementById('uploaded_box').style.display = 'none';
                                    }
                                })

                            }
                        }
                    })
                }

            })
        })

        $(document).ready(function() {
            $('#del-prev-video').click(function() {

                var video_name = $('#video_project').val();
                var project_id = <?= $row->project_id ?>

                if (video_name != '') {
                    $.ajax({
                        url: "<?= base_url(); ?>projects/del_basic_video/",
                        method: 'POST',
                        data: {
                            'video': video_name,
                            'project_id': project_id
                        },
                        type: JSON,
                        success: function(result) {
                            console.log(result)
                            if (result.success === true) {
                                alert('Gagal Hapus item gambar')
                            } else {
                                $('#video_side_form').load(' #video_basic_form')

                            }
                        }
                    })
                }

            })
        })

        $(document).ready(function() {
            $('#upload_p_image').click(function() {
                var myFormData = new FormData();
                var gambar = $('#gambar_basic')[0].files[0];
                myFormData.append('image', gambar)
                myFormData.append('project_id', <?= $row->project_id ?>)
                var filename = $('#gambar_basic')[0].files[0]
                console.log(filename)
                var project_id = <?= $row->project_id ?>

                if (filename != '') {
                    $.ajax({
                        url: '<?= base_url(); ?>projects/upload_image',
                        processData: false, // important
                        contentType: false,
                        method: 'POST',
                        data: myFormData,
                        type: JSON,
                        success: function(result) {
                            console.log(result)
                            if (result.success === true) {
                                alert('Gagal tambah')
                            } else {
                                $('#image_side_form').load(' #preview', function() {
                                    $(document).ready(function() {
                                        $('#del-prev').click(function() {

                                            var image_name = $('#image_project').val();
                                            var project_id = <?= $row->project_id ?>

                                            if (image_name != '') {
                                                $.ajax({
                                                    url: "<?= base_url(); ?>projects/del_basic_image/",
                                                    method: 'POST',
                                                    data: {
                                                        'image': image_name,
                                                        'project_id': project_id
                                                    },
                                                    type: JSON,
                                                    success: function(result) {
                                                        console.log(result)
                                                        if (result.success === true) {
                                                            alert('Gagal Hapus item gambar')
                                                        } else {
                                                            $('#image_side_form').load(' #image_basic_form', function() {
                                                                document.getElementById('gambar_basic').onchange = function() {
                                                                    document.getElementById('uploaded_image').src = URL.createObjectURL(gambar_basic.files[0]);
                                                                    console.log(URL.createObjectURL(gambar_basic.files[0]))

                                                                    document.getElementById('upload_box').style.display = "none";
                                                                    document.getElementById('uploaded_box').style.display = 'block';
                                                                }


                                                                document.getElementById('delcurrent_image').onclick = function() {
                                                                    document.getElementById('upload_box').style.display = "flex";
                                                                    document.getElementById('uploaded_box').style.display = 'none';
                                                                }
                                                            })

                                                        }
                                                    }
                                                })
                                            }

                                        })
                                    })
                                })
                            }
                        }
                    })
                }
            })
        })

        $(document).ready(function() {
            $('#upload_p_video').click(function() {
                var myFormData = new FormData();
                var video = $('#video_basic')[0].files[0];
                myFormData.append('video', video)
                myFormData.append('project_id', <?= $row->project_id ?>)
                var filename = $('#video_basic')[0].files[0]
                console.log(filename)
                var project_id = <?= $row->project_id ?>

                if (filename != '') {
                    $.ajax({
                        url: '<?= base_url(); ?>projects/upload_video',
                        processData: false, // important
                        contentType: false,
                        method: 'POST',
                        data: myFormData,
                        type: JSON,
                        success: function(result) {
                            console.log(result)
                            if (result.success === true) {
                                alert('Gagal tambah')
                            } else {
                                $('#video_side_form').load(' #video_preview', function() {
                                    videojs('project_video ');
                                    $(document).ready(function() {
                                        $('#del-prev-video').click(function() {

                                            var video_name = $('#video_project').val();
                                            var project_id = <?= $row->project_id ?>

                                            if (video_name != '') {
                                                $.ajax({
                                                    url: "<?= base_url(); ?>projects/del_basic_video/",
                                                    method: 'POST',
                                                    data: {
                                                        'video': video_name,
                                                        'project_id': project_id
                                                    },
                                                    type: JSON,
                                                    success: function(result) {
                                                        console.log(result)
                                                        if (result.success === true) {
                                                            alert('Gagal Hapus item gambar')
                                                        } else {
                                                            $('#video_side_form').load(' #video_basic_form', function() {
                                                                document.getElementById('video_basic').onchange = function(event) {
                                                                    videojs('project_video ');
                                                                    let file = event.target.files[0];
                                                                    let blobURL = URL.createObjectURL(file);

                                                                    document.querySelector("video").src = blobURL;

                                                                    document.getElementById('upload_box_video').style.display = "none";
                                                                    document.getElementById('uploaded_box_video').style.display = 'block';
                                                                }


                                                                document.getElementById('delcurrent_video').onclick = function() {
                                                                    document.getElementById('upload_box_video').style.display = "flex";
                                                                    document.getElementById('uploaded_box_video').style.display = 'none';
                                                                }
                                                            })

                                                        }
                                                    }
                                                })
                                            }

                                        })
                                    })
                                })
                            }
                        }
                    })
                }
            })
        })
    </script>

    <script type="text/javascript">
        document.getElementById('gambar_basic').onchange = function() {
            document.getElementById('uploaded_image').src = URL.createObjectURL(gambar_basic.files[0]);
            console.log(URL.createObjectURL(gambar_basic.files[0]))

            document.getElementById('upload_box').style.display = "none";
            document.getElementById('uploaded_box').style.display = 'block';
        }


        document.getElementById('delcurrent_image').onclick = function() {
            document.getElementById('upload_box').style.display = "flex";
            document.getElementById('uploaded_box').style.display = 'none';
        }
    </script>

    <script type="text/javascript">
        document.getElementById('video_basic').onchange = function(event) {
            let file = event.target.files[0];
            let blobURL = URL.createObjectURL(file);

            document.querySelector("video").src = blobURL;

            document.getElementById('upload_box_video').style.display = "none";
            document.getElementById('uploaded_box_video').style.display = 'block';
        }


        document.getElementById('delcurrent_video').onclick = function() {
            document.getElementById('upload_box_video').style.display = "flex";
            document.getElementById('uploaded_box_video').style.display = 'none';
        }
    </script>



    <script>
        function time1() {
            document.getElementById('time_form').style.display = 'none';
            $("#time2").prop('checked', false);
        }

        function time2() {
            document.getElementById('time_form').style.display = 'block';
            $("#time1").prop('checked', false);
        }
    </script>

    <script>
        function show11() {
            document.getElementById('itemform-wrap').style.display = 'block';
        }

        function hide1() {
            document.getElementById('itemform-wrap').style.display = 'none';
        }

        function show22() {
            document.getElementById('itemlist').style.display = 'block';
            document.getElementById('itemform-wrap').style.display = 'none';

        }

        var linkcontainer = document.getElementById('start-cat');
        var linkcat = linkcontainer.getElementsByClassName('ikon');

        for (var i = 0; i < linkcat.length; i++) {
            linkcat[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("border-active");
                current[0].className = current[0].className.replace(" border-active", "");
                this.className += " border-active";
            });
        }
    </script>
    <script>
        function show1() {
            document.getElementById('radio1').style.display = 'block';
            document.getElementById('radio2').style.display = 'none';
            $("#rbtn2").prop('checked', false);
            $('#standar').val(30);

        }

        function show2() {
            document.getElementById('radio2').style.display = 'block';
            document.getElementById('radio1').style.display = 'none';
            $("#rbtn1").prop('checked', false);
        }

        function rqty1() {
            document.getElementById('rqty_form').style.display = 'none';
            $("#rqty2").prop('checked', false);
        }

        function rqty2() {
            document.getElementById('rqty_form').style.display = 'block';
            $("#rqty1").prop('checked', false);
        }
    </script>
    <!-- end modal login -->

    <script>
        var rewardcontainer = document.getElementById('rewardlink');
        var linkr = rewardcontainer.getElementsByClassName('rcat');


        for (var ctrl = 0; ctrl < linkr.length; ctrl++) {
            linkr[ctrl].addEventListener("click", function() {
                var current = document.getElementsByClassName("rborder-active");
                current[0].className = current[0].className.replace(" rborder-active", "");
                this.className += " rborder-active";
            });
        }
    </script>







    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var category_id = $('#category').val();
                var project_id = <?= $row->project_id ?>

                if (category_id != '') {
                    $.ajax({
                        url: "<?= base_url(); ?>start/fetch_subcat/",
                        method: 'POST',
                        data: {
                            'category_id': category_id
                        },
                        type: JSON,
                        success: function(data) {
                            $('#subcat').html(data);
                        }
                    })
                }
            })
        })
    </script>


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
</body>

</html>