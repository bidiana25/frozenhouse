<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>login/css/style.css">

    <title>Login Frozen House</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="<?php echo base_url() ?>login/images/logofh.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Login Sistem</h3>
                                <p class="mb-4">Silahkan Login ke Sistem Frozen House.</p>
                            </div>


                            <?php
                            /*
            * Variabel $contentnya diambil dari core MY_Controller
            * (application/core/MY_Controller.php)
            * */
                            echo $contentnya;
                            ?>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>login/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>login/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>login/js/main.js"></script>
</body>

</html>