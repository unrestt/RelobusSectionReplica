const today = new Date();
const todayDate = today.toISOString().split('T')[0];
flatpickr("input[type='date']", {
    minDate: todayDate,
    dateFormat: "Y-m-d",
    theme: "dark",
});
