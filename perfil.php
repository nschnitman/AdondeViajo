<?include'data.php'?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<?include'css.php'?>
	<!-- Document Title
	============================================= -->
	<title>Mi Perfil | Adonde Viajo</title>


<script language="JavaScript" type = "text/javascript">

<?
if ($_SESSION['XUSUARIO'] == ""){
    echo " top.location.href = 'login.php';\n";
} ?>
</script>


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?include'menu.php'?>
		<!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-sm-12">

							<img src="images/icons/avatar.jpg" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">

							<div class="heading-block noborder">
								<h3><?=	$_SESSION['XUSUARIO']?></h3>
								<span>Tu Perfil</span>
							</div>

							<div class="clear"></div>

							<div class="row clearfix">

								<div class="col-md-12">

									<div class="tabs tabs-alt clearfix" id="tabs-profile">

										<div class="tab-container">

											<div class="tab-content clearfix" id="tab-feeds">

												<p class="">Queremos que sepas, que estamos siempre al pendiente de vos, por eso te ayudamos a recordar en que viajes te interesaste.</p>

												<div class="table-responsive">
													<table class="table table-bordered table-striped">
													  <colgroup>
														<col class="col-xs-3">
														<col class="col-xs-5">
													  </colgroup>
													  <thead>
														<tr>
														  <th>Fecha</th>
														  <th>Destino</th>
														  <th>Institucion</th>
														</tr>
													  </thead>
													  <tbody>
														<?
															$sql7="select pos.fecha, d.pais, d.ciudad, c.nombre
																	from postulaciones pos 
																	inner join portfolio p on p.id = pos.portfolioid
																	inner join destino d on d.id = p.destinoid
																	inner join cliente c on c.id = p.clienteid
																	where pos.usuarioid =".$_SESSION['XID'];
<<<<<<< HEAD
															$r9 = mysql_query($sql7,$conexion); 
														?>
														<? while($row = mysql_fetch_row($r9)){ ?>   
=======
															$r9 = mysqli_query($conexion, $sql7) or die();
														?>
														<? while($row = mysqli_fetch_row($r9)){ ?>   
>>>>>>> NS-33-merge-github-viejo-nuevo
														<tr>
														  <td>
															<code><?=$row[0]?></code>
														  </td>
														  <td><?=$row[1]?> - <?=$row[2]?></td>  
														  <td><?=$row[3]?></td>
														</tr>
														<?}?>
													  </tbody>
													</table>
												</div>

											</div>


										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="line visible-xs-block"></div>


					</div>

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

	<script>
		jQuery( "#tabs-profile" ).on( "tabsactivate", function( event, ui ) {
			jQuery( '.flexslider .slide' ).resize();
		});
	</script>

</body>
</html>