<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookCrossing</title>
    <!-- <link rel="icon" type="image/x-icon" href="/imgs/BC.ico"> -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

    <?php
        require "php_scripts/connection.php";
        require "pages/header.php";
    ?>

    <div class="main">
        <div class="cards-wrapper">
            <div class="card">
                <img src="imgs/1.jpg"></img>
                <div class="card-content">
                    <div class="title">
                        Jak ocalic swiat od katastrofy klimatycznej
                    </div>
                    <div class="author-book">Bill Gates</div>
                    <div class="author-post">Oleksandr Bezverkhnii (twst@fmmf.xom)</div>
                </div>
            </div>
            <div class="card">
                <img src="imgs/2.jpg"></img>
                <div class="card-content">
                    <div class="title">
                        Jak ocalic swiat od katastrofy klimatycznej
                    </div>
                    <div class="author-book">Bill Gates</div>
                    <div class="author-post">Oleksandr Bezverkhnii (twst@fmmf.xom)</div>
                </div>
            </div>
        </div>
    </div>

<!-- <script src="main.js"></script> -->

  
</body>
</html>