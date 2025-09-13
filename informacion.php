<?php
$Nombre = $_POST['Nombre'];
$Edad = $_POST['Edad'];
$Direccion = $_POST['Direccion'];
$Salario = $_POST['Salario'];
$CorreoElectronico = $_POST['CorreoElectronico'];
$Cargo = $_POST['Cargo'];

echo "<h2>Información Recibida</h2>";
echo "El empleado $Nombre tiene $Edad años.<br>";
echo "Vive en $Direccion y su salario es: $Salario.<br>";
echo "Su correo electronico es $CorreoElectronico y su cargo es $Cargo.";
?>
