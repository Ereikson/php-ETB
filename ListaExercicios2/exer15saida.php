<html>
    <head><title>Exercício15</title></head>
    <body>
        <?php
            
                $horasT = $_POST["horasT"];
                $valorH = $_POST["valorH"];

                if ($horasT <= 80) {
                    $salario = $horasT*$valorH;
                    $bonus = $salario*0.08;
                    echo"O seu salario mensal foi: $salario<br>"; 
                    echo"O bônus pelas h/a ministradas foi: $bonus";
                }
                elseif($horasT > 80 && $horasT <= 120) {
                    $salario = $horasT*$valorH;
                    $bonus = $salario*0.09;
                    echo"O seu salario mensal foi: $salario<br>"; 
                    echo"O bônus pelas h/a ministradas foi: $bonus";
                }
                elseif($horasT > 120) {
                    $salario = $horasT*$valorH;
                    $bonus = $salario*0.10;
                    echo"O seu salario mensal foi: $salario<br>"; 
                    echo"O bônus pelas h/a ministradas foi: $bonus";
                }
 
        ?>
    </body>
</html>