<?php
if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $password = $_POST["password"];

    foreach ($_SESSION as $iterator) {
        if ($iterator == "userList") {
            $i = 0;
            do {
                if ($iterator[$i] == $user) {

                }else {
                    $i+=2;
                }
            }while($i==count($iterator) - 2);
        };
    };
};
