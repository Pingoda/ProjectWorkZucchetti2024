<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/InserimentoVoti.css">
    </head>
    <body>

        <div class="sidebar">
            <a href="profHome.html">HOME</a>
            <a href="3IC.php">3IC</a>
            <a href="4ID.php">4ID</a>
            <a href="5IB.php">5IB</a>
            <form action="loginProf.html"><button class="logout-btn">LOGOUT</button></form>
        </div>

        <?php
        include 'php/connection.php';
        ?>
        <div class="scatola">
            <div class="rett">
                <form action="#">  
                    <div class="title">
                        <a>Inserisci Voto</a>
                    </div>
                    <div class="riga1">
                        <select class='classe'>
                            <?php
                            $sql = "select distinct classe from studente order by classe";

                            $tabella = $conn->query($sql);
                            echo ("<option>Seleziona classe</option>");

                            while ($tupla = $tabella->fetch_assoc()) {
                                echo("<option value=" . $tupla["classe"] . ">" . $tupla["classe"] . "</option>");
                            }
                            ?>
                        </select> 

                        <select class='studenti'>
                            <option>Seleziona studente</option>
                            <?php
                            include './php/connection.php';

                            if ($tupla["classe"] == "3IC") {
                                $sql = "select nome, cognome, id_matricola from studente where classe='3IC' order by id_matricola";
                                $tabella = $conn->query($sql);
                                $n = 1;
                                while ($tupla = $tabella->fetch_assoc()) {
                                    echo("<div class='rettangolo'>");
                                    echo("<span value=" . $tupla["id_matricola"] . ">" . $n . ". " . $tupla["cognome"] . " " . $tupla["nome"] . "</span>");
                                    $n++;
                                    echo("</div>");
                                }
                                if ($tupla["classe"] == "4ID") {
                                    $sql = "select nome, cognome, id_matricola from studente where classe='4ID' order by id_matricola";
                                    $tabella = $conn->query($sql);
                                    $n = 1;
                                    while ($tupla = $tabella->fetch_assoc()) {
                                        echo("<div class='rettangolo'>");
                                        echo("<span value=" . $tupla["id_matricola"] . ">" . $n . ". " . $tupla["cognome"] . " " . $tupla["nome"] . "</span>");
                                        $n++;
                                        echo("</div>");
                                    }
                                    if ($tupla["classe"] == "5IB") {
                                        $sql = "select nome, cognome, id_matricola from studente where classe='5IB' order by id_matricola";
                                        $tabella = $conn->query($sql);
                                        $n = 1;
                                        while ($tupla = $tabella->fetch_assoc()) {
                                            echo("<div class='rettangolo'>");
                                            echo("<span value=" . $tupla["id_matricola"] . ">" . $n . ". " . $tupla["cognome"] . " " . $tupla["nome"] . "</span>");
                                            $n++;
                                            echo("</div>");
                                        }
                                    }
                                }
                            }
                                        
                            ?>
                        </select>
                    </div>
                    <div class="riga2">
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
                        <select class="tipo">
                            <option>Seleziona tipologia</option>
                            <option>Scritto</option>
                            <option>Orale</option>
                            <option>Pratico</option>        
                        </select>

                        <div class="contenitore3">
                            <div class="rettangolo3">
                                <h4>Scrivi nota...</h4>
                                <input type="text" class="placeholder">
                            </div>
                        </div>
                    </div>    

                </form>
                <form action="profHome.html">
                    <button class="mess">INVIA</button>
                </form>
            </div>
        </div>
        <div  ></div> 


    </body>
</html>