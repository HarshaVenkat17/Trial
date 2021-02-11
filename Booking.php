<html>
<head>
	<title>Confirmation</title> 
	
</head>
<body>
<?php
	if($_GET["from"]=="--Select one--" or $_GET["to"]=="--Select one--" or $_GET["class"]=="--Select Class--" or $_GET["pref"]=="--Select Preference--" or $_GET["from"]==$_GET["to"])
	{
		header("Location: Main.php");
	}
	$x=$_GET["from"];
	$y=$_GET["to"];
	$lenf = strlen($x);
	$lent = strlen($y);
	$sf=0;
	$st=0;
	for($i = 0; $i < $lenf; ++$i) 
	    $sf=$sf+ord($from[$i]);
	for($i = 0; $i < $lent; ++$i) 
	    $st=$st+ord($to[$i]);
	$cost= abs($st-$sf)*rand(1,5);
	?>  

<?php echo $_GET["date"]; ?><br>
<?php echo $_GET["from"]; ?><br>
<?php echo $_GET["to"]; ?><br>
<?php echo $_GET["ad"]; ?><br>
<?php echo $_GET["ch"]; ?><br>
<?php echo $_GET["phone"]; ?><br>
<?php echo $_GET["class"]; ?><br>
<?php echo $_GET["pref"]; ?><br>

</body>
</html>
