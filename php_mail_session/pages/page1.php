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
                <p class="header_text">страница 1</p>

            </header>
            <nav>
                <ul>
                    <li><a href="../index.php">index</a></li>
                    <li><a href="page2.php">page 2</a></li>
                    <li><a href="#">page 3</a></li>
                </ul>
            </nav>
            <section>
                <section>

                    <form name="f1" method="get" action="page1.php">
                        <input name="sub_cookie" type="submit" value="Cookie create" /> <br/>
                        <input name="sub_delete" type="submit" value="Cookie delete" />
                    </form>  

                    <?php
                    if (isset($_REQUEST['sub_cookie'])) {
                        setcookie("user", "Petrov");
                    }

                    if (isset($_REQUEST['sub_delete'])) {
                        //$_COOKIE=array(); //Не работает
                        //setcookie("user", "", time()-3000); //Способ - 1
                        setcookie("user", "", mktime(0,0,0,9,1,2000));
                        exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]'>;");
                    }

                    echo "<h3>Это мы видим cookie</h3>";


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
                    <form name="f2" method="get" action="page2.php">
                        <input name="txt1" type="text" value="" /><br/>
                        <input name="txt2" type="text" value="" /><br/> 
                        
                        <input name="sub1" type="submit" value="Отправить"/><br/>
                    </form> 
                </aside>
            </section>
            <footer>
                "footer", подвал сайта
                <a href="../../index.php">index</a>
            </footer>
        </div>
    </body>
</html>
