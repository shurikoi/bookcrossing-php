<?php
    require "connection.php";

    $username = $_POST['login'];
    $password = $_POST['password'];

    $query = mysqli_query($connection, "SELECT * FROM users, passwords WHERE users.id = passwords.user_id AND (users.username = '$username' OR users.email = '$username')");

    $result = mysqli_fetch_assoc($query);
    if ($password == $result["password"]){
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $result["email"];
        $_SESSION["id"] = $result["id"];
        header('location: /bookcrossing');
    } else {
        header("Location: /bookcrossing/pages/start.php");
    }

    mysqli_close($connection);
?>