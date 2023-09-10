<html>
    <head><title>Exer12</title></head>
    <body>
        <?php
            $valor=$_POST["valor"];
            $tempo=$_POST["tempo"];
            $taxa=$_POST["taxa"];
            $jurosFinal=$valor + ($valor * $taxa / 100) * $tempo; 

            echo"O valor da prestação em atraso é: $jurosFinal";
        ?>
    </body>
</html>