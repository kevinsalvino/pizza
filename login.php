<?php
	function getTitle() {
		echo "Yellow Cab Pizza Co. - Admin Dashboard ";
	}

	include "partials/head.php";
?>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 login-bg-left">
			</div>
			<div class="col-lg-4 login-bg-right">
				<div class="log-in-box">
					<div class="log-in-box-header">
						<img src="assets/img/pizza_logo.svg.png" id="login-header-logo">
						<h1 class="admin_title">Administrator</h1>
					</div>
					<form>

					<div class="log-in-box-body">
						<div class="input-container">
							<i class="fa fa-user icon"></i>
							<input class="input-field" type="text" placeholder="Username" name="name">
						</div>

						<div class="input-container">
							<i class="fa fa-key icon"></i>
							<input class="input-field" type="password" placeholder="Password" name="name">
						</div>
					</div>
					<div class="log-in-box-footer">
						<input type="submit" value="LogIn" class="btn btn-warning" ></button>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>


<?php
	include "partials/foot.php";
?>

</html>