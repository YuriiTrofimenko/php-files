<?php include_once('meta.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <header class="col-sm-12 col-md-12 col-lg-12">
                </header>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <nav class="col-sm-12 col-md-12 col-lg-12 navbar navbar-light bg-faded">
                    <?php include_once('pages/menu.php'); ?>
                    <?php include_once('pages/signin.php'); ?>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <section class="col-sm-12 col-md-12 col-lg-12">
                    <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            switch ($page){
                                case 'home' : {
                                    include_once('pages/home.php');
                                    break;
                                }
                                case 'upload' : {
                                    include_once('pages/upload.php');
                                    break;
                                }
                                case 'gallery' : {
                                    include_once('pages/gallery.php');
                                    break;
                                }
                                case 'registration' : {
                                    include_once('pages/registration.php');
                                    break;
                                }
                            }
                        } else {
                            include_once('pages/home.php');
                        }
                    ?>
                </section>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <footer class="col-sm-12 col-md-12 col-lg-12"></footer>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
