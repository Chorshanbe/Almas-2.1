<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="number" name="A">
		<input type="number" name="B">
		<input type="submit">
	</form>
	<?php
	$a=$_POST["A"];
	$b=$_POST["B"];
		if(($a<=11 && $a>2) or ($b>6 && $b<14)){
			echo 'True';
		}

		else
		{
			echo 'False';
		}
    
    ?>
</body>
</html>