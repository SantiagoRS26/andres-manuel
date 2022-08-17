<?php
include("config/bd.php");
session_start();

$usuario = $_POST ['Usuario'];
$password = $_POST['Contraseña'];

$consulta = "SELECT * FROM docentes WHERE correo='$usuario' and clave='$password'";
$resultado=mysqli_query($conexion,$consulta);
$prueba=mysqli_fetch_object($resultado);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    $_SESSION['Nombre'] = $prueba->nomb_doc;
    $_SESSION['Codigo'] = $prueba->cod_doc;
    header("location:Cursos.php");
}
else {
include("index.php");
?>
 <div id="diverror">
    <h1 class="bad" id="error">Usuario o Contraseña incorrecta</h1>
</div>
<?php
}
mysqli_free_result($resultado);