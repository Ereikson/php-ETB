<html>
    <head><title>Exer2</title></head>
    <body>
        <?php
            $num=$_POST["num"];
            
            if($num/2>55){
                echo"A metade de $num é maior que 55";
            }
            else{
                echo"A metade de $num não é maior que 55";
            }

        ?>
    </body>
</html>