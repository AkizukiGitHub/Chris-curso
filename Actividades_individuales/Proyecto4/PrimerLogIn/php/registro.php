<?php
if(isset($_POST["submit"])) {                    
    var_dump($_SESSION);
    if(empty($_SESSION)){
        $usuario = array($_POST["user"],$_POST["password"]);
    }else{
        8
    }
    array_push($_SESSION,$usuario);
    var_dump($_SESSION);
};
?>