<?php
include ("config/bd.php");

$EnvioD = $_GET['id'];

$EliminarNota="DELETE from notas where Cod_nota='$EnvioD'";
$ResEliNota=mysqli_query($conexion,$EliminarNota);

    if($EliminarNota){
        header('location:EdiNota.php');
    } else {
        ?> no se realizo la eliminacion <?php
    }


?>

