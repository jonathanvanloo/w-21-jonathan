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

$Rnumer1 = rand(10,100);
$Rnumer2 = rand(10,100);

	echo($Rnumer1 + $Rnumer2. "<br>");
	echo($Rnumer1 - $Rnumer2. "<br>");
	echo($Rnumer1 * $Rnumer2. "<br>");
	echo($Rnumer1 / $Rnumer2. "<br>");
?>
<footer>
<?php include "week1-Footer.php";?>
</footer>
</body>
</html>