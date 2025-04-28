<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/top-header.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "relobus_database");
    ?>
    <!-- ------------Header-Top---------------- -->
    <header>
        <div class="container">
            <div class="header-top-option-container">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>Twój Koszyk</p>
            </div>
            <div class="header-top-option-container">
                <i class="fa-solid fa-user"></i>
                <p>Zaloguj się</p>
            </div>
        </div>
    </header>
    <!-- ------------Nav---------------- -->
    <section id="navigation">
        <div class="container">
            <img src="assets/images/relobus_logo.png" alt="logo relobus">
            <nav>
                <a href="#">Regulamin<br>Sklepu<br>ReloBus</a>
                <a href="#">Polityka<br>prywatności</a>
                <a href="#">Kontakt</a>
                <a href="#">Wróć<br>do strony<br>relobus</a>
            </nav>
        </div>
    </section>
    <section id="banner">
        <img src="assets/images/banner.png" alt="banner relobus">
    </section>
    <main>
        <div class="container">
            <h1>Karnet miesięczny</h1>
            <div class="main-containers">
                <div class="main-left-container">
                    <img src="assets/images/logo_apator.png" alt="logo apator">
                    <div class="line"></div>
                </div>
                <div class="main-right-container">
                    <div class="main-right-top">
                        <h3>Apator S.A.</h3>
                        <div class="main-text-container">
                            <p>Sagittis se mnibh id elit. Duis sed idio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam <span>nec tellus a odio tincidunt auctor a ornare odio.</span> Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
                        <div class="price">
                            <h5>cena:</h5>
                            <h1><span>150</span>zł/osoba</h1>
                        </div>
                    
                    </div>
                    <div class="main-right-bottom">
                        <form action="index.php" method="post">
                            <div class="inputs-container">
                                <div class="input-container">
                                    <label for="ticketNumber">Liczba biletów</label>
                                    <input type="number" name="number" id="ticketNumber" required>
                                </div>
                                <div class="input-container">
                                    <label for="data">Data</label>
                                    <input type="date" name="data" id="data" required>
                                </div>
                            </div>
                            <div class="summary-container">
                                <p>łącznie</p>
                                <div class="summary-right-container">
                                    <h3 id="wynik">0 zł</h3>
                                    <hr>
                                    <div class="add-cart-summary">
                                        <div class="cart-summary-icons">
                                            <i class="fa-solid fa-plus"></i>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </div>
                                        <button type="submit"><p id="AddBtn">Dodaj do koszyka</p></button>
                                    </div> 
                                    <?php
                                        if($_SERVER["REQUEST_METHOD"] == "POST"){

                                            $produkt = "Karnet miesięczny";
                                            $data = $_POST['data'];
                                            $liczba_biletow = $_POST["number"];
                                            $cena = 150 * (int)$liczba_biletow;




                                            $sql = "INSERT INTO uzytkownik(produkt, data, liczba_biletow, cena) 
                                                    VALUES ('$produkt', '$data', $liczba_biletow, $cena)";

                                            $query = $conn-> query($sql);
                                        }
                                        ?>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer-containers">
                <div class="footer-container">
                    <h3>Informacje</h3>
                    <a href="#">Koszty i forma wysyłki</a>
                    <a href="#">Rodzaje płatności</a>
                    <a href="#">Kontakt</a>
                </div>
                <div class="footer-container">
                    <h3>Pomoc</h3>
                    <a href="#">Regulamin sklepu</a>
                    <a href="#">Polityka prywatności i cookies</a>
                    <a href="#">Odstąpienie od umowy</a>
                    <a href="#">Administrator danych osobowych</a>
                    <a href="#">Formularz reklemacyjny</a>
                </div>
                <div class="footer-container">
                    <h3>Moje konto</h3>
                    <a href="#">Dane konta</a>
                    <a href="#">Edytuj</a>
                    <a href="#">Historia zamówień</a>
                    <a href="#">Zaloguj mnie</a>
                </div>
                <div class="footer-container">
                    <h5>Dołącz do nas</h5>
                    <div class="below-footer-last">
                        <div class="footer-container-icons">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <p>&copy; Copyright ReloBus 2024<br>
                            Wszelkie prawa zastrzeżone</p>
                            <p>Projektowanie stron Toruń</p>
                    </div>
                </div>
            </div>

        </div>

    </footer>

    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/70f2470b08.js" crossorigin="anonymous"></script>
    <?php
        $conn -> close();

    ?>
</body>
</html>