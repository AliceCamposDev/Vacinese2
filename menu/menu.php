<?php
require_once("../connection/connection.php");
require_once("../sessionManagement.php");
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
    <title>Menu</title>
    <link rel="stylesheet" href="../common/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body class="defaultBody">
    <header class="banner"> 
        <!--//TODO: CSS HAHAHHAHHAHAHAAHAHAHAHHAHAHAHAHAHAAHHAHHAHAHAAHAHAHAHHAHAHAHAHAHAAHHAHHAHAHAAHAHAHAHHAHAHAHAHAHA -->
        <h2>
            Vacine-se
        </h2>
        <img src="../images/usericon.png" alt="user icon">
    </header>
    <div>
        <h1>Bem vindo(a) servidor(a) público(a)!</h1>
        <h4>Selecione a opção desejada.</h4>
    </div>
    <section>
        <a href="../pacientes/pacientes.php">
            <button class="menuOption" id="buttonPacientes" onmouseover="mouseOverHighlight(buttonPacientes)" onmouseout="mouseOutHighlight(buttonPacientes)"> <p>Procurar Paciente</p></button>
        </a>
        <br><br>
        <a href="auditoria.html" >
            <button class="menuOption" id="buttonAuditoria" onmouseover="mouseOverHighlight(buttonAuditoria)" onmouseout="mouseOutHighlight(buttonAuditoria)">Exibir Registro de Auditoria</button>
        </a>
        <br><br>
        <a href="cadastroCampanha.php">
            <button class="menuOption" id="buttonCadastroCampanha" onmouseover="mouseOverHighlight(buttonCadastroCampanha)" onmouseout="mouseOutHighlight(buttonCadastroCampanha)">Cadastrar Campanha</button>
        </a>
        <br><br>
        <a href="validarVacina.php">
            <button class="menuOption" id="buttonValidarVacina" onmouseover="mouseOverHighlight(buttonValidarVacina)"  onmouseout="mouseOutHighlight(buttonValidarVacina)">Gerenciar Informações de Campanha de Vacinação</button>
        </a>
        <br><br>
        <a href="procurarFuncionario.php">
            <button class="menuOption" id="buttonProcurarFuncionario" onmouseover="mouseOverHighlight(buttonProcurarFuncionario)" onmouseout="mouseOutHighlight(buttonProcurarFuncionario)">Procurar Funcionário</button>
        </a>
        <br><br>
        <a href="cadastrarVacina.php">
            <button class="menuOption" id="buttonCadastrarVacina" onmouseover="mouseOverHighlight(buttonCadastrarVacina)" onmouseout="mouseOutHighlight(buttonCadastrarVacina)">Cadastrar Vacina</button>
        </a>
        <br><br>
    </section>   
    <br>
    <?php
    if (isset($_POST['deslogar'])) {
        $_SESSION["logged"] = false;
        header('Location: ../login/index.php');
    }
    ?>
    <form method="post">
        <input type="submit" name="deslogar" value="Deslogar">
    </form>
    </br></br></br>

</body>

</html>