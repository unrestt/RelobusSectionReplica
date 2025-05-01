document.addEventListener("DOMContentLoaded", function () {
    const wynik = document.getElementById("wynik");
    const liczbBiletowInput = document.getElementById("ticketNumber");
    const dataInput = document.getElementById("data");
    const submitBtn = document.getElementById("submitBtn");
    const popupIncorrect = document.getElementById("popupIncorrect");
    const popupCartAdd = document.getElementById("popupCartInfo");

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
});
