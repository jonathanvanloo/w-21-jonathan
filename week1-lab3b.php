<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/week1-alles.css"></link>
	<title>Website Week 21</title>
</head>
<body>

<nav>
<?php include "week1-Menu.php";?>
</nav>
<header>
<?php include "week1-Header.php";?>
</header>
<?php

$number = 6;
$amount = 10;

for($i=1; $i<=$amount; ++$i){
	echo "$number * $i = ".$number * $i ."<br />";
}


function bereken($som){
	for($i = 1; $i<= 10; ++$i){
		$Som = "$som * $i = ".$som * $i ."<br>";
		echo $Som;
	}
}

bereken(6);


$numbers = array("3", "5", "8", "12");
	foreach ($numbers as $value) {
		for($i = 1; $i <= 10; ++$i) {
			$outcome = "$value * $i = ".$value * $i ."<br />";
			echo $outcome;
		} 
	}

?>
<footer>
<?php include "week1-Footer.php";?>
</footer>
</body>
</html>