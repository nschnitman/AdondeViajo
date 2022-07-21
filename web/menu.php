<?php include 'data.php';?>
<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href=" # <!--faqs.php—>">FAQs</a></li>
							<li><a href="../empresas/index.php">Empresas</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="<?=$facebook;?>" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="<?=$instagram;?>" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:<?=$telefono;?>" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?=$telefono;?></span></a></li>
							<li><a href="mailto:<?=$mail;?>" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?=$mail;?></span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-3">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<?include 'logo.php';?>
				<!-- #logo end -->

				<ul class="header-extras">
					<li>
						<i class="i-plain icon-email3 nomargin"></i>
						<div class="he-text">
							Envianos un email
							<span><?=$mail;?></span>
						</div>
					</li>
					<li>
						<i class="i-plain icon-call nomargin"></i>
						<div class="he-text">
							Contactanos
							<span><?=$telefono;?></span>
						</div>
					</li>
				</ul>

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 sub-title">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li ><a href="index.php"><div>Home</div><span>Lets Start</span></a></li>
							<li ><a href="viajes.php"><div>Viajes</div><span>Out of the Box</span></a></li>
							<li ><a href="templos.php"><div>Instituciones</div><span>Con quien te gustaria viajar</span></a></li>
							<li ><a href="#"><div>Galeria</div><span>Mira los viajes pasados!</span></a></li>
							<li ><a href="contact.php"><div>Contactanos</div><span>Nos gusta escuchar de vos</span></a></li>
						</ul>
						
						<?if($_SESSION['XUSUARIO']!=""){?>
						<div id="top-account" class="dropdown">
							<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="icon-user"></i>
								<i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
								<li><a href="perfil.php">Perfil</a></li>
								<li><a href="config.php">Configuracion</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="salir.php">Salir <i class="icon-signout"></i></a></li>
							</ul>
						</div>
						<?}?>

						<!-- Top Cart
						============================================= -
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->
		