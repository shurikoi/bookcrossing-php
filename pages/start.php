<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypróbuj BookCrossing</title>
    <link rel="stylesheet" href="../css/start.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <?php
        require "./header.php";
        if (isset($_SESSION['username']))
            header("Location: /bookcrossing/index.php");
    ?>

    <div class="main">
        <div class="title">
            Zaloguj się
        </div>

        <input type="text" name="login" placeholder="Twój email" id="login">
        <input type="password" name="login" placeholder="Twoje hasło" id="password">

        <button class="submit-button">Dalej</button>

        <div class="new-account">
            Nie masz konta? 
            <a href="registration.php">Załóż go teraz</a>
        </div>
    </div>

</body>