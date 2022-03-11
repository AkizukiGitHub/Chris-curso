<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Introduce la palabra</label>
        <input type="text" name="pal"/><br>
        <input type="submit" name="submit" value="Palindromo">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        
        $pal = $_POST["pal"];
        if ($pal==strrev($pal)) {
            echo $pal." es palindromo";
        }else{
            echo $pal." no es palindromo";
        };

    };
    ?>
    <?php include("php/footer.php");?>
</body>
</html>