<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
 <?php
    include("database.php");
    $juegos = new Database();
    if(isset($_POST) && !empty($_POST)){
        $id = $juegos->sanitize($_POST['id']);
        $nombre = $juegos->sanitize($_POST['nombre']);
        $fechalanzamiento = $juegos->sanitize($_POST['fecha']);
        $descripcion = $juegos->sanitize($_POST['descripcion']);
        $consola = $juegos->sanitize($_POST['consola']);

        $res = $juegos->actualizarJuego($id, $nombre, $fechalanzamiento, $descripcion, $consola);
        if($res){
            header("Location: ../ver-juego.php?msg=2");
        }else{
            header("Location: ../ver-juego.php?msg=5");
        }
    }
?>   
</body>
</html>