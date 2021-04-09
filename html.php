<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Main</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <meta charset="utf-8">
    </head>  
    <body class="maket">
        <header class="hat">
            <div class="logo">
                <button class="logo_icon" type="submit" name="logo_btn">
                    <a href="index.php"><img class="logo_icon_img" src="images/logo_icon.png"></a>
                </button>
            </div><!--логотип,кнопка при нажатии которой происходит возврат на главную-->
            <div class="interface">
                <div class="shortcut">
                <button class="shortcut_icon" >
                    </button>
            </div><!--кнопка вызова меню-->
                <div class="search">
                <form class="search_form">
                    <input class="search_area" placeholder="search">
                    <button class="search_icon">
                        <img class="search_icon_img"src="images/search_icon.png">
                    </button>
                </form>
            </div><!--поиск то тегам автора,допускается 10тегов-->
                <div class="user">
                <a href="index.php"><button class="user_icon">
                    <img class="user_icon_img"src="images/Sample_User_Icon.png">
                    </button></a>
            </div><!--переход на страничку логина либо личный кабинет,при наличии в куки пароля и логина-->
            </div>
        </header>
        <div class="content">
            <nav>
                <div class="nav_indent"></div>
                <ul class="nav_list">
                    <li class="nav_href"><a href="">Main</a></li>
                    <li class="nav_href"><a href="about.php">About</a></li>
                    <li class="nav_href"><a href="cpp.php">C++</a></li>
                    <li class="nav_href"><a href="php.php">PHP</a></li>
                    <li class="nav_href"><a href="css.php">CSS</a></li>
                    <li class="nav_href"><a href="html.php">HTML</a></li>
                </ul>
            </nav>
            <main>
                <div class="nav_indent"></div>
                <?php
                    $mysqli = new mysqli("localhost", "root", "", "zdata"); 
                    $result_set = $mysqli->query("SELECT `ID`, `DATE`, `USERNAME`, `POST_TEXT`, `LIKES`, `DISLIKES`, `MAIN`, `TAG1`, `TAG2`, `TAG3`, `TAG4`, `TAG5`, `LANG` FROM `zposts` WHERE `LANG`='4'"); 
                    while ($row = $result_set->fetch_assoc()){
                        echo '<div class="news_block">';
                            echo '<div class="info">';
                                echo '<div class="USERNAME">';
                                    echo $row['USERNAME'];
                                echo '</div>';
                                echo '<div class="DATE">';
                                    echo $row['DATE'];
                                echo '</div>';
                                echo '<button class="like" type="button" name="like';
                                    echo $row['ID'];
                                    echo '">';
                                    echo 'like';
                                echo '</button>';
                                echo '<button class="dislike">';
                                    echo 'dislike';
                                echo '</button>';
                            echo '</div>';
                            echo $row['POST_TEXT'];
                        echo '</div>';
                            
                    } 
                    $mysqli -> close();
                ?>
            </main>
            <aside>
                <div class="nav_indent"></div>
                <div class="recent">Recent Posts</div>
            </aside>
        </div>
        <footer class="boots">
            <ul class="lee">
                <li class="bruce"><a href="are_you_sure_about_that.php">Justice info</a></li>
                <li class="bruce"><a href="about.php">About</a></li>
                <li class="bruce"><a href="are_you_sure_about_that.php">WANNA HELP?</a></li>
                <li class="bruce"><a href="about.php">Contacts</a></li>
            </ul>
        </footer>
        
        
       
         
    </body>
   
</html>