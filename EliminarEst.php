<?php
include ("config/bd.php");
    $cod_estudiante = $_GET['id'];
    
    $BorrarE="DELETE from inscripciones where cod_est='$cod_estudiante'";
    $BorrarRes=mysqli_query($conexion,$BorrarE);

    if($BorrarRes){
        header('location:EdiNota.php');
    } else {
        ?> no se realizo la eliminacion <?php
    }
    
?>