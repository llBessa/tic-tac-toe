<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../imagens/board.png">
    <title>Tic Tac Toe</title>
</head>
<body>
    <?php
        include_once("navigator.php");
    ?>
    <div id="game">
        <div id="board">
            <table>
                <tbody>
                    <tr>
                        <td id="td1" onclick="choice('td1')"></td>
                        <td id="td2" onclick="choice('td2')"></td>
                        <td id="td3" onclick="choice('td3')"></td>
                    </tr>
                    <tr>
                        <td id="td4" onclick="choice('td4')"></td>
                        <td id="td5" onclick="choice('td5')"></td>
                        <td id="td6" onclick="choice('td6')"></td>
                    </tr>
                    <tr>
                        <td id="td7" onclick="choice('td7')"></td>
                        <td id="td8" onclick="choice('td8')"></td>
                        <td id="td9" onclick="choice('td9')"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        symbol = 'X'
        function choice(id){
            document.getElementById(id).textContent = symbol
        }
    </script>
</body>
</html>