<form action="" method="post">
    <input type="text" name="msj" placeholder="mensaje">
    <input type="text" name="clave" placeholder="clave">
    <input type="submit" name="cifrar" value="cifrar">
    <input type="submit" name="descifrar" value="descifrar">
</form>
<?php
if (isset($_POST['cifrar'])) {
    $msj = $_POST['msj'];
    $clave = $_POST['clave'];
    $msj = str_replace(" ", "-", $msj);
    $url = "http://localhost//Proyecto5/vigenere/servCifrarVigenere.php?msj=$msj&clave=$clave";

    $data = json_decode(file_get_contents("$url"), true);

    echo $data['mensaje'];
}elseif (isset($_POST['descifrar'])) {
    $msj = $_POST['msj'];
    $clave = $_POST['clave'];
    $msj = str_replace(" ", "-", $msj);
    $url = "http://localhost//Proyecto5/vigenere/servDescifrarVigenere.php?msj=$msj&clave=$clave";

    $data = json_decode(file_get_contents("$url"), true);

    echo $data['mensaje'];
}



