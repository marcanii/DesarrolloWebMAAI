<?php
$a = $_GET["a"];
$b = $_GET["b"];
setcookie("a", $a, 0);
setcookie("b", $b, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu li a{
            padding-left: 30px;
            padding-right: 30px;
            color: black;
            text-decoration: none;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .menu li{
            list-style-type: none;
            margin: 5px;
            width: 150px;
            height: 30px;
            border: 1px solid #000;
            text-align: center;
            padding: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="menu">
        <li><a style="background-color: red; color: #fff;" href="sumar.php">Sumar</a></li>
        <li><a style="background-color: yellow;" href="restar.php">Restar</a></li>
        <li><a style="background-color: blue;" href="multiplicar.php">Multiplicar</a></li>
        <li><a href="dividir.php">Dividir</a></li>
    </div>
</body>
</html>