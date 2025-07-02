# BorderSMP - Strona

## Opis projektu

Ten projekt to strona główna serwera Minecraft o nazwie **Border SMP**. Strona została stworzona w celu przedstawienia innowacyjnego pomysłu na rozgrywkę oraz przekazania najważniejszych informacji graczom.

## Testy i workflow

Projekt wykorzystuje podejście TDD (Test-Driven Development) do implementacji funkcjonalności, takich jak walidacja formularza. Testy jednostkowe i integracyjne znajdują się w plikach:
- `formValidator.test.js` – testy jednostkowe walidacji
- `formValidator.integration.test.js` – testy integracyjne z formularzem HTML

Aby uruchomić testy lokalnie:
```
npm install
npx jest
```

Testy uruchamiają się automatycznie na GitHub Actions po każdym pushu i pull request.

Workflow developmentu:
1. Tworzenie gałęzi funkcjonalności
2. Implementacja w TDD (najpierw testy, potem kod)
3. Aktualizacja dokumentacji
4. Pull request z opisem
5. Code review i poprawki
6. Merge i tagowanie wersji
7. Release notes

## Na czym polega serwer?

Projekt zawiera pliki strony, które stanową informacje o serwerze Minecraft Border SMP. Strona prezentuje najważniejsze informacje, jego unikalnych mechanikach oraz zachęca graczy do zapoznania się z listą wymaganych modów. Zawiera opis rozgrywki, zasady powiększania borderu oraz informacje o nowej mapie i dodatkowych funkcjach serwera. Strona została zaprojektowana z użyciem własnych stylów CSS oraz czcionek Google Fonts.

## Jak uruchomić stronę?

1. Pobierz lub sklonuj repozytorium.
2. Otwórz plik `index.html` w przeglądarce internetowej.