    <form action="" method="post">
        <input type="text" name="msj" placeholder="mensaje">
        <input type="submit" value="descifrar" name="descifrar">
    </form>
    <!-- el cliente cifra y descifra el mensaje con la rotacion que elija el usuario no acepta realmente las ñ aunque funcione segun cuantas rotaciones se le diga porque enviaria caracteres que no son letras-->
    
    <?php
// aqui separo cual servicio llama segun los dos botones
if(isset($_POST["descifrar"])){
    $msj = $_POST["msj"];
    $msj = str_replace(" ", "-", $msj);
    // cambio los espacios por guiones para que la url sea valida al pasar la variable msj por el get
    $rot = $_POST["rot"];
    $url = "http://localhost//Proyecto5/encrypt&decrypt/servCesarDEC.php?msj=$msj&rot=$rot";
    
    $data = json_decode( file_get_contents("$url"), true );
    
    echo $data['mensaje'];
}



?>
<br>
<span style="color: red;">El campo no acepta realmente las Ñ, mostaria caracteres que no son letras</span>