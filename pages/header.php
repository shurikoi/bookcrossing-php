<?php 
    require "{$_SERVER["DOCUMENT_ROOT"]}/bookcrossing/php_scripts/connection.php";
    session_start();

    $currentPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

    if (!isset($_SESSION["username"]) && $currentPage != "presentation.php" && $currentPage != "start.php" && $currentPage != "registration.php")
        header("Location: /bookcrossing/pages/presentation.php");
    else if (isset($_SESSION["username"])){
    $sessionUser = mysqli_fetch_assoc(mysqli_query($connection, "SELECT name, email FROM users WHERE id = {$_SESSION['id']}"));
    }
?>

<header>

    <?php
        if (isset($_SESSION["username"])):
    ?>
        <div class="container">
            <div class="project-name">
                <a class="name-wrapper short-img" href="/bookcrossing">
                    <div class="logo-name">BookCrossing</div>
                </a>
            </div>

            <div class="auth-wrapper">
                <div class="start-button share">
                    Podziel się
                </div>
                <div class="user-name">
                    <?php echo $sessionUser["name"] ?>
                    <img src="/bookcrossing/imgs/down-arrow.png" class="down-arrow"></img>
                </div>

                <div class="menu-wrapper hidden">
                    <div class="menu">
                        <a href="/bookcrossing/php_scripts/logout.php" class="menu-item">
                            Wyloguj się
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif ($currentPage == "start.php" || $currentPage == "registration.php"): ?>
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
                <a href="../pages/start.php" class="start-button start">Get Started</a>
                <a href="../pages/start.php" class="fixed-button start">Get Started</a>
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

<script src="/bookcrossing/scripts/header.js"></script>
