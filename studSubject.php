<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/subjects.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>

        <?php
        include './php/connection.php';

        $materia = $_GET['mat'];
        $query = "SELECT * FROM voto ";
        $query .= "WHERE nome_materia = '$materia'";
        $query .= "ORDER BY data DESC";
        $result = $conn->query($query);

        echo ('<div class="titolo">');
        echo ('<h1>' . strtoupper($materia) . '</h1>');
        echo ('</div>');
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

        <?php
        if ($result->num_rows > 0) {
            echo ('<div class="contenitore">');
            while ($row = $result->fetch_assoc()) {
                echo ('<div class="rettangolo">');

                if ($row['valore'] >= 6) {
                    echo('<span class="numero" style="color: #00B712;">' . $row['valore'] . '</span>');
                } else {
                    echo('<span class="numero" style="color: #FF0000;">' . $row['valore'] . '</span>');
                }
                echo('<span id="testo">Verifica ' . $row['tipo_verifica'] . ': ' . $row['descrizione'] . '</span>');
                echo('<span class="data">' . $row['data'] . '</span>');
                echo('</div>');
            }
            echo('</div>');
        }
        $query = "SELECT id_matricola, AVG(valore) AS 'media' FROM `voto` WHERE nome_materia = '$materia'";
        $result = $conn->query($query);

        echo('<div class="contenitore2">');
        echo('<div class="rettangolo2">');
        echo('<span class="media">MEDIA</span>');

        while ($row = $result->fetch_assoc()) {
            if ($row['media'] >= 6) {
                echo('<span class="votoM" style="color: #00D816; -webkit-text-stroke: 1px #0C5900;">' . number_format($row['media'], 2) . '</span>');
            } else {
                echo('<span class="votoM" style="color: #FF0303; -webkit-text-stroke: 1px #590000;">' . number_format($row['media'], 2) . '</span>');
            }
        }

        echo('</div>');
        echo('</div>');
        ?>

        <div class="contenitore3">
            <div class="rettangolo3">
                <h4>Scrivi nota...</h4>
                <input type="text" class="placeholder">
                <button class="messaggio">INVIA</button>
            </div>
        </div>

    </body>
</html