<?php
session_start();
if(isset($_SESSION['usuario']) && $_SESSION['estado'] == "conectado"){
             "El usuario si esta online";
}else{
             header('Location: login.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obra</title>
</head>
<body>
    <a href="login.php">Login</a><br><br>
    <a href="persoas/index.php">Persoas</a><br><br>
    <a href="empresas/index.php">Empresas</a><br><br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>