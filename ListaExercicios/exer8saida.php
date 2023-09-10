<html>
    <head><title>calc</title></head>
    <body>
        <?php
            $nome=$_POST["nome"];
            $idade=$_POST["idade"];
            $idadeFuturo=$idade+30;

            echo"O seu nome é $nome, sua idade é $idade e sua idade daqui 30 anos é: $idadeFuturo";
        ?>
    </body>
</html>