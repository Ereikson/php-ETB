<html>
    <head><title>Exer9</title></head>
    <body>
        <?php
            $idade = $_POST["idade"];

            if ($idade >= 5 && $idade <= 7) {
                echo "A categoria do nadador é Infantil A";
            } elseif ($idade >= 8 && $idade <= 10) {
                echo "A categoria do nadador é Infantil B";
            } elseif ($idade >= 11 && $idade <= 13) {
                echo "A categoria do nadador é Juvenil A";
            } elseif ($idade >= 14 && $idade <= 17) {
                echo "A categoria do nadador é Juvenil B";
            } else {
                echo "A categoria do nadador é Sênior";
            }
        ?>
    </body>
</html>