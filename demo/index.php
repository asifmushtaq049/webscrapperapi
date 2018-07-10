
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
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

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Category
							</div>
							<div class="cell">
								Parent
							</div>
						</div>
<?php
$data='[{"category":"Mobiles ","children":["Latest Mobiles In Pakistan 2018","Upcoming Mobiles In Pakistan 2018","What Mobile Price"]},{"category":"Mobile Brands ","children":["All Brands","Samsung","Qmobile","Huawei","Nokia","Apple","Oppo","HTC","LG","More Brands"]},{"category":"Tips & Tricks","children":["Check Mobile Balance","Mobile Balance Share Codes","Recharge Mobile Balance Codes","Advance Balance Loan Codes","Call and SMS Block Codes","Mobile Caller Tunes Codes","Mobile Internet Packages","Mobile Call Charges","Check Mobile Number Codes","Check Mobile Number Owner Code","UAE Mobile Tricks ","Check UAE Mobile Sim Owner","Check UAE Mobile Number","UAE Caller Tunes"]},{"category":"Mobile Packages","children":["Zong Call, SMS & Internet Packages","Ufone Call, SMS & Internet Packages","Telenor Call, SMS & Internet Packages","Mobilink\/JAZZ Call, SMS & Internet Packages"]},{"category":"Urdu News","children":["Mobile and Gadgets","3G & 4G","Applications & Extensions"]},{"category":"Price Range","children":["Rs. 5,000 Mobile Phones","5,000 To 10,000 PKR Mobile Phones","10,000 To 15,000 PKR Mobile Phones","15,000 To 20,000 PKR Mobile Phones","20,000 To 25,000 PKR Mobile Phones","25,000 To 35,000 PKR Mobile Phones","35,000 To 45,000 PKR Mobile Phones","45,000 To 2,50,000 PKR Mobile Phone"]},{"category":"Camera Range","children":["4MP Camera Mobiles","5MP Camera Mobiles","6MP Camera Mobiles","7MP Camera Mobiles","8MP Camera Mobiles","9MP Camera Mobiles","10MP Camera Mobiles","11MP Camera Mobiles","12MP Camera Mobiles","13MP Camera Mobiles","14MP Camera Mobiles","15MP Camera Mobiles","16MP Camera Mobiles"]},{"category":"More Specs","children":["Dual Sim Mobiles","Triple Sim Mobiles","FM Radio Mobiles","3G Mobiles","4G Mobiles","Bluetooth Mobiles","WiFi Mobiles","Without Camera Mobiles"]}]';
	$json=json_decode($data, JSON_PRETTY_PRINT);

	foreach ($json as $value) {
		$parent = $value["category"];
		foreach($value["children"] as $child){ 
?>
						<div class="row">
							<div class="cell" data-title="Category">
								<?php echo $child; ?>
							</div>
							<div class="cell" data-title="Parent">
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
