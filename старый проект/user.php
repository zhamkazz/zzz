<?php
    $login=$_COOKIE["login_cook"];
            if($login){
                $mysqli = new mysqli("localhost", "root", "", "zdata"); 
                $result_set = $mysqli->query("SELECT `ID`, `LOGIN`, `PASSWORD`, `USERNAME` FROM `zusers` WHERE LOGIN='$login'"); 
                if($row = $result_set->fetch_assoc()){$pass=$row["PASSWORD"];}
                $mysqli -> close();
                if($pass=$_COOKIE["pass_cook"]){
                    header ('Location:lk.php');
                    exit();   
                }
                
                
               
            } else {
                $login=$_REQUEST['login'];
                $password=md5(md5($_REQUEST['password']));
                $mysqli = new mysqli("localhost", "root", "", "zdata"); 
                $result_set = $mysqli->query("SELECT `ID`, `LOGIN`, `PASSWORD`, `USERNAME` FROM `zusers` WHERE LOGIN='$login'");
                if($row = $result_set->fetch_assoc()){$pass=$row["PASSWORD"];}
                if($pass==$password){
                    setcookie("login_cook", $login);
                    setcookie("pass_cook", $password);
                    
                }
                header ('Location:lk.php');
                exit();
            }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>User</title>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <meta charset="windows-1251">
    </head>
    <header class="Top_bar">
        <div class="tab"></div>
        <div class="Top_bar_list">
            
            <div class="Top_bar_element"><a class="lnk" href="fresh.php">Main news</a></div>
            <div class="Top_bar_element"><a class="lnk" href="all.php">All news</a></div>
            <div class="Top_bar_element"><a class="lnk" href="about.php">About</a></div>
            <div class="Top_bar_element"><a class="lnk" href="">User</a></div>
        </div>
    </header>
    <body class="Corpus">
        <div class="indent"></div>
        <div class="auth">
        <form method="post"><input type="text" name="login"/><input type="text" name="password"/><button type="submit">READY?</button></form>
        
        </div>
    </body>
    <footer class="boots">
        <a>z</a>
    </footer>
</html>