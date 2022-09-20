<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from makaanlelo.com/tfdl_products_007/dompet/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 09:33:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data['title']; ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= URLROOT ?>/assets/images/favicon.png" />
    <link href="<?= URLROOT ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/assets/sweetalert/sweetalert2.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/assets/sweetalert/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="<?= URLROOT ?>/assets/images/logo-full.png"
                                                alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="https://makaanlelo.com/tfdl_products_007/dompet/xhtml/index.html">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="Silahkan isi username"
                                                name="username" id="username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Silahkan isi Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-block"
                                                onclick="login_administrator()">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="#">Sign
                                                up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= URLROOT ?>/assets/vendor/global/global.min.js"></script>
    <script src="<?= URLROOT ?>/assets/js/custom.min.js"></script>
    <script src="<?= URLROOT ?>/assets/js/dlabnav-init.js"></script>
    <script src="<?= URLROOT ?>/assets/js/styleSwitcher.js"></script>
    <script src="<?= URLROOT ?>/assets/custom/login.js"></script>
    <!-- Sweetalert -->
    <script src="<?= URLROOT ?>/assets/sweetalert/sweetalert2.js"></script>
    <script src="<?= URLROOT ?>/assets/sweetalert/sweetalert2.all.js"></script>
    <script src="<?= URLROOT ?>/assets/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= URLROOT ?>/assets/sweetalert/sweetalert2.min.js"></script>


</body>

<!-- Mirrored from makaanlelo.com/tfdl_products_007/dompet/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 09:33:43 GMT -->

</html>