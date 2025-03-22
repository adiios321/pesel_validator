## Projekt: Walidacja numeru PESEL (Symfony)

## Opis:
--------
Aplikacja webowa w Symfony, która umożliwia sprawdzenie poprawności numeru PESEL.
Numer walidowany jest zgodnie z oficjalnym algorytmem (sprawdzenie sumy kontrolnej).

## Funkcje:
--------
- Formularz do wprowadzenia numeru PESEL
- Sprawdzenie poprawności numeru
- Komunikat zwrotny: "Poprawny" lub "Niepoprawny"
- Testy jednostkowe dla walidatora

## Wymagania:
-----------
- PHP 8.1+
- Composer
- Symfony CLI

## Uruchomienie:
--------------
1. Skopiuj lub sklonuj repozytorium:
```
   git clone git@github.com:adiios321/pesel_validator.git
   cd pesel_validator
```

2. Zainstaluj zależności:
```
   composer install
```

3. Uruchom lokalny serwer:
```
   symfony serve
```

4. Otwórz przeglądarkę:
   http://127.0.0.1:8000

5. Wpisz numer PESEL i kliknij "Sprawdź"

## Testy jednostkowe:
-------------------
uruchom testy poleceniem:
```
   php bin/phpunit
```

## Przykładowe numery:
------------------------
Poprawny:    44051401359
Niepoprawny: 12345678901


