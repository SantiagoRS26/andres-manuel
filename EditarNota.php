<?php
    include ("config/bd.php");
    session_start();

    $_SESSION['Codigo_nota'] = $_GET['id'];

    include("template/Cabecera.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
                <div class="col-md-6"><br><br>
                    <div class="card">
                        <div class="card-header">
                            Editar nota
                        </div>
                        
                        <div class="card-body">
                
                        <form method="POST" action="EditarNota1.php">
                            <div class = "form-gruop">
                                <label>Nombre de la nota</label>
                                <input type="text" class="form-control" name="Nomb_nota"> 
                            </div>
                            <div class = "form-gruop">
                                <label>Porcentaje de la nota</label>
                                <input type="text" class="form-control" name="Porcentaje"> 
                            </div>

                            <button type="submit" value="Registrar" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('Template/Pie.php');
?>