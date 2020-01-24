<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php session_start(); ?>
    <style>
        body{
            background-color:<?php if (isset($_SESSION['cores'])) {echo $_SESSION['cores']; } ?>;
        }   
    </style>
</head>
<body>
    
    <form action="cores.php" method="post">
    <label for="cores">Cores</label>
    <select name="cores" id="core">
        <option name="cor" value="red">Vermelho</option>
        <option name="cor" value="green">Verde</option>
        <option name="cor" value="black">Preto</option>
        <option name="cor" value="blue">Azul</option>
        <option name="cor" value="yellow">Amarelo</option>
    
    </select>
    <input type="submit">
    </form> 
</body>
</html>