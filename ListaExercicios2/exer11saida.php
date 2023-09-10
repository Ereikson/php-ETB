<html>
    <head><title>Exercício11</title></head>
    <body>
        <?php
            
                $tempo = $_POST["tempo"];
                $velocidade = $_POST["velocidade"];

                // Calcula a distância percorrida
                $distancia = $tempo * $velocidade;

                // Calcula a quantidade de litros de combustível utilizada
                $litrosUsados = $distancia / 12;

                // Exibe os resultados
                echo "<h2>Resultados:</h2>";
                echo "Velocidade média: " . $velocidade . " km/h<br>";
                echo "Tempo gasto na viagem: " . $tempo . " horas<br>";
                echo "Distância percorrida: " . $distancia . " km<br>";
                echo "Quantidade de litros utilizada na viagem: " . $litrosUsados . " litros<br>";
            
        ?>
    </body>
</html>