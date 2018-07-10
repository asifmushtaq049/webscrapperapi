
<!DOCTYPE html>
<html lang="en">
<head>
	<title>products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php 
	$domain = "www.urdupoint.com";
	$type = "products";
?>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">
						<h1> Showing <?php echo $type; ?> of <?php echo $domain; ?></h1>
						<div class="row header">
							<div class="cell">
								Name
							</div>
							<div class="cell">
								Price
							</div>
							<div class="cell">
								Image
							</div>
						</div>
<?php

$data=file_get_contents("https://webscraperapi.000webhostapp.com/dashboard/data/".$domain."/".$type."/json/view");
	$json=json_decode($data, JSON_PRETTY_PRINT);
	// var_dump($json);
	foreach ($json as $value) {
?>
						<div class="row">
							<div class="cell" data-title="Category">
								<?php if(isset($value['title'])) echo $value['title']; ?>
							</div>
							<div class="cell" data-title="Category">
								<?php if(isset($value['price'])) echo $value['price']; ?>
							</div>
							<div class="cell" data-title="Parent">
								<?php if(isset($value['image'])) echo '<img src="'.$value['image'].'" />'; ?>
							</div>
						</div>
<?php
	}
?>
						
					</div>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
