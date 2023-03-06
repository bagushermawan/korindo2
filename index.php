<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" />

    <title>Korindo-Tech</title>
    <!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="css/stylemn.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/stylemn.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
    <link rel="stylesheet" href="css/gallery.css">
    <!-- <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/styleglr.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/close.css" />
    <link rel="stylesheet" type="text/css" href="css/partner.css" />

    <!-- Google web font "Open Sans" -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

    <noscript>
        <link rel="stylesheet" type="text/css" href="css/nojs.css" />
    </noscript>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style2.css" />

</head>

<body>
    <div>
        <?php
        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if (in_array($p . '.php', $pages)) {
                include($pages_dir . '/' . $p . '.php');
            } else {
                echo 'Halaman tidak ditemukan! :(';
            }
        } else {
            include($pages_dir . '/home.php');
        }
        ?>
    </div>

    <footer class="tm-footer">
        <!-- <div class="container-fluid">



        </div> -->

        <div class="row">
            <div class="col-xs-12 tm-margin-b-20">
                <p class="tm-copyright-text"><b>PT. KORINDO TECH INDONESIA</b></p>
                <p class="tm-copyright-text">Office : Jl. Lidah Wisata Mas</p>
                <p class="tm-copyright-text">Wisata Bukit Mas, Ruko Blok RH - 11,</p>
                <p class="tm-copyright-text">Lidah Wetan - Lakarsantri, Surabaya</p>
                <p class="tm-copyright-text">Phone : +62 31 9942 9299 | Mobile : +62 812 5919 1919 | E-Mail : ptkorindotech@gmail.com | jefrimakhmudianto@gmail.com</p>
                <p class="tm-copyright-text">COPYRIGHT © 2018</p>
            </div>
        </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/scriptmn.js"></script>
    <!-- <script type="text/javascript" src="js/scriptglr.js"></script> -->

    <!-- load JS files -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <!-- <script src="js/jquery-1.11.3.min.js"></script> -->
    <!-- <script src="js/jquery-1.4.3.min.js"></script> -->
    <!-- <script src="js/jquery.fancybox-1.3.4.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>
    <script src="js/gallery.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->



    <!-- script dropdown -->
    <!-- <script type="text/javascript">
        $('.Card-image').lazyload(50);
    </script> -->
</body>

</html>