# Weryfikacja Płatnika VAT

[![N|Solid](http://ggawronski.pl/Image.jpeg)](https://ggawronski.pl)
# Instrukcja obsługi programu
1. Adres www: ggawronski.pl/vat
2. Naciskamy ikonkę pod napisem Dodaj Plik Excel:
3. Wybieramy plik z rozszerzeniem.csv
4. Po dodaniu pliku CSV z numerami NIP proszę o chwilę cierpliwości, postęp sprawdzania na razie można zaobserwować poprzez scrollbar, który zacznie się wydłużać
5. Wyniki zostaną wyświetlone na stronie
# Instrukcja - Przygotowanie pliku.csv
 1. Edycja kolumn początkowych bez spacji:
            Przykład: Jednostka gosp. --> Jednostka_gosp.
 2. Edycja kolumny z numerami NIP:
- Przykład: Prawidłowo: PL7590005082
- Nieprawidłowo: 1646027030
- Pominięte zostaną: brak, [spacje], i wszystkie numery bez krajów
3. Plik --> Zapisz, jako... --> Wszystkie formaty (rozwinąć) --> Tekst CSV (.csv) --> Zapisz
4. Tak przygotowany plik można już dodać w punkcie 2 instrukcji obsługi programu

# New Features!
Wersja 1.0

- Vatnumber - python 2.7 - 
- Vatek - php 7.0 -
- Dodawanie pliku z poziomu interfejsu
- Wyświetlanie wyników w formie tabeli

### Todos

- Pasek postępu wczytywania plików
- Możliwość korzystania z rozszerzeniem .xml .csv .xls .ods
- Poprawienie funkcjonalności strony 
- Poprawienie przejrzystości strony
- Dodanie możliwości zapisu do pliku wyników
- Dodanie możliwości skopiowania do schowka wszystkich wyników


License
----

**Copyright by Grzegorz Gawroński**


**www.ggawronski.pl**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
