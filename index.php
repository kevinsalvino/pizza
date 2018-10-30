<?php
	function getTitle() {
		echo "Yellow Cab - Pizza Co.";
	}

	include "partials/head.php";
?>

</head>
<body>
	<main id="index_page">
		<header id="landing_bg">
			<section>
				<p class="header-subtitle">Great life. Great pizza!</p>	
				<a href="catalog.php"><button class="header-button btn btn-success">Order Now!</button></a>
				<img class="header-logo" src="assets/img/pizza_logo.svg.png" alt="Yellow Cab Pizza Co.">
			</section>
		</header>
	</main>

<?php
	include "partials/foot.php";
?>

</html>