<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hotel Info</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav class="col-sm-12 col-md-12 col-lg-12 navbar navbar-light bg-faded">
                    <?php include_once('menu.php'); ?>
                </nav>
            </div>
        </div>
        <?php
        include_once("functions.php");
        if (isset($_GET['hotel'])) {
            $hotel = $_GET['hotel'];
            $link = connect();
            $sel1 = 'select * from hotels where id=' . $hotel;
            $res1 = mysqli_query($link, $sel1);
            /*var_dump($res1);
            $hname;
            $hstars;
            $hcost;
            $hinfo;
            $row1;*/
            //while ($row1 = mysqli_fetch_array($res1)) {
                $row1 = mysqli_fetch_array($res1);
                $hname = $row1[1];
                $hstars = $row1[4];
                $hcost = $row1[5];
                $hinfo = $row1[6];
            //}            
            mysqli_free_result($res1);
            
            echo '<div class="container">';
            echo '<h2 class="text-uppercase textcenter">' . $hname . '</h2>';
            echo '<div class="row"><div class="col-md-6 textcenter">';
            $sel2 = 'select imagepath from images where hotelid=' . $hotel;
            $res2 = mysqli_query($link, $sel2);
            echo '<span class="label label-info">Watch our
pictures</span>';
            echo'<ul id="gallery">';
            $i = 0;
            while ($row2 = mysqli_fetch_array($res2)) {
                echo ' <li><img src="../' . $row2[0] . '"></li>';
            }
            mysqli_free_result($res2);
            echo ' </ul>';
            echo '<div>';
            echo '<div>';
            echo '<div>';
            mysqli_close($link);
        }