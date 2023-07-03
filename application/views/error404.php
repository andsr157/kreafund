<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.css">
    <title>404 Page Not Found</title>
    <style>
        body {
            background-color: #fff;
            font-family: 'maison_neuebook';
            color: #333;
        }
        .box{
            padding-top: 4rem;
            padding-left: 5rem;
            padding-right: 5rem;
        }
        h1 {
            font-size: 2.8rem;
            font-weight: 400;
            color: #282828;
            margin-top: 12rem;
        }

        p {
            font-size: 1rem;
            color: #282828;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            
        }


        .imageBox{
            width: 560px;
            height: 640px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="col-6" style="padding-right: 10rem;">
                    <a class="" href="<?= base_url() ?>" style="color: var(--kf-primary); font-weight: bold; letter-spacing:2px;">
                        <span style="font-size: 1.8rem; ">
                            Kreafund
                        </span>
                    </a>

                    <h1>Back it Up!</h1>
                    <p class="mb-5">We can’t find this page, but we can show you a new creative project you can help bring to life. </p>
                    <a href="<?=base_url('discovery')?>" class="me-3">
                        <button class="btn btn-dark rounded-0 px-4 shadow">Explore</button>
                    </a>
                    <a href="<?=base_url('home')?>">
                        <button class="btn btn-light rounded-0 shadow">Take me home   </button>
                    </a>
                </div>
                <div class="col-6" >
                    <div class="imageBox">
                        <img style="object-fit:cover;" class="w-100 h-100"src="<?=base_url('assets/img/ikon/404.png')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>