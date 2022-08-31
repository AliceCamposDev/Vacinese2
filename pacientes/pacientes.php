<?php
require_once("../connection/connection.php");
require_once("../sessionManagement.php");
require_once("../repository/userRepository.php");

if (!SessionManagement::is_user_logged()) {
    header('Location: ../login/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="../common/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body class="defaultBody">
    <header class="banner">
        <h2>
            Vacine-se
        </h2>
        <img src="../images/usericon.png" alt="user icon">
    </header>

    <h1>Pesquisar informações de usuário </h1>

    <form id="form-search" action="" method="post">
        <label for="search">Nome desejado: </label>
        <input type="text" name="search" id="search">
        <input type="submit" name="searchButton" id="searchButton" value="Pesquisar">
    </form>

    <section class="showUsers">
        <table style="margin: left 100px;margin-right: 100px;">
            <tr>
                <th>Nome</th>
                <th>Sobrenome
                <th>
                <th>CPF</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $search= $_POST["search"];
                $ids = UserRepository::get_user_by_search($search);
                foreach ($ids as $id) {
                    if (UserRepository::get_user_name($id["id"]) != null){
            ?>
                <tr> 
                    <td><?php echo UserRepository::get_user_name($id["id"])["nome"] ?></td>
                    <td><?php echo UserRepository::get_user_surname($id["id"])["sobrenome"] ?></td>
                    <td><?php echo UserRepository::get_user_cpf($id["id"])["cpf"] ?></td>
                    <td><a href="#">Editar</td>
                    <td><a href="#" onclick="confirmarExclusao('<?php UserRepository::get_user_cpf($id) ?>', 
                                                               '<?php  UserRepository::get_user_name($id) ?>',
                                                               '<?php  UserRepository::get_user_surname($id) ?>')">
                                                               Excluir</a>
                    </td>
                 </tr>
                 <?php
                    }   
                }  
            }
            ?>
        </table>
    </section>
</body>
</html>