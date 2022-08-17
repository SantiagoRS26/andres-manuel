<?php 
    include("config/bd.php"); 
    session_start();

    $accion=$_SESSION['Accion'];
    $curso=$_SESSION['Cod_Cursos'];
    $año=$_SESSION['Año'];
    $Periodo=$_SESSION['Periodo'];

    $Cod_docente= $_SESSION['Codigo'];

    include("template/Cabecera.php");

    if ($accion=='Editar_notas'){
        
?>
<body>
    <a href="Cursos.php"><button class="btn btn-primary">Volver a Cursos</button></a>
    <a href="Tabla_final.php"><button class="btn btn-primary">Tabla de las notas</button></a>
    <!-- codigo 1 -->
    <div class="container"> 
        <div class="row">
            <div></div>
        </div>
        <div class="row">
            <div ><br><br>
                <div class="card">
                    <div class="card-header">
                        Agregar Nota
                    </div>
                    <div class="card-body">
                        <form method="POST" action="AgregarNota.php">
                            <div class = "form-gruop">
                                <label>Nombre de la nota: </label>
                                <input type="text" class="form-control" name="Nomb_nota"> 
                            </div>
                            <div class = "form-gruop">
                                <label>Porcentaje de la nota</label>
                                <input type="text" class="form-control" name="Porcentaje"> 
                            </div>
                            <div>
                                <br><button type="submit" name="AgregarN" value="Agregar Nota" class="btn btn-primary">Agregar Nota</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Porcentaje</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $consulNota="SELECT Cod_nota, Nomb_nota, Porcentaje from notas where Cod_cur= '$curso'";
                            $consulNot=mysqli_query($conexion,$consulNota);
                            while($fila=mysqli_fetch_array($consulNot)){
                        ?>
                        <tr>
                            <td><?php echo $fila['Nomb_nota']; ?></td>
                            <td><?php echo $fila['Porcentaje']; ?></td>
                            <td>
                                <a href="EditarNota.php?id=<?php echo $fila['Cod_nota']; ?>"> <button class="btn btn-primary">Editar Nota</button></a>
                                <a href="BorrarNota.php?id=<?php echo $fila['Cod_nota']; ?>"> <button class="btn btn-primary">Borrar Nota</button></a>
                                <a href="InscribirNota.php?id=<?php echo $fila['Cod_nota']; ?>"><button class="btn btn-primary">Registrar Nota</button></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>       
    </div>

    <?php
    }
    
    else if($accion == 'Editar_estudiantes'){
    ?>
    
    <a href="AgregarEst.php"  class="btn btn-primary"><button class="btn btn-primary">Agregar Estudiante</button></a>
    <a href="Cursos.php"><button class="btn btn-primary">Volver a Cursos</button></a>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $consulEst="SELECT e.Cod_est, e.Nomb_est, e.Ape_est from estudiantes e where Cod_est in ( select Cod_est from inscripciones where Cod_cur='$curso')";
                            $consulEstu=mysqli_query($conexion,$consulEst);
                            while($fila=mysqli_fetch_array($consulEstu)){
                        ?>
                            <tr>
                                <td><?php echo $fila['Cod_est']; ?></td>
                                <td><?php echo $fila['Nomb_est']; ?></td>
                                <td><?php echo $fila['Ape_est']; ?></td>
                                <td>
                                    <a href="EliminarEst.php?id=<?php echo $fila['Cod_est'];?>"><button class="btn btn-primary">Eliminar</button></a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <?php
    }
    include("template/Pie.php");
?>