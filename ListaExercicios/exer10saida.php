<html>
    <head><title>Exer10</title></head>
    <body>
        <?php
            $salario=$_POST["salario"];
            $salarioFinal=($salario*0.10)+$salario; 

            echo"O salário de $salario reajustado em 10% é : $salarioFinal";
        ?>
    </body>
</html>