<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['usuario'])){
        $usuario = $_GET['usuario'];
    }
    if(isset($_GET['senha'])){
        $senha = $_GET['senha'];
    }
    ?>
	<?php var_dump($_GET); ?>


    <p><?php echo $usuario ?></p>
</body>
</html>
