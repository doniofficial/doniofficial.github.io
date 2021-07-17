<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PRAHASTAMA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/logo.png' ?>">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
	<!-- Card Style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/card.css' ?>">

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
					<h1 color :#fff><a href="<?php echo base_url() . '' ?>">PRAHASTAMA<span>.</span></a>

					</h1>
					<nav role="navigation">
						<ul>
							<li><a href="<?php echo base_url() . 'layanan' ?>">Layanan</a></li>
							<li><a href="<?php echo base_url() . 'artikel' ?>">Artikel</a></li>
							<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
							<li><a href="<?php echo base_url() . 'Gallery' ?>">Koleksi</a>
							</li>
							<li class="cta"><a href='https://forms.gle/t62mRwaLW54RBWg68'>Hubungi Admin</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/tamp.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</aside>

		<div id="fh5co-blog" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">

						<h2>ARMADA KAMI</h2>
					</div>
				</div>
			</div>

			<div>
				<div class="container" style="margin-top:50px;">
					<div class="row">
						<div class="col-md-3">
							<div class="card-sl">
								<div class="card-image">
									<img src='theme/images/alphard.jpg'>
								</div>

								<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
								<div class="card-heading">
									ALPHARD
								</div>
								<div class="card-text">
									Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
								</div>
								<div class="card-text">
									$67,400
								</div>
								<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-sl">
								<div class="card-image">
									<img src='theme/images/AVANZAA.jpg'>
								</div>

								<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
								<div class="card-heading">
									AVANZA
								</div>
								<div class="card-text">
									Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
								</div>
								<div class="card-text">
									$67,400
								</div>
								<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-sl">
								<div class="card-image">
									<img src='theme/images/INNOVAREBORN.jpg'>
								</div>

								<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
								<div class="card-heading">
									INNOVA REBORN
								</div>
								<div class="card-text">
									Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
								</div>
								<div class="card-text">
									$67,400
								</div>
								<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card-sl">
								<div class="card-image">
									<img src=theme/images/PAJEROSPORT.jpg>
								</div>

								<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
								<div class="card-heading">
									PAJERO SPORT
								</div>
								<div class="card-text">
									Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
								</div>
								<div class="card-text">
									$67,400
								</div>
								<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="container" style="margin-top:50px;">
						<div class="row">
							<div class="col-md-3">
								<div class="card-sl">
									<div class="card-image">
										<img src='theme/images/FORTUNER2.jpg'>
									</div>

									<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
									<div class="card-heading">
										FORTUNER
									</div>
									<div class="card-text">
										Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
									</div>
									<div class="card-text">
										$67,400
									</div>
									<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card-sl">
									<div class="card-image">
										<img src=theme/images/BRIO22.jpg>
									</div>

									<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
									<div class="card-heading">
										BRIO
									</div>
									<div class="card-text">
										Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
									</div>
									<div class="card-text">
										$67,400
									</div>
									<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card-sl">
									<div class="card-image">
										<img src='theme/images/MOBILIO3.jpg'>
									</div>

									<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
									<div class="card-heading">
										MOBILIO
									</div>
									<div class="card-text">
										Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
									</div>
									<div class="card-text">
										$67,400
									</div>
									<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card-sl">
									<div class="card-image">
										<img src='theme/images/JAZZ.jpg'>
									</div>

									<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
									<div class="card-heading">
										JAZZ
									</div>
									<div class="card-text">
										Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
									</div>
									<div class="card-text">
										$67,400
									</div>
									<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="container" style="margin-top:50px;">
							<div class="row">
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/TRUCK.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											TRUCK
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/TRUCKFUSO.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											TRUCK FUSO
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/BOX.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											MOBIL BOX
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/PICK.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											PICK UP
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text= Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
							</div>
						</div>
						<div class="container" style="margin-top:50px;">
							<div class="row">
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/LUXIO1.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											LUXIO
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/MEDIUM.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											MEDIUM BUS
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/LNR.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											ELF LNR
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text=Halo Admin Prahastama?" class="card-button"> PESAN</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card-sl">
										<div class="card-image">
											<img src='theme/images/BIGBUS.jpg'>
										</div>

										<a class="card-action" href="#"><i class="fa fa-heart"></i></a>
										<div class="card-heading">
											BIG BUS
										</div>
										<div class="card-text">
											Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
										</div>
										<div class="card-text">
											$67,400
										</div>
										<a href="https://api.whatsapp.com/send?phone=6285200888799&text= Halo Admin Prahastama?" class="card-button"> PESAN</a>
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