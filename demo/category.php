
<!DOCTYPE html>
<html lang="en">
<head>
	<title>categories</title>
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
$domain = "www.alibaba.com";
$type = "category"; 
?>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">
						<h2><u> Showing <?php echo $type; ?> of <?php echo $domain; ?></u></h2>
						<div class="row header">
							<div class="cell">
								Category
							</div>
							<div class="cell">
								Parent
							</div>
						</div>
<?php

$data=file_get_contents("https://webscraperapi.000webhostapp.com/dashboard/data/".$domain."/".$type."/json/view");
	$json=json_decode($data, JSON_PRETTY_PRINT);

	foreach ($json as $value) {
		$parent = $value["category"];
		foreach($value["children"] as $child){ 
?>
						<div class="row">
							<div class="cell" data-title="Title">
								<?php echo $child; ?>
							</div>
							<div class="cell" data-title="Products">
								<?php echo $parent; ?>
							</div>
						</div>
<?php
		}
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
