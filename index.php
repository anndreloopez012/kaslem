<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KASLEM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
    <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
    <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
    <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
    <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
    <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

    <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"> KASLEM</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Inicio</a></li>
                    <li><a href="#about">Acerca De</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#portfolio">Portafolio</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#contact">Contacto</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="#about" class="get-started-btn scrollto">Iniciar</a>

        </div>
    </header>
    <!-- End Header -->
    <!-- ======= IMPORT PHP ======= -->
    <?php include 'data/conexion.php'; ?>
    <?php include 'api/adm_index.php'; ?>
    <!-- ======= END IMPORT PHP ======= -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1><?php echo $slogan; ?><span></span></h1>
                    <h2><?php echo $slogan2; ?></h2>
                </div>
            </div>

            <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <?php
                if (is_array($arrHome) && (count($arrHome) > 0)) {
                    reset($arrHome);
                    foreach ($arrHome as $rTMP['key'] => $rTMP['value']) { ?>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="icon-box">
                                <?php echo  $rTMP["value"]['img']; ?>
                                <h3><a href=""><?php echo  $rTMP["value"]['title']; ?></a></h3>
                            </div>
                        </div>
                <?PHP
                    }
                }
                ?>
            </div>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2></h2>
                    <p>Acerca De</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="<?php echo  $img_gen; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                        <p class="font-italic">
                            <?php echo  $inf_general; ?> </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="image col-lg-6" style='background-image: url("<?php echo  $img_mision; ?>");' data-aos="fade-right"></div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <?php echo  $ico_mision; ?>
                            <h4><?php echo  $title_mision; ?></h4>
                            <p><?php echo  $content_mision; ?></p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <?php echo  $ico_plan; ?>
                            <h4><?php echo  $title_plan; ?></h4>
                            <p><?php echo  $content_plan; ?></p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <?php echo  $ico_vision; ?>
                            <h4><?php echo  $title_vision; ?></h4>
                            <p><?php echo  $content_vision; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2></h2>
                    <p>Servicios</p>
                </div>

                <div class="row">
                    <?php
                    if (is_array($arrService) && (count($arrService) > 0)) {
                        reset($arrService);
                        foreach ($arrService as $rTMP['key'] => $rTMP['value']) {
                    ?>
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><?php echo  $rTMP["value"]['ico']; ?></div>
                                    <h4><a href=""><?php echo  $rTMP["value"]['titulo']; ?></a></h4>
                                    <p><?php echo  $rTMP["value"]['content']; ?></p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3><?php echo  $title; ?></h3>
                    <p> <?php echo  $content; ?></p>
                    <a class="cta-btn" href="<?php echo  $url; ?>"><?php echo  $boton; ?></a>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2></h2>
                    <p>Portafolio</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <?php
                            if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
                                reset($arrMenuPorfolio);
                                foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {

                                    if ($rTMP["value"]['abreviatura'] == '*') {
                            ?>
                                        <li data-filter="<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li data-filter=".<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php
                    if (is_array($arrPorfolio) && (count($arrPorfolio) > 0)) {
                        reset($arrPorfolio);
                        foreach ($arrPorfolio as $rTMP['key'] => $rTMP['value']) {
                    ?>
                            <div class="col-lg-4 col-md-6 portfolio-item <?php echo  $rTMP["value"]['abreviatura']; ?>">
                                <div class="portfolio-wrap">
                                    <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4><?php echo  $rTMP["value"]['tittle']; ?></h4>
                                        <p><?php echo  $rTMP["value"]['content']; ?></p>
                                        <div class="portfolio-links">
                                            <a href="<?php echo  $rTMP["value"]['img']; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                            <a href="<?php echo  $rTMP["value"]['url']; ?>" title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>


                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2></h2>
                    <p>Equipo</p>
                </div>

                <div class="row">
                    <?php
                    if (is_array($arrTeam) && (count($arrTeam) > 0)) {
                        reset($arrTeam);
                        foreach ($arrTeam as $rTMP['key'] => $rTMP['value']) {
                    ?>
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                                        <div class="social">
                                            <?php if ($rTMP["value"]['twitter']) { ?>
                                                <a href=""><i class="icofont-twitter"></i></a>
                                            <?php } ?>

                                            <?php if ($rTMP["value"]['facebook']) { ?>
                                                <a href=""><i class="icofont-facebook"></i></a>
                                            <?php } ?>

                                            <?php if ($rTMP["value"]['google']) { ?>
                                                <a href=""><i class="icofont-instagram"></i></a>
                                            <?php } ?>

                                            <?php if ($rTMP["value"]['link']) { ?>
                                                <a href=""><i class="icofont-linkedin"></i></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4><?php echo  $rTMP["value"]['title']; ?></h4>
                                        <span><?php echo  $rTMP["value"]['descrip']; ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2></h2>
                    <p>Contacto</p>
                </div>

                <div class="map-responsive">
                    <?php echo  $ubi; ?>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Direccion:</h4>
                                <p><?php echo  $dress; ?></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Correo:</h4>
                                <p><?php echo  $mail; ?></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telefono:</h4>
                                <p><?php echo  $telefono; ?></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="phpmailer/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SPÍ</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="">Servicios Profesionales De Informatica</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <style>
        .map-responsive {
            overflow: hidden !important;
            padding-bottom: 56.25% !important;
            position: relative !important;
            height: 0 !important;
        }

        .map-responsive iframe {
            left: 0 !important;
            top: 0 !important;
            height: 100% !important;
            width: 100% !important;
            position: absolute !important;
        }
    </style>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Font Osome -->
    <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

    <!-- ALERTS MODAL JS -->
    <script src="lib/alertify/alertify.js"></script>
    <script src="lib/alertify/alertify.min.js"></script>
    <!-- SEC  JS -->
    <!-- UPLOAD -->
    <script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
    <script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>

</body>

</html>