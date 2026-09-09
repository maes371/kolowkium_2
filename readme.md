# Zadanie

Szablon projektu został skonfigurowany na podstawie [Symfony Starter Kit](https://bitbucket.org/tchojna/docker-symfony-starter-kit/src/master/). W projekcie zostały przygotowane encje `Project`, `Task` oraz pliki pozwalające na zasilenie bazy danych losowymi danymi.

Przygotuj mechanizm dodawania nowego zadania (encja `Task`) oraz jego porcjowane listowanie.

1. Formularz dodawania zadania. Pole pozwalające na wybranie projektu (`project`) oraz priorytetu (`priority`) powinno być listą rozwijaną jednokrotnego wyboru — wartości `project` pobierane z bazy danych, wartości `priority` z enuma `Priority`. Po zapisaniu rekordu do bazy danych użytkownik powinien zostać przekierowany do podglądu utworzonego zadania.
2. Porcjowana lista zadań (`KnpPaginator`), z możliwością filtrowania po priorytecie (`priority`) i projekcie (`project`) oraz sortowania po * `title`, `dueDate`, `priority`, `project`. Pole `description` nie pojawia się na liście.

Pamiętaj o walidacji danych, tłumaczeniach, komentarzach.

## Reguły walidacji

* `title` - pole wymagane o minimalnej długości 3 znaki, a maksymalnej będącej długością pola w bazie danych,
* `description` - pole opcjonalne, maksymalna długość 1000 znaków,
* `dueDate` - pole opcjonalne, jeżeli podane, nie może być datą przeszłą,
* `priority` - pole wymagane,
* `project` - pole wymagane.

## Informacje ogólne
* przesłana praca ma być pracą samodzielną,
* kod zadania ma być zgodny ze składnią zaprezentowaną na zajęciach (podział na klasy, walidacja danych, stosowanie warstwy serwisów, optymalizacja zapytań Doctrine),
* powinien przechodzić poprawnie statyczną analizę kodu zgodnie ze standardem Symfony (w katalogu projektu, w konsoli wystarczy wykonać polecenie `composer static-analysis`; komenda nie modyfikuje kodu), 
* proszę pamiętać o uzupełnieniu tłumaczeń,
* wszystkie klasy i metody powinny być poprawnie udokumentowane zgodnie ze standardem _PHPDoc_,
* w odpowiedzi proszę przesłać link do repozytorium _Git_ na adres: **tomasz.chojna@uj.edu.pl**
