<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kursus Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="kursus private" />
    <link rel="shorcut icon" type="text/css" href='assets/images/logo.png'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
    <?php
    error_reporting(0);
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>

</head>

<body>


    <div id="fh5co-page">
        <header id="fh5co-header" role="banner">
            <div class="container">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() . '' ?>">KURSUS ONLINE<span>.</span></a></h1>
                    <nav role="navigation">
                        <ul>
                            <li><a href="<?php echo base_url() . 'home' ?>">Home</a></li>
                            <li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
                            <li><a href="<?php echo base_url() . 'artikel' ?>">Blog</a></li>
                            <li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
                            <li><a href="<?php echo base_url() . 'kontak' ?>">Materi</a>
                            </li>
                            <li class="cta"><a href='https://forms.gle/t62mRwaLW54RBWg68'>DAFTAR</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>


        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(<?php echo base_url() . 'theme/images/animasi_3.jpg' ?>);">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>KEJAR MIMPI-MIMPIMU</h2>
                                    <p><a href="https://forms.gle/t62mRwaLW54RBWg68" class="btn btn-primary btn-lg">DAFTAR</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo base_url() . 'theme/images/animasi_3.jpg' ?>);">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>BERGABUNGLAH BERSAMA KAMI</h2>
                                    <p><a href="https://forms.gle/t62mRwaLW54RBWg68" class="btn btn-primary btn-lg">DAFTAR</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="fh5co-section-with-image">
            <img src="<?php echo base_url() . 'theme/images/animasi_2.jpg' ?>" alt="" class="img-responsive">
            <div class="fh5co-box animate-box">
                <h2>MULAI LATIHAN</h2>
                <p>YUK LATIH DIRIMU DENGAN IKUT IKUT UJIAN</p>
                <p><a href="<?php echo base_url() . 'http://localhost/moodle/login/index.php' ?>" class="btn btn-primary btn-outline with-arrow">IKUT UJIAN <i class="icon-arrow-right"></i></a></p>
            </div>
        </div>


        <div class="fh5co-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                        <h2>MATERI</h2>
                    </div>
                    <div class="col-md-4 text-center item-block">
                        <span class="icon"><img src="<?php echo base_url() . 'theme/images/30.svg' ?>" class="img-responsive"></span>
                        <h3>SOFTWARE & PROGRAM</h3>
                        <p>Tingkatkan kinerja perusahaan dengan Software yang sesuai dengan Business Process anda.</p>
                        <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
                    </div>
                    <div class="col-md-4 text-center item-block">
                        <span class="icon"><img src="<?php echo base_url() . 'theme/images/18.svg' ?>" class="img-responsive"></span>
                        <h3>IT CONSULTING</h3>
                        <p>Konsultasi kan kebutuhan IT anda pada kami dan ketahui layanan lain yang kami berikan.</p>
                        <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
                    </div>
                    <div class="col-md-4 text-center item-block">
                        <span class="icon"><img src="<?php echo base_url() . 'theme/images/27.svg' ?>" class="img-responsive"></span>
                        <h3>WEB DESIGN</h3>
                        <p>Bangun identitas bisnis dan usaha anda di dunia Internet melalui Website.</p>
                        <p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-blog" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>ARTIKEL TERBARU</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($post->result_array() as $j) :
                        $post_id = $j['tulisan_id'];
                        $post_judul = $j['tulisan_judul'];
                        $post_isi = $j['tulisan_isi'];
                        $post_author = $j['tulisan_author'];
                        $post_image = $j['tulisan_gambar'];
                        $post_tglpost = $j['tanggal'];
                        $post_slug = $j['tulisan_slug'];
                    ?>
                        <div class="col-md-4">
                            <a class="fh5co-entry" href="<?php echo base_url() . 'artikel/' . $post_slug; ?>">
                                <figure>
                                    <img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
                                </figure>
                                <div class="fh5co-copy">
                                    <h3><?php echo $post_judul; ?></h3>
                                    <span class="fh5co-date"><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
                                    <?php echo limit_words($post_isi, 20) . '...'; ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    <div class="col-md-12 text-center">
                        <p><a href="<?php echo base_url() . 'artikel' ?>" class="btn btn-primary btn-outline with-arrow">View More <i class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->load->view('v_footer'); ?>
    </div>


    <!-- jQuery -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

    <!-- MAIN JS -->
    <script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>