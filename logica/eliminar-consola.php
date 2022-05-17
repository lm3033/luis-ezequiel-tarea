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
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = $consolas->sanitize($_GET["id"]);
        $res = $consolas->eliminarConsola($id);
        if(res){
            header("Location: ../ver-consola.php?msg=3");
        }else{
            header("Location: ../ver-consola.php?msg=6");
        }
    }
?>   
</body>
</html>