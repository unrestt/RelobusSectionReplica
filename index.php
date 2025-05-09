<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>
    <!-- ------------Popup-cart---------------- -->
    <div class="popup-container" id="popupCartInfo" role="alert">
        <i class="fa-solid fa-cart-shopping"></i>
        <p>Dodano do koszyka</p>
    </div>
    
    <!-- ------------Header-Top---------------- -->
    <header itemscope itemtype="https://schema.org/Organization">
        <div class="container">
            <div class="header-buttons-container">
                <div class="header-top-option-container" aria-label="Twój koszyk" tabindex="0" role="button">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>Twój Koszyk</p>
                </div>
                <div class="header-top-option-container" aria-label="Zaloguj się" tabindex="0" role="button">
                    <i class="fa-solid fa-user"></i>
                    <p>Zaloguj się</p>
                </div>
            </div>
            <div class="help-container">
                <div class="increase-font-size" role="button" id="increaseFontSize" tabindex="0">
                    <i class="fa-solid fa-a"></i>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="decrease-font-size" role="button" id="decreaseFontSize" tabindex="0">
                    <i class="fa-solid fa-a"></i>
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div class="change-contrast" role="button" id="changeContrast" tabindex="0">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </div>
            </div>
        </div>
    </header>
    
    <!-- ------------Nav---------------- -->
    <section id="navigation">
        <div class="container">
            <img src="assets/images/relobus_logo.png" alt="logo firmy ReloBus">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            <span>Regulamin<br>Sklepu<br>ReloBus</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Polityka<br>prywatności</span> 
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Kontakt</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Wróć<br>do strony<br>ReloBus</span>
                        </a>
                    </li>
                </ul> 
            </nav>
        </div>
    </section>

    <!-- ------------Banner---------------- -->
    <section id="banner">
        <img src="assets/images/banner.png" alt="Banner firmy ReloBus przedstawiajacy napis Pracowniczy ReloBus po lewej stronie, oraz po prawej stronie widoczny tramwaj w ktory stoi kobiet w okularach przeciwslonecznych, oraz mezczyzna w czapce.">
    </section>

    <!-- ------------Main---------------- -->
    <main itemscope itemtype="https://schema.org/Product">
        <div class="container">
            <h1 itemprop="name">Karnet miesięczny</h1>
            <div class="main-containers">
                <div class="main-left-container">
                    <img src="assets/images/logo_apator.png" alt="Logo firmy Apator">
                    <div class="line"></div>
                </div>
                <div class="main-right-container">
                    <div class="main-right-top">
                        <h3 itemprop="brand">Apator S.A.</h3>
                        <div class="main-text-container">
                            <p itemprop="description">Sagittis se mnibh id elit. Duis sed idio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam <span>nec tellus a odio tincidunt auctor a ornare odio.</span> Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
                        <div class="price">
                            <h5>cena:</h5>
                            <h1><span itemprop="priceCurrency" content="PLN">150</span>zł/osoba</h1>
                        </div>
                    </div>
                    <div class="main-right-bottom">
                        <div class="popup-container" id="popupIncorrect" role="alert">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <p>Twoje dane są niepoprawne!</p>
                        </div>
                        <form action="saveData.php" method="post" id="form">
                            <div class="inputs-container">
                                <div class="input-container">
                                    <label for="ticketNumber">Liczba biletów</label>
                                    <input type="number" name="number" id="ticketNumber" required min="1" value="1" placeholder="Wpisz liczbę biletów" aria-label="Liczba biletów" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                </div>
                                <div class="input-container">
                                    <label for="data">Data</label>
                                    <input type="date" name="data" id="data" required aria-label="Data kupna biletu">
                                </div>
                            </div>
                            <div class="summary-container">
                                <p>łącznie</p>
                                <div class="summary-right-container">
                                    <h3 id="wynik">0 zł</h3>
                                    <hr>
                                    <div class="add-cart-summary">
                                        <div class="cart-summary-icons">
                                            <i class="fa-solid fa-plus" aria-label="Dodaj"></i>
                                            <i class="fa-solid fa-cart-shopping" aria-label="Dodaj do koszyka"></i>
                                        </div>
                                        <button type="submit" id="submitBtn" disabled>
                                            <p>Dodaj do koszyka</p>
                                        </button>
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ------------Footer---------------- -->
    <footer itemscope itemtype="https://schema.org/Organization">
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
                            <i class="fa-brands fa-facebook-f" role="button" tabindex="0" title="Facebook" role="link"></i>
                            <i class="fa-brands fa-instagram" role="button" tabindex="0" title="Instagram" role="link"></i>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/js/flatpickrConfig.js"></script>

</body>
</html>
