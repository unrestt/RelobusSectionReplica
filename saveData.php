<?php 
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produkt = "Karnet miesięczny";
    $data = $_POST['data'];
    $liczba_biletow = intval($_POST["number"]);


    $dzisiaj = date("Y-m-d");
    
    if ($liczba_biletow < 1 || $data < $dzisiaj) {
        exit;
    }

    $cena = 150 * $liczba_biletow;

    $stmt = $conn->prepare("INSERT INTO uzytkownik (produkt, data, liczba_biletow, cena) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        exit;
    }

    $stmt->bind_param("ssii", $produkt, $data, $liczba_biletow, $cena);

    if ($stmt->execute()) {
        header("Location: index.php?success=1");
        exit;
    } else {
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
