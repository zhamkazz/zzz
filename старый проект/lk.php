<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title><?php echo $_COOKIE["login_cook"];?></title>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <meta charset="windows-1251">
    </head>
    <header class="Top_bar">
        <div class="tab"></div>
        <div class="Top_bar_list">
            
            <div class="Top_bar_element"><a class="lnk" href="fresh.php">Main news</a></div>
            <div class="Top_bar_element"><a class="lnk" href="all.php">All news</a></div>
            <div class="Top_bar_element"><a class="lnk" href="about.php">About</a></div>
            <div class="Top_bar_element"><?php echo $_COOKIE["login_cook"];?></div>
        </div>
    </header>
    <body class="Corpus">
        <div class="indent"></div>
        <div class="services">
            <button name='exit'>exit?</button>
            <?php
                if(isset($_POST['exit'])){header('location: user.php'); exit;}
            ?>
        </div>
    </body>
    <footer class="boots">
        <a>z</a>
    </footer>
</html>