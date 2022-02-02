<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login de Usuario</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="nome"></label>
        <input value="" id="nome" name="nome" type="text" required><br><br>
        <label for="clave"></label>
        <input value="" id="clave" name="clave" type="password" required><br><br>
        <input type="submit" name="Entrar">
    </form>
</body>

<?php
if($_POST){
    session_start();
    require 'conexion-login.php';

    $_SESSION['usuario'] = "miusuario";
    $_SESSION['estado'] = "conectado";

    $nome = $_POST['nome'];
    $clave = $_POST['clave'];

    $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare("SELECT * FROM usuarios WHERE nome = :nome AND clave = :clave");
    $query->bindParam(":nome", $nome);
    $query->bindParam(":clave", $clave);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    
    if($usuario){
        $_SESSION["usuario"] = $usuario["nome"];
        header("location:index.php");
    } else {
        echo "Nome ou clave non válido";
    }
}
?>

</html>