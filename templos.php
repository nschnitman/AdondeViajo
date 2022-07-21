<?include 'data.php'?>
<?
						
$sql3  = "select C.id, C.nombre, C.logo 
from cliente as C 
where C.activo=1";
$re3 = mysql_query($sql3,$conexion); 
?>
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
	<title>Clientes | <?=$longnombre;?></title>

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
				<h1>Instituciones</h1>
				<span>Descubri tu viaje</span>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Instituciones</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<h4>Estas son las Instituciones / Templos con los cuales podrias viajar!</h4>

					<ul class="clients-grid nobottommargin clearfix">
					<? while($row = mysql_fetch_row($re3)){ ?>   
						<li><a href="clientes.php?ID=<?=$row[0]?>"><img src="<?=$row[2]?>" alt="<?=str_replace("ñ", "&ntilde;", $row[1]) ?>"></a></li>
					<?}?>
					</ul>

					

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<?include'footer.php'?>

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