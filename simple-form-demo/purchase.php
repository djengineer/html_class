<?php
	// Get th Post data like this
	$fname = $_POST["fname"];
	$fruit_ordered = $_POST["fruit_ordered"];
	$quantity = $_POST["quantity"];
	$fruits = array("apple", "peach", "watermelon");
	$price_list = [
	    'apple' => 1.2,
	    'peach' => 1.7,
	    'watermelon' => 5.99,
	];
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		div { display:block; },
		
	</style>

	<link rel="stylesheet" type="text/css" href="./custom.css">
</head>
<body>
	<h1>Fruit Shop</h1>
	<div>
		<table>
			<tr>
				<th><?php echo $fruits[0]; ?></th>
				<th><?php echo $fruits[1]; ?></th>
				<th><?php echo $fruits[2]; ?></th>
			</tr>
			<tr>
				<td><?php echo $price_list[$fruits[0]]; ?></td>
				<td><?php echo $price_list[$fruits[1]]; ?></td>
				<td><?php echo $price_list[$fruits[2]]; ?></td>
			</tr>
		</table>
	</div>
	<div id="message">
		Hi <?php echo $fname;  ?>, you have ordered <?php echo $quantity; ?> of <?php echo $fruit_ordered; ?>.
		<br>
		The total price is <b>$<?php echo $price_list[$fruit_ordered] * $quantity;  ?></b>
	</div>
</body>
</html>