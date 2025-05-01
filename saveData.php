<?php
    require_once 'db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $produkt = "Karnet miesięczny";
        $data = $_POST['data'];
        $liczba_biletow = $_POST["number"];
        $cena = 150 * (int)$liczba_biletow;

        $sql = "INSERT INTO uzytkownik(produkt, data, liczba_biletow, cena) 
                VALUES ('$produkt', '$data', $liczba_biletow, $cena)";

        $query = $conn-> query($sql);

        $conn -> close();

        header("Location: index.php?success=1");
        exit;
    }
?>