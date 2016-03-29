<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST"> 
		<input type="Text" name="primero"><br>
		<input type="Text" name="segundo"><br>
		<input type="Text" name="tercero"><br>
		<input type="Submit" name="calcular" value="Calcular">
	</form>	
	<?php 
		var_dump($_POST);
		echo "<br> EL MAYOR ES: ";
		$maximo = max($_POST);
		echo $maximo;
	 ?>
</body>
</html>