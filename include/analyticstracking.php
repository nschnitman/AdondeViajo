<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
<?
if (isset($_SESSION['XID'])) {
	echo "ga('create', 'UA-102695084-1', 'auto', { 'userId': '".$_SESSION['XID']."' });\n";
} else {
  echo "ga('create', 'UA-102695084-1', 'auto');\n";
}?>
  ga('send', 'pageview');
</script> 	
