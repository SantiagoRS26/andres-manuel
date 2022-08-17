<?php
include("config/bd.php"); 
include("template/Cabecera.php");
?>
<body>
    <div id="Cabecera">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
                <div class="col-md-4"><br><br>
                    <div class="card">
                        <div class="card-header">
                            Inicio de sesion
                        </div>
                        
                        <div class="card-body">
                
                        <form method="POST" action="Validar.php">
                            <div class = "form-gruop">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="Usuario" placeholder="Nombre de usuario"> 
                            </div>

                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" name="Contraseña" placeholder="Contraseña">
                            </div>

                            <button type="submit" value="Entrar" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("template/Pie.php");?>
