<?php 
    require "connection.php";

    session_start();
    $name = explode(".", $_FILES["upload"]["name"])[0] . time() . "." . explode("/", $_FILES["upload"]["type"])[1];
    move_uploaded_file($_FILES['upload']['tmp_name'], "../users_imgs/$name");

    $title = $_POST["title"];
    $author = $_POST["author"];
    $user_id = $_SESSION["id"];

    mysqli_query($connection, "INSERT INTO posts(photo, title, author_book, user_id) VALUES('$name', '$title', '$author', '$user_id')");

    header('Location: /bookcrossing/');
    mysqli_close($connection);
?>