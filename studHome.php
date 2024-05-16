<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style/studHome.css">
    </head>
    <body>
        
        <?php
            include './php/connection.php';
        ?>
        
        <div class="sidebar">
            <a href="studHome.php">HOME</a>
            <a href="studSubject.php?mat=italiano">ITALIANO</a>
            <a href="studSubject.php?mat=matematica">MATEMATICA</a>
            <a href="studSubject.php?mat=informatica">INFORMATICA</a>
            <a href="studSubject.php?mat=inglese">INGLESE</a>
            <a href="studSubject.php?mat=sistemi">SISTEMI E RETI</a>
            <a href="studSubject.php?mat=tpsit">TPSIT</a>
            <form action="loginStud.html"><button class="logout-btn">LOGOUT</button></form>
        </div>

        <!--Fine sidebar inizio pagina -->

        <div class="row">            
            <div class="c">
                <a href="studSubject.php?mat=italiano">
                    <h4>Italiano</h4>
                </a>
            </div>
            <div class="square">
                <a href="studSubject.php?mat=matematica">
                    <h4>Matematica</h4>
                </a>
            </div>
            <div class="d">
                <a href="studSubject.php?mat=inglese">
                    <h4>Inglese</h4>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="c">
                <a href="studSubject.php?mat=informatica">
                    <h4>Informatica</h4>
                </a>
            </div>
            <div class="square">
                <a href="studSubject.php?mat=sistemi">
                    <h4>Sistemi e Reti</h4>
                </a>
            </div>
            <div class="d">
                <a href="studSubject.php?mat=tpsit">
                    <h4>TPSIT</h4>
                </a>
            </div>
        </div>
    </body>
</html>