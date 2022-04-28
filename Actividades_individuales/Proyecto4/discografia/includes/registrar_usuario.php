<?php
session_start();

if (isset($_POST['btn-signup'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $password2 = htmlspecialchars(trim($_POST['password2']));

    if ($password == $password2) {
        // create a connection
        // check connection
        include 'conexion.php';

        // check if username already exists
        $check_username_query = "SELECT * FROM usuarios WHERE username = '$username'";
        $result = mysqli_query($conn, $check_username_query);
        if (mysqli_num_rows($result) > 0) {
            echo "Username already exists";
        } else {
            // create user
            $query = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        echo "Passwords don't match";
    }
}


?>

