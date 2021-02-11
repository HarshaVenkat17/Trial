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
			margin-right: 5px;
			border-radius: 10px;
			background-color: white
		}
		.box2{
			display: inline-block;
			width: 48%;
			height: 90%;
			padding: 0;
			/*margin-top: 2.5%;
			margin-left: 5px;*/
			border-radius: 10px;
			background-color: red;
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
			<form action="Booking.php" method="get">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
			</form>
		</div>
		<div class="box2">
			<div style="background-color: blue; padding-left: 20px; text-align: left;color: white;font-weight: bold;font-size: 20px;">
				Alert
			</div>
		</div>
		
	</div>

</body>
</html>