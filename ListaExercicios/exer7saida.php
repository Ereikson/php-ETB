<html>
    <head><title>Exer7</title></head>
    <body>
        <?php
            $not1=$_POST["not1"];
            $not2=$_POST["not2"];
            $not3=$_POST["not3"];
            $notaf=($not1+$not2+$not3)/3;

            echo"A media das notas $not1,$not2,$not3 é: $notaf";
        ?>
    </body>
</html>