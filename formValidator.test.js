// formValidator.test.js
const { validateForm } = require('./formValidator');

describe('validateForm', () => {
    it('zwraca false dla pustego imienia', () => {
        expect(validateForm('', 'test@mail.com', 'Wiadomość testowa')).toBe(false);
    });

    it('zwraca false dla niepoprawnego e-maila', () => {
        expect(validateForm('Jan', 'zlymail', 'Wiadomość testowa')).toBe(false);
    });

    it('zwraca false dla zbyt krótkiej wiadomości', () => {
        expect(validateForm('Jan', 'test@mail.com', 'krótko')).toBe(false);
    });

    it('zwraca true dla poprawnych danych', () => {
        expect(validateForm('Jan', 'test@mail.com', 'To jest poprawna wiadomość.')).toBe(true);
    });
});
