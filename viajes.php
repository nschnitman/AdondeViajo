<?include 'data.php'?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<?include 'css.php'?>

	<!-- Document Title
	============================================= -->
	<title>Viajes | <?=$longnombre?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header -->
		<?include 'menu.php'?>
		<!-- #header end -->

		
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Viajes</h1>
				<span>¡Todos los viajes que podrias encontrar!</span>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Viajes</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Ver Todos</a></li>
						<li><a href="#" data-filter=".pf-eeuu">Estados Unidos</a></li>
						<li><a href="#" data-filter=".pf-espana">España</a></li>
						<li><a href="#" data-filter=".pf-israel">Israel</a></li>
						<li><a href="#" data-filter=".pf-norteamerica">Norte America</a></li>
						<li><a href="#" data-filter=".pf-europa">Europa</a></li>
						<li><a href="#" data-filter=".pf-oriente">Medio Oriente</a></li>

					</ul><!-- #portfolio-filter end -->

					<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

				</div>

				<!-- Portfolio Items
				============================================= -->
				<div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-nomargin portfolio-notitle portfolio-full clearfix">
				<?php
					$sq12  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.ID, D.pf from portfolio as P 
								inner join cliente as C on C.id = P.clienteID
								inner join destino as D on D.id = P.destinoID";
<<<<<<< HEAD
					$re2 = mysql_query($sq12,$conexion); 
=======
					$re2 = mysqli_query($conexion, $sq12) or die();
>>>>>>> NS-33-merge-github-viejo-nuevo
				?>					
					
					<?include 'article.php' ?>
					
				</div><!-- #portfolio end -->

			</div>

		</section><!-- #content end -->

		<!-- Footer -->
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