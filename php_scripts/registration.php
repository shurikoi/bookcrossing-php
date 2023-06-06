<?php
    require "connection.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $user = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    
    if ($user->num_rows == 0){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        require "md5.php";

        mysqli_query($connection, "INSERT INTO users(name, surname, username, email) VALUES ('$name', '$surname', '$username', '$email')");
        $user_id = mysqli_insert_id($connection); 
        mysqli_query($connection, "INSERT INTO passwords(user_id, password) VALUES ('$user_id', '$password')");
        
        session_start();
        
        $result = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'"));
        
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $result['id'];
    }

    header('location: /bookcrossing/pages/registration.php');
    mysqli_close($connection);
?>