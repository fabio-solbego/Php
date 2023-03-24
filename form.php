<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Rifão do Jefão</h1>
    <h2>Gerador de Rifas 1.0</h2>
    <form action="premio.php" method="post">
        <input type="number" name="qtd" id="qtd" placeholder="Quantidade nºs">
        <input type="number" name="valor" id="valor" placeholder="Valor da rifa">
        <input type="text" name="premio" id="premio" placeholder="Prêmio que será sorteado">
        <input type="text" name="data" id="data" placeholder="Data do sorteio">
        <input type="text" name="hora" id="hora" placeholder="Hora do sorteio">
        <input type="submit" name="btnGerar" id="btnGerar" value="Gerar">
    </form>
</body>
</html>