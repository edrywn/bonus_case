<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php base_url() ?>assets/img/Kota_Bengkulu.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/style.css">

</head>

<body>
    <section class="ftco-section" style="width:100%; height:100%; background:rgba(224,224,224,0.60);position:fixed;">
        <div class=" container">
            <div class=" justify-content-center">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="heading-section"><?= $this->session->flashdata('message'); ?></h2>
                </div>
            </div>
            <div class=" justify-content-center">
                <div class="col-md-12 col-lg-6">

                    <div class=" p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Login Admin</h3>
                            </div>

                        </div>
                        <form action="<?= base_url('auth') ?>" class="signin-form" method="POST">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="<?= base_url('assets/login/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/jquery.min.js"></script>

</body>

</html>