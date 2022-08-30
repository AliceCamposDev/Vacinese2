<?php
require_once('../sessionManagement.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomeCampanha = $_POST["nomeCampanha"];
    $dataInicio = $_POST["dataInicio"];
    $dataFim = $_POST["dataFim"];
    $vacina = $_POST["vacina"];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../common/style.css">
    <title>Cadastrar Campanha</title>
</head>

<body class="defaultBody">
    <header class="banner"> 
        <h2>
            Vacine-se
        </h2>
        <img src="../images/usericon.png" alt="user icon">
    </header>

    <form action="" method="post">
        <div>
            <label for="vacina">Vacina</label>
            <!-- //TODO: pegar vacinas do bd -->
            <select name="cars" id="cars">
                <option value="1">pfizer</option>
                <
            </select>
        </div>
        <br>
        <div>
            <label for="nome">Nome da campanha:</label>
            <input type="text" name="nomeCampanha" id="nomeCampanha" required />
        </div>
        <br>
        <div>
            <label for="dataInicio">Data do inicio:</label>
            <input type="date" name="dataInicio" id="dataInicio" required />
        </div>
        <br>
        <div>
            <label for="dataFim">Data do fim:</label>
            <input type="date" name="dataFim" id="dataFim" required />
        </div>
        <br>
        <div class="button">
            <button type="submit">Cadastrar Campanha</button>
        </div>
    </form><br>
</body>

</html>