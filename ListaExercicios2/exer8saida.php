<html>
    <head><title>Exer8</title></head>
    <body>
        <?php
            $altura=$_POST["altura"];
            $sexo=$_POST["sexo"];


            if($sexo=="M"){
                $pesoIdealM=(72*$altura)-58;
                echo"O peso ideal é: $pesoIdealM";
            }
            else{
                $pesoIdealF=(62.1*$altura)-44.7;
                echo"O peso ideal é: $pesoIdealF";
            }

        ?>
    </body>
</html>