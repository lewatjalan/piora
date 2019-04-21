<!DOCTYPE html>
<html lang="en">
<head>
<title>PIORA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url();?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/responsive.css">
</head>
<body>

<div class="super_container">
	<!-- Navbar -->
	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="<?php echo site_url('Welcome'); ?>">Home</a></li>
				<li class="menu_item"><a href="<?php echo site_url('Welcome/artikel'); ?>">Artikel</a></li>
				<li class="menu_item"><a href="<?php echo site_url('Welcome/obat'); ?>">Obat</a></li>
				<li class="menu_item"><a href="<?php echo site_url('keluhan'); ?>">Keluhan</a></li>
				<li class="menu_item"><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->
	<div class="home">
		<div class="background_image" style="background-image:url(<?php echo base_url();?>/assets/images/about.jpg)">
		</div>
		<!-- Header -->
		<header class="header" id="header">

				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">PIORA<span>+</span></a>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li class="active"><a href="<?php echo site_url('Welcome'); ?>">Home</a></li>
													<li><a href="<?php echo site_url('Welcome/artikel'); ?>">Artikel</a></li>
													<li><a href="<?php echo site_url('Welcome/obat'); ?>">Obat</a></li>
													<li><a href="<?php echo site_url('keluhan'); ?>">Keluhan</a></li>
													<li><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Search" required="required">
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Institut Teknologi Sumatera</div>
							<div class="home_text">Pusat Informasi Obat ITERA.</div>
							<!-- <div class="button home_button"><a href="#"><span>read more</span><span>read more</span></a></div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- DaftarObat -->

	<div class="stuff">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="daftarobat">
						<div class="faq_title">Daftar Obat</div>
						<div class="elements_accordions">
							<div class="accordions">
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> A </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> B </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> C </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> D </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> E </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> F </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> G </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> H </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> I </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="daftarobat">
						<div class="faq_title"><br></div>
						<div class="elements_accordions">
							<div class="accordions">
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> J </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> K </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> L </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> M </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> N </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> O </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> P </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> Q </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> R </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="daftarobat">
						<div class="faq_title"><br></div>
						<div class="elements_accordions">
							<div class="accordions">
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> S </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> T </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> U </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> V </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> W </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> X </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> Y </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div> Z </div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>SSSSSSSSSSSSSSSSSSSSS
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/assets/images/footer.jpg" data-speed="0.8">
		</div>

		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">PIORA<span>+</span></a>
							</div>
							<div class="footer_about_text">Pusat Informasi Obat ITERA.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright">
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> Piora | Pusat Informasi obat Institut Teknologi Sumatera
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url();?>/assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
</body>
</html>
