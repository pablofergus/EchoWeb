<?php
// Define variables and set to empty values
$result = $name = $email = $phone = $message = $human = "";
$errName = $errEmail = $errPhone = $errMessage = $errHuman = "";
    if (isset($_POST["submit"])) {
        $message = $_POST['message'];
    };
        //valid address on your web server
        $from = 'pablofergus@echoband.es';
        //your email address where you wish to receive mail
        $to = 'pablofergus@gmail.com'; 
        $subject = 'MESSAGE FROM YOUR WEB SITE';
        $headers = "Mensaje desde la página de ECHO";
        $body = "Message: $message";

//Check if message is entered
if (empty($_POST["message"])) {
    $errMessage = "Please enter your message.";
    } else {
    $message = test_input($_POST["message"]);
}

// If there are no errors, send the email & output results to the form
if (!$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success"><h2><span class="glyphicon glyphicon-ok"></span> Message sent!</h2><h3>Thank you for contacting us. Someone will be in touch with you soon.</h3></div>';
    } else {
        $result='<div class="alert alert-danger"><h2><span class="glyphicon glyphicon-warning-sign"></span> Sorry there was a form processing error.</h2> <h3>Please try again later.</h3></div>';
       }
    }

   //sanitize data inputs    
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = (filter_var($data, FILTER_SANITIZE_STRING));
   return $data;
}
//end form processing script
?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="favicon.ico">
 <!--amenizamos bodas y bautizos-->   
