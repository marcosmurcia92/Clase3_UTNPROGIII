<h1>DATOS RECIBIDOS:</h1>
<?php  
	echo"Recibidos: <br><br> POST: ";
	var_dump($_POST);
	echo "<br><br> GET: ";
	var_dump($_GET);
	echo "<br><br> Nombre de Usuario ingresado: ";
	$nombre = $_POST['usuario'];
	$password = $_POST['password'];
	echo $nombre;
	if ($nombre == "admin" && $password == "1234") {
		echo "<br>BIENVENIDO USUARIO!";
		include_once "Bienvenido.html";
	}else{
		echo "<br>NO ESTA LOGUEADO";
		include_once "NoLogueado.html";
	}	
?>