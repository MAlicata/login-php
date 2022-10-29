<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start(); //reanuda o crea la session
        if(!isset($_SESSION["usuario"])){
            header("Location: login.php");
        }

    ?>
    <h1>Bienvenidos Usuarios</h1>
    <?php 
        echo "Hola: ". $_SESSION["usuario"] . "<br><br>";
    ?>
    <p>Esto es información para usuarios registrados</p>
</body>
</html>