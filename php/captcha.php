<?php

    // Imposta il tipo di contenuto della pagina come immagine PNG
    header('Content-Type: image/png');

    // Crea un'immagine vuota 200x50
    $image = imagecreatetruecolor(70, 40);

    // Assegna dei colori alle variabili
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);

    // Riempi l'immagine di bianco
    imagefilledrectangle($image, 0, 0, 199, 49, $white);

    // Genera una stringa casuale per il captcha
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $captchaString = '';
    for ($i = 0; $i < 5; $i++) {
        $captchaString .= $characters[rand(0, $charactersLength - 1)];
    }

    // Immagazzina il captcha generato nella sessione
    session_start();
    $_SESSION['captcha'] = $captchaString;

    // Scrive il testo del captcha sull'immagine
    imagestring($image, 5, 10, 15, $captchaString, $black);

    // Mostra l'immagine al visitatore del sito
    imagepng($image);

    // Libera la memoria utilizzata dall'immagine
    imagedestroy($image);
?>