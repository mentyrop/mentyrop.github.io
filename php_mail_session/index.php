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
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="main">
        <header>
            <!--<img src="img/header.jpg" width="1000" height="121">-->
            <p class="header_text">Функции</p>

        </header>
        <nav>
            <ul>
                <li><a href="pages/page1.php">page 1</a></li>
                <li><a href="pages/page2.php">page 2</a></li>
                <li><a href="#">page 3</a></li>
            </ul>
        </nav>
        <section>
            <section>

                    <?php
                        echo '<br/>1='.session_name();
                        session_name("MyMySession");
                        echo '<br/>2='.session_name();
                        //session_destroy();
                        echo '<br/>3='.session_name();
                    ?>
                
                <form name="f1" method="get" action="index.php">
                    <input name="sub_session" type="submit" value="Создать сессию" />
                    <input name="sub_destroy" type="submit" value="Удалить сессию" />
                </form>  
                
                <?php 
                
                    if(isset($_REQUEST['sub_session'])) {
                        $_SESSION['name'] = 'first';
                        $y = 2019;
                        $_SESSION['year'] = $y;
                        echo '<br/>'.$_SESSION['name'];
                        echo '<br/>'.$_SESSION['year'];
                    }
                    
                    if(isset($_REQUEST['sub_destroy'])) {
                        session_destroy();
                        exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]'>;");
                    }
                
                ?>
                
                
                <h3>Это мы видим сессию</h3>
                <?php
                
                if(isset($_SESSION['name'])) {
                echo '<br/>name='.$_SESSION['name'];
                echo '<br/>year='.$_SESSION['year'];
                } else {
                    echo 'Сессии нет';
                }
                
                echo "<h3>Это мы видим cookie</h3>";

                    //echo '<br/>user1=' . $_COOKIE['user'];
                    if (isset($_COOKIE['user'])) {
                        echo '<br/>user=' . $_COOKIE['user'];
//                        echo '<br/>year=' . $_SESSION['year'];
                    } else {
                        echo 'Cookie нет';
                    }
                ?>
            </section>
            <aside>
                <h2 class="asd">Меню</h2>
                <ul>
                    <li><a href="pages/page1.html">page 1</a></li>
                    <li><a href="#">page 2</a></li>
                    <li><a href="#">page 3</a></li>
                </ul>

            </aside>
        </section>
        <footer>
            "footer", подвал сайта
            <a href="../index.php">index</a>
        </footer>
    </div>
</body>
</html>
