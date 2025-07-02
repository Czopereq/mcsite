// formValidator.js
// Funkcja walidująca dane formularza kontaktowego
function validateForm(name, email, message) {
    // Sprawdzenie poprawności e-maila za pomocą wyrażenia regularnego
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!name) return false; // Imię nie może być puste
    if (!emailRegex.test(email)) return false; // E-mail musi być poprawny
    if (!message || message.length < 10) return false; // Wiadomość min. 10 znaków
    return true;
}

module.exports = { validateForm };
