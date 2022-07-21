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
	<title>FAQs | <?=$longnombre;?></title>

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
				<h1>FAQs</h1>
				<span>Todas tus dudas resueltas en un solo lugar</span>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">FAQs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<ul id="portfolio-filter" class="portfolio-filter clearfix">

							<li class="activeFilter"><a href="#" data-filter="all">All</a></li>
							<li><a href="#" data-filter=".faq-marketplace">Marketplace</a></li>
							<li><a href="#" data-filter=".faq-authors">Authors</a></li>
							<li><a href="#" data-filter=".faq-legal">Legal</a></li>
							<li><a href="#" data-filter=".faq-itemdiscussion">Item Discussion</a></li>
							<li><a href="#" data-filter=".faq-affiliates">Affiliates</a></li>
							<li><a href="#" data-filter=".faq-miscellaneous">Miscellaneous</a></li>

						</ul>

						<div class="clear"></div>

						<div id="faqs" class="faqs">

							<div class="toggle faq faq-marketplace faq-authors">
								<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>How do I become an author?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-authors faq-miscellaneous">
								<div class="togglet"><i class="toggle-closed icon-comments-alt"></i><i class="toggle-open icon-comments-alt"></i>Helpful Resources for Authors</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-miscellaneous">
								<div class="togglet"><i class="toggle-closed icon-lock3"></i><i class="toggle-open icon-lock3"></i>How much money can I make?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
								<div class="togglet"><i class="toggle-closed icon-download-alt"></i><i class="toggle-open icon-download-alt"></i>Can I offer my items for free on a promotional basis?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-marketplace faq-authors">
								<div class="togglet"><i class="toggle-closed icon-ok"></i><i class="toggle-open icon-ok"></i>An Introduction to the Marketplaces for Authors</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-affiliates faq-miscellaneous">
								<div class="togglet"><i class="toggle-closed icon-money"></i><i class="toggle-open icon-money"></i>How does the Tuts+ Premium affiliate program work?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-legal faq-itemdiscussion">
								<div class="togglet"><i class="toggle-closed icon-picture"></i><i class="toggle-open icon-picture"></i>What Images, Videos, Code or Music Can I Use in my Items?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-legal faq-authors faq-itemdiscussion">
								<div class="togglet"><i class="toggle-closed icon-file3"></i><i class="toggle-open icon-file3"></i>Can I use trademarked names in my items?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-affiliates">
								<div class="togglet"><i class="toggle-closed icon-bar-chart"></i><i class="toggle-open icon-bar-chart"></i>Tips for Increasing Your Referral Income</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-authors faq-itemdiscussion">
								<div class="togglet"><i class="toggle-closed icon-phone3"></i><i class="toggle-open icon-phone3"></i>How can I get support for an item which isn't working correctly?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

							<div class="toggle faq faq-marketplace faq-itemdiscussion">
								<div class="togglet"><i class="toggle-closed icon-credit"></i><i class="toggle-open icon-credit"></i>How do I pay for items on the Marketplaces?</div>
								<div class="togglec">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
							</div>

						</div>


					</div><!-- .postcontent end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
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

	<script type="text/javascript">
		jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('#portfolio-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('#portfolio-filter a').click(function(){
				$('#portfolio-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});
	</script>

</body>
</html>