<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./user.js"></script>
</head>
<body>
    <div id="demo">
        <?php
            session_start();
            if(isset($_SESSION["username"]))
                echo $_SESSION["username"];
        ?>
    </div>
    <form action="users.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="user"> <br> <br>
        <label for="password">password</label>
        <input type="password" name="password" id="pass"> <br> <br>
        <button id="send" type="button">send</button>
    </form>
</body>
</html>