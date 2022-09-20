<?php

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
	<h2>This is the menu of the fruit on sale.</h2>
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
	<p>Use the form below to place your order.</p>
	<br>
	<div>
		<form action="./purchase.php" method="POST">
			<label for="fname">First name:</label><br>
			<input type="text" id="fname" name="fname"><br>
			<select name="fruit_ordered" id="fruit_ordered">
				<option value="<?php echo $fruits[0]; ?>"><?php echo $fruits[0]; ?></option>
				<option value="<?php echo $fruits[1]; ?>"><?php echo $fruits[1]; ?></option>
				<option value="<?php echo $fruits[2]; ?>"><?php echo $fruits[2]; ?></option>
			</select>
			<label for="quantity">Quantity (between 1 and 5):</label>
			<input type="number" id="quantity" name="quantity" min="1" max="5">
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>