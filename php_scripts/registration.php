<?php
    require "connection.php";
    $username = $_POST['username'];

    $user = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");

    if ($user->num_rows == 0){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            mysqli_query($connection, "INSERT INTO users(name, surname, username, email) VALUES ('$name', '$surname', '$username', '$email')");
            mysqli_query($connection, "INSERT INTO passwords (password) VALUES ('$password')");

           
            session_start();
            
            $result = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'"));
            
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $result['id'];
        }
        header('location: /bookcrossing/pages/registration.php');
        mysqli_close($connection);
?>