<head>
    <!-- Title -->
    <title>Echo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/png"/>
    <link rel="shortcut icon" href="http://echoband.es/favicon.png" type="image/png"/>
    <link rel="icon" href="favicon.png" type="image/png"/>

    <!-- Meta stuff -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Página de Echo, banda madrileña de rock alternativo."/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="pablofergus"/>
    <!-- Not necessary
    <meta name="keywords" content="echo,band,echoband,rock,soldiers,síndrome,grupo,madrid,banda,spain,españa"/>
    -->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/pluton.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/grayscale.css" />

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light"><font color="white">Echo</font></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#biografia">Biografía</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#multimedia">Multimedia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#conciertos">Conciertos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#redes">Contacto</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/_echo_band" target="_blank" class=""><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/ECHO-313236142196088" target="_blank" class=""><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header (Logo is separate to background for scaling) -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p><img class="echologo" src="img/logo.png"></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section (Biografía) -->
    <section id="biografia" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!--<h2>Biografía</h2>-->
                <p><font size="4">ECHO es una banda madrileña de rock alternativo que surgió de un proyecto anterior en las aulas de la Escuela de Música Creativa. Su propuesta musical se presenta como una alternativa a la música predominante actualmente en este país. </font></p>
                <p><font size="4">Fueron ganadores de la I Edición del concurso DINAMO organizado por Underagerocks, lo que les dio la oportunidad de grabar tres temas en MOBA Studios producidos por Sergio Molina. Han dado conciertos en lugares como la Sala Silikona, la Sala Siroco, Hard Rock Café o el Matadero de Madrid.</font></p>
                <p><font size="4">Sus próximos objetivos para este año son la promoción de los tres temas grabados e incluidos en un recopilatorio de Underagerocks junto a otras bandas, así como la promoción de su EP por separado mediante conciertos y actuaciones en diversas salas de Madrid.</font></p>
            </div>
        </div>
        <div class="row">
            <!-- Band members -->
            <div class="row-fluid team">
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="img/david.png" alt="team 1">
                        <h3><a target="_blank" href="https://twitter.com/intotheshadow19">David</a></h3>
                        <ul class="social">
                            <li>
                                <a target="_blank" href="https://twitter.com/intotheshadow19">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Guitarrista</h2>
                            <p>Tesorero y contable de Echo. Procede de la Purísima Aparición</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="img/carmen.png" alt="team 1">
                        <h3><a target="_blank" href="https://twitter.com/GirlOfUtopia">Carmen</a></h3>
                        <ul class="social">
                            <li>
                                <a target="_blank" href="https://twitter.com/GirlOfUtopia">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Cantante y guitarrista</h2>
                            <p>Estudia arquitectura y es muy alternativa.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="img/mikel.png" alt="team 1">
                        <h3><a target="_blank" href="https://twitter.com/mikelosaurio">Mikel</a></h3>
                        <ul class="social">
                            <li>
                                <a target="_blank" href="https://twitter.com/mikelosaurio">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Bajista</h2>
                            <p>Estudiando musicología, tiene el pelo largo y rizado.</p>
                        </div>
                    </div>
                </div> 
            <div class="row-fluid team">
                <div class="span2"></div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="img/pablo.png" alt="team 1">
                            <h3><a target="_blank" href="https://twitter.com/pablofergus">Pablo Fergus</a></h3>
                            <ul class="social">
                                <li>
                                    <a target="_blank" href="https://twitter.com/pablofergus">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Teclista y percusionista</h2>
                                <p>Estudiante de conservatorio con conocimientos básicos de síntesis</p>
                            </div>
                        </div>
                    </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="img/paula.png" alt="team 1">
                        <h3><a target="_blank" href="https://twitter.com/PaulaDrumster">Paula</a></h3>
                        <ul class="social">
                            <li>
                                <a target="_blank" href="https://twitter.com/PaulaDrumster">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Batería y coros</h2>
                            <p>Estudiando arte dramático, toca la batería. Y la toca fuerte, no os preocupéis (la batería).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Multimedia Section -->
    <section id="multimedia" class="content-section text-center">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3">
                <h2>Videos</h2>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/CI6fxGDkmKg" frameborder="0" allowfullscreen></iframe><p></p>
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/s8iLijsWLwk" frameborder="0" allowfullscreen></iframe><p></p>
                    <a href="https://www.youtube.com/channel/UCj7xon0Lx0p4ZTmw6pzn0kg" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-youtube fa-fw"></i>Youtube</a><p><br><br></p>
            </div>
            <!-- Photos in the future -->
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Soundcloud</h2>
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/200959706&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199345283&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                    <iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199346419&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe><p></p>
                    <a href="https://soundcloud.com/echo_band" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-soundcloud fa-fw"></i> <span class="network-name">Soundcloud</span></a><p></p>
            </div>
        </div>

    </section>

    <!-- Concert Section -->
    <section id="conciertos" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 nohover">
                <h2>Conciertos programados</h2>
                    <li>
                        <p>
                            Sala Silikona (Madrid) - 7 dic 2014 
                            <!--<a href="error_1.html" target="_blank" class="btn btn-lg"><i class="fa fa-ticket"></i></a>-->
                        </p>
                    </li>
                    <li>
                        <p>
                            Sala Silikona (Madrid) - 15 mar 2015 
                            <!--<a href="error_1.html" target="_blank" class="btn btn-lg"><i class="fa fa-ticket"></i></a>-->
                        </p>
                    </li>
                    <li>
                        <p>
                            Hard Rock Cafe de Madrid - 24 abr 2015 
                            <!--<a href="error_1.html" target="_blank" class="btn btn-lg"><i class="fa fa-ticket"></i></a>-->
                        </p>
                    </li>
                    <li>
                        <p>
                            Sala Silikona (Madrid) - 27 jun 2015
                            <!--<a href="error_1.html" target="_blank" class="btn btn-lg"><i class="fa fa-ticket"></i></a>-->
                        </p>
                    </li>
                    <li>
                        <p>
                            Sala Siroco (Madrid) - 11 sep 2015 
                            <!--<a href="error_1.html" target="_blank" class="btn btn-lg"><i class="fa fa-ticket"></i></a>-->
                        </p>
                    </li>
                    <li>
                        <p> 
                            Sala Sótano (Madrid) - 21 nov 2015 - Teloneros de Apeks
                        </p>
                    </li>
                    <li class="red-bullet">
                        <a data-toggle="collapse" data-target="#tang-dinamo">
                            <p>LHMagazin - 15 dic 2015 - TANG: Especial Dinamo (Radio)</p>
                        </a>
                        <div class="collapse fade" id="tang-dinamo">
                            <a href="http://upmusic.es/evento/tang-especial-dinamo" target="_blank"><img src="http://echoband.es/img/tangdinamo.jpg" width="100%" class="concertimg"></a><br><br>
                            <h4><font color="white">Se podrá esuchcar en directo en <a href="http://www.lhmagazin.com/" target="_blank">LHMagazin.com</a></font></h4>
                        </div>
                    </li>
                    <li class="red-bullet">
                        <a data-toggle="collapse" data-target="#dinamo-presentacion">
                            <p>Sala Silikona (Madrid) - 18 dic 2015 - Presentación del disco de Underagerocks Dinamo</p>
                        </a>
                        <div class="collapse fade" id="dinamo-presentacion">
                            <a href="http://upmusic.es/evento/presentacion-dinamo" target="_blank"><img src="http://echoband.es/img/dinamoconcierto.jpg" width="100%" class="concertimg"></a><br><br>
                            <h4><font color="white">Entradas gratis disponibles en la sala, pueden entrar menores</font></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="redes" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contactos y contratación</h2>
                <p>Email: <a href="mailto:echomusicians@gmail.com">echomusicians@gmail.com</a></p>
                <p>Tel: 603 46 11 34</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/_echo_band" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://soundcloud.com/echo_band" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-soundcloud fa-fw"></i> <span class="network-name">Soundcloud</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/ECHO-313236142196088" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCj7xon0Lx0p4ZTmw6pzn0kg" class="btn btn-default btn-lg"><i class="fa fa-youtube fa-fw"></i>Youtube</a>
                    </li>
                </ul>
                <p></p>
                <p>No dudes en enviarnos un correo con dudas, algún tipo de comentario, o simplemente para saludar.</p>
                <div class="nohover"><p><a data-toggle="collapse" data-target="#mensaje">Envíanos un mensaje</a></p></div>
                <form id="contactForm" class="form-horizontal" role="form" method="post" action=" ">
                    <div class="collapse fade" id="mensaje">
                        <textarea class="form-control" row="4" name="message" placeholder="Introduce aquí un mensaje"></textarea><br><br>
                        <input type="button" id="submit" name="submit" value="Enviar" class="btn btn-default btn-lg">
                    </div>
                </form>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Created by pablofergus</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover(); 
    });
    $('#contactForm').submit(function () {
        sendContactForm();
        return false;
    });

    </script>

</body>

</html>
