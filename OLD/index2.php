<html>
	<header>
		<title>
			Adonde Viajo
		</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</header>
	<body>
		<h2>
			Nothing to do in here
		</h2>

		<!-- <a class="button" id="press_me"><button onclick="update();">Press Me</button></a> -->
		<button type="button">Click Me</button>
		<p></p>
		<script type="text/javascript">
			$(document).ready(function(){
				$("button").click(function(){

					$.ajax({
						type: 'POST',
						url: 'server_code_increment.php',
						success: function(data) {
							alert(data);
							$("p").text(data);

						}
					});
		   });
		});
		</script>

	</body>
</html>