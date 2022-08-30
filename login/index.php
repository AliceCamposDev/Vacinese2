<?php
require_once('../sessionManagement.php');

if(SessionManagement::is_user_logged()){
    header('location: ../menu/menu.php');
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    if (SessionManagement::log_user($cpf,$senha)){
        header('location: ../menu/menu.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacine Se: Login</title>
    <link rel="stylesheet" href="../common/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="defaultBody">

    <header class="banner"> 
        <h2>
            Vacine-se
        </h2>
        <img src="../images/usericon.png" alt="user icon">
    </header>
    <br>
    <br>
    <div>
        <h1>
            Bem Vindo(a)!
        </h1>
    </div>

    <div class="loginDiv">
        <form class="loginBox" action="index.php" method="POST">
            <h2>LOGIN</h2>
            <input type="text" name="cpf" placeholder="CPF" id="cpf" required />
            <input type="password" name="senha" placeholder="Senha" id="senha" required />
            <div class="recoverLinkDiv">
                <a href="">Cadastrar</a>
                <a href="">Recuperar senha</a>
            </div>
            <input type="submit" value="Entrar">
        </form><br>
    </div>
</body>

</html>