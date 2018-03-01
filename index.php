<?php
/*session_start();*/
include_once("pages/functions.php");
//echo connect();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Travel Agency</title>
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
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <section class="col-sm-12 col-md-12 col-lg-12">
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 1 : {
                                    include_once('pages/tours.php');
                                    break;
                                }
                            case 2 : {
                                    include_once('pages/comments.php');
                                    break;
                                }
                            case 3 : {
                                    include_once('pages/registration.php');
                                    break;
                                }
                            case 4 : {
                                    include_once('pages/admin.php');
                                    break;
                                }
                        }
                    }
                    ?>
                </section>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <footer class="col-sm-12 col-md-12 col-lg-12">
                    Step Academy &copy;
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
