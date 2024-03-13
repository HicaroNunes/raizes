<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
</head>
<body>
    <main>
        <?php
             $num = $_POST["raiz"] ?? 0;
             $raiz2 = sqrt($num);
             $raiz3 = pow($num,1/3);
        ?>
             <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post"
            <h3>Digite um número</h3>
            <input type="number" name="raiz" id="box" step="0.01" value="<?= $num?>">
            <input type="submit" value="Calcular">
                  
    </main>
        <section id="resultado">
            <?php 
                echo "A raíz quadrada de " . $num . " é: " . $raiz2 ;
                echo "</br> A raiz cúbica de " . $num . " e: " . $raiz3 ;
            ?>
        
</body>
</html>