# BorderSMP - Strona

<!--
README.md
Dokumentacja projektu Border SMP
- Opisuje funkcjonalności, testy, uruchamianie i strukturę strony
- Zawiera instrukcje dla deweloperów i użytkowników
-->

## Opis projektu

Ten projekt to strona główna serwera Minecraft o nazwie **Border SMP**. Strona została stworzona w celu przedstawienia innowacyjnego pomysłu na rozgrywkę oraz przekazania najważniejszych informacji graczom.

## Formularz kontaktowy

Dodano funkcjonalność formularza kontaktowego (`form.php`) z walidacją danych. Formularz umożliwia użytkownikom wysyłanie wiadomości bezpośrednio ze strony.

## Testy

Projekt zawiera testy jednostkowe i integracyjne dla walidacji formularza:
- `formValidator.test.js` – testy jednostkowe funkcji walidującej dane formularza
- `formValidator.integration.test.js` – testy integracyjne sprawdzające walidację na formularzu HTML

Aby uruchomić testy lokalnie:
```
npm install
npx jest
```

Testy uruchamiają się automatycznie na GitHub Actions po każdym pushu i pull request.

## Na czym polega serwer?

Projekt zawiera pliki strony, które stanową informacje o serwerze Minecraft Border SMP. Strona prezentuje najważniejsze informacje, jego unikalnych mechanikach oraz zachęca graczy do zapoznania się z listą wymaganych modów. Zawiera opis rozgrywki, zasady powiększania borderu oraz informacje o nowej mapie i dodatkowych funkcjach serwera. Strona została zaprojektowana z użyciem własnych stylów CSS oraz czcionek Google Fonts.

## Jak uruchomić stronę?

1. Pobierz lub sklonuj repozytorium.
2. Otwórz plik `index.html` w przeglądarce internetowej.

## Deployment (CI/CD)

Po każdym pushu i pull request na branch `main`:
- Uruchamiane są testy i lintowanie kodu (Jest, ESLint)
- Po pozytywnych testach pliki są automatycznie wdrażane na serwer
- Po wdrożeniu wykonywany jest health check (`health.php`)

### Zmienne środowiskowe
- Przykład w `.env.example`

### Monitoring
- Endpoint `health.php` zwraca `OK` i status 200

### Rollback
- W razie niepowodzenia health check, przywróć poprzednią wersję plików na serwerze

### Workflow
- Plik `.github/workflows/ci-cd.yml` automatyzuje cały proces

---

## Instrukcja wdrożenia
1. Skonfiguruj sekrety w repozytorium GitHub (Settings → Secrets → Actions)
2. Po mergu do main, pliki zostaną automatycznie wdrożone
3. Sprawdź status health check w Actions