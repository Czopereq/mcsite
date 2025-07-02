// formValidator.js
function validateForm(name, email, message) {
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!name) return false;
    if (!emailRegex.test(email)) return false;
    if (!message || message.length < 10) return false;
    return true;
}

module.exports = { validateForm };
