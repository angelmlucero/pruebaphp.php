<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$x = "Global";
		  function locales(){
		  	$x = 5; 
		  	echo "La variable x denttro de la funcion es $x";
		  		  }
		  	locales();
		echo "Y fuera, la variable es $x";
?>

</body>
</html>