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
    $consolas = new Database();
    if(isset($_POST) && !empty($_POST)){
        $id = $consolas->sanitize($_POST['id']);
        $nombre = $consolas->sanitize($_POST['nombre']);

        $res = $consolas->actualizarconsolas($id, $nombre);
        if($res){
            header("Location: ../ver-consola.php?msg=2");
        }else{
            header("Location: ../ver-consola.php?msg=5");
        }
    }
?> 
</body>
</html>