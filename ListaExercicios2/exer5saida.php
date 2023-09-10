<html>
    <head><title>Exer5</title></head>
    <body>
        <?php
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];

            if($num1==$num2){
                echo"$num1 é igual a $num2, entre com valores diferente";
            }
            
            if($num1>$num2){
                echo"O $num1 é maior que o $num2";
            }
            
            if($num1<$num2){
                echo"O $num1 é menor que o $num2";
            }

        ?>
    </body>
</html>