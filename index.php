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
        <?php 
            require "pages/posts.php";
            require "pages/upload_posts.php";
        ?>
    </div>

  
</body>
</html>