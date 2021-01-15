<?php
$con=mysqli_connect ('localhost','root','','linea_telefono') or die ("<h2>no se encuentra el servidor</h2>");
$sql="INSERT INTO contacto VALUES(null,'".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["empresa"]."')";
"INSERT INTO contacto VALUES(null,'".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["empresa"]."')";
$resultado=mysqli_query($con,$sql) or die ('error en el query database');
$sql2="INSERT INTO telefono VALUES(,'".$_POST["numero"]."','".$_POST["tipo"]."')";
$resultado2=mysqli_query($con,$sql2) or die ('error en el query database');

mysqli_close($con);
echo 'El nombre ingresado es: '.$_POST["Nombre"].' '.$_POST["Apellido"].'<br>';
echo 'la empresa es: '.$_POST["empresa"].'<br>';

?>