<html>
    <head><title>Exercício12</title></head>
    <body>
        <?php
            
                $nota = $_POST["nota"];

                if ($nota>=7){
                    echo"Aluno aprovado";
                }else{
                    echo"Aluno reprovado";
                }
 
        ?>
    </body>
</html>