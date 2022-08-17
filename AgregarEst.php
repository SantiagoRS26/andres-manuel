<?php
include ("config/bd.php");
session_start();
include("template/Cabecera.php");
?>
<div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
                <div class="col-md-6"><br><br>
                    <div class="card">
                        <div class="card-header">
                            Agregar Estudiante
                        </div>
                        
                        <div class="card-body">
                
                        <form method="POST" action="Agregar1.php">
                            <div class = "form-gruop">
                                <label>Codigo del estudiante a Agregar</label>
                                <input type="text" class="form-control" name="Cod_est"> 
                            </div>

                            <button type="submit" value="Registrar" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

include("template/Pie.php");

?>