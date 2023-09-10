<html>
    <head><title>Exercício10</title></head>
    <body>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcao = $_POST["opcao"];

        if ($opcao === "equacao") {
        // Calcular equação do 2º grau
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

        // Calcular o discriminante
            $delta = ($b * $b) - (4 * $a * $c);

            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                echo "As raízes da equação são x1 = $x1 e x2 = $x2";

            } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
                echo "A raiz da equação é x = $x";

            } else {
                echo "A equação não possui raízes reais.";
            }

            } elseif ($opcao === "peso_ideal") {

        // Calcular peso ideal de uma mulher
            $altura = $_POST["altura"];
            $peso_ideal = (62.1 * $altura) - 44.7;
                echo "O peso ideal para uma mulher com altura $altura metros é aproximadamente $peso_ideal kg.";

            } elseif ($opcao === "area_triangulo") {

        // Calcular área de um triângulo e tipo de triângulo
            $lado1 = $_POST["lado1"];
            $lado2 = $_POST["lado2"];
            $lado3 = $_POST["lado3"];

        // Verificar se é um triângulo
            if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
            // Calcular a área do triângulo
                $s = ($lado1 + $lado2 + $lado3) / 2;
                $area = sqrt($s * ($s - $lado1) * ($s - $lado2) * ($s - $lado3));

        // Determinar o tipo de triângulo
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "É um triângulo equilátero com área $area.";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "É um triângulo isósceles com área $area.";
            } else {
                echo "É um triângulo escaleno com área $area.";
            }
        } else {
            echo "Não é um triângulo válido.";
        }
    }
}
?>

    </body>
</html>