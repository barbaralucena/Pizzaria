<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/my-styles.css">
      
        <script src="js/script.js"></script>

    </head>
    <body>
        <header class="header">

        <section class="flex">

        <div class="logo">Pizza.</div>

        <nav class="navbar">
            <a href="/home">home</a>
            <a href="/about">about</a>
            <a href="/menu">menu</a>
            <a href="/order">order</a>
        </nav>

        <div class="icons">
            <?php
                if(isset($_SESSION["user"])){
                    echo '
                        <a href="/account">
                            '.$_SESSION["user"]["name"].'
                        </a>
                        <a href="/cart">
                            <div id="cart-btn" class="fas fa-shopping-cart"></div>
                        </a>
                    ';
                }
                else{
                    echo '
                        <a href="/login">
                            <div id="user-btn" class="fas fa-user"></div>
                        </a>
                    ';
                }
            ?>
        </div>

        </section>

        </header>
