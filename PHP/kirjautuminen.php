<?php
//Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Lisää alle koodi joka ottaa vastaan lomakkeen tiedot
   $username = $_POST["username"];
   $password = $_POST["password"];

    //Korjaa ja täydennä alla oleva if-lause joka tarkistaa käyttäjätunnuksen ja salasanan
    if ($username == "admin" && $password == "kissa123") {
        //Kirjautuminen onnistui
        echo "Kirjautuminen onnistui! Ohjataan palkkalaskuriin..."; 
        //Alla oleva koodi ohjaa käyttäjän palkkalaskuriin 2 sekunnin kuluttua
           echo '<meta http-equiv="refresh" content="2;url=palkkalaskuri.php">';
        exit();

    } else {
        //Kirjautuminen epäonnistui
        echo "Kirjautuminen epäonnistui! Yritä uudelleen.";
    }
}
?>