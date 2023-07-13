<?include'data.php';?>
<?$post = $_GET['post'];?>
<!DOCTYPE html>
<html dir="ltr" lang="es-AR">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets -->
	<?include'css.php';?>
	<!-- Document Title
	============================================= -->
	<title>Login | <?=$longnombre;?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin clearfix">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="empresas/index.php">Empresas</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last clearfix nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="<?=$facebook;?>" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="<?=$instagram;?>" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:<?=$telefono;?>" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?=$telefono;?></span></a></li>
							<li><a href="mailto:<?=$mail;?>" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text"><?=$mail;?></span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header-->

		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Mi Cuenta</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Login</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third nobottommargin">

						<div class="well well-lg nobottommargin">
							<form id="login-form" name="login-form" class="nobottommargin" action="check_user.php" method="post">

								<h3>Inicia sesion con tu cuenta</h3>

								<div class="col_full">
									<br>	
								<input hidden="true" id="login-post" name="login-post" value="<?=$post?>">							
								</div>

								<div class="col_full">
									<label for="login-form-username">Usuario:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="login-form-password">Clave:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
								</div>

								<div class="col_full">
									<br>								
								</div>


								<div class="col_full nobottommargin">
									<button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									<a href="#" class="fright">Olvidate tu clave?</a>
								</div>

							</form>
						</div>

					</div>

					<div id="form-register-ok" class="col_two_third col_last nobottommargin">


						<h3>No tenes una cuenta? Registrate ahora.</h3>
							
						<form id="register-form" name="register-form" class="nobottommargin" action="crear-usuario.php" method="post">

							<div class="col_half">
								<label for="register-form-name">Nombre:</label>
								<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-email">Email:</label>
								<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_half">
								<label for="register-form-username">Elegi un usuario:</label>
								<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-phone">Telefono:</label>
								<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
							</div>

							<div class="col_half">
								<label for="register-form-username">Fecha de Nacimiento:</label>
								<input type="text" id="register-form-dob" name="register-form-dob" class="form-control daterange3" value="" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-phone">Edad:</label>
								<input readonly type="text" id="register-form-age" name="register-form-age" value="" class="form-control" />
							</div>



							<div class="clear"></div>

							<div class="col_half">
								<label for="register-form-password">Elegi una clave:</label>
								<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-repassword">Reingresa tu clave:</label>
								<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Registrarse ahora</button>
							</div>

						</form>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer -->
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
	
	<!-- Date & Time Picker JS -->
	<script type="text/javascript" src="js/components/moment.js"></script>
	<script type="text/javascript" src="js/components/timepicker.js"></script>
	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="js/components/daterangepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>


	<!-- Form JavaScripts
	============================================= -->
	<?$status = $_GET['status'];?>	
	<?if($status!=""){?>
	<div class="modal-on-load" data-target="#myModal1"></div>

	<!-- Modal -->
	<div class="modal1 mfp-hide" id="myModal1">
		<div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
			<div class="center" style="padding: 30px;">
				<?if($status=="OK"){?>
				<h3>Usuario generado correctamente</h3>
				<?}else{?>
				<h3>Error generando usuario</h3>
				<?}?>
			</div>
			<div class="section center nomargin" style="padding: 10px;">
				<a href="#" class="button" onClick="$.magnificPopup.close();return false;">Cerrar</a>
			</div>
		</div>
	</div>
	<?}?>
	
	<!-- Login JavaScripts
	============================================= -->
	<?$login = $_GET['login'];?>
	<?if($login=="error"){?>
	<div class="modal-on-load" data-target="#myModal1"></div>

	<!-- Modal -->
	<div class="modal1 mfp-hide" id="myModal1">
		<div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
			<div class="center" style="padding: 30px;">
				<h3>Usuario o Clave incorrecta</h3>
			</div>
			<div class="section center nomargin" style="padding: 10px;">
				<a href="#" class="button" onClick="$.magnificPopup.close();return false;">Cerrar</a>
			</div>
		</div>
	</div>
	<?}?>

	
	<!-- Buttons Scripts
	============================================= -->	
	<script type="text/javascript">
	// .daterange3
	$(".daterange3").daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	},
	function(start, end, label) {
		var years = moment().diff(start, 'years');
		document.getElementById("register-form-age").value = years;
	});
	</script>

</body>
</html>