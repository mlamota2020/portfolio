<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['id']) >= 1 && strlen($_POST['email']) >= 1) {
	    $id = trim($_POST['id']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO `datos`(`id`, `email`, `fecha_reg`) VALUES (`id`, `email`, `fecha_reg`)";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
		   echo("Te has inscripto correctamente!");
		} 
		else {
		   echo("Ups! Ha ocurrido un error!");
	    }
        else {
           echo("Por favor complete los campos!");
        }
}}

?>