<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de juegos</title>
    <link rel="stylesheet" href="css/tabla.css">
</head>
<body>
<?php include("barra-de-navegacion/menu.php"); ?>

<h4>_Listado de Juegos___</h4>


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"></div>
                </div>
                <?php include("logica/msg.php"); ?>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de lanzamiento</th>
			            <th>Descripcion</th>
                        <th>Consola</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                 
                <tbody>    
                <?php
                    include("logica/database.php");
                    $juegos = new Database();
                    $listado = $juegos->mostrarJuegos();

                    while($row=mysqli_fetch_object($listado)){
                        $id = $row->id;
                        $nombre = $row->nombre;
                        $fechalanzamiento = $row->fechalanzamiento;
                        $descripcion = $row->descripcion;
                        $consola=$row->consola;

                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $fechalanzamiento; ?></td>
                        <td><?php echo $descripcion; ?></td>
                        <td><?php echo $consola; ?></td>
                        <td>
                            <a href="cambiar-juego.php?id=<?php echo $id;?>&mod"><i class="fa fa-edit" style="font-size:24px"></i></a>
                            <a href="logica/eliminar-juego.php?id=<?php echo $id;?>"><i class="fa fa-trash" style="font-size:24px"></i></a>

                        </td>
                    </tr>
                    <?php

                    }

                ?>
                </tbody>
            </table>
        </div>
    </div> 
        
</body>
</html>