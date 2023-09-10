<html>
    <head><title>Exer7</title></head>
    <body>
        <?php
            $num=$_POST["num"];
            $dobro=$num*2;

            if($dobro>50){
                echo"O dobro de $num é maior que 50!";
            }
            else{
                echo"O dobro de $num não é maior que 50!";
            }

        ?>
    </body>
</html>