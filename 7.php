<!DOCTYPE html>
<html>
<head>
	<title>Program to calculate electricity bill in PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<?php
	$amount = '';
	$kwh_usage = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$kwh_usage = calculate_electricity_bill($units);
			$amount = '<strong>Total amount of ' . $units . ' units -</strong> ' . $kwh_usage;
		}
	}
	function calculate_electricity_bill($units) {
		$first_unit = 3;
		$second_unit = 4;
		$third_unit = 5;
		$fourth_unit = 6;

		if($units < 100)
         {
			$bill = $units * $first_unit;
		}
		else if($units > 100 && $units <= 200)
         {
			$temp = 100 * $first_unit;
			$remaining_units = $units - 100;
			$bill = $temp + ($remaining_units * $second_unit);
		}
		else if($units > 100 && $units <= 200) 
        {
			$temp = (100 * $first_unit) + (100 * $second_unit);
			$remaining_units = $units - 200;
			$bill = $temp + ($remaining_units * $third_unit);
		}
		else
         {
			$temp = (100 * $first_unit) + (100 * $second_unit) + (100 * $third_unit);
			$remaining_units = $units - 300;
			$bill = $temp + ($remaining_units * $fourth_unit);
		}
		return number_format((float)$bill, 2, '.', '');
	}
	?>
	<div class="container">
		<h1>Calculate Generate Electricity Bill</h1>
		<div class="form-group">
		<form action="" method="post">
		<div class="form-group">
			<input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" />
		</div>
		<div class="form-group">		
			<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
		</div>	
		</form>
		</div>
		<div>
		    <?php echo '<br />' . $amount; ?>
		</div>
	</div>
</body>
</html>