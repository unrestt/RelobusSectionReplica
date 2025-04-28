let wynik = document.getElementById("wynik");

const inputs = document.querySelectorAll("input");

inputs.forEach(input => {
    input.addEventListener("input", () => {
        let liczbaBiletow = inputs[0].value;
        let data = inputs[1].value;

        if(liczbaBiletow !== "" && data !== "") {
            wynik.textContent = liczbaBiletow * 150 + " zł";
        } else {
            wynik.textContent = "0 zł";
        }
    });
});