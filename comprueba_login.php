<?php 
    $pdo = require 'Connection.php';

    $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";
    $resultado = $pdo->prepare($sql);
    $login=htmlentities(addslashes($_POST['login']));
    $password=htmlentities(addslashes($_POST['password']));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $number_register = $resultado->rowCount();

    if($number_register!=0){

        echo "<h2>Adelante!!</h2>";

    }else{
        header("location:login.php");
    }
?>