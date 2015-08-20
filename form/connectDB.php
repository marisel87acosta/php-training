<?PHP 	
$connect= mysql_connect('localhost','root','') or die ("Error al conectar ".mysql_connect());
mysql_select_db("mydb",$connect) or die ("Error al conectar a la BD: ");
?>
