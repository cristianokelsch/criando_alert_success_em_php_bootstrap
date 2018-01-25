<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title>PHP COM BOOTSTRAP</title>
    </head>
    <body>
        
        <?php
            $conteudo = "Conteúdo na variável";
        ?>
        
        <div class="container">
            <div class="alert alert-success" role="alert">
                <p class="text-center"> <strong> <?php echo $conteudo ?> </strong> </p>
            </div>
        </div>
        
    </body>
</html>
