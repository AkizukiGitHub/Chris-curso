<?php
session_start();

if (isset($_POST['btn-login'])) {
    $username=htmlspecialchars(trim($_POST['username']));
    $password=htmlspecialchars(trim($_POST['password']));

    // create a connection
    // check connection
    include 'conexion.php';

    // check if username already exists
    $check_username_query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($conn, $check_username_query);
    if (mysqli_num_rows($result) > 0) {
        // get user data
        $user = mysqli_fetch_assoc($result);
        $password_verify = password_verify($password, $user['password']);
        if ($password_verify) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            echo "Wrong password";
        }
    } else {
        echo "Username doesn't exist";
    }

}


?>

