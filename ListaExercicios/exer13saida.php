<html>
    <head><title>Exer13</title></head>
    <body>
        <?php
            $nome=$_POST["nome"];
            $salario=$_POST["salario"];
            $totalVendas=$_POST["totalVendas"];
            $salarioFinal=($totalVendas*0.15)+$salario; 

            echo"O salário final do(a) vendedor(a) $nome é: $salarioFinal";
        ?>
    </body>
</html>