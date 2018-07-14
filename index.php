<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Empire Wolves - Elite Dangerous Faction</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="content">
                        <?php include 'parts/main.php'; ?>
						</div>
						<nav>
                        <?php include 'parts/menu.php'; ?>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
<?php
//struct is defined inside menu.php
$struct['elements']=array('label'=>'Elements','file'=>'elements'); //add exception

foreach ($struct as $item => $data) {
    echo '<article id="'.$item.'">';
    include 'parts/'.$data['file'].'.php';
    echo '</article>';
}
?>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Empire Wolves. Original design: <a href="https://html5up.net">HTML5 UP</a>. Customization: <a href="https://inara.cz/cmdr/18693/" target="_black">Terix</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
