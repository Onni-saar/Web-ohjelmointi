

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Toimituskululaskuri</title>
</head>
<body>
    <h1></h1>
    <?php
    // 1. Switch-lausekkeen sisältävän funktion määrittely
    function laske_toimituskulut($toimitustapa) {
        switch ($toimitustapa) {
            case "Nouto":
                return 0.00;
            case "Postipaketti":
                return 6.90;
            case "Kotiinkuljetus":
                return 12.50;
            default:
                return -1; // Tuntematon toimitustapa
        }
    }
   
    // 2. Funktion kutsuminen ja tulosten käsittely
    $valittu_tapa = "Postipaketti";
    $hinta = laske_toimituskulut($valittu_tapa);
    // if-lauseke tuloksen tulostamiseksi (jos hinta-muuttuja ei ole -1)
    if ($hinta != -1) {
    } else-lauseke {
        
    }
    ?>
</body>
</html>