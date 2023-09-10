<html>
    <head><title>Exercício14</title></head>
    <body>
        <?php
            
                $gastoKw = $_POST["gastoKw"];

                if ($gastoKw <= 150) {
                    $resultadoPg = $gastoKw*10;
                    echo"O gasto em R$ foi: $resultadoPg";
                }
                elseif($gastoKw > 150 && $gastoKw <=200) {
                    $resultadoPg = $gastoKw*12;
                    echo"O gasto em R$ foi: $resultadoPg";
                }
                elseif($gastoKw > 200) {
                    $resultadoPg = $gastoKw*15;
                    echo"O gasto em R$ foi: $resultadoPg";
                }
 
        ?>
    </body>
</html>