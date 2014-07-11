<?php
include_once("conexion.php");


$conexion = mysql_connect( "localhost", "root","123");

mysql_select_db("catalgo",$conexion);

$user=$_POST["usuario"];
$pass=$_POST["password"];	

$consulta="select password, tipouser from usuarios where usuario='".$user."'";

$respuesta=mysql_query($consulta,$conexion) or die(mysql_error());

$fila = mysql_fetch_assoc($respuesta);
$total=mysql_num_rows($respuesta);
if($total>0)
{
$password=  $fila["password" ];
$tipouser=$fila["tipouser"];




if($password==$pass)


{
	if($tipouser==1)
	
	{
	$_SESSION["validado"]="ok";
	$_SESSION['usuario'] = $_POST['usuario'];
    header("location:index.html");
		
	}else
	{
		if($tipouser==2)
		
		{
			$_SESSION["validado"]="ok";
			$_SESSION['usuario'] = $_POST['usuario'];
              header("location:index.html");
		}
		else
		{
			if($tipouser==3)
			{
				$_SESSION["validado"]="ok";
				$_SESSION['usuario'] = $_POST['usuario'];
				header("location:index.html");
			}
		}
}
	
	
}else
{
	 echo"<script type=\"text/javascript\">alert('LA CLAVE ES INCORRECTA'); window.location='login.html';</script>";

	
	
}
}else

{
		 echo"<script type=\"text/javascript\">alert('EL USUARIO ES INCORRECTO'); window.location='login.html;</script>";

	
	
}










?>