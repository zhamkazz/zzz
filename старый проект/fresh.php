<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Main News</title>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <meta charset="windows-1251">
    </head>
    <body class="Corpus">
        <header class="Top_bar">
            <div class="Top_bar_list">
                
                <div class="Top_bar_element"><a class="lnk" href="">Main news</a></div>
                <div class="Top_bar_element"><a class="lnk" href="all.php">All news</a></div>
                <div class="Top_bar_element"><a class="lnk" href="about.php">About</a></div>
                <div class="Top_bar_element"><a class="lnk" href="user.php">User</a></div>
            </div>
        </header>
        <div class="indent"></div>
        <div class="NEWS_BLOCKS">
        <?php
            $mysqli = new mysqli("localhost", "root", "", "zdata"); 
            $result_set = $mysqli->query("SELECT `DATE` , `USERNAME` , `POST_TEXT` , `LIKES` , `DISLIKES`,`MAIN` FROM `zposts` WHERE MAIN = '1'"); 
            while ($row = $result_set->fetch_assoc()){
                echo '<div class="NEWS_BLOCK">';
                    echo '<div class="info">';
                        echo '<div class="USERNAME">';
                            echo $row['USERNAME'];
                        echo '</div>';
                        echo '<div class="DATE">';
                            echo $row['DATE'];
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="POST">';
                        echo $row['POST_TEXT'];
                    echo '</div>';
                echo '</div>';
            } 
            $mysqli -> close();  
        ?>
        </div>
        <footer class="boots">
            <a>z</a>
        </footer>
    </body>
</html>