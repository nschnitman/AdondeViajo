<?php include 'data.php';?>
<?
	$cookie_name = "Modal";
	$cookie_value = "Cargado";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta https-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<?php include 'css.php';?>
	<!-- Document Title
	============================================= -->
	<title>Home  | <?=$longnombre;?></title>

</head>

<body class="stretched">

	<?php include 'menu.php'; ?>
		<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('../images/slider/swiper/2.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Bienvenido a <br>Adonde Viajo</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">&iexcl;T&uacute; viaje so&ntilde;ado est&aacute; cada vez m&aacute;s cerca!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

<!--
				<a class="button button-full button-purple center tright header-stick bottommargin-lg">
					<div class="container clearfix">
						Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>
-->

				<div class="container clearfix">

					<div class="heading-block center nobottomborder bottommargin-lg">
						<h1>&iexcl;Todos los viajes, ahora en un solo lugar!</h1>
						<span> </span>
					</div>
<!--
					<div class="col_full ">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Porque nos <span>eligirias</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_full ">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Quienes <span>Somos</span>.</h4>
						</div>



					</div>


					<div class="col_one_third nobottommargin col_last">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>What we <span>Do</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>
-->

					<div class="clear"></div>

				</div>

				<div class="section nobottommargin">

					<div class="container clearfix">

						<!-- Portfolio Filter
						============================================= -->
						<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Ver Todos</a></li>
							<li><a href="#" data-filter=".pf-norteamerica">Norte America</a></li>
							<li><a href="#" data-filter=".pf-europa">Europa</a></li>
							<li><a href="#" data-filter=".pf-oriente">Medio Oriente</a></li>

						</ul><!-- #portfolio-filter end -->

						<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">
						<?php
							$sq12  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.ID from portfolio as P 
										inner join cliente as C on C.id = P.clienteID
										inner join destino as D on D.id = P.destinoID
										order by RAND()
										limit 8";
<<<<<<< HEAD
							$re2 = mysql_query($sq12,$conexion); 
=======
							$re2 = mysqli_query($conexion, $sq12) or die();
>>>>>>> NS-33-merge-github-viejo-nuevo
						?>					
							
							<?include 'article.php' ?>
							
						</div><!-- #portfolio end -->


					</div>

				</div>

				<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false"data-items-xxs="3" data-items-xs="4" data-items-sm="5" data-items-md="6" data-items-lg="7" style="padding: 30px 0;">
					<?						
					$sql3  = "select C.id, C.nombre, C.logo 
					from cliente as C 
					where C.activo=1";
<<<<<<< HEAD
					$re3 = mysql_query($sql3,$conexion); 
					?>	
					<? while($row = mysql_fetch_row($re3)){ ?>   
=======
					$re3 = mysqli_query($conexion, $sql3) or die(); 
					?>	
					<? while($row = mysqli_fetch_row($re3)){ ?>   
>>>>>>> NS-33-merge-github-viejo-nuevo
					<div class="oc-item"><a href="clientes.php?ID=<?=$row[0]?>"><img src="../<?=$row[2]?>" alt="<?=$row[1]?>"></a></div>
					<?}?>

				</div>


			</div>

		</section><!-- #content end -->

		<? include 'footer.php';?>

	<!-- </div> --><!-- #wrapper end -->
	<?if(!isset($_COOKIE[$cookie_name])){ 
		if($_SESSION['XUSUARIO']==""){
			include 'modal.php';
		}
	}?>

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