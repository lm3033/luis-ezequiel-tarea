<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Document</title>
</head>
<body>
<?php include("barra-de-navegacion/menu.php"); ?>
<div class="container">
        <div class="row">
            <div class="col-md-8">  
                <form action="logica/nueva-consola.php" method="POST">
                            <h3>Nueva Consola</h3>
                    <div class="form-group">
                        <label for="id">ID CONSOLA:</label>
                        <input id="id" name="id" type="text" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre De La Consola:</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group1">
                        <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>