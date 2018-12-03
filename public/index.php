<?php require "../bootstrap.php";?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de PHP devclass</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <?php 
        // tratanto erros
        try{
            require load();

        } catch(Exception $e) {

            echo $e->getMessage();

        }

        ?>
    </div>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
</body>
</html>