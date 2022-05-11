<?php 
    session_start();
    if(isset($_GET['simbolo'])) header("Location: ./table.php?simbolo={$_GET['simbolo']}");
?>