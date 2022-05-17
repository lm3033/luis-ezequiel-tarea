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
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = $juegos->sanitize($_GET["id"]);
        $res = $juegos->eliminarJuego($id);
        if(res){
            header("Location: ../ver-juego.php?msg=3");
        }else{
            header("Location: ../ver-juego.php?msg=6");
        }
    }
?>   
</body>
</html>