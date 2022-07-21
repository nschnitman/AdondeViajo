<?include 'data.php'?>
<?
$ID = $_GET['ID'];	
$sql  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.ID, P.requisitos, C.email from portfolio as P 
		inner join cliente as C on C.id = P.clienteID
		inner join destino as D on D.id = P.destinoID 
		where C.ID ='".$ID."'";
$re2 = mysql_query($sql,$conexion); 
$data_viaje = mysql_fetch_row($re2);
$cliente = $data_viaje[2];
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-AR">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Stylesheets
	============================================= -->
	<?include 'css.php'; ?>

	<!-- Document Title
	============================================= -->
	<title><?=$cliente;?> | <?=$longnombre;?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?include 'menu.php'?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?=$cliente;?></h1>
				<span>Todos los viajes de <?=$cliente;?> a los que te podes anotar!</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="templos.php">Clientes</a></li>
					<li class="active"><?=$cliente;?></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last">

						<!-- Portfolio Filter
						============================================= -->
						<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Ver Todos</a></li>
							<li><a href="#" data-filter=".pf-europa">Europa</a></li>
							<li><a href="#" data-filter=".pf-oriente">Medio Oriente</a></li>
							<li><a href="#" data-filter=".pf-norteamerica">Norte America</a></li>

						</ul><!-- #portfolio-filter end -->

						<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio grid-container portfolio-1 clearfix">
						<?	$sql4  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.ID, P.requisitos from 									  portfolio as P 
									  inner join cliente as C on C.id = P.clienteID
									  inner join destino as D on D.id = P.destinoID 
									  where C.ID ='".$ID."'";
							$re5 = mysql_query($sql4,$conexion); ?>

							<?include 'cliente-individual.php';?>
							
						</div><!-- #portfolio end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">
								
								<h4>Testimonials</h4>
								<div class="fslider testimonial noborder nopadding noshadow" data-animation="slide" data-arrows="false">
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

							<div class="widget quick-contact-widget clearfix">

								<h4>Contactanos</h4>
								<div class="quick-contact-form-result"></div>
								<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
									<div class="form-process"></div>
									<input type="hidden" class="sm-form-control input-block-level"id="quick-contact-form-destinatario" name="quick-contact-form-destinatario" value="<?=$data_viaje[12];?>" />
									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Nombre Completo" />
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email" />
									<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Mensaje"></textarea>
									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Enviar Email</button>
								</form>

							</div>

						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?include 'footer.php'?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>