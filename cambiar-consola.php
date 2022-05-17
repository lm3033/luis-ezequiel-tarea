<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/formulario.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
        include("logica/database.php");
        include("barra-de-navegacion/menu.php");
    ?>
<div class="container">
        <div class="row">
            <div class="col-md-8">
              
                <?php
                    $consolas = new Database();
                    if(isset($_GET["id"]) && !empty($_GET["id"])){
                        $id = $consolas->sanitize($_GET["id"]);
                        $res = $consolas->buscarConsola($id);
                        if($res){
                ?>
                        <form action="logica/cambiar-consola.php" method="POST">
                              <h3>Modificar Consola</h3>
                            <div class="form-group">
                                <label for="id">ID Juego:</label>
                                <input id="id" name="id" type="text" value="<?php echo $res->id; ?>" required="required" readonly="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" name="nombre" type="text" value="<?php echo $res->nombre; ?>" class="form-control" required="required" >
                            </div>

                            <div class="form-group1">
                                <button name="submit" type="submit" class="btn btn-primary">Modificar</button>
                            </div>
                        </form>
                <?php
                        } else {
                            echo "<div class='alert alert-danger'>Juego no encontrado</div>";
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
</body>
</html>