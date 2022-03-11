<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num01">Introduce el primer numero</label>
        <input type="text" name="num01"/><br> 
        <label for="num02">Introduce el segundo numero</label>
        <input type="text" name="num02"/><br>
        <input type="submit" name="submit" value="Mayor">
        <br>
    </form>
    <?php
        if(isset($_POST["submit"])){
            $A=$_POST["num01"];
            $B=$_POST["num02"];
            
            if($A>$B){
                echo "A Es mayor que B";
            }
            elseif($B>$A) {
                echo "B es mayor que A";
            }
            else{
                echo "A y B son iguales";
            }; 
        }
    ?>
</body>
</html>