<?php
include("config/bd.php"); 
session_start();

$Cod_docente= $_SESSION['Codigo'];


include("template/Cabecera.php");
?>
    <body>
        <div id="Cabecera">
        <a id="Profesor"> Profesor: <?php echo $_SESSION['Nombre']; ?></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md- 4"><br><br>
                    <form method="POST" action="ValiCursos.php" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                              Cursos de Docente
                            </div>
                                <div class="card-body">
                                    <div class = "form-gruop">
                                    <label>Cursos</label>
                                        <select name="Cursos" id="Cusos">
                                        <option value="0">-- Seleccione un curso --</option>
                                       <?php
                                            $consulCur="SELECT * FROM cursos WHERE cod_doc='$Cod_docente' ";
                                            $consulRes=mysqli_query($conexion,$consulCur);
                                            while($valores = mysqli_fetch_array($consulRes)){
                                                echo '<option value="'.$valores['cod_cur'].'">'.$valores['nomb_cur'].'</option>';
                                            }
                                       ?>
                                        <!-- Selecctor de cursos -->
                                    </select>
                                </div>    
                    
                                <div class="form-group">
                                    <label for="txtAño">Año:</label>
                                    <input type="text" class="form-control" name="Año" id="textAño" maxlength="4" size="4" text="solo años validos" placeholder="Consultar Año (AAAA-MM-DD)">
                                    <!-- Selecctor de años -->

                                </div>

                                <div class="form-group">
                                    <label>Periodo:</label></br>
                                    <!-- Selecctor de periodo -->
                                    <input type="radio" name="Periodo-I"  id="radioPeriodo" value="1">Periodo I</br>
                                    <input type="radio" name="Periodo-I" id="radioPeriodo" value="2">Periodo II
                                </div>

                                <div class="btn-group" role="group" aria-label="">
                                    <button type="submit" name="action" value="Editar_notas" class="btn btn-primary">Editar Notas</button>
                                    <button type="submit" name="action" value="Editar_estudiantes" class="btn btn-primary">Editar Estudiantes</button>
                                    <button type="Reset" name="action" value="limpiar" class="btn btn-primary" >limpiar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
           </div>
        </div>
<?php include("template/Pie.php");?>
