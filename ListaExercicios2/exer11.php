<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de Combustível</title>
    </head>
    <body>
        <h1>Calculadora de Combustível</h1>
            <form method="post" action="exer11saida.php">
                <label for="tempo">Tempo gasto (horas):</label>
                <input type="text" name="tempo" id="tempo" required><br><br>
            
                <label for="velocidade">Velocidade média (km/h):</label>
                <input type="text" name="velocidade" id="velocidade" required><br><br>
            
                <input type="submit" value="Calcular">
            </form>
    </body>
</html>