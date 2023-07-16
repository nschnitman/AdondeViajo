<? include 'data.php' ?>
<? $UserID = $_SESSION['XID']; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<? include 'css.php' ?>

	<!-- select2 bootstrap -->
	<link rel="stylesheet" href="http://vitalets.github.io/x-editable/assets/select2/select2.css" type="text/css" />
	<!-- Bootstrap Editable Plugin -->
	<link rel="stylesheet" href="css/components/bs-editable.css" type="text/css" />
	<!-- Bootstrap Typeaheadjs Plugin -->
	<link href="http://vitalets.github.io/x-editable/assets/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



	<!-- Document Title
	============================================= -->
	<title>Configuracion de Usuario | <?= $longnombre ?></title>

	<script language="JavaScript" type="text/javascript">
		<?
		if ($_SESSION['XUSUARIO'] == "") {
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
		<? include 'menu.php' ?>
		<!--#header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Configuracion de perfil de Usuario</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="perfil.php">Perfil</a></li>
					<li class="active">Data</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<?
					$queryuser = "select id,usuario,nombre,email,telefono,edad from usuarios where id = " . $UserID;
					$conuser = mysqli_query($conexion, $queryuser) or die();
					$resUSER = mysqli_fetch_row($conuser);
					?>
					<table class="table table-bordered table-striped" style="clear: both">
						<tbody>
							<tr>
								<td width="40%">Nombre</td>
								<td width="60%">
									<a href="#" class="bt-editable"  name="nombre" data-type="text" data-placement="right" data-pk="1" data-title="Ingrese su nombre"><?= $resUSER[2]; ?></a>
								</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>
									<a href="#" class="bt-editable" name="email" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu email"><?= $resUSER[3]; ?></a>
								</td>
							</tr>
							<tr>
								<td>Telefono</td>
								<td>
									<a href="#" class="bt-editable" name="telefono" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu telefono"><?= $resUSER[4]; ?></a>
								</td>
							</tr>
							<tr>
								<td>Edad</td>
								<td>
									<a href="#" class="bt-editable" name="edad" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu edad"><?= $resUSER[5]; ?></a>
								</td>
							</tr>
							<tr>
								<td>Nueva Clave</td>
								<td>
									<a href="#" class="bt-editable" name="clave" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu nueva clave"></a>
								</td>
							</tr>
							<?
							if (isset($clave) && !empty($clave)) {
							?>
							<tr>
								<td>Repetir Clave</td>
								<td>
									<a href="#" class="bt-editable" name="clave2" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Repite tu nueva clave"></a>
								</td>
							</tr>
							<? } ?>
						</tbody>
					</table>
					<button type="button" class="btn btn-success" id="bt-save">Actualizar</button>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<? include 'footer.php' ?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<script type="text/javascript" src="js/components/moment.js"></script>

	<!-- select2 bootstrap -->
	<script type="text/javascript" src="http://vitalets.github.io/x-editable/assets/select2/select2.js"></script>

	<!-- Bootstrap Editable Plugin -->
	<script type="text/javascript" src="js/components/bs-editable.js"></script>

	<!-- Bootstrap Typeaheadjs Plugin -->
	<script src="http://vitalets.github.io/x-editable/assets/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
	<script src="http://vitalets.github.io/x-editable/assets/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>

	<!-- Date & Time Picker JS -->
	<script type="text/javascript" src="demos/travel/js/datepicker.js"></script>
	<script type="text/javascript" src="js/components/timepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script>
		$(document).ready(function() {
			$('.bt-editable').editable();

			$('.bt-editable').on('save', function(e, params) {
				//alert('Saved value: ' + params.newValue);
			});

			$('.bt-editable').on('shown', function(e, editable) {
				editable.input.$input.val(editable.input.$input.val().replace(/\s/g, ''));
			});

			//save data via php function
			$('#bt-save').click(function() {
				$('.bt-editable').editable('submit', {
					url: 'update-config.php',
					params: {
						action: 'post'
					}
				});
			});
		});
	</script>

</body>

</html>