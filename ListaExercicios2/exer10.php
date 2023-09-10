<html>
    <head><title>Exercício 10</title><head>
<body>
    <form method="post" action="exer10saida.php">
        <label for="opcao">Escolha uma opção:</label>
        <select name="opcao" id="opcao">
            <option value="equacao">Calcular Equação do 2º Grau</option>
            <option value="peso_ideal">Calcular Peso Ideal de uma Mulher</option>
            <option value="area_triangulo">Calcular Área de um Triângulo e Tipo de Triângulo</option>
        </select>
        <br>
           <!-- Campos de entrada para cada opção -->
           <div id="equacao" style="display:none;">
            <label for="a">Informe o valor de "a":</label>
            <input type="number" name="a" required><br>
            <label for="b">Informe o valor de "b":</label>
            <input type="number" name="b" required><br>
            <label for="c">Informe o valor de "c":</label>
            <input type="number" name="c" required><br>
        </div>

        <div id="peso_ideal" style="display:none;">
            <label for="altura">Informe a altura (em metros):</label>
            <input type="number" step="0.01" name="altura" required><br>
        </div>

        <div id="area_triangulo" style="display:none;">
            <label for="lado1">Informe o comprimento do primeiro lado do triângulo:</label>
            <input type="number" name="lado1" required><br>
            <label for="lado2">Informe o comprimento do segundo lado do triângulo:</label>
            <input type="number" name="lado2" required><br>
            <label for="lado3">Informe o comprimento do terceiro lado do triângulo:</label>
            <input type="number" name="lado3" required><br>
        </div>

        <input type="submit" value="Calcular">
    </form>

    <script>
        // Mostrar os campos de entrada correspondentes à opção selecionada
        document.getElementById("opcao").addEventListener("change", function() {
            var selectedOption = this.value;
            document.getElementById("equacao").style.display = "none";
            document.getElementById("peso_ideal").style.display = "none";
            document.getElementById("area_triangulo").style.display = "none";

            if (selectedOption === "equacao") {
                document.getElementById("equacao").style.display = "block";
            } else if (selectedOption === "peso_ideal") {
                document.getElementById("peso_ideal").style.display = "block";
            } else if (selectedOption === "area_triangulo") {
                document.getElementById("area_triangulo").style.display = "block";
            }
        });
    </script>
</body>
</html>

