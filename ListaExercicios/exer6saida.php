<html>
    <head><title>Exer6</title></head>
    <body>
        <?php
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $num3=$_POST["num3"];
            $resultado=($num1+$num2)*$num3;

            echo"A soma de ($num1 e $num2) * $num3: $resultado";
        ?>
    </body>
</html>