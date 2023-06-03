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
        <form action="../php_scripts/start.php" method="post">
            <div class="title">
                Zaloguj się
            </div>

            <input type="text" name="login" placeholder="Twój username lub email" id="login">
            <input type="password" name="password" placeholder="Twoje hasło" id="password">

            <button class="submit-button">Dalej</button>

            <div class="new-account">
                Nie masz konta? 
                <a href="registration.php">Załóż go teraz</a>
            </div>
        </form>
    </div>

</body>