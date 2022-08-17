<?php
include ("config/bd.php");
session_start();
$nomb_n = $_POST['Nomb_nota'];
$Porcen_n = $_POST['Porcentaje'];
$codigonota = rand(0,99);
$codcur = $_SESSION['Cod_Cursos'];
$año = $_SESSION['Año'];

$insert_nota = "INSERT INTO `notas` (`cod_nota`, `nomb_nota`, `porcentaje`, `Cod_cur`,`year`) VALUES ('$codigonota', '$nomb_n', '$Porcen_n', '$codcur', '$año')";
$insertnota= mysqli_query($conexion,$insert_nota);

if($insertnota){
    header('location:EdiNota.php');
} else {
    ?> No se realizo el procedimiento <?php
}

?>