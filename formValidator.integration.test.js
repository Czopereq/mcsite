/**
 * @jest-environment jsdom
 */
// formValidator.integration.test.js
const { validateForm } = require('./formValidator');

describe('Integracja z formularzem HTML', () => {
    beforeEach(() => {
        document.body.innerHTML = `
      <form id="contactForm">
        <input id="name" />
        <input id="email" />
        <textarea id="message"></textarea>
        <button id="submitBtn" type="submit">Wyślij</button>
      </form>
    `;
    });

    it('blokuje wysyłkę przy niepoprawnych danych', () => {
        document.getElementById('name').value = '';
        document.getElementById('email').value = 'zlymail';
        document.getElementById('message').value = 'krótko';

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        expect(validateForm(name, email, message)).toBe(false);
    });

    it('pozwala na wysyłkę przy poprawnych danych', () => {
        document.getElementById('name').value = 'Jan';
        document.getElementById('email').value = 'test@mail.com';
        document.getElementById('message').value = 'To jest poprawna wiadomość.';

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        expect(validateForm(name, email, message)).toBe(true);
    });
});
