<html>
    <head>
        <title>Contatore accessi PHP</title>
        <?php
            session_start();
        ?>
    </head>
    <body>
        <h1>Contatore accessi PHP</h1>
        <?php
            if(!isset($_SESSION["contatore"])){
                $_SESSION["contatore"]=1;
                echo "<h3>Hai effettuato ".$_SESSION["contatore"]." accesso</h3>";
            }else{
                $_SESSION["contatore"]++;
                echo "<h3>Hai effettuato ".$_SESSION["contatore"]." accessi</h3>";
            }
        ?>
    </body>
</html>