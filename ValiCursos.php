<?php
include("config/bd.php"); 
session_start();

$_SESSION['Cod_Cursos'] = $_POST['Cursos'];
$_SESSION['Año'] = $_POST['Año'];
$_SESSION['Periodo'] = $_POST['Periodo-I'];
$_SESSION['Accion'] = $_POST['action'];

header("location:EdiNota.php");
?>