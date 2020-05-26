<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="prueba";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");



 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $direccion=$_POST['direccion'];

 $sql="INSERT INTO datos VALUES('$nombre',
           '$correo',
           '$direccion')";

 $ejecutar=mysqli_query($con,$sql);

 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a> <br><a href='principal.html'>Continuar</a>";
 }
?>