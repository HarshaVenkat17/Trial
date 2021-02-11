<html>
<head>
	<title>Book tickets</title>
	<style>
		.container{
			background-color:powderblue;
			width: 90%;
			height: 99.5%;
			margin: auto;
			text-align: center;
		}
		.box1{
			display: inline-block;
			width: 48%;
			height: 90%;
			margin-top: 2.5%;
			border-radius: 20px;
			overflow: auto;
			background-color: white
		}
		.box2{
			display: inline-block;
			width: 48%;
			height: 90%;
			text-align: left;
			margin-top: 2.5%;
			border-radius: 20px;
			overflow: auto;
			background-color: white;
		}
		li{
			padding-bottom: 20px;
		}
		input[type="submit"]{
			background: #3deb34;
			color: white;
			font-weight: bold;
			border-radius: 10px;
			margin: 80px 180px;
			display: block;
			padding: 5px 10px;		
		}
		.form-row{
			margin: 20px;
		}
		.form-label{
			text-align: right;
			float:left;
			width: 30%;
		}
		.form-input{
			text-align: left;
			float: left;
			width: 70%;
		}
		.form-row::after{
			content: ".";
			clear:both;
			visibility: hidden;
			height: 0px;
			display: block;
		}
	</style>
</head>
<body>
	<?php 
		function function_alert($message) { 
		    echo "<script>alert('Welcome $message');</script>"; 
		}  
		function_alert($_POST["name"]);  
	?> 
	<div class="container">
		<div class="box1">
			<h1>BOOK TICKET</h1>
			<form style="display: inline-block; font-weight: bold; font-size: 15px" action="Booking.php" method="get">
				<div class="form-row">
					<div class="form-label">
						<label for="date">Journey Date:&nbsp</label>
					</div>
					<div class="form-input">
						<input type="date" name="date" placeholder="date" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="from">From:&nbsp</label>
					</div>
					<div class="form-input">
						<select name="from">
							<option>--Select one--</option><option>Visakhapatnam</option><option>Banglore</option><option>Chennai</option>
							<option>Kolkata</option><option>Bhubaneshwar</option><option>Noida</option><option>Hyderabad</option><option>Delhi</option><option>Indore</option><option>Goa</option><option>Mumbai</option><option>Pune</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="to">To:&nbsp</label>
					</div>
					<div class="form-input">
						<select name="to">
							<option>--Select one--</option><option>Visakhapatnam</option><option>Banglore</option><option>Chennai</option>
							<option>Kolkata</option><option>Bhubaneshwar</option><option>Noida</option><option>Hyderabad</option><option>Delhi</option><option>Indore</option><option>Goa</option><option>Mumbai</option><option>Pune</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="ad">Adults(18+):&nbsp</label>
					</div>
					<div class="form-input">
						<input type="number" name="ad" min="1" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="ch">Children(<18):&nbsp</label>
					</div>
					<div class="form-input">
						<input type="number" name="ch" min="0" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="Phone">Phone:&nbsp</label>
					</div>
					<div class="form-input">
						<input type="tel" name="phone" placeholder="+91 XXXXXXXXXX"; pattern="[+91 ]{4}[0-9]{10}" required>
					</div>
				</div>
				<div class="form-input" >
					<select name="class">
						<option>--Select Class--</option><option>Second Sitting (2S)</option><option>Sleeper (SL)</option>option>AC 3 Tier (3A)</option><option>AC 2 Tier (2A)</option><option>First Class (FC)</option>
					</select>
				</div>
				<div class="form-label" style="float: right;" >
					<select name="pref">
						<option>--Select Preference--</option><option>Lower</option><option>Middle</option><option>Upper</option>
						<option>Side Lower</option><option>Side Upper</option>
					</select>
				</div>
				<input type="submit">
			</form>
			
		</div>
		<div class="box2">
			<div style="background-color: blue; padding: 5px 0px 5px 20px; text-align: left;color: white;font-weight: bold;font-size: 20px;border-radius: 20px 20px 0px 0px;">
				Alert
			</div>
			<div style="padding: 10px;"> Hon'ble Prime Minister message on "Public Health Response to COVID-19: Campaign for COVID-Appropriate Behaviour". Wear Mask, Follow Physical Distancing, Maintain Hand Hygine.<br>

			Get your favourite food through e-Catering available at selected stations.</div>

			<ul>
				<li>All passengers are hereby informed that downloading of Aarogya Setu App on their mobile phone, that they are carrying along, is advisable.</li>

 				<li>All Passenger to kindly note that on arrival at their destination, the traveling passengers will have to adhere to such health protocols as are prescribed by the destination State/UT.</li>

 				<li>For trains cancelled till 30th June 2020 by Indian Railways, full refund will be provided automatically by IRCTC. Users need not cancel their e-tickets. Full fare will be credited back into users accounts from which payment was made.</li>

 				<li>Catering Service is not available and catering charges not included in the fare.</li>

 				<li>No blanket and linen shall be provided in the train.</li>

 				<li>There are Maximum Waiting List Limits in the PRS booking system and your ticket booking request may get declined as the Maximum Waiting List Limit may be reached in the booking system by the time payment success response is received from your bank. In such case, your deducted amount will be refunded back.</li>

			</ul>
		</div>
		
	</div>

</body>
</html>
