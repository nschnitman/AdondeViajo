<?
include 'data.php';
$ID = $_GET['ID'];
if($ID==""){ 
	$ID = 0;
}
$_SESSION['XPORTFOLIO'] = $_GET['ID'];
$portfolio = $_SESSION['XPORTFOLIO'];
$usuario = $_SESSION['XID'];

$sql  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.ID, P.requisitos, C.ID, P.descripcionlarga, PA.cantclick, P.clicks from portfolio as P 
		inner join cliente as C on C.id = P.clienteID
		inner join destino as D on D.id = P.destinoID 
		inner join planes as PA on PA.id = C.planid
		where P.ID ='".$ID."'";
$re2 = mysqli_query($conexion, $sql) or die();
$data_viaje = mysqli_fetch_row($re2);
$sql2  = "select max(ID) from portfolio";
$re4 = mysqli_query($conexion, $sql2) or die();
$data_port = mysqli_fetch_row($re4);
$ultima = $data_port[0];
if($ID >= $ultima){ $pagnext = 1; }else{ $pagnext = $ID+1; }
if($ID == 1 ){ $pagant = $ultima; }else{ $pagant = $ID-1; }

?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets -->
	<?include'css.php'?>

	<!-- Document Title
	============================================= -->
	<title>Viaje a  <?=$data_viaje[3]?> | <?=$longnombre;?></title>
<?if ($ID == "" || $ID == 0) { ?>
	<SCRIPT type="text/javascript">
		top.location.href = 'index.php'; 
    </script> 
<? } ?>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header-->
		<?include'menu.php'?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?=$data_viaje[0]?></h1>
				<div id="portfolio-navigation">
					<a href="<?=$portfull?><?=$pagant?>"><i class="icon-angle-left"></i></a>
					<a href="viajes.php"><i class="icon-line-grid"></i></a>
					<a href="<?=$portfull?><?=$pagnext?>"><i class="icon-angle-right"></i></a>
				</div>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Single Gallery
					============================================= -->
					<div class="col_full portfolio-single-image">
						<div class="fslider" data-arrows="true" data-animation="slide">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><img src="<?=$data_viaje[4]?>" alt=""></a></div>
									<div class="slide"><a href="#"><img src="<?=$data_viaje[6]?>" alt=""></a></div>
								</div>
							</div>
						</div>
					</div><!-- .portfolio-single-image end -->

					<div class="col_one_third nobottommargin">

						<!-- Portfolio Single - Meta
						============================================= -->
						<div class="panel panel-default events-meta">
							<div class="panel-body">
								<ul class="portfolio-meta nobottommargin">
									<li><span><i class="icon-calendar3"></i>Fecha de Salida:</span> <?=$data_viaje[8]?> <?if($data_viaje[9]!=""){?> / <?=$data_viaje[9]?> <?}?></li>
									<li><span><i class="icon-lightbulb"></i>Requisitos:</span> <?=$data_viaje[11]?></li>
									<li><span><i class="icon-link"></i>Viaja con:</span> <a href="clientes.php?ID=<?=$data_viaje[12]?>"><?=$data_viaje[2]?></a></li>
									<?
										// Se chequea que no se haya anotado previamente
										if($usuario == ""){ $usuario = 0; }
										$precheck = "select postID from  postulaciones where usuarioID = ".$usuario." and portfolioID = ".$portfolio;
										$check = mysqli_query($conexion, $precheck) or die();
										$resultado = mysqli_fetch_row($check);
									?>
									<?if($_SESSION['XID']==""){?>
										<li><a href="login.php?post=<?=$portfolio?>"> <button type="button" class="btn btn-warning">Logueate para anotarte</button></a></li>
									<?}elseif($data_viaje[14]>$data_viaje[15]){?>								
										<?if($resultado[0]!=""){?>
											<li><button type="button" class="btn btn-danger">Ya estas anotado!</button></li>
										<?}else{?>
											<li><button type="button" id="signup-btn" class="btn btn-success">Anotate!</button></li>
										<?}?>
									<?}else{?>
										<li><button type="button" id="signup-btn" class="btn btn-danger">El cupo esta lleno!</button></li>
									<?}?>
								</ul>
							</div>
						</div>
						<!-- Portfolio Single - Meta End -->

					</div>

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_two_third portfolio-single-content col_last nobottommargin">

						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-dotted-border">
							<h2>Descripcion del Viaje:</h2>
						</div>

						<div class="col_full nobottommargin">
							<p><?=$data_viaje[13]?></p>
						</div>

						<!-- Portfolio Single - Description End -->

					</div><!-- .portfolio-single-content end -->

					<div class="clear"></div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Otros Viajes:</h4>

					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="30" data-nav="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">
						<?php
							$sq12  = "select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link, P.imagen2, P.filtro, P.salida1, P.salida2, P.id from portfolio as P 
										inner join cliente as C on C.id = P.clienteID
										inner join destino as D on D.id = P.destinoID
										where P.id <>'".$ID."'";
							$re3 = mysqli_query($conexion, $sq12) or die();
						?>	
						<?include'related.php'?>

					</div><!-- .portfolio-carousel end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?include'footer.php'?>
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

	<!-- Buttons Scripts
	============================================= -->	
	<?if($_SESSION['XID']!=""){?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					type: 'POST',
					url: 'portfolio-alta.php',
					success: function(data) {
						alert(data);
						//$("p").text(data);

					}
				});
	   });
	});
	</script>
	<?}?>



</body>
</html>