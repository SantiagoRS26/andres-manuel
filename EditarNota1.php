<?php
    include ("config/bd.php");
    session_start();

    $NNomb_nota = $_POST['Nomb_nota'];
    $NPorcentaje = $_POST['Porcentaje'];
    $id= $_SESSION['Codigo_nota'];

    $EditaNota = "UPDATE `notas` SET `Nomb_nota` = '$NNomb_nota', `Porcentaje` = '$NPorcentaje' WHERE `notas`.`Cod_nota` = '$id'";
    $ResEdi = mysqli_query($conexion,$EditaNota);

    if($ResEdi){
        header('location:EdiNota.php');
    } else {
        ?> no se puede hacer nada <?php
    }


?>