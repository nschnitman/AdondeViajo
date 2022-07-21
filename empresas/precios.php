<?include '../data.php'?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<?include 'css.php'?>
	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="../css/components/bs-switches.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Precios | <?=$longnombre;?></title>

<style>

	.pricing-tenure-switcher { position: relative; }

	.pricing-tenure-switcher .pts-left,
	.pricing-tenure-switcher .pts-right,
	.pricing-tenure-switcher .pts-switcher {
		display: inline-block;
		margin: 0 10px;
		height: 30px;
		overflow: hidden;
	}

	.pricing-tenure-switcher .pts-left,
	.pricing-tenure-switcher .pts-right {
		font-size: 16px;
		font-weight: 600;
		color: #AAA;
		line-height: 30px;
	}

	.pricing-tenure-switcher .pts-switch-active { color: #333; }

	.pricing-tenure-switcher .pts-switcher label { margin-bottom: 0; }

</style>

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
				<h1>Precios</h1>
				<span>Start selling your Subscription Plans attractively</span>
				<ol class="breadcrumb">
					<li><a href="../index.php">Home</a></li>
					<li><a href="index.php">Empresas</a></li>
					<li class="active">Pricing</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

<!--
					<div class="fancy-title title-dotted-border title-center">
						<h3>Pricing with Toggle switcher</h3>
					</div>
-->

					<div id="section-pricing" class="page-section nopadding nomargin">

						<div class="pricing-tenure-switcher center bottommargin-sm" data-container="#pricing-switch">
							<span class="pts-left">Mensual</span>
							<div class="pts-switcher">
								<div class="switch">
									<input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
									<label for="switch-toggle-pricing-tenure"></label>
								</div>
							</div>
							<span class="pts-right">Anual</span>
						</div>

						<div id="pricing-switch" class="pricing row bottommargin-lg clearfix">

							<div class="col-md-4 col-sm-6">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>Starter</h3>
									</div>
									<div class="pricing-price">
										<div class="pts-switch-content-left"><span class="price-unit">$</span>2.000</div>
										<div class="pts-switch-content-right"><span class="price-unit">$</span>20.000</div>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Acceso</strong> Completo</li>
											<li><i class="icon-plane"></i> 1 campaña de viaje</li>
											<li>Hasta <strong>75</strong>  interesados por viaje</li>
											<li>Campañas<strong> Comunes</strong> de Email Marketing</li>
											<li>Soporte 24/7</li>
										</ul>
									</div>
									<div class="pricing-action">
										<div class="pts-switch-content-left"><a href="#" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
										<div class="pts-switch-content-right"><a href="#" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
									</div>
								</div>

							</div>

							<div class="col-md-4 col-sm-6">

								<div class="pricing-box best-price">
									<div class="pricing-title">
										<h3>Professional</h3>
										<span>Mas Popular</span>
									</div>
									<div class="pricing-price">
										<div class="pts-switch-content-left"><span class="price-unit">$</span>5.000</div>
										<div class="pts-switch-content-right"><span class="price-unit">$</span>50.000</div>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Acceso</strong> Completo</li>
											<li><i class="icon-plane"></i> 5 campañas de viajes</li>
											<li>Hasta <strong>200</strong> interesados por viaje</li>
											<li>Campañas <strong>Individuales</strong> de Email Marketing</li>
											<li><i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i></li>
										</ul>
									</div>
									<div class="pricing-action">
										<div class="pts-switch-content-left"><a href="#" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
										<div class="pts-switch-content-right"><a href="#" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
									</div>
								</div>

							</div>

							<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>Business</h3>
									</div>
									<div class="pricing-price">
										<div class="pts-switch-content-left">Consultar</div>
										<div class="pts-switch-content-right">Consultar</div>										
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Acceso</strong> Completo</li>
											<li><i class="icon-desktop"></i> Landing Page</li>
											<li><strong>∞</strong> Ilimitados</li>
											<li>Campañas <strong>Personalizadas</strong> de Email Marketing</li>
											<li>Soporte 24/7</li>
										</ul>
									</div>
									<div class="pricing-action">
										<div class="pts-switch-content-left"><a href="#" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
										<div class="pts-switch-content-right"><a href="#" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
									</div>
								</div>

							</div>

						</div>

					</div>


					<div class="fancy-title title-dotted-border title-center">
						<h3>Comparison Table</h3>
					</div>

					<div class="table-responsive">

						<table class="table table-hover table-comparison nobottommargin">
						  <thead>
							<tr>
							  <th> </th>
							  <th>Starter</th>
							  <th>Professional</th>
							  <th>Business</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Acceso web</td>
							  <td>Completo</td>
							  <td>Completo</td>
							  <td>Completo</td>
							</tr>
							<tr>
							  <td>Viajes</td>
							  <td>2 Viajes</td>
							  <td>5 Viajes</td>
							  <td>Ilimitados</td>
							</tr>
							<tr>
							  <td>Interesados por Viaje</td>
							  <td>75</td>
							  <td>200</td>
							  <td><strong >∞</strong></td>
							</tr>
							<tr>
							  <td>Campañas de Email</td>
							  <td>No</td>
							  <td>Individuales</td>
							  <td>Personalizadas</td>
							</tr>
<!--
							<tr>
							  <td>SSH Access</td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-ok"></i></td>
							</tr>
							<tr>
							  <td>SMTP Management</td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-ok"></i></td>
							</tr>
-->
							<tr>
							  <td>Landing Page Personalizada</td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-ok"></i></td>
							</tr>
							<tr>
							  <td>Google AdNetworks</td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-remove"></i></td>
							  <td><i class="icon-ok"></i></td>
							</tr>
							<tr>
							  <td>Precio Mensual</td>
							  <td>$2.000</td>
							  <td>$5.000</td>
							  <td>Consultar</td>
							</tr>
							<tr>
							  <td>Precio Anual*</td>
							  <td>$20.000</td>
							  <td>$50.000</td>
							  <td>Consultar</td>
							</tr>
							<tr>
							  <td> </td>
							  <td><a href="#" class="btn btn-default">Sign Up</a></td>
							  <td><a href="#" class="btn btn-default">Sign Up</a></td>
							  <td><a href="#" class="btn btn-default">Sign Up</a></td>
							</tr>
						  </tbody>
						</table>
						<p>* Adquiriendo el anual, dos meses de bonificacion</p>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?include '../footer.php'?>
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

	<script>
		jQuery(document).ready( function($){
			function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
				elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
				elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.find('.pts-right').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-right').removeClass('hidden');
				} else {
					elementParent.find('.pts-left').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-left').removeClass('hidden');
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $(this).parents('.pricing-tenure-switcher'),
					elementPricing = $( elementParent.attr('data-container') );

				pricingSwitcher( elementCheck, elementParent, elementPricing );

				elementCheck.on( 'change', function(){
					pricingSwitcher( elementCheck, elementParent, elementPricing );
				});
			});
		});
	</script>

</body>
</html>