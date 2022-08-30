<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastrarCampanha.php" method="post">
        <div>
            <label for="nome">Nome da campanha:</label>
            <input type="text" name="nomeCampanha" id="nomeCampanha" required />
        </div><br>
        <div>
            <label for="dataInicio">Data do inicio:</label>
            <input type="date" name="dataInicio" id="dataInicio" required />
        </div><br>
        <div>
            <label for="dataFim">Data do fim:</label>
            <input type="date" name="dataFim" id="dataFim" required />
        </div><br>
        <div class="button">
            <button type="submit">Cadastrar Campanha</button>
        </div>
    </form><br>
</body>

</html>