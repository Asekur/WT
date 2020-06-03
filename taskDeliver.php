<!DOCTYPE html>
<html class="html-taskSum" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" href="assets/horse_ksk.ico" type="images/x-icon" />
    <title>Get deliver date</title>
</head>

<body class="body-taskSum">
    <?php require_once("userHistory.php");?>
    <div class="wrap-addTask">
        <header class="header-addTask">
            <?php include "menuOutput.php"; ?>
        </header>
        <main>
            <div class="main-addTask">
                <div class="taskSum">
                    <form method="POST">
                        Date:<br> <input type="date" class="date" name="date" value="<?php echo date("Y-m-d");?>"
                            min="<?php echo date("Y-m-d");?>"
                            max="<?php $time = strtotime("+6 month"); echo date("Y-m-d", $time);?>"><br>
                        <br>
                        <input type="submit" class="submit" name="submit" value="Get date"> <br> <br> <br>
                        Delivery date: <br>
                        <span><?php require_once("deliveryDate.php");?></span><br>
                    </form>
                </div>
                <div class="animate">
                    <img class="anim-beg" src="../assets/beg.gif">
                    <img class="anim-bar" src="../assets/barrier.png">
                </div>
            </div>
        </main>
        <footer>
            <div class="wrapper">
                <ul>
                    <li class="facebook">
                        <a href="https://ru-ru.facebook.com/people/Ангелина-Русинович/100025365888236"><i
                                class="fa fa-facebook"></i></a>
                    </li>
                    <li class="github">
                        <a href="https://github.com/Asekur"><i class="fa fa-github"></i></a>
                    </li>
                    <li class="instagram">
                        <a href="https://www.instagram.com/chegelik/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="vk">
                        <a href="https://vk.com/chegelik"><i class="fa fa-vk"></i></a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>