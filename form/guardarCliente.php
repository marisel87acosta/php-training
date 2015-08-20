<?php
require("connectDB.php");

$documento=$nombre= $telefono= $mail="";
/*var_dump($_SERVER); */
	if ($_SERVER['REQUEST_METHOD']==='POST'){
	$documento=$_POST['doc'];
	$nombre=$_POST['name'];
	$telefono=$_POST['tel'];
	$mail=$_POST['mail'];
}else if ($_SERVER['REQUEST_METHOD']==='GET'){
	$documento=$_GET['doc'];
	$nombre=$_GET['name'];
	$telefono=$_GET['tel'];
	$mail=$_GET['mail'];
}

$query="INSERT INTO cliente(idCliente,nomYape,telefono,mail)
		VALUES ($documento,'$nombre','$telefono','$mail')";
if (mysql_query($query)){
	echo "El cliente fue agregado exitosamente";
}else{
	echo "Error en la query".$query." ".mysql_error();
}

?>

