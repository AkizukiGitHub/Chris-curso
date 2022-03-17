<?php
if(isset($_POST["submit"])) {                    
    if(empty($_SESSION["userList"])){
        $_SESSION["userList"] = array($_POST["user"],$_POST["password"]);
        print_r($_SESSION);
    }else{
        array_push($_SESSION["userList"],$_POST["user"]);
        array_push($_SESSION["userList"],$_POST["password"]);
        print_r($_SESSION);
    };
};
?>