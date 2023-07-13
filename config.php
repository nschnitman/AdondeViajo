<?include'data.php'?>
<?$UserID = $_SESSION['XID'] ;?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<?include'css.php'?>

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
	<title>Configuracion de Usuario | <?=$longnombre?></title>

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
$queryuser = "select id,usuario,clave,nombre,email,telefono,edad from usuarios where id = ".$UserID;
$conuser = mysqli_query($conexion, $queryuser) or die();
$resUSER = mysqli_fetch_row($conuser);
?>
					<table class="table table-bordered table-striped" style="clear: both">
						<tbody>
							<tr>
								<td width="40%">Nombre</td>
								<td width="60%">
									<a href="#" class="bt-editable" data-type="text"data-placement="right" data-pk="1" data-title="Ingrese su nombre"><?=$resuser[3];?></a>
								</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>
									<a href="#" class="bt-editable" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu email"><?=$resuser[4];?></a>
								</td>
							</tr>
							<tr>
								<td>Telefono</td>
								<td>
									<a href="#" class="bt-editable" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu telefono"><?=$resuser[5];?></a>
								</td>
							</tr>
							<tr>
								<td>Edad</td>
								<td>
									<a href="#" class="bt-editable" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu edad"><?=$resuser[6];?></a>
								</td>
							</tr>
							<tr>
								<td>Nueva Clave</td>
								<td>
									<a href="#" class="bt-editable" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Ingresa tu nueva clave"></a>
								</td>
							</tr>
							
							<!--<tr>
								<td>Select2 (dropdown mode)</td>
								<td>
									<a href="#" class="bt-country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a>
								</td>
							</tr> -->
						</tbody>
					</table>
							<button type="button" class="btn btn-success">Actualizar</button>

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

			$('.bt-sex').editable({
				prepend: "not selected",
				source: [
					{value: 1, text: 'Male'},
					{value: 2, text: 'Female'}
				],
				display: function(value, sourceData) {
					 var colors = {"": "gray", 1: "green", 2: "blue"},
						 elem = $.grep(sourceData, function(o){return o.value == value;});

					 if(elem.length) {
						 $(this).text(elem[0].text).css("color", colors[value]);
					 } else {
						 $(this).empty();
					 }
				}
			});

			$('.bt-group').editable({
				showbuttons: false,
				source: [
					{value: 1, text: 'Service'},
					{value: 2, text: 'Admin'},
					{value: 3, text: 'Support'},
					{value: 4, text: 'Customer'}
				],
			});

			$('.bt-event').editable({
				placement: 'right',
				combodate: {
					firstItem: 'name'
				}
			});

			$('.bt-state').editable({
				value: 'California',
				typeahead: {
					name: 'state',
					local: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
				}
			});

			$('.bt-comments').editable({
				showbuttons: 'bottom'
			});

			$('.bt-fruits').editable({
				pk: 1,
				limit: 3,
				source: [
					{value: 1, text: 'banana'},
					{value: 2, text: 'peach'},
					{value: 3, text: 'apple'},
					{value: 4, text: 'watermelon'},
					{value: 5, text: 'orange'}
				]
			});

			$('.bt-tags').editable({
				inputclass: 'input-large',
				select2: {
					tags: ['html', 'javascript', 'css', 'ajax'],
					tokenSeparators: [",", " "]
				}
			});

			var countries = [];
			$.each({"BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Bartelemey", "BM": "Bermuda", "BN": "Brunei Darussalam", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "O1": "Other Country", "LV": "Latvia", "RW": "Rwanda", "RS": "Serbia", "TL": "Timor-Leste", "RE": "Reunion", "LU": "Luxembourg", "TJ": "Tajikistan", "RO": "Romania", "PG": "Papua New Guinea", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "BZ": "Belize", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "TM": "Turkmenistan", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "RU": "Russian Federation", "EE": "Estonia", "EG": "Egypt", "TK": "Tokelau", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "EU": "Europe", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova, Republic of", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania, United Republic of", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "FX": "France, Metropolitan", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands (Malvinas)", "FM": "Micronesia, Federated States of", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "CI": "Cote d'Ivoire", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos (Keeling) Islands", "CA": "Canada", "CG": "Congo", "CF": "Central African Republic", "CD": "Congo, The Democratic Republic of the", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syrian Arab Republic", "KG": "Kyrgyzstan", "KE": "Kenya", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR": "Korea, Republic of", "SI": "Slovenia", "KP": "Korea, Democratic People's Republic of", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "Virgin Islands, British", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria", "US": "United States", "UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Lao People's Democratic Republic", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "A1": "Anonymous Proxy", "TO": "Tonga", "LT": "Lithuania", "A2": "Satellite Provider", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libyan Arab Jamahiriya", "VA": "Holy See (Vatican City State)", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "Virgin Islands, U.S.", "IS": "Iceland", "IR": "Iran, Islamic Republic of", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AN": "Netherlands Antilles", "AQ": "Antarctica", "AP": "Asia/Pacific Region", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"}, function(k, v) {
				countries.push({id: k, text: v});
			});
			$('.bt-country').editable({
				source: countries,
				select2: {
					width: 200,
					placeholder: 'Select country',
					allowClear: true
				}
			});
		});
	</script>

</body>
</html>