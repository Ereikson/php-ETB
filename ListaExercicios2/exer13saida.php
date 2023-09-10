<html>
    <head><title>Exercício13</title></head>
    <body>
        <?php
            
                $num = $_POST["num"];

                if ($num >= 30 && $num <= 180){
                    echo"O número está no intervalo";
                }else{
                    echo"O número não está no intervalo";
                }
 
        ?>
    </body>
</html>