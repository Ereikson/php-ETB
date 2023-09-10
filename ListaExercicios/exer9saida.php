<html>
    <head><title>Exer9</title></head>
    <body>
        <?php
            $not1=$_POST["not1"];
            $not2=$_POST["not2"];
            $not3=$_POST["not3"];
            $notaf= ($not1 * 1) + ($not2 * 2) + ($not3 * 3);
            $notaf2=$notaf/(1+2+3);

            echo"A media ponderada das notas $not1,$not2,$not3 é: $notaf2";
        ?>
    </body>
</html>