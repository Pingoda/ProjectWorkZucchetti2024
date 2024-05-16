<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3IC</title>
        <link rel="stylesheet" href="style/classi.css">
    </head>
    <body>

        <div class="sidebar">
            <a href="profHome.html">HOME</a>
            <a href="3IC.php">3IC</a>
            <a href="4ID.php">4ID</a>
            <a href="5IB.php">5IB</a>
            <form action="loginProf.html"><button class="logout-btn">LOGOUT</button></form>
        </div>

        <!--Fine sidebar - inizio pagina -->
        
        <div class="contenitore">
            
                <?php
                    include './php/connection.php';
                
                    $query = "select nome, cognome, id_matricola from studente where classe='3IC' order by id_matricola";
                    $result = $conn->query($query);
                    $n = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo("<div class='rettangolo'>");
                        echo("<span value=" . $row["id_matricola"] . ">" . $n  . ". " . $row["cognome"] . " " . $row["nome"] . "</span>");
                        $n++;
                        echo("</div>");
                    }
                ?>

        </div>



        <div class="contenitore3">
            <div class="rettangolo3">
                <div class="riga1">
                    <select class="voto">
                        <option>Seleziona voto</option>
                        <option>2</option>
                        <option>2.5</option>
                        <option>3</option>
                        <option>3.5</option>
                        <option>4</option>
                        <option>4.5</option>
                        <option>5</option>
                        <option>5.5</option>
                        <option>6</option>
                        <option>6.5</option>
                        <option>7</option>
                        <option>7.5</option>
                        <option>8</option>
                        <option>8.5</option>
                        <option>9</option>
                        <option>9.5</option>
                        <option>10</option>
                    </select>
                </div>
                <select class="tipo">
                    <option>Seleziona tipologia</option>
                    <option>Scritto</option>
                    <option>Orale</option>
                    <option>Pratico</option>        
                </select>
                <h4>Scrivi nota...</h4>
                
                <input type="text" class="placeholder">
                <div><button class="messaggio">INVIA</button></div>
            </div>

        </div>
    </div>
</body>
</html>