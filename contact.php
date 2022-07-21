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
	<title>Contactanos | <?=$longnombre;?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?include'menu.php'?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contactanos</h1>
				<span>Ponete en contacto con nosotros</span>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Contactanos</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		
		<!-- Contact Form & Map Overlay Section
		============================================= -->
		<section id="map-overlay">

			<div class="container clearfix">

				<!-- Contact Form Overlay
				============================================= -->
				<div id="contact-form-overlay-mini" class="clearfix">

					<div class="fancy-title title-dotted-border">
						<h3>Envianos un email</h3>
					</div>

					<div class="contact-widget" data-alert-type="inline">

						<div class="contact-form-result"></div>

						<!-- Contact Form
						============================================= -->
						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

							<div class="col_full">
								<label for="template-contactform-name">Nombre <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_full">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-phone">Telefono</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<!--<div class="col_full">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div>-->

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Asunto <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							<div class="col_full">
								<label for="template-contactform-message">Mensaje <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Mensaje</button>
							</div>

						</form>

					</div>


				</div><!-- Contact Form Overlay End -->

			</div>

			<!-- Google Map
			============================================= -->
			<section id="google-map" class="gmap"></section>

		</section><!-- Contact Form & Map Overlay Section End -->

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

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>

	<script type="text/javascript">

		$('#google-map').gMap({
			address: 'Buenos Aires, Argentina',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Buenos Aires, Argentina",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>

</body>
</html>