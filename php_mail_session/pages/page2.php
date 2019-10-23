<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Пример верстки сайта на HTML5</title>
        <!--[if IE]>
            <script>
                    document.createElement('header');
                    document.createElement('nav');
                    document.createElement('section');
                    document.createElement('article');
                    document.createElement('aside');
                    document.createElement('footer');
            </script>
    <![endif]-->
        <link href="../css/style.css" rel="stylesheet" type="text/css" />

<!--<script src="js/one.js"></script>-->
    </head>
    <body>
        <div id="main">
            <header>
                <!--<img src="img/header.jpg" width="1000" height="121">-->
                <p class="header_text">страница 2</p>

            </header>
            <nav>
                <ul>
                    <li><a href="../index.php">index</a></li>
                    <li><a href="page1.php">page 1</a></li>
                    <li><a href="#">page 3</a></li>
                </ul>
            </nav>
            <section>
                <section>

                    <h3>Это мы видим</h3>
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo '<br/>name=' . $_SESSION['name'];
                        echo '<br/>year=' . $_SESSION['year'];
                    } else {
                        echo 'Сессии нет';
                    }
                        
                    if (isset($_COOKIE['user'])) {
                        echo '<br/>user=' . $_COOKIE['user'];
//                        echo '<br/>year=' . $_SESSION['year'];
                    } else {
                        echo 'Cookie нет';
                    }
                    ?>
                        
                </section>
                <aside>
                    <h2>Меню</h2>
                    <ul>

                        <li><a href="../index.html">index</a></li>
                        <li><a href="#">page 2</a></li>
                        <li><a href="#">page 3</a></li>
                    </ul>

                </aside>
            </section>
            <footer>
                "footer", подвал сайта
                <a href="../../index.php">index</a>
            </footer>
        </div>
    </body>
</html>
