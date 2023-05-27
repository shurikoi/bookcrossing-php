<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypróbuj BookCrossing</title>
    <link rel="stylesheet" href="../css/presentation.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <?php
        require "./header.php";
        if (isset($_SESSION['username']))
            header("Location: /bookcrossing/index.php");
    ?>

    <div class="main">
        <div class="short-text">
            BookCrossing — to społeczność, gdzie wymieniają się
            książkami nawzajem.
        </div>
        <div class="line"></div>

        <div class="advantages-wrapper">
            <div class="text-wrapper">
                BookCrossing może dostarczyć wiele radości</br>i wzbogacić twoje doświadczenie czytelnicze.
            </div>
            <div class="container-cards">
                <div class="card">
                    <img class="card-img" src="../imgs/green.png"></img>
                    <div class="card-title">
                        Zrównoważony styl życia
                    </div>
                    <div class="card-text">
                        Tutaj korzystając z już istniejących książek i dzieląc się nimi z innymi, przyczyniasz się do redukcji marnotractwa i  zrównoważonego stylu życia.
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="../imgs/hands.png"></img>
                    <div class="card-title">
                        Wymiana
                    </div>
                    <div class="card-text">
                        Możesz wymieniać swoje książki z innymi użytkownikami BookCrossing. To doskonały sposób na pozbycie się niechcianych książek i zdobycie nowych, bez konieczności kupowania.
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="../imgs/cloud.png"></img>
                    <div class="card-title">
                        Odkrywanie nowych książek
                    </div>
                    <div class="card-text">
                        BookCrossing umożliwia odkrywanie nowych tytułów i autorów, których wcześniej nie znałeś.
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="../imgs/money.png"></img>
                    <div class="card-title">
                        Za darmo
                    </div>
                    <div class="card-text">
                        BookCrossing oferuje możliwość czytania i odkrywania nowych książek bez żadnych kosztów.
                    </div>
                </div>
            </div>
        </div>
        
        <img class="vector" src="../imgs/vector.png">

        <div class="how-start">
            <div class="text-wrapper">
                Zobacz jak zacząć
            </div>
            <div class="container-cards">
                <div class="card">
                    <img class="card-img" src="../imgs/phone.png"></img>
                    <div class="card-title">
                        Wejdź do systemu
                    </div>
                    <div class="card-text">
                        Ciśnij ‘Get Started’.
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="../imgs/hands.png"></img>
                    <div class="card-title">
                        Oddajesz i dostajesz
                    </div>
                    <div class="card-text">
                        Kiedy twoja książka znajdzie nowego właścicela dostajesz 1 point.
                        </br></br>
                        1 książka kosztuje 1 point.
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
    <!-- <script src="../scripts/presentation.js"></script> -->
</body>
