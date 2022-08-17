<?php
    include ("config/bd.php");
    session_start();
    $codigoest = $_POST['Cod_est'];
    $cod_cur = $_SESSION['Cod_Cursos'];
    $año = $_SESSION['Año'];
    $peri = $_SESSION ['Periodo'];

    $insertar = "INSERT INTO `inscripciones` (`Cod_cur`, `Cod_est`, `Year`, `Periodo`) VALUES ('$cod_cur', '$codigoest', '$año', '$peri')";
    $insert = mysqli_query($conexion,$insertar);

    $consu= "SELECT *  FROM  notas WHERE cod_cur='$cod_cur' and year='$año' and periodo='$peri' ";
    $rescon=mysqli_num_rows(mysqli_query($conexion,$consu));

    if($rescon !=0){
        mysqli_query($conexion,"insert into calificaciones (cod_cur, cod_est, year, periodo, cod_nota) select '$cod_cur','$codigoest','$año','$peri', cod_nota from notas where year='$año' and periodo='$peri' and cod_cur='$cod_cur'");
    }

    if($insert){
        header('location:EdiNota.php');
    } else {
        ?> No se realizo el procedimiento <?php
    }

?>