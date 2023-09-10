<html>
    <head><title>Exer5</title></head>
    <body>
        <?php
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $soma=$num1+$num2;
            $dif=$num1-$num2;
            $produto=$num1*$num2;
            $quociente=$num1/$num2;
            echo"A soma de $num1 e $num2: $soma";
            echo "<br>";         
            echo"A subtração de $num1 por $num2 é: $dif";
            echo "<br>";
            echo"A multiplicação de $num1 por $num2 é: $produto";
            echo "<br>";
            echo"A divisão de $num1 por $num2 é: $quociente";
        ?>
    </body>
</html>