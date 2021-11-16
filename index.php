<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/board.png">
    <title>Home Page</title>
</head>
<body>
    <?php
        include_once("navigator.php");
    ?>
    <div style="display: flex; justify-content: center;">
        <p class="gameinfo">
            O jogo da velha, mais conhecido mundo afora com tic tac toe é um jogo de tabuleiro em que
            dois jogadores disputam para completar a jogada vencedora. <br>
            Tal jogada, ocorre quando um dos jogadores completa um linha na horizontal, na vertical
            ou na diagonal.
        </p>
    </div>
</body>
</html>