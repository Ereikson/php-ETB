<html>
    <head><title>Exer1</title></head>
    <body>
        <?php
            $num=$_POST["num"];
            
            if($num*2<35){
                echo"O dobro de $num é menor que 35";
            }
            else{
                echo"O dobro de $num é maior que 35";
            }

        ?>
    </body>
</html>