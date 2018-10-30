<?php
	require 'lib/connect.php';

	function getTitle() {
		echo "Yellow Cab Pizza Co. - Catalog Page";
	}

	include "partials/head.php";

	$classic_pizzas_qry = "SELECT DISTINCT name, description, subcat_id FROM food_items WHERE cat_id = 1";
	$classic_pizzas = mysqli_query($conn, $classic_pizzas_qry) or die(mysqli_error($conn));

	$specialty_pizzas_qry = "SELECT DISTINCT name, description, subcat_id  FROM food_items WHERE cat_id = 2";
	$specialty_pizzas = mysqli_query($conn, $specialty_pizzas_qry) or die(mysqli_error($conn));

	$more_toppings_qry = "SELECT DISTINCT name, subcat_id FROM food_items WHERE cat_id = 3";
	$more_toppings = mysqli_query($conn, $more_toppings_qry) or die(mysqli_error($conn));

	
?>	
</head>
<body>
	<main class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-xs-12 catalog-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 catalog-header-bg">
							<img src="assets/img/pizza_logo.svg.png" alt="Yello Cab Pizza Co." id="header-logo">
							<span id="header-caption">Great life</span><span id="header-caption2">Great Pizza!</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 nav-total-price">
							<p class="total_price_title">Total purchase order</p>
							<div class="total_price_box">
								<span class="total_price">0.00</span>	
							</div>
							<p class="total_price_cap">All sales are in Philippine PESO</p>
							<button class="btn btn-primary checkout_btn"><i class="fas fa-shopping-cart"></i> Checkout</button>
						</div>
					</div>
					<div class="row">
						<table>
							<thead>
								<tr class="first_row">
									<th class="prod_head">CLASSIC PIZZA</th>
									<th>10"</th>
									<th>14"</th>
									<th>18"</th>
									<th>QTY</th>
									<th>Sub Total</th>
									<th>Add</th>
									<th>Remove</th>
								</tr>
							</thead>
					<?php 
						foreach ($classic_pizzas as $classic_pizza) {
					?>
							<tbody>
								<tr>
									<td class="prod_head"><span class="pizza_name"><?php echo $classic_pizza['name']; ?></span><br><sup><?php echo $classic_pizza['description']?></sup></td>
								<fieldset>
										
									<td><input type="radio" name="classic_pizza_size<?php echo $classic_pizza['subcat_id'] ?>"></td>
									<td><input type="radio" name="classic_pizza_size<?php echo $classic_pizza['subcat_id'] ?>"></td>
									<td><input type="radio" name="classic_pizza_size<?php echo $classic_pizza['subcat_id'] ?>"></td>
								</fieldset>
									<td><input type="number" name="" value="0" min="0" max="100"></td>
									<td><span class="sub_total">0.00</span></td>
									<td><input type="button" name="" value="Add"></td>
									<td><input type="button" name="" value="Remove"></td>
								</tr>
							</tbody>
					<?php
						}
					?>
							<thead>
								<tr>
									<th class="prod_head">SPECIALTY PIZZA</th>
									<th>10"</th>
									<th>14"</th>
									<th>18"</th>
									<th>QTY</th>
									<th>Sub Total</th>
									<th>Add</th>
									<th>Remove</th>
								</tr>
							</thead>

							<tbody>
					<?php 
						foreach ($specialty_pizzas as $specialty_pizza) {
					?>
								<tr>
									<td class="prod_head"><span class="pizza_name"><?php echo $specialty_pizza['name']; ?></span><br><sup><?php echo $specialty_pizza['description']?></sup></td>
								<fieldset>
									<td><input type="radio" name="specialty_pizza_size<?php echo $specialty_pizza['subcat_id'] ?>"></td>
									<td><input type="radio" name="specialty_pizza_size<?php echo $specialty_pizza['subcat_id'] ?>"></td>
									<td><input type="radio" name="specialty_pizza_size<?php echo $specialty_pizza['subcat_id'] ?>"></td>
								</fieldset>
									<td><input type="number" name="" value="0" min="0" max="100"></td>
									<td><span class="sub_total">0.00</span></td>
									<td><input type="button" name="" value="Add"></td>
									<td><input type="button" name="" value="Remove"></td>
								</tr>
					<?php
						}
					?>
							</tbody>

							<thead>
								<tr>
									<th class="prod_head">MORE TOPPINGS</th>
									<th>10"</th>
									<th>14"</th>
									<th>18"</th>
									<th>QTY</th>
									<th>Sub Total</th>
									<th>Add</th>
									<th>Remove</th>
								</tr>
							</thead>

							<tbody>
					<?php 
						foreach ($more_toppings as $more_topping) {
					?>
								<tr class="last_row">
									<td class="prod_head"><?php echo $more_topping['name']; ?></td>
									<td><input type="radio" name="more_topping<?php echo $more_topping['subcat_id']; ?>"></td>
									<td><input type="radio" name="more_topping<?php echo $more_topping['subcat_id']; ?>"></td>
									<td><input type="radio" name="more_topping<?php echo $more_topping['subcat_id']; ?>"></td>
									<td><input type="number" name="" value="0" min="0" max="100"></td>
									<td><span class="sub_total">0.00</span</td>
									<td><input type="button" name="" value="Add"></td>
									<td><input type="button" name="" value="Remove"></td>
								</tr>
					<?php
						}
					?>
							</tbody>

						</table>
					</div>

				</div>
			</div>
		</div>
	</main>

<?php
	include "partials/foot.php";
?>

</html>