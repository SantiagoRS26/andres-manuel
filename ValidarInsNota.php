<?php
    include("config/bd.php"); 
    session_start();

    $NombreEstu = $_POST['Nombreestudiante'];
    $ValorNotaEnvi = $_POST['Nota'];
    $codigoEst = $_POST['Codigoestudiante'];
    $codCurso = $_SESSION['Cod_Cursos'];
    $año = $_SESSION['Año'];
    $peri = $_SESSION ['Periodo'];
    $CodigoCal = rand(0,500);
    $Codigonota = $_POST['codigocalificacion'];

    echo $Codnota;
                     
    $InsertNota = "UPDATE `calificaciones` SET `valor_nota` = $ValorNotaEnvi WHERE `calificaciones`.`cod_cal` = $Codigonota ;";
    $ResInsertNota = mysqli_query($conexion,$InsertNota);

    if($ResInsertNota){
        header('location:InscribirNota.php');
    } else {
        ?> no se puede hacer nada <?php
    }

?>