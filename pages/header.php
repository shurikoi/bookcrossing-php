<?php 
session_start();

$currentPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

if (!isset($_SESSION["username"]) && $currentPage != "presentation.php" && $currentPage != "start.php" && $currentPage != "registration.php")
    header("Location: /bookcrossing/pages/presentation.php");
?>

<header>

    <?php
        if (isset($_SESSION["username"]) || $currentPage == "start.php" || $currentPage == "registration.php"):
    ?>
        <div class="container">
            <div class="project-name">
                <a class="name-wrapper short-img" href="/bookcrossing">
                    <div class="logo-name">BookCrossing</div>
                </a>
            </div>
        </div>
    <?php else:?>
        

        <div class="full-container">
            <div class="project-name full-name">
                <a class="name-wrapper" href="/bookcrossing">
                    <div class="logo-name">BookCrossing</div>
                </a>
                <a href="../pages/start.php" class="start-button">Get Started</a>
            </div>
            <div class="motto">
                Czytaj. Odkrywaj. Doświadczaj. Rozwijaj się. </br>Wymieniaj się. Przyjaźniaj się.
            </div>
            <div class="source-wrapper">
                <div class="type">zdjęcie</div>
                <div class="link">pexels.com</div>
            </div>
        </div>
            
            
    <?php endif;?>
            
</header>