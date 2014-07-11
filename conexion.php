<?Php

 
///Conectamos a la DB
 session_start();
$conexion = mysql_connect("localhost","root","123");
mysql_select_db("catalogo", $conexion);

if (!$conexion)
   {
///Error por si pasa algo...
 
echo "Ocurrio un error al realizar al conexion
contacte con el administrador.\n";
exit; }
?>
