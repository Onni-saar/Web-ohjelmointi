<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Hintalaskuri</title>
</head>
<body>
    <h1>Tuotteen hintatiedot</h1>
    <?php
     // 1. Muuttujien määrittely
    $tuotteen_nimi = "Sähköpotkulauta";
    $hinta_kpl = 349.90; 
    $kappalemaara = 2; 
    $alennusprosentti = 15; 
    // 2. Laskutoimitukset
    //Laske kokonaishinta ennen alennusta ($hinta_kpl * $kappalemaara). Tallenna tulos muuttujaan $valisumma.
    $valisumma = $hinta_kpl * $kappalemaara;
    // 3. Tietojen tulostus selaimelle
    //Laske alennuksen euromääräinen arvo ($valisumma * ($alennusprosentti / 100)). Tallenna tulos muuttujaan $alennus_eur.
    $alennus_eur = $valisumma * ($alennusprosentti / 100);
    // number_format() muotoilee luvun. Esim: number_format(luku, desimaalien_määrä, desimaalierotin, tuhaterotin)
    //Laske lopullinen hinta alennuksen jälkeen ($valisumma - $alennus_eur). Tallenna tulos muuttujaan $loppusumma.
    $loppusumma = $valisumma - $alennus_eur;

    //Tulosta kaikki tiedot ja laskutoimitusten tulokset selkeästi echo-komennolla. 
    //Käytä merkkijonojen yhdistämistä ja <br>-tageja rivinvaihtoihin. 
    //Muotoile kaikki raha-arvot kahden desimaalin tarkkuudella käyttäen number_format()-funktiota.
    echo "Tuotteen nimi: " . $tuotteen_nimi . "<br>";
    echo "Hinta/kpl: " . number_format($hinta_kpl, 2, ',', '.') . " €<br>";
    echo "Kappalemäärä: " . $kappalemaara . "<br>";
    echo "Alennusprosentti: " . $alennusprosentti . "%<br>";
    echo "Väli-summa: " . number_format($valisumma, 2, ',', '.') . " €<br>";
    echo "Alennus: " . number_format($alennus_eur, 2, ',', '.') . " €<br>";
    echo "Loppusumma: " . number_format($loppusumma, 2, ',', '.') . " €<br>";

    ?>
</body>
</html>