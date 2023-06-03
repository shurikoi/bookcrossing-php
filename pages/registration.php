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
        <form action="../php_scripts/registration.php" method="post">
            <div class="title">
                Załóż konto
            </div>

            <div class="input-container">
                <input type="text" name="name" placeholder="Twoje Imię" id="name">
                <input type="text" name="surname" placeholder="Twoje Nazwisko" id="surname">
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Hasło" id="password">
                <input type="password" placeholder="Potwierdź hasło" id="confirm">
            </div>

            <div class="input-container">
                <input type="text" name="username" placeholder="Login" id="username">
                <input type="text" name="email" placeholder="Wprowadź swój email" id="email">
            </div>

            <button class="submit-button">Dalej</button>

            <div class="new-account">
                Już masz konto?
                <a href="start.php">Załoguj się</a>
            </div>
        </form>
    </div>

</body>