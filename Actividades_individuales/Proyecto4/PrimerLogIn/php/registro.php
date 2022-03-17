<?php
if(isset($_POST["submit"])) {                    
    if(empty($_SESSION["userList"])){
        $_SESSION["userList"] = array($_POST["user"],$_POST["password"]);
    }else{
        array_push($_SESSION["userList"],$_POST["user"]);
        array_push($_SESSION["userList"],$_POST["password"]);
    };
};
?>