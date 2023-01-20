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
    <link rel="stylesheet" type="text/css" href="css/styleglr.css" />
    <link rel="stylesheet" type="text/css" href="css/close.css" />

    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <script type="text/javascript" src="js/scriptglr.js"></script>

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cslider.js"></script>
    <script type="text/javascript">
        $('#myCarousel').on('slide.bs.carousel', function() {
            $('.carousel').carousel({
                interval: 100
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay: true,
                bgincrement: 450
            });

        });
    </script>



    <!-- script dropdown -->
    <!-- <script type="text/javascript">
        $('.Card-image').lazyload(50);
    </script> -->
</body>

</html>