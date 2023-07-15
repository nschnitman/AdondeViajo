<<<<<<< HEAD
<?include '../web/data.php'?>
=======
<?include '../data.php'?>
>>>>>>> NS-33-merge-github-viejo-nuevo
<?
	$clienteID = 13;
	$sq28  = "select nombre, logo, telefono, email from cliente
				where cliente.id=".$clienteID;
<<<<<<< HEAD
	$re28 = mysql_query($sq28,$conexion); 
	$info =	mysql_fetch_row($re28);
=======
	$re28 = mysqli_query($conexion, $sq28); 
	$info =	mysqli_fetch_row($re28);
>>>>>>> NS-33-merge-github-viejo-nuevo
	$clientenombre = $info[0];
?>						

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<?include '../web/css.php'?>
	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="../css/components/bs-switches.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title><?=$clientenombre;?> | <?=$longnombre;?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?include '../empresas/menu.php'?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<img  src="../<?=$info[1];?>">
				<h1><?=$clientenombre;?></h1>
				<span>Descubri todos los viajes que hay para vos!</span>
				<ol class="breadcrumb">
					<li><a href="../web/index.php">Home</a></li>
					<li><a href="../empresas/index.php">Empresas</a></li>
					<li class="active"><?=$clientenombre;?></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_full">

						<div class="heading-block center nobottomborder">
							<h2>Interactive Office Environment</h2>
							<span>We value Work Ethics &amp; Environment as it helps in creating a Creative Thinktank</span>
						</div>

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><img src="../images/about/4.jpg" alt="About Image"></a></div>
									<div class="slide"><a href="#"><img src="../images/about/5.jpg" alt="About Image"></a></div>
									<div class="slide"><a href="#"><img src="../images/about/6.jpg" alt="About Image"></a></div>
									<div class="slide"><a href="#"><img src="../images/about/7.jpg" alt="About Image"></a></div>
								</div>
							</div>
						</div>

					</div>

					<div class="col_one_fourth center" data-animate="bounceIn">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-users"></i>
						<div class="counter counter-large" style="color: #3498db;"><span data-from="100" data-to="8465" data-refresh-interval="50" data-speed="2000"></span></div>
						<h5>Clients Served</h5>
					</div>

					<div class="col_one_fourth center" data-animate="bounceIn" data-delay="200">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>
						<div class="counter counter-large" style="color: #e74c3c;"><span data-from="100" data-to="56841" data-refresh-interval="50" data-speed="2500"></span></div>
						<h5>Lines of Code</h5>
					</div>

					<div class="col_one_fourth center" data-animate="bounceIn" data-delay="400">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-briefcase"></i>
						<div class="counter counter-large" style="color: #16a085;"><span data-from="100" data-to="2154" data-refresh-interval="50" data-speed="3500"></span></div>
						<h5>No. of Projects</h5>
					</div>

					<div class="col_one_fourth center col_last" data-animate="bounceIn" data-delay="600">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-cup"></i>
						<div class="counter counter-large" style="color: #9b59b6;"><span data-from="100" data-to="874" data-refresh-interval="30" data-speed="2700"></span></div>
						<h5>Cups of Coffee</h5>
					</div>

					<div class="clear"></div>

					<div class="promo promo-light bottommargin">
						<h3>Llamanos hoy al <span><?=$info[2];?></span> o envianos un  Email a <span><?=$info[3];?></span></h3>
<!--
						<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
						<a href="#" class="button button-xlarge button-rounded">Start Browsing</a>
-->
					</div>

					<div class="heading-block center">
						<h2>Para vos!</h2>
						<span>Los diferentes viajes que te ofrecen!</span>
					</div>

					
					<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">
						<?php
							$sq12  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.ID from portfolio as P 
										inner join cliente as C on C.id = P.clienteID
										inner join destino as D on D.id = P.destinoID
										where C.id=".$clienteID."
										order by RAND()";
<<<<<<< HEAD
							$re2 = mysql_query($sq12,$conexion); 
=======
							$re2 = mysqli_query($conexion, $sq12); 
>>>>>>> NS-33-merge-github-viejo-nuevo
						?>					
							
							<?include '../web/article.php' ?>
							
					</div>

				</div>

				<div class="section topmargin-sm footer-stick">

					<h4 class="uppercase center">What <span>Clients</span> Say?</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>


		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?include '../web/footer.php'?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
</body>
</html>