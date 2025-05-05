document.addEventListener("DOMContentLoaded", function () {
    const wynik = document.getElementById("wynik");
    const liczbBiletowInput = document.getElementById("ticketNumber");
    const dataInput = document.getElementById("data");
    const submitBtn = document.getElementById("submitBtn");
    const popupIncorrect = document.getElementById("popupIncorrect");
    const popupCartAdd = document.getElementById("popupCartInfo");

    const increaseFontSizeBtn = document.getElementById("increaseFontSize");
    const decreaseFontSizeBtn = document.getElementById("decreaseFontSize");
    const changeContrastBtn = document.getElementById("changeContrast");

    function setDateAttributes() {
        const today = new Date();
        const todayDate = today.toISOString().split('T')[0];
        dataInput.value = todayDate;
        dataInput.setAttribute("min", todayDate);
    }

    

    function validateForm() {
        const liczbaBiletow = parseInt(liczbBiletowInput.value);
        const data = dataInput.value;

        const isBiletValid = !isNaN(liczbaBiletow) && liczbaBiletow > 0;
        const isDataValid = data !== "";

        if (isBiletValid && isDataValid) {
            wynik.textContent = `${liczbaBiletow * 150} zł`;
            submitBtn.disabled = false;
            popupIncorrect.style.display = "none";
        } else {
            wynik.textContent = "0 zł";
            submitBtn.disabled = true;
            popupIncorrect.style.display = "flex";
        }
    }

    document.getElementById("form").addEventListener("submit", function(event) {
        if (submitBtn.disabled) {
            event.preventDefault();
        }
    });

    function getQueryParam(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    if (getQueryParam("success") === "1") {
        document.body.classList.toggle("high-contrast");
        popupCartAdd.style.display = "flex";

        setTimeout(() => {
            popupCartAdd.style.display = "none";
        }, 3000);

        const url = new URL(window.location);
        url.searchParams.delete('success');
        window.history.replaceState({}, document.title, url.toString());
    }

    liczbBiletowInput.addEventListener("input", validateForm);
    dataInput.addEventListener("input", validateForm);

    setDateAttributes();
    validateForm();



        const fontSizeChangeFactor = 1.05;
        const maxFontSizeFactor = 1.7;

        function changeFontSize(factor) {
            const allTextElements = document.querySelectorAll("body, h1, h2, h3, p, span, li, a, i");

            allTextElements.forEach(function(element) {
                const currentFontSize = parseFloat(window.getComputedStyle(element).fontSize);
                const originalFontSize = parseFloat(element.getAttribute("data-original-font-size")) || currentFontSize;

                let newFontSize = currentFontSize * factor;

                if (!element.hasAttribute("data-original-font-size")) {
                    element.setAttribute("data-original-font-size", originalFontSize);
                }

                const maxFontSize = originalFontSize * maxFontSizeFactor;

                if (newFontSize < originalFontSize)
                    newFontSize = originalFontSize;
                else if (newFontSize > maxFontSize)
                    newFontSize = maxFontSize;

                element.style.fontSize = newFontSize + "px";
            });
        }

        increaseFontSizeBtn.addEventListener("click", function() {
            changeFontSize(fontSizeChangeFactor);
        });

        decreaseFontSizeBtn.addEventListener("click", function() {
            changeFontSize(1 / fontSizeChangeFactor);
        });

        changeContrastBtn.addEventListener("click", function(){
            document.body.classList.toggle("high-contrast");
        })




});